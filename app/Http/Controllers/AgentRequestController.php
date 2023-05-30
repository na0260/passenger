<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent_Request;

class AgentRequestController extends Controller
{
    public function store(Request $request)
    {
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


}
