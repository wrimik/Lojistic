<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\LojisticExcel;
use App\Helpers\Discounter;
use App\ShippingService;
use App\ShippingRate;
use Session;

class ShippingServiceController extends Controller
{
    protected static function message($key){
        $messages = [
            'bad-email' =>  "Uhh Oh!...\\n Normally this is when we would generate " .
                "you a pretty spreadsheet with your Custom Rates results but " .
                "the email address you entered doesn\\'t appear to be in service."
        ];
        return $messages[$key];
    }


    public function getComparisonReport(Request $request)
    {
        $this->storeConversion($request);
        $a = $request->input('A');
        $b = $request->input('B');
        $rates = ShippingService::compare(
            $this->getDiscountedRates($a['service'], isset($a['advanced']), $a['minimum'], $a['discounts']),
            $this->getDiscountedRates($b['service'], isset($b['advanced']), $b['minimum'], $b['discounts'])
        );
        return view('parts.rates-comparison-results', [
            'a' => $a,
            'b' => $b,
            'rates'   => $rates
        ]);
    }

    /**
     * generates html table of rates
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getRatesReport(Request $request)
    {
        return view('parts.rates-calculator-results', $this->calculateRates($request));
    }

    /**
     * Sends rates report in microsoft excel format
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function downloadRatesReport(Request $request)
    {
        $LojisticExcel = new LojisticExcel();
        $pathToFile = $LojisticExcel->generateFile($request, $this->calculateRates($request));
        return response()->download($pathToFile); //->deleteFileAfterSend(true);
    }

    public function calculateRates(Request $request){
        $this->storeConversion($request);
        $a = $request->input('A');
        $rates = $this->getDiscountedRates($a['service'], isset($a['advanced']), $a['minimum'], $a['discounts']);
        return [
            'service' => $a['service'],
            'rates'   => $rates
        ];
    }

    /**
     * Returns formatted array like $array[ zone ][ weight ] = discounted price;
     * @param $service
     * @param $advanced
     * @param $minimum
     * @param $discounts
     * @return array
     */
    public static function getDiscountedRates($service, $advanced, $minimum, $discounts)
    {
        $discounter = new Discounter();
        $year = urldecode($service['year']);//not sure why this is encoded...
        $shippingServices = ShippingService::with([
            'rates' => function($query) use ($year) {
                $query->where('year', 'like', $year);
            }])
            ->byTariff( $service )
            ->get();
        return $discounter->discountCollection($shippingServices, $advanced, $discounts, $minimum);
    }


    /**
     * Allows requests to be served, but displays a cheeky message if emails aren't valid.
     * @param Request $request
     */
    public function validateInput(Request $request)
    {
        $valid = filter_var($request->input('hs.email'), FILTER_VALIDATE_EMAIL);
        //Check to make sure we have a valid email
        if(!$valid && !\Session::has('carrierRateQuote'))
        {
            \Session::flash('warning_error', self::message('bad-email'));
        }
        elseif($valid && !\Session::has('carrierRateQuote'))
        {
            \Session::forget('warning_error');
            \Session::put('carrierRateQuote',1);
            \Session::put('email_excel.email', $request->input('hs.email'));
            \Session::put('email_excel.fullname', $request->input('hs.fullname'));
            \Session::put('email_excel.calculator', 'Carrier Rates');
            \Session::put('email_excel.q', $request->all());
        }
    }

    public static function getDimReport(Request $request)
    {
        $input = $request->get('A');
        $shippingRate = new ShippingRate();
        $default     = $shippingRate->dimCarrierDefaults($input['carrier']);
        $dim_weight  = $shippingRate->getDIMWeight($input['l'], $input['w'], $input['h'], $input['dim_divisor']);
        $ratesArray  = self::getDiscountedRates($default, false, $input['min'], $input['discounts']);
        $weight      = intval(ceil($input['weight']));
        $rates = [];
        foreach($ratesArray[$weight] as $zone => $obj)
        {
            $rates['real'][$zone] = $obj['price'];
        }
        foreach($ratesArray[$dim_weight] as $zone => $obj)
        {
            $rates['dim'][$zone] = $obj['price'];
        }
        return json_encode($rates);
    }

    /**
     * takes tab delimited file like
     * ZONE	2	3	4	5	6	7	8
     * Letter	$1.00	$2.00	$3.00	$4.00	$5.00	$6.00	$7.00	$8.00
     * 1 Lb.	1.00	2.00	3.00	4.00	5.00	6.00	7.00	8.00
     * 2	1.00	2.00	3.00	4.00	5.00	6.00	7.00	8.00
     * @param $fileLocation
     */
    public function importFromFile($serviceName, $carrier, $year,  $fileLocation)
    {
        $ShippingService = ShippingService::where('name', '=', $serviceName)
                            ->where('carrier', '=', $carrier)
                            ->first();
        $data = file_get_contents($fileLocation);
        $ShippingService->importRates($data, $year);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function storeConversion(Request $request)
    {
        $hubspot = new HubspotController();
        $hubspot->store($request);
        $this->validateInput($request);
    }
}
