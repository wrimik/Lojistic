<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class ClientDownloadController extends Controller
{

    public function __construct()
    {
        //Filter everything except the indexes
        $this->beforeFilter('intraloj');
    }

    public function show($clientCode)
    {
        $drive = new GoogleDrive;
        $files = $drive->listClientFiles($clientCode)->get();

        return view('internal.client-download.index', compact('files', 'clientCode'));
    }
}