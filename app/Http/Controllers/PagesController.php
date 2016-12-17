<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\Swiss;


class PagesController extends Controller {

    private $slug;

    //Set the current slug to display the page
    public function __construct()
    {
        $this->slug = Swiss::getCurrentSlug();
    }

    //Return the view from current slug
    public function pageFromSlug()
    {
        return view('pages.'.$this->slug);
    }

    public function homeNew()
    {
        return view('pages.home-new');
    }

    public function parcelAudit()
    {
        return view('pages.parcel-audit');
    }



}