<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Cookie;
use App\Http\Controllers\Controller;


class InternalController extends Controller
{

    public function __construct()
    {
        //Filter everything except the indexes
        $this->beforeFilter('intraloj', ['except' => ['getIndex', 'postIndex']]);
        $this->beforeFilter('internalIp', ['only' => ['getIndex', 'postIndex']]);
    }

    /**
     * Internal Index/Login screen
     *
     * @return mixed
     */
    public function getIndex()
    {
        return view('internal.index');
    }

    /**
     * Validate Intraloj password and redirect with or without cookie
     * @return mixed
     */
    public function postIndex(Request $request)
    {
        $response = redirect()->back();

        if($request->input('intraloj_password') == getenv('INTERNAL_PASSWORD'))
        {
            $response->withCookie(\Cookie::forever('intraloj', getenv('INTERNAL_PASSWORD')));
        } else
        {
            $response->with('message_error','Thou Shalt Not Pass!<br><small class="text-danger">(At least not with that password)</small>');
        }

        return $response;
    }

    /**
     * This is for all /internal/component/{one?}/{two?}/{three?}
     *
     * @param string $one --  This is the view in views/internal/components/
     * @return mixed
     */
    public function getComponents($one = 'index')
    {
        return view('internal.components.' . $one);
    }

    /**
     * This is for all /internal/audisee/{one?}/{two?}/{three?}
     *
     * @param string $one --  This is the view in views/internal/components/
     * @return mixed
     */
    public function getAudisee($one = 'index')
    {
        return view('internal.audisee.' . $one);
    }
}