<?php
namespace App\Helpers;
/**
 * User: Etucker
 * Date: 4/10/15
 */
use App\Helpers\Swiss;
use App\Rate;
use Illuminate\Http\Request;
use Session;


class LojisticExcel
{
    private $excel;
    private $data; // holds rates from ShippingRateController
    /**
     * @var array Labels for the excel we are going to generate
     */
    private $titles = ['heading' => 'Lojistic Rate Guide', 'name' => '', 'title' => '', 'tabName' => 'Rates'];
    private $options = ['hasAdvancedDiscounts' => false];

    // TODO: make this be real
    private function hasAdvancedDiscounts()
    {
        return $this->options['hasAdvancedDiscounts'];
    }


    public function generateFile(Request $request, $data)
    {
        /**
         * TODO: wire the new input variable structure to the ->inputQuery variabl stuff
         * in the blade template
         */
        $this->data = $data;
        $this->inputQuery = $request->all();
        $excel = \App::make('excel');
        $this->excel =  $excel->create($this->titles['heading'], function($excel)
        {
            $excel->sheet($this->titles['tabName'], function($sheet)
            {
                $sheet->loadView('excel.carrier-rate-excel', [
                    'query'             => $this->inputQuery,
                    'titles'            => $this->titles,
                    'rates'             => $this->data,
                    'advancedDiscounts' => $this->hasAdvancedDiscounts()
                ]);
            });
        });
        return $this;
    }

}

class OldLojisticExcel{
    /**
     * @var string function to be called by the $this->generate() method
     */
    private $function;

    /**
     * @var array Query params from input
     */
    public $inputQuery = [];

    /**
     * @var array Labels for the excel we are going to generate
     */
    private $titles = ['heading' => '', 'name' => '', 'title' => ''];

    /**
     * @var array Data returned from the query
     */
    private $queryData = [];

    /**
     * @var array Data ready to be converted to csv
     */
    private $csvData = [];

    /**
     * @var string File extension (csv || xls || xlsx)
     */
    private $fileType;

    /**
     * @var object Maatwebsite\Excel\Facades\Excel
     */
    private $excel;

    /**
     * Type of comparison (dollars | percentages)
     * @var string
     */
    private $comparisonType = 'dollars';

    /**
     * @var array
     *
     */
    private $individualWeightBreaks = [
        ['letter', '1-5', '6-10'],
        ['11-15', '16-20', '21-25'],
        ['26-30', '31-35', '36-40'],
        ['41-45', '46-70', '71-150']
    ];
    private $emailFromFunction = [
        'carrierRatesToExcel'   => 'emails.rate-calculator',
        'compareRatesToExcel'   => 'emails.comparison-calculator'
    ];

    /**
     * @param string $function function to be run to create excel data
     * @param array $inputQuery Query params that were run or will be run
     */
    public function __construct($function, $inputQuery = [])
    {
        $request = new Request();
        $this->function = $function;
        $this->inputQuery = empty($inputQuery) ? $request->input('q') : $inputQuery;
    }

    /**
     * @param array $data Data from query
     *
     * @return $this
     */
    public function withData($data)
    {
        $this->queryData = $data;
        $this->setLetterWeight();
        return $this;
    }

    /**
     * Get or Set function or retrieve function
     *
     * @param null $function
     * @return null|string
     */
    public function funct($function = null)
    {
        if(!is_null($function))
        {
            $this->function = $function;
        }

        return $this->function;
    }

    /**
     * Get or Set our titles
     *
     * @param array $titles
     * @return array
     */
    public function titles($titles = [])
    {
        return $this->$titles = empty($titles) ? $this->$titles : $titles;
    }

    /**
     * Call our preset function
     *
     * @return mixed
     */
    public function generate()
    {
        return call_user_func([$this, $this->function]);
    }

    /**
     * Download our generated excel
     *
     * @return mixed
     */
    public function download()
    {
        return $this->excel->export($this->fileType);
    }

    /**
     * Send email with Excel attachment
     *
     * @param array $emailInfo Array of email params ['email'=> '', 'fullname'=> '', calculator = '']
     */
    public function emailTo(array $emailInfo)
    {
        $this->excel->store($this->fileType);
        $names = explode(' ',$emailInfo['fullname']);
        $emailInfo['firstName'] = ucfirst($names[0]);
        $titles = $this->titles;
        $file = storage_path('exports/'.$this->excel->filename.'.'.$this->excel->ext);
        Mail::send($this->emailFromFunction[$this->function], $emailInfo, function($message) use ($emailInfo,$titles,$file)
        {
            $message->from('no-reply@lojistic.com', 'Lojistic')
                ->to($emailInfo['email'], ucwords($emailInfo['fullname']))
                ->subject($titles['heading'])
                ->attach($file);
        });
    }

