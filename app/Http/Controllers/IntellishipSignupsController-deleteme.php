<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IntellishipSignupsController extends Controller {

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
		$curl = new CurlHelper();
		$response = $curl->post($this->apiURL(), Input::get('is'));
//		$this->sendToHubspot(Input::get('signup'), $response);
		return $response;
	}

	private function apiURL()
	{
		return Input::get('action', 'https://intelliship2.engagetechnology.com/register/ajax');
	}

	private function sendToHubspot($signup, $response)
	{
		$hub   = new Hubspot('ea9f2fa3-14a1-420d-9bd8-cc28c36c3b06', '/thank-you');
		$hub->hs = array(
			'firstname' => $signup['contact_firstname'],
			'lastname'  => $signup['contact_lastname'],
			'company'   => $signup['contact_company'],
			'email'     => $signup['contact_email'],
			'phone'     => $signup['phonebusiness'],
			'intelliship_response' => $response,
			'product_interest_s__c' => 'Free Intelliship Signup',
		);
		$hub->hpCheck = '';
		$hub->send();
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
	public function destroy($id)
	{
		//
	}


}
