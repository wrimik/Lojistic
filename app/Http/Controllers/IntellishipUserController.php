<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\IntellishipUser;
use App\Helpers\CurlHelper;


class IntellishipUserController extends Controller
{
    public function create(Request $request)
    {
        $IntellishipUser = IntellishipUser::create($request->input('intelliship_user'));
        $curl = new CurlHelper();
        $response = $curl->post($this->apiURL(), $request->input('intelliship_user'));
//        $this->mailLink();
//		$this->sendToHubspot(Input::get('signup'), $response);
        return $response;
    }

    public function mailLink(Request $request)
    {
        try
        {
            Mail::queue('emails.intelliship-signup', [], function ($message)
            {
                $message->to($request->input('intelliship_user.contact_email'), $request->input('intelliship_user.first_name'))
                    ->subject('Welcome To Intelliship!');
            });
        } catch(Swift_RfcComplianceException $e)
        {
            //No need to do anything cause we are storing data in db and sending to hubspot
        }
    }

    private function apiURL()
    {
        return getenv('INTELLISHIP_API_URL') . 'customer/register/ajax';
    }

    public function getIndex()
    {
        return view('internal.intelliship.index');
    }

    public function getUsers($id = null, $action = 'show')
    {
        $action = is_null($id) ? 'index' : $action;

        return $this->{'users' . ucfirst($action)}($id);
    }

    public function usersIndex()
    {
        $users = IntellishipUser::orderBy('created_at', 'desc')->paginate(1000);

        return view('internal.intelliship.users.index', compact('users'));
    }

    public function usersShow($id)
    {
        $user = IntellishipUser::find($id);

        return view('internal.intelliship.users.show', compact('user'));
    }
}