    private function carrierRatesToCsv()
    {
        $this->fileType = 'csv';
        $this->setCarrierRateTitles();
        $this->carrierRatesToCsvData()->csvFromData();
        return $this;
    }


    private function carrierRatesToExcel()
    {
        $this->fileType = 'xls';
        $this->setCarrierRateTitles();
        $this->carrierRatesToExcelData()->excelFromData();
        return $this;
    }

    private function excelFromData()
    {
        $excel = \App::make('excel');
        $this->excel =  $excel->create($this->titles['heading'], function($excel)
        {
            $excel->sheet($this->titles['tabName'], function($sheet)
            {
                $sheet->loadView('excel.carrier-rate-excel', [
                    'query'             => $this->inputQuery,
                    'titles'            => $this->titles,
                    'rates'             => $this->queryData,
                    'advancedDiscounts' => $this->hasAdvancedDiscounts()
                ]);
            });
        });
        return $this;
    }

    private function carrierRatesToExcelData()
    {
        $this->queryData = $this->setLetterWeight(Rate::getCarrierRates($this->inputQuery)->get()->keyBy('wz'));
        return $this;
    }

    private function carrierRatesToCsvData()
    {
        $rates = $this->setLetterWeight(Rate::getCarrierRates($this->inputQuery)->get()->keyBy('wz'));

        for($i = 0; $i < 151; $i++)
        {
            for($z = 2; $z <=8; $z++)
            {
                if($i != 0)
                {
                    $this->csvData[$i.' lb'][$z] = Swiss::toMoney(@$rates[$i.'-'.$z]->price);
                } else
                {
                    $this->csvData['Letter'][$z] = Swiss::toMoney(@$rates[$i.'-'.$z]->price);
                }
            }
        }

        return $this;
    }

    private function setCarrierRateTitles()
    {
        $year = urldecode(strpos($this->inputQuery['year'],'-') !== false ? $this->inputQuery['year'] : $this->inputQuery['year'].' -');
        $this->titles['name'] = $this->inputQuery['carrier'].' '.$this->inputQuery['type'];
        $this->titles['heading'] = $this->inputQuery['carrier'].' '.$year.' '.$this->inputQuery['type'];
        $this->titles['title'] = $this->titles['name'];
        $this->titles['tabName'] = $this->inputQuery['carrier'].' '.str_replace([' Standard List',' Daily Rates','.'],['','',''],$year).' '.$this->inputQuery['type'];
        return $this;
    }


    /**
     * Turn the rate comparison calculator
     * @return $this
     */
    private function compareRatesToCsv()
    {
        $this->fileType = 'csv';

        $this->setCsvComparisonTitleAndHeader()
            ->comparisonToCsvData()
            ->CsvFromData();

        return $this;
    }

    public function type($type = null)
    {
        if(empty($type))
            return $this->comparisonType;

        $this->comparisonType = $type;

        return $this;
    }

    /**
     * Generate a CSV from Data returned from a query
     *
     * @return $this
     */
    public function csvFromData()
    {
        $this->excel = Excel::create($this->titles['name'], function($excel)
        {
            $excel->sheet($this->titles['title'], function($sheet)
            {
                //Our Title
                $sheet->row(1, [$this->titles['heading']]);
                $sheet->row(2, ['']);

                //Apply our General Discounts
                $this->csvDiscounts($sheet);

                //Our First Row headers
                $sheet->appendRow(['Weight', 'Zone 2', 'Zone 3', 'Zone 4', 'Zone 5', 'Zone 6', 'Zone 7', 'Zone 8']);

                foreach($this->csvData as $weight => $zones)
                {
                    array_unshift($zones,$weight);
                    $sheet->appendRow($zones);
                }
            });
        });

        return $this;
    }

    public function csvDiscounts($sheet)
    {
        if($this->hasDiscounts())
        {
            foreach($this->inputQuery['c'] as $val)
            {
                $year = strpos($val['year'],'-') !== false ? urldecode($val['year']) : urldecode($val['year']).' -';
                $sheet->appendRow([$val['carrier'].' '.$year.' '.$val['type']]);
                $min = empty($val['minimum']) ? '' : 'Minimum Net Charge: $'.number_format($val['minimum'],2);
                if(isset($val['advanced']))
                {
                    $discountLabel = $val['carrier'] == 'UPS' ? ' Tier Incentive' : ' Earned Discount';
                    $carrierDiscount = !empty($val['carrier']) ? $val['carrier'].$discountLabel.': '.number_format($val['tier'],2).'%' : '';
                    $sheet->appendRow([$carrierDiscount,$min]);
                } else
                {
                    $discounts = empty($val['general']) ? '' : $val['carrier'].' Discounts: '.number_format($val['general'],2).'%';
                    $sheet->appendRow([$discounts,$min]);
                }

                $this->advancedCsvDiscounts($sheet, $val);
            }
        }
    }

