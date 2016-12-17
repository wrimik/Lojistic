<?php

Route::group(array('domain' => env('PACKAGEFOX_AUDISEE_DOMAIN')), function () {
    Route::get('audisee/instant-parcel-audit', function () {
        return View::make('pages.packagefox');
    });
});

//End Temp

Route::group(['prefix' => 'audisee'], function () {
    Route::get('/', function(){
        return View::make('pages.audisee.index');
    });
    Route::group(['prefix' => '/instant-parcel-audit'], function () {
        //audisee tool drive pages
        Route::get('/', function(){
            return View::make('pages.audisee.instant-parcel-audit');
        });
        Route::post('/create', 'AuditController@create');
        Route::post('/request-large-audit', function () {
            $AuditController = new AuditController();
            $AuditController->requestLargeAudit();
            return View::make('pages/thank-you-audisee-large-file-request');
        });
        Route::get('/files/{audit_id}', ['uses' => 'AuditController@download']);
        Route::get('/download/{crypt_id}', ['uses' => 'AuditController@downloadForHumans']);
        Route::get('/{crypt_id}', function ($crypt_id) {
            return View::make('pages.audisee.instant-parcel-audit')->with(array('crypt_id' => $crypt_id));
        });
        Route::get('/{crypt_id}/run', 'AuditController@run');
        Route::get('/{crypt_id}/status', ['uses' => 'AuditController@status']);
        Route::get('/{crypt_id}/stats', ['uses' => 'AuditController@stats']);
        Route::get('/{crypt_id}/results', ['uses' => 'AuditController@show']);
        Route::get('/{crypt_id}/details', ['uses' => 'AuditController@details']);
        Route::get('/{crypt_id}/detail-report', function ($crypt_id) {
            return View::make('pages.audisee.detail-report')->with(array('crypt_id' => $crypt_id));
        });
    });
});

Route::get('audit/{crypt_id}', ['as' => 'audit-permalink', function ($crypt_id) { //audit short url - forward to actual results page
    return Redirect::to("/audisee/instant-parcel-audit/$crypt_id");
}]);
Route::get('parcel-freight-bill-audit/parcel-audit-test-drive', function () {
    return Redirect::to('audisee/instant-parcel-audit', 301);
});
Route::get('/parcel-freight-bill-audit/parcel-audit-test-drive', function () {
    //old route
    return Redirect::to("/audisee/instant-parcel-audit");
});