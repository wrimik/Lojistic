<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Conversion;
use App\Helpers\Hubspot;

class HubspotController extends Controller {

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
	 * Save hubspot leads
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $input = $request->all();
        //Check to make sure the array is present and the phone number isnt our testing number
        if(isset($input['hs']) && $request->input('hs.email') != 'test@lojistic.com' && $request->input('hs.email') != 'mike@lojistic.com' )
        {
            $hs = $input['hs'];

            //Break the name in 2 if we have just 1
            if(isset($hs['fullname']))
            {
                $names = explode(' ', $hs['fullname']);
                $hs['firstname'] = $names[0];
                $hs['lastname'] = str_replace([$names[0], $names[0].' '], ['',''], $hs['fullname']);
            }

            $hub   = new Hubspot($input['formid'], $input['thankyou-page']);

            $hub->hs = array(
                'firstname' => @$hs['firstname'],
                'lastname'  => @$hs['lastname'],
                'company'   => @$hs['company'],
                'email'     => @$hs['email'],
                'phone'     => @$hs['phone'],
                'web_comments__c' => @$hs['web_comments'],
                'product_interest_s__c' => @$hs['product_interest_s__c'],
            );

            $hub->hpCheck = isset($input['hp-check']) ? $input['hp-check'] : '';

            $hub->send();

            $additionalInfo = $request->except(
                '_token','hs.fullname',
                'hs.email', 'hs.phone',
                'hs.company' ,'thankyou-page',
                'formid','hp-check',
                'hs.firstname', 'hs.lastname'
            );

            $conversion = [
                'first_name'        => $hub->hs['firstname'],
                'last_name'         => $hub->hs['lastname'],
                'company'           => $hub->hs['company'],
                'email'             => $hub->hs['email'],
                'phone'             => $hub->hs['phone'],
                'page'              => \URL::previous(),
                'hubspot_utk'       => \Cookie::get('hubspotutk'),
                'additional_info'   => count($additionalInfo) > 0 ? json_encode($additionalInfo) : '',
                ];
            Conversion::create($conversion);
        }
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
	public function destroy($id)
	{
		//
	}


}
