<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent_Request;

class AgentRequestController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'mail' => 'email|required',
            'phone' => 'numeric|digits:11|required'
        ],[
            'mail.email' => 'Please enter a valid mail. (Ex. example@mail.com)',
            'phone.numeric' => 'Please enter a valid phone number. (Ex. 01XXXXXXXXX)',
            'phone.digits' => 'Opps!!! You missed out some digits, Please check again. (Ex. 01XXXXXXXXX)'
        ]);
        $agent = new Agent_Request();
        $agent->name = $request->name;
        $agent->mail = $request->mail;
        $agent->organization = $request->organization;
        $agent->phone = $request->phone;
        $agent->city = $request->city;
        $agent->message = $request->message;
        $agent->save();
        return redirect()->back()->with('msg', 'Your request is been sent. our support team will contact with you as soon as possible.');
    }

    public function manage()
    {
        $agent = Agent_Request::all();
        return view('backend.pages.agent.manage',['agents'=>$agent]);
    }

    public function delete($id)
    {
        $agent = Agent_Request::find($id);
        $agent->delete();
        return redirect()->back()->with('msg','Agent request has been removed successfully');
    }

}
