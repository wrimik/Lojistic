<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Vinkla\Hashids\Facades\Hashids;
use App\Audit;
use App\Helpers\SlackBot;
use Storage;

class AuditController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
        $Audit = new Audit();
        $files = $request->file('invoice-csv');
        $Audit->verifyFile($files);
        $hubspot = $request->get('hs');
        if($Audit->carrier)
        {   // ups or fedex, proceed with audit
            $Audit->initiateAudit($request);
            $Audit->storeCSV();
            $crypt_id =  $Audit->getRouteKey();
            $this->storeLead($request, $crypt_id);
            $Audit->mailLink($hubspot['email'], $crypt_id);
            return json_encode([
                'id' => $crypt_id,
                'records' => $Audit->countRecords,
                'carrier' => $Audit->carrier,
                'error' => false
            ]);
        }else{// unknown file.    (╯°□°）╯︵ ┻━┻  bail out
            return json_encode(['error' => 'unknown-file', 'carrier'=> $Audit->carrier, 'numcols' => $Audit->numcols]);
        }
	}

    /**
     * When a file is too big to be ran by the general public,
     * this acts as a fallback
     */
    public function requestLargeAudit(Request $request)
    {
        $Audit = new Audit();
        $Audit->initiateAudit();
        $Audit->storeCSV();
        $crypt_id = $Audit->getRouteKey();
        $message = "Really Big Audit Requested. Audit ID: {$Audit->audit_id} ({$crypt_id})";
        $this->storeLead($request, $crypt_id);
        SlackBot::message($message);
    }

    public function storeLead(Request $request, $crypt_id)
    {
        // Store Data To Hubspot
        $request->merge([
            'thankyou-page' => '/thank-you',
            'formid'        => 'f8ab0b35-d7ac-4be8-846a-d9802a22a433',
            'hp-check'      => '',
            'hs'            => [
                'product_interest_s__c' => 'Test Audit',
                'web_comments'          => 'Test Audit: '.route('audit-permalink',['cryptId'=>$crypt_id]),
                'fullname'              => $request->input('hs.fullname'),
                'email'                 => $request->input('hs.email'),
                'company'               => $request->input('hs.company'),
                'phone'                 => $request->input('hs.phone')
            ],
            'invoice-csv'   => [
                $request->input('invoice-csv')
            ]
        ]);
        $hs = new HubspotController;
        $hs->store($request);
    }

    /**
     *
     */
    public function run(Request $request, $crypt_id)
    {
        $Audit = new Audit($crypt_id, true);
        $output = $Audit->run($request);
        $json = json_decode($output);
        if($json == null)
        {
            SlackBot::message('Bad File! <http://www.lojistic.com/audit/'.$crypt_id.'|Check Out '.$crypt_id.'!>');
            $output = json_encode(['error' => 'unknown-file', 'carrier'=> '', 'numcols' => '']);
        }else if($json->status == 'complete')
        {
            SlackBot::message('Audit initiated! <http://www.lojistic.com/audit/'.$crypt_id.'|Check Out '.$crypt_id.'!>');
        }
        return $output;
    }

    /**
     * Audit server requests contents of audit file
     * @param $audit_id
     * @return string
     */
    public function download($audit_id)
    {
        return file_get_contents(Audit::getStorageDirectory() . intval($audit_id) . '.csv');
    }

    /**
     * Human requests contents of audit file
     * @param $audit_id
     * @return string
     */
    public function downloadForHumans($crypt_id)
    {
        $audit_id = Audit::idFromRouteKey($crypt_id);
        return Response::download(Audit::getStorageDirectory() . intval($audit_id) . '.csv', 'Audit '.$crypt_id.'.csv');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


    /**
     * Decrypt the ID and display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($crypt_id)
    {
        $audit = new Audit($crypt_id, true);
        return $audit->getResults();
    }


    public function status($crypt_id)
    {
        $audit = new Audit($crypt_id, true);
        return $audit->getStatus();
    }

    public function stats($crypt_id)
    {
        $audit = new Audit($crypt_id, true);
        return $audit->getStats();
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
