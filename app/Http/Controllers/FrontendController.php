<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Privacy;
use App\Models\Terms;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $agent = User::all()->where('type','=','agent')->count();
        return view('frontend.index',['agent_count'=>$agent]);
    }
    public function about(){
        $about = About::all()->first();
        return view('frontend.about',['about'=>$about]);
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
        $privacy = Privacy::all()->first();
        return view('frontend.privacy',['privacy'=>$privacy]);
    }
    public function terms(){
        $terms = Terms::all()->first();
        return view('frontend.terms',['terms'=>$terms]);
    }
}
