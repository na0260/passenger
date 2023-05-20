<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function about(){
        return view('frontend.about');
    }
    public function agent_reg(){
        return view('frontend.agent-reg');
    }
    public function bus_routes(){
        return view('frontend.bus-routes');
    }
    public function bus_search(){
        return view('frontend.bus-search');
    }
    public function privacy(){
        return view('frontend.privacy');
    }
    public function terms(){
        return view('frontend.terms');
    }
}
