<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use App\ShippingService;
use App\ShippingRate;

class GenerateRateDocs extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'generate-rate-docs';

    protected $hiddenFiles = [
        '.',
        '..',
        '.git',
        '.gitignore'
    ];

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'generate rate docs';

    /**
     * These are services we don't want to generate
     *
     * @var array
     */
    protected $noGenerate = [
        'Worldwide Express',
        'Worldwide Saver',
        'Worldwide Expedited',
        'Standard to Canada',
        'Standard to Mexico',
        'International Economy',
        'International Priority',
    ];

    /**
     * Array of carriers
     *
     * @var array
     */
    protected $carriers = [];

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
     * rate-year
	 * @return mixed
	 */
	public function fire()
    {
        foreach($this->getCarriers() as $carrier)
        {
            foreach($this->getYears() as $year )
            {
                $services = ShippingService::select('name','order')
                    ->where('carrier', $carrier)
                    ->whereHas('rates', function($query) use ($year)
                    {
                        $query->where('year', $year);
                    })
                    ->distinct()
                    ->orderBy('order', 'asc')
                    ->get();
                if($services->count() != 0)
                {
                    $dir = 'public/files/'.$carrier.'/';

                    //Create Directory if it doesnt exist
                    if(!file_exists($dir)) mkdir($dir,0777,true);

                    //Create the blank file
                    $_fp = fopen($dir . $year.'.txt','w');

                    foreach($services as $service)
                    {
                        if(!in_array($service->name,$this->noGenerate))
                        {
                            //Write to the file the option
                            fwrite($_fp, '<option value="'.$service->name.'">'.$service->name."</option>\n");
                        }
                    }

                    //Close the stream
                    fclose($_fp);

                    //Echo our progress to the user
                    $this->info($carrier.' '.$year.' Generated!');
                }
            }
        }
        $this->generateYearsDoc();
        $this->info('Years Generated!');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(

		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(

		);
	}

    /**
     * Generate Carrier array
     *
     * @param $services array
     * @return array
     */
    protected function getCarriers ()
    {
        return ShippingService::distinct()->lists('carrier');
    }

    protected function getYears ()
    {
        return ShippingRate::distinct()
            ->orderBy('year','desc')
            ->lists('year');
    }

    protected function generateYearsDoc ()
    {
        foreach ($this->dirContents('/files') as $dir)
        {
            $rateFile = public_path().'/files/'.$dir.'/rate-years.txt';

            $_fp = fopen($rateFile,'w');
            $yearFiles = $this->dirContents('/files/'.$dir, true);

            foreach( $yearFiles as $file )
            {
                if (strpos($file,'.txt') && $file != 'rate-years.txt')
                {
                    $filename = str_replace('.txt','',$file);
                    $write = '<option value="'.str_replace(' ','%20',$filename).'">'.$filename."</option>\n";
                    fwrite($_fp, $write);
                }
            }
            fclose($_fp);
        }
    }

    private function dirContents($dir, $sort = false)
    {
        $preDir = scandir(public_path().$dir);

        foreach($preDir as $d)
        {
            if(!in_array($d, $this->hiddenFiles))
            {
                $okDir[] = $d;
            }
        }
        if($sort) rsort($okDir);

        return $okDir;
    }
}


