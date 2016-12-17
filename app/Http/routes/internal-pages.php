<?php

use App\Conversion;

Route::get('audit-email', function(){
   return view('emails/audit-link')->with([
        'audit_id' => 'aSdF'
   ]);
});

Route::get('/internal/reports/conversions', function(){
    Conversion::create(['page' => 'https://www.lojistic.com/parcel-freight-bill-audit']);

    $data = [
        'data' => Conversion::all()
    ];

   return view('internal/reports/conversions')->with($data);
});


Route::get('components', function(){
    $data = array(
        'title'       => 'Components',
        'description' => '',
        'keywords'    => '',
        'bodyClass'   => ''
    );
    return view('internal/components')->with($data);
});

Route::get('decode/{audit_id}', function($audit_id){
    return Audit::idFromRouteKey($audit_id);
});

Route::get('encode/{audit_id}', function($audit_id){
    $hashids = new \Hashids\Hashids();
    return Response::json(['crypt_id'=>$hashids->encode($audit_id)]);
});

Route::post('dump-post', function(){
    dd(Input::all());
});
Route::post('return-post', function(){
    return Input::all();
});
Route::post('slack', function(){
    \App\Helpers\SlackBot::message(Input::get('message'));
});

Route::get('your-accounts/', 'ClientCodeController@show');
Route::get('your-accounts/download/', 'ClientCodeController@download');
Route::get('internal/your-accounts', 'ClientCodeController@index');
Route::get('internal/your-accounts/generate', 'ClientCodeController@generate');


//Route::get('internal/components', function(){return view('internal.components');});
Route::controller('internal/calculators', 'InternalCalculatorController');
Route::controller('internal/intelliship', 'IntellishipUserController');
// Google Drive API Route
Route::get('internal/gdrive/{clientCode}', 'ClientDownloadController@show');
Route::controller('internal', 'InternalController');