    /**
     * Apply Advanced DIscounts to CSV
     * @param $sheet
     * @return $this
     */
    private function advancedCsvDiscounts($sheet, $val)
    {
        if($this->hasAdvancedDiscounts())
        {
            $sheet->appendRow(['Individual Weight Breaks']);
            foreach($this->individualWeightBreaks as $row)
            {
                $weightBreaks = [''];
                foreach($row as $break)
                {
                    $weightBreaks[] = $break != 'letter' ? '="'.$break.'"': '="'.$break.'"';
                    $weightBreaks[] = empty($val['discounts'][$break == 'letter'?0:$break])?'':number_format($val['discounts'][$break == 'letter'?0:$break],2).'%';
                }
                $sheet->appendRow($weightBreaks);
            }
            $sheet->appendRow(['','']);
        }

        return $this;
    }

    /**
     * Turn a rate comparison into CSV friendly data
     *
     * @return $this
     */
    public function comparisonToCsvData()
    {
        if(empty($this->queryData))
        {
            $data['a'] = Rate::getRatesForComparison($this->inputQuery['c']['1'])->get()->keyBy('wz');
            $data['b'] = Rate::getRatesForComparison($this->inputQuery['c']['2'])->get()->keyBy('wz');
            $this->withData($data);
        }

        foreach($this->queryData['a'] as $rate)
        {
            if($this->comparisonType == 'percentage')
            {
                $prefix = Swiss::isMore($rate->price,$this->queryData['b'][$rate->wz]->price) ? '' : '-';
                $result[$rate->weight][$rate->zone] = $prefix.Swiss::toReversePercentage($rate->price,$this->queryData['b'][$rate->wz]->price);

            } else
            {
                $result[$rate->weight == 0 ? 'Letter' : $rate->weight.' lb'][$rate->zone] = Swiss::toMoney($rate->price - $this->queryData['b'][$rate->wz]->price);
            }
        }

        $this->csvData = $result;

        return $this;
    }

    /**
     * Set default headers for our comparison report to generate a csv
     *
     * @return $this
     */
    private function setCsvComparisonTitleAndHeader()
    {
        $count = 1;
        $length = count($this->inputQuery['c']);
        foreach($this->inputQuery['c'] as $val)
        {
            $vs = $count < $length ? ' VS ' : '';

            $this->titles['heading'] .= $val['carrier'] .' ';
            $this->titles['heading'] .= urldecode(strpos($val['year'],'-')!==false?$val['year']:$val['year'].' - ') .' ';
            $this->titles['heading'] .= $val['type'];
            $this->titles['heading'] .= $vs;
            $this->titles['name'] .= $val['carrier'].' '.$val['type'];
            $this->titles['name'] .= $vs;
            $count++;
        }

        return $this;
    }

    /**
     * Generate data and excel
     * @return $this
     */
    private function compareRatesToExcel()
    {
        $this->fileType = 'xls';
        $this->getComparisonToExcelData()
            ->comparisonToExcel(false);
        return $this;
    }

    private function comparisonToExcel($calculated = true)
    {
        $this->excel = $calculated ? $this->comparisonToExcelWithoutFormulas() : $this->comparisonToExcelWithFormulas();

        return $this;
    }

