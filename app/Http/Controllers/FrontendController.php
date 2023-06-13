<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\BusTracking;
use App\Models\Privacy;
use App\Models\Terms;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $agent = User::all()->where('type','=','agent');
        $bus = Bus::all();
        $route = BusRoute::all();
        return view('frontend.index',['agents'=>$agent,'buses'=>$bus,'routes'=>$route]);
    }
    public function about(){
        $about = About::all()->first();
        return view('frontend.about',['about'=>$about]);
    }
    public function agent_reg(){
        return view('frontend.agent-reg');
    }
    public function bus_routes(){
        $bus = Bus::all();
        $route = BusRoute::all();
        return view('frontend.bus-routes',['buses'=>$bus,'routes'=>$route]);
    }
    public function bus_search(){
        $bus = Bus::all();
        return view('frontend.bus-search',['buses'=>$bus]);
    }

    public function track($id)
    {
        $bus = Bus::find($id);
        $bus_all = Bus::all();
        $track = BusTracking::all()->where('organization',$bus->organization);
        return view('frontend.track',['buses'=>$bus_all,'tracks'=>$track]);
    }

    public function search(Request $request)
    {
        $start = $request->start_point;
        $end = $request->end_point;
        $bus = Bus::where('start_point','=',$start)->where('end_point','=',$end)->get();
        $route = BusRoute::all();
        return view('frontend.bus-routes',['buses'=>$bus,'routes'=>$route]);
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
