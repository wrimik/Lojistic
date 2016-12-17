<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\Swiss;



class CalculatorController extends Controller {

    private $slug;

    //Set the current slug to display the page
    public function __construct()
    {
        $this->slug = Swiss::getCurrentSlug();
    }

    public function pageFromSlug()
    {
        return view('calculators.'.$this->slug);
    }
}