<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function registration()
    {
        return view('backend.pages.agent.registration');
    }
}
