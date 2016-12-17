<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClientCode;
use App\Helpers\SlackBot;

class ClientCodeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(request $request)
	{
		$ClientCodes = ClientCode::all();
		foreach($ClientCodes as $c)
		{
			echo $c->envista_code.','.$request->root().'/your-accounts/?l='.$c->lojistic_hash."\r\n";
		}
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
	 * Displays a download button for the requested file
	 * @return mixed
	 */
	public function show(Request $request)
	{
		$ClientCode = ClientCode::withHash(Input::get('l'))->first();
		if($ClientCode == null){
			SlackBot::message('MISSING CLIENT FILE (madeup url): https://www.lojistic.com/your-accounts/?l='. Input::get('l'));
		}
		return view('client.your-accounts', ['valid' => ($ClientCode != null), 'l' => Request::input('l') ]);
	}

	/**
	 * Download the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function download(Request $request)
	{
		$ClientCode = ClientCode::withHash($request->input('l'))->first();
		if($ClientCode != null)
		{
			$code = $ClientCode->envista_code;
			$file = storage_path('reports/'.$code.'.xlsx');
			if(file_exists($file))
			{
				$ClientCode->views++;
				$ClientCode->save();
				SlackBot::message('Client File Downloaded by '. $code);
				return $request->download($file, 'Your Active Audit Accounts.xlsx');
			}
		}
		return $this->error();
	}

	/**
	 * Friendly error message
	 * @return string
	 */
	public function error()
	{
		SlackBot::message('MISSING CLIENT FILE: https://www.lojistic.com/your-accounts/'. Input::get('l'));
		return "Hmmm. That file doesn\'t seem to exist. I've notified a human...<br/> Thanks!<br/><i>-Website Robot</i>";
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


	public function generate()
	{
		ClientCode::truncate();
		if ($handle = opendir(storage_path('reports'))){
			while (false !== ($entry = readdir($handle))) {
				if(strpos($entry, '.xlsx')){
					$ClientCode = new ClientCode();
					$client = str_replace('.xlsx', '', $entry);
					$ClientCode->envista_code = $client;
					$ClientCode->lojistic_hash = ClientCode::hash($client);
					$ClientCode->save();
				}
			}
		}
	}

}
