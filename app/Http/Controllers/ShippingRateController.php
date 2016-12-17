<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\ShippingRate;
use Session;
use App\Helpers\LojisticExcel;


class ShippingRateController extends Controller
{
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

//    public function downloadExcel($function)
//    {
//        $request = new Request();
//        $excel = new LojisticExcel($function, $request->input('q'));
//        $excel->generate()->download();
//    }

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

}
