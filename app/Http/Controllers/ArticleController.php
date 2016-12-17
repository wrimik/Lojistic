<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\Swiss;

class ArticleController extends Controller {

    private $article;

    public function __construct()
    {
        //Get the last slug of the current path to prepare to display that article
        $this->article = Swiss::getCurrentSlug();
    }

    /**
     * Show the blade view named the slug of the path
     * @return View
     */
    public function show()
    {
        return view('articles.'.$this->article);
    }
}