    /**
     * Generate excel and calculate formulas with formulas on master
     *
     * @return mixed
     */
    private function comparisonToExcelWithFormulas()
    {
        return Excel::create($this->titles['name'], function($excel)
        {
            //This is our Master Cover Sheet
            $excel->sheet('Rate Comparison', function($sheet)
            {
                $sheet->loadView('excel.comparison-cover', [
                    'titles'            => $this->titles,
                    'q'                 => $this->inputQuery,
                    'coverCalculations' => true,
                    'advancedDiscounts' => $this->hasAdvancedDiscounts()
                ]);
            });

            //For Each Query we run this...
            $queryCount = 1;
            foreach($this->queryData as $key => $val)
            {
                $excel->sheet(substr(str_replace([' Standard List',' Daily Rates','.','Early '],['','','',''],$this->titles['q.'.$queryCount]['sheetTitle']),0,30), function($sheet) use ($queryCount,$val)
                {
                    $sheet->loadView('excel.carrier-rates', [
                        'titles'            => $this->titles,
                        'data'              => $val,
                        'carrierRateTitle'  => $this->titles['q.'.$queryCount]['sheetTitle']
                    ])->setFreeze('A3');
                });
                $queryCount++;
            }
            $toggle = $this->hasAdvancedDiscounts() ? 'G17' : 'G11';
            $excel->setActiveSheetIndex(0);
            $master = $excel->getActiveSheet();
            $this->fillMasterSheetFormulas($master);
            $master->getProtection()->setPassword('Lojistic!!');
            $master->getProtection()->setSelectUnlockedCells(false);
            $master->getProtection()->setSelectLockedCells(false);
            $master->getProtection()->setSheet(true);
            $this->setDataValidation($master,$toggle, '"Dollars $,Percentage %"');
            $master->getStyle($toggle)->getProtection()->setLocked(PHPExcel_style_protection::PROTECTION_UNPROTECTED);
        });
    }

    /**
     * @param $sheet
     */
    private function fillMasterSheetFormulas($sheet)
    {
        $append = $this->hasAdvancedDiscounts() ? 23 : 17;
        for($i = 0; $i < 151; $i++)
        {
            if(isset($this->queryData['a'][$i.'-2']) && isset($this->queryData['b'][$i.'-2'])){
                $sheet->appendRow($append+$i,
                    $this->createFormulaRow($sheet,$i, $append)
                );
            }
        }
        $sheet->cells('E'.$append.':K180', function($cells){
            $cells->setAlignment('center');
        });
    }

    /**
     * Create a row with formulas to toggle between percentages and dollars
     *
     * @param $sheet
     * @param $weight
     * @param int $start which row to append first
     *
     * @return array
     */
    private function createFormulaRow($sheet,$weight, $start = 23)
    {
        $toggleCell = $start == 23 ? 17 : 11;
        $row = ['','','', $weight== 0 ? 'Letter' : $weight.' lb'];
        $colmnCount = [2=>'E',3=>'F',4=>'G',5=>'H',6=>'I',7=>'J',8=>'K'];
        for($z = 2; $z <=8; $z++)
        {
            $color = $this->queryData['a'][$weight.'-'.$z]['price'] > $this->queryData['b'][$weight.'-'.$z]['price'] ? '#6096c3' : '#e33';
            $string = $color == '#e33' ? "=IF(RIGHT(\$G\$".$toggleCell.",1)=\"$\",\"-$\"&" : "=IF(RIGHT(\$G\$".$toggleCell.",1)=\"$\",\"$\"&";
            $string .= str_replace('-','',number_format(($this->queryData['a'][$weight.'-'.$z]['price']-$this->queryData['b'][$weight.'-'.$z]['price']),2));

            $string .= ",";
            $string .= ((number_format(1-(
                        min(@$this->queryData['a'][$weight.'-'.$z]['price'], @$this->queryData['b'][$weight.'-'.$z]['price'])
                        /max(@$this->queryData['a'][$weight.'-'.$z]['price'], @$this->queryData['b'][$weight.'-'.$z]['price'])
                    ),4))*100);
            $string .= "&\"%\")";
            $row[] = $string;
            $sheet->cell(@$colmnCount[$z].($weight+$start), function($cell) use ($color)
            {
                $cell->setFontColor($color);
            });
        }

        return $row;
    }

    /**
     * Generate excel and calculate formulas with links on master
     *
     * @return /Excel
     */
    private function comparisonToExcelWithoutFormulas()
    {
        return Excel::create($this->titles['name'], function($excel)
        {
            $excel->sheet('Rate Comparison', function($sheet)
            {
                $sheet->loadView('excel.comparison-cover', ['titles'=>$this->titles, 'q'=>$this->inputQuery]);
            });

            //Create the first set of rates table
            $excel->sheet('Monetary Comparison', function($sheet)
            {
                $sheet->loadView('excel.carrier-rates-calculated', [
                    'carrierRateTitle'  => 'Comparison In Dollars',
                    'titles'            => $this->titles,
                    'data'              => $this->queryData,
                    'comparisonType'    => 'dollar'
                ])->setFreeze('A5');
                $sheet->getCell('A1')
                    ->getHyperlink()
                    ->setTooltip('Go Back To Main Sheet')
                    ->setUrl("sheet://'Rate Comparison'!I7");
            });

            //Create the 2nd set of rates table
            $excel->sheet('Percentage Comparison', function($sheet)
            {
                $sheet->loadView('excel.carrier-rates-calculated', [
                    'carrierRateTitle'  => 'Comparison In Percentage',
                    'titles'            => $this->titles,
                    'data'              => $this->queryData,
                    'comparisonType'    => 'percentage'
                ])->setFreeze('A5');
                $sheet->getCell('A1')
                    ->getHyperlink()
                    ->setTooltip('Go Back To Main Sheet')
                    ->setUrl("sheet://'Rate Comparison'!D7");
            });

            //Create Our Links Back To Master
            $excel->setActiveSheetIndex(0);
            $master = $excel->getActiveSheet();
            $master->getCell('F8')
                ->getHyperlink()
                ->setTooltip('See The Difference In Dollars')
                ->setUrl("sheet://'Monetary Comparison'!A1");
            $master->getCell('F9')
                ->getHyperlink()
                ->setTooltip('See The Difference In Percentages')
                ->setUrl("sheet://'Percentage Comparison'!A1");
        });
    }

