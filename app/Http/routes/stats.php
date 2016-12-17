<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ConversionController;

Route::get('/stats/Conversion/monthlyReport', function(){
    $ConversionController = new ConversionController();
   return  $ConversionController->monthlyReport();
});