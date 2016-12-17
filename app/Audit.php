<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
use Storage;
use Mail;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use DOMDocument;

class Audit extends Model
{
    public $audit_id;
    public $carrier;
    public $numcols;
    public $count_records;
    public $file;
    public $crypt_id;

    public function __construct($audit_id = false, $is_encrypted = false)
    {
        parent::__construct();

        if($audit_id)
        {
            if($is_encrypted)
            {
                $this->audit_id = $this->idFromRouteKey($audit_id);
            } else
            {
                $this->audit_id = $audit_id;
            }
        }
    }

    public static function points()
    {
        return [
            'late-deliveries'     => 'Late Deliveries',
            'never-delivered'     => 'Never Delivered',
            'saturday-pickups'    => 'Saturday Pickups',
            'saturday-deliveries' => 'Saturday Deliveries'
        ];
    }

    public function run()
    {
        return file_get_contents($this->getApiUrl() . 'audit/' . $this->audit_id . '/run');
    }

    /**
     * takes multiple files and concats them
     * Session::getId()  used for tmp directory
     * also used for file name until audit id is
     * set
     *
     * @returns file name
     */
    public function concatFiles($files)
    {
        $tmpId = Session::getId();
        $storage = storage_path('persistent/demo-audits/');
        $tmpDir = 'cats/' . $tmpId . '/';
        $cats = $storage . $tmpDir;

        if(!is_dir($cats))
        {
            mkdir($cats, 0777, true);
        }
        $n = 0;

        foreach($files as $file)
        {
            $filename = $n . '.csv';
            $file->move($cats, $filename);
            $n++;
        }
        $this->file = $storage . $tmpId . '-combined.csv';
        system("cat $cats/*.csv >> {$this->file}");
        system("rm -rf " . escapeshellarg($cats));
    }


    /**
     * confirms that this file is something we know how to work with
     */
    public function verifyFile($files)
    {
        ini_set('auto_detect_line_endings', true);
        $firstFile = $files[0];
        if( $firstFile->getClientOriginalExtension() != 'xml')
        {
            $this->concatFiles($files);
            $file = fopen($this->file, 'r');
        } else
        {
            $this->file = $firstFile;
            $file = $this->convertXmlToCsv($firstFile);
        }

        $line = fgetcsv($file);
        $numcols = count($line);
        $this->numcols = $numcols;
        switch($numcols)
        {
            case 223:
            case 148:
            case 149:
            case 151:
                $this->carrier = 'fedex';
                break;
            case 250:
            case 249:
            case 227:
            case 226:
                $this->carrier = 'ups';
                break;
            default:
                $this->carrier = false;
                if(!is_dir(storage_path('persistent/demo-audits/bad/')))
                {
                    mkdir(storage_path('persistent/demo-audits/bad/'), 0777, true);
                }
                rename($this->file, storage_path('persistent/demo-audits/bad/bad-' . date('Y-m-d-g-s-i-a') . '.csv'));
                break;
        }
    }

    public function convertXmlToCsv($file)
    {
        //FORMAT DOC PROPERLY
        $xmlDoc = new DOMDocument('1.0');
        $xmlDoc->load($file);
        $xmlDoc->formatOutput = true;
        $content = $xmlDoc->saveXML();

        $patterns = [
            //XML Tag | opening Download and Invoice tag
            '/\s*(?:\<\?.*\?\>|\<(?:\/?Download|Invoice_Download)\>)\s*/',
            //Match Numeric Characters
            '/\s*\<(\w+)\>(.*)\<\/\\1\>\s*/',
            //Match Line Breaks And Self Closing Tags for COmmas
            '/\s*\<(\w+)\/\>\s*/',
            //Match End Of Row
            '/\<\/Invoice_Download\>/',
        ];
        $replacements = [
            '',
            "\"\\2\",",
            ',',
            "\n",
        ];

        $_fp = fopen($file, 'w');
        fwrite($_fp, preg_replace($patterns, $replacements, $content));
        fclose($_fp);

        rename($file, str_replace('xml', 'csv', $file));

        return fopen($file, 'r');
    }

    /**
     * transferes the verified input file into storage,
     * concats if multiple files
     */
    public function storeCSV()
    {
        $newName = $this->getStorageDirectory() . $this->audit_id . '.csv';
        rename($this->file, $newName);
        $this->file = $newName;
        $fp = file($this->file);
        $this->countRecords = count($fp);
    }

    /**
     * Sends  "create" request to audit server,
     * get's back an audit id in response
     */
    public function initiateAudit()
    {
        \App\Helpers\SlackBot::message($this->getApiUrl() . 'audit/create');
        $this->audit_id = file_get_contents($this->getApiUrl() . 'audit/create');
        \App\Helpers\SlackBot::message($this->audit_id);
    }

    public static function getStorageDirectory()
    {
        $dir = storage_path('persistent/demo-audits/');
        if(!is_dir($dir))
        {
            mkdir($dir, 0777, true);
        }

        return $dir;
    }

    public function getApiUrl()
    {
        return env('AUDIT_API_URL');
    }

    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKey()
    {
        $hashids = new \Hashids\Hashids();
        $this->crypt_id = $hashids->encode($this->audit_id);

        return $this->crypt_id;
    }

    /**
     * Get the id from the model's route key.
     *
     * @return mixed
     */
    public static function idFromRouteKey($key)
    {
        $hashids = new \Hashids\Hashids();
        $unhashed = $hashids->decode($key);

        return $unhashed[0];
    }

    /**
     * requests result json from audit system
     */
    public function getResults()
    {
        return $this->getPage('results');
    }

    /**
     * requests status json from audit system
     */
    public function getStatus()
    {
        return $this->getPage('status');
    }


    /**
     * requests carrier, total records, total shipments, misc json from audit system
     */
    public function getStats()
    {
        $stats = json_decode($this->getPage(''));
        $output = [
            'note' => 'audit::getStats trims output from audit server',
            'carrier' => $stats->carrier,
            'type' => $stats->type,
            'total_shipments' => $stats->total_shipments,
            'total_records' => $stats->total_records,
            'total_recovery' => $stats->total_recovery,
//            'annual_spend' => $stats->annualSpend,
            'invoice_range' => @$stats->invoiceRange,
            'shipment_range' => @$stats->shipmentRange,
            'invoice_details' => @$stats->invoice_details
        ];

        return $output;
    }

    public function getPage($page)
    {
        $url = $this->getApiUrl() . 'audit/' . $this->audit_id . '/' . $page;

        return file_get_contents($url);
    }

    public function mailLink($email, $cyrpt_id)
    {
        $data = [ 'to' => $email ];
        Mail::queue('emails.audit-link',
            [
                'audit_id' => $cyrpt_id,
                'email' => $email
            ],
            function($message) use ($data)
        {
            $message->to($data['to'])
                ->from('audisee@lojistic.com')
                ->subject('Your Test Audit Results!');
        });
    }

}