    /**
     * Generate a dropdown in a cell
     *
     * @param $sheet /Excel/Sheet
     * @param $cell /Excell/Sheet/Cell
     * @param $list List for dropdown
     */
    private function setDataValidation($sheet, $cell, $list )
    {
        $validation = $sheet->getCell($cell)->getDataValidation();
        $validation->setType( PHPExcel_Cell_DataValidation::TYPE_LIST);
        $validation->setErrorStyle( PHPExcel_Cell_DataValidation::STYLE_INFORMATION );
        $validation->setAllowBlank(false);
        $validation->setShowDropDown(true);
        $validation->setFormula1($list);
    }

    /**
     * Generate headers and run querys for data
     *
     * @return $this
     */
    private function getComparisonToExcelData()
    {
        $this->setExcelComparisonTitleAndHeaders();
        if(empty($this->queryData))
        {
            $this->queryData['a'] = Rate::getRatesForComparison($this->inputQuery['c']['1'])->get()->keyBy('wz');
            $this->queryData['b'] = Rate::getRatesForComparison($this->inputQuery['c']['2'])->get()->keyBy('wz');
        }
        $this->setLetterWeight();

        return $this;
    }

    /**
     * Check to see if query(s) has minimum charge set
     * @return bool
     */
    public function hasMinimumCharges()
    {
        return !empty($this->inputQuery['c']['1']['minimum']) && !empty($this->inputQuery['c']['2']['minimum']);
    }

    public function hasAdvancedDiscounts()
    {
        return isset($this->inputQuery['c']['1']['advanced']) || isset($this->inputQuery['c']['2']['advanced'])
            || isset($this->inputQuery['advanced']);
    }

    public function hasDiscounts()
    {
        return !empty($this->inputQuery['c']['1']['general']) || !empty($this->inputQuery['c']['1']['minimum'])
            || !empty($this->inputQuery['c']['2']['general']) || !empty($this->inputQuery['c']['2']['minimum']);
    }

    /**
     * Set the headers for the comparison sheets
     * @return $this
     */
    private function setExcelComparisonTitleAndHeaders()
    {
        $this->titles['name'] = 'Rate Comparison From Lojistic';
        $this->titles['heading'] = 'Your Rate Comparison From Lojistic';
        foreach($this->inputQuery['c'] as $key => $val)
        {
            $comp = $key=='1'?'(A)':'(B)';
            $year = strpos($val['year'], '-') !== false ? urldecode($val['year']) : urldecode($val['year']). ' -';
            $this->titles['q.'.$key]['title'] = ucfirst($val['carrier']).' '.$year.' '.$val['type'];
            $this->titles['q.'.$key]['carrier'] = ucfirst($val['carrier']);
            $this->titles['q.'.$key]['sheetTitle'] = $comp.' '. ucfirst($val['carrier']).' '.$year.' '.$val['type'];
            $this->titles['q.'.$key]['tabName'] = $comp.' '. ucfirst($val['carrier']).' '.str_replace([' Standard List',' Daily Rates','.'],['','',''],$year).' '.$val['type'];
        }

        return $this;
    }

    private function setLetterWeight($result = [])
    {
        if(empty($result))
        {
            foreach($this->queryData as $query => $result)
            {
                if(!isset($result['0-2']))
                {
                    for($i = 2; $i <= 8; $i++)
                    {
                        $this->queryData[$query]['0-'.$i] = $result['1-'.$i];
                    }
                }
            }

            return $this;
        } else
        {
            if(!isset($result['0-2']))
            {
                for($i = 2; $i <= 8; $i++)
                {
                    $result['0-'.$i] = @$result['1-'.$i];
                }
            }

            return $result;
        }
    }

}