<?php

use Illuminate\Http\Request;


Route::get('/test', function(){
    return view('pages.test');
});

Route::post('/test', function(Request $request){
   dd([$request->file('invoice-csv'), $request->file('invoice-csv[]')]);
});

Route::get('/files/{carrier}/{file}', function($carrier, $file){
    if(strpos($file, '.txt')){
        return File::get('public/files/'.$carrier.'/'.$file);
//       return file_get_contents(public_path('files/'.$carrier.'/'.$file));
    }
});
//
//Route::post('ups-user/validate', function(){
////    return array('result' => UPSLogin::check(Input::get('username'), Input::get('password')));
//    return \UPSUser::validate(Input::get('username'), Input::get('password'));
//});

// Client Login Portal

Route::get('login', function(){
    return redirect('portal/login');
});
Route::get('portal', function(){
    return redirect('portal/login');
});
Route::get('portal/login', function(){
    $PortalController = new PortalController();
    $PortalController->session();
    return view('portal/login');
});
//Route::post('portal/check-credentials', function(){
//    $PortalController = new PortalController();
//    $PortalController->session();
//    $html = array('html' => $PortalController->launchpadLogin(Input::get('username'), Input::get('password')));
//
//    return view('portal/portal-launchpad')->with($html);
//});
Route::get('portal/nav/{active}', function($active){
    $PortalController = new PortalController();
    $PortalController->session();
    return view('portal/nav')->with($active);
});
// youtube request to api
// protects our api call
Route::get('videos/index', function(){
    return file_get_contents("https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=25&playlistId=UUAFieFoN184snCqj8L1aPkQ&key=AIzaSyDvk96vv1-tF8Ykx3WZEnocnII9fzeos_w");
});