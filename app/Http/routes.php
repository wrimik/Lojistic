<?php


// Dynamically include all files in the routes directory
foreach (new DirectoryIterator(__DIR__.'/routes') as $file)
{
    if (!$file->isDot() && !$file->isDir() && $file->getFilename() != '.gitignore')
    {
        require_once __DIR__.'/routes/'.$file->getFilename();
    }
}

Route::get('csv-download/{function}/{type?}', ['as' => 'download-csv', 'uses' => 'ShippingRateController@downloadCsv']);
Route::get('excel-download/{function}', ['as' => 'download-excel', 'uses' => 'ShippingRateController@downloadExcel']);
Route::post('email-excel/{function}', ['as' => 'email-excel', 'uses' => 'ShippingRateController@emailExcel']);
