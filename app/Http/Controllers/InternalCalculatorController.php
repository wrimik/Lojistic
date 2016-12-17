<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class InternalCalculatorController extends Controller
{

    public function __construct()
    {
        //Filter everything except the indexes
        $this->beforeFilter('intraloj');
    }

    public function getIndex()
    {
        return view('internal.calculators.index');
    }

    public function getRateComparisonCalculator()
    {
        return view('internal.calculators.rate-comparison-calculator');
    }

    public function getRateCalculator()
    {
        return view('internal.calculators.rate-calculator');
    }

    public function postRateCalculator(Request $request)
    {
        $rates = Rate::getCarrierRates($request->all())->get()->keyBy('wz');
        $carrier = $request->input('carrier');
        $year = urldecode($request->input('year'));
        $service = $request->input('type');

        return view('internal.calculators.results.rates-calculator', compact('rates','carrier','year','service'));
    }

    public function postRateComparisonCalculator(Request $request)
    {
        $a = $request->input('c.1');
        $b = $request->input('c.2');

        $rates['a'] = Rate::getRatesForComparison($a)->get()->keyBy('wz');
        $rates['b'] = Rate::getRatesForComparison($b)->get()->keyBy('wz');

        return view('internal.calculators.results.rates-comparison', compact('rates', 'a', 'b'));
    }
}