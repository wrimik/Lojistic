<?php

//      ---     OLD     ---         //
//      ---     OLD     ---         //
//      ---     OLD     ---         //

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\LojisticExcel;
use App\ShippingRates;
use App\Rate;
use App\Service;
use Session;

class ShippingRatesController extends Controller {

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
	public function create()
	{
		//
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
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	public function destroy($id){
		//
	}

	/**
	 * Get Dim Compairrison Report
	 *
	 * @return JSON encoded string
	 */
	public function getDimReport(Request $request){

            $input = $request->all();

            $shippingRates = new ShippingRates();

            $default     = $shippingRates->dimCarrierDefaults($input['carrier']);

            $dim_weight  = $shippingRates->getDIMWeight($input['l'], $input['w'], $input['h'], $input['dim_divisor']);

            $rates       = $shippingRates->getShippingRates($input['carrier'], $default['year'], $default['service'], $input['min'], $input['discount']);

            $weight      = ceil(intval($input['weight']));

            return json_encode(array('real' => @$rates[$weight], 'dim' => $rates[$dim_weight]));
	}



    /**
     * Get Rates Calculator Report
     *
    */
    public function getRatesReport(Request $request){

        $hubspot = new HubspotController();
        $hubspot->store($request);
        $input = $request->all();
        $carrier = $input['carrier'];
        $year = urldecode($input['year']);
        $service = $input['type'];
        $rates = Rate::getCarrierRates($input)->get()->keyBy('wz');

        //Check to make sure we have a valid email
        $validator = \Validator::make($request->all(), ['email' => $request->input('hs.email')], ['email' => 'required|email']);
        if(!$validator->passes() && !Session::has('carrierRateQuote'))
        {
            $message = "Uhh Oh!...\\n Normally this is when we would generate "
                ."you a pretty spreadsheet with your Custom Rates results but "
                . "the email address you entered doesn\\'t appear to be in service.";
            Session::flash('warning_error', $message);
        }
        elseif($validator->passes() && !Session::has('carrierRateQuote'))
        {
            Session::forget('warning_error');
            Session::put('carrierRateQuote',1);
            Session::put('email_excel.email', $request->input('hs.email'));
            Session::put('email_excel.fullname', $request->input('hs.fullname'));
            Session::put('email_excel.calculator', 'Carrier Rates');
            Session::put('email_excel.q', $input);
        }

        return view('parts.rates-calculator-results', compact('carrier','year','service','rates'));
    }

    /**
     * Run a rate comparison between different services and email consumer on first submission
     * @return array
     */
    public function compareRates(Request $request)
    {
        $hubspot = new HubspotController();
        $hubspot->store($request);

        $services['a'] = $request->input('c.1');
        $services['b'] = $request->input('c.2');

        foreach ($services as $key => $val)
        {
            $rates[$key] = Rate::getRatesForComparison($val)->get()->keyBy('wz');
        }

        //Check to make sure we have a valid email
        $validator = \Validator::make([$request->input('hs.email')], ['email' => 'required|email']);
        if(!$validator->passes() && !Session::has('getRatesForComparison'))
        {
            $message = "Uhh Oh!... \\n Normally this is where we would generate "
                ."a pretty spreadsheet with your Rate Comparison results but the email address "
                ."you have entered doesn\\'t appear to be in service";
            Session::flash('warning_error', $message);
        }
        elseif($validator->passes() && !Session::has('getRatesForComparison'))
        {
            Session::forget('warning_error');
            Session::put('getRatesForComparison',1);
            Session::put('email_excel.email', $request->input('hs.email'));
            Session::put('email_excel.fullname',$request->input('hs.fullname'));
            Session::put('email_excel.calculator', 'Rate Comparison');
            Session::put('email_excel.q', [$request->input('c.1'), $request->input('c.2')]);
        }

        $data  = array(
            'a'    => $services['a'],
            'b'    => $services['b'],
            'rates' => $rates
        );

        return view('parts.rates-comparison-results')->with($data);
    }


    /**
    * Get Rates Calculator Report
    *
    * @return JSON encoded string
    */
    public function getAllCarrierServices(){
//        return json_encode($shippingRates->getAllCarrierServices());
    }


	/**
	 * List all unique "years" for a given carrier
	 *
	 * @param  int  $carrier
	 * @return Response
	 */
	public function getYears($carrier)
	{
        return Rate::select('year')
            ->distinct()
            ->whereHas('service', function($q) use ($carrier)
            {
                $q->where('carrier',$carrier);
            })->orderBy('year','desc')
            ->get();
	}


	/**
	 * List all unique "years" for a given carrier
	 *
	 * @param   string $carrier
     * @param   string $year
	 * @return Response
	 */
	public function getServices($carrier, $year)
	{
        return Service::select('name')
            ->where('carrier', $carrier)
            ->whereHas('rates', function($q) use ($year)
            {
                $q->where('year', $year);
            })->get();
	}

    /**
     * @param string $function function for data manipulation before excel output
     *
     * @return mixed
     */
    public function downloadCsv($function, $type = 'dollars')
    {
        $request = new Request();
        $csv = new LojisticExcel($function, $request->input('q'));

        return $csv->type($type)->generate()->download();
    }

    public function downloadExcel($function)
    {
        $request = new Request();
        $excel = new LojisticExcel($function, $request->input('q'));
        $excel->generate()->download();
    }

    public function emailExcel($function, $email = false)
    {
        if($email || count(Session::get('email_excel',[])) > 0)
        {
            $calculator = Session::pull('email_excel.calculator');
            $csv = new LojisticExcel($function, Session::pull('email_excel.q'));
            $csv->generate()
                ->emailTo([
                    'email'         => Session::pull('email_excel.email'),
                    'fullname'      => Session::pull('email_excel.fullname'),
                    'calculator'    => $calculator,
                ]);
            Session::forget('email_excel');

            $message = 'A copy of your '.$calculator.' results have been emailed to you! '
                .'For your convenience, additional calculator results are available for download '
                .'to Excel.  Let us know if we can help out in any way!';

            $json = [
                'success'   => true,
                'message'   => $message
            ];

            return Response::json($json,200);
        }
    }
}