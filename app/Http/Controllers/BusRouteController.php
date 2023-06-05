<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\BusRoute;

class BusRouteController extends Controller
{
    public function register()
    {
        if (auth()->user()->type == 'admin'){
            $bus = Bus::all();
        }else{
            $bus = Bus::all()->where('organization','=',auth()->user()->organization);
        }
        $user = User::all()->where('type','=','agent');
        return view('backend.pages.bus.register',['buses'=>$bus,'users' => $user]);
    }

    public function store(Request $request)
    {
        $route = new BusRoute();
        $route->bus_name = $request->bus_name;
        if (auth()->user()->type == 'admin'){
            $route->organization = $request->organization;
        }else{
            $route->organization = auth()->user()->organization;
        }
        $route->station_01 = $request->station_01;
        $route->station_02 = $request->station_02;
        $route->station_03 = $request->station_03;
        $route->station_04 = $request->station_04;
        $route->station_05 = $request->station_05;
        $route->station_06 = $request->station_06;
        $route->station_07 = $request->station_07;
        $route->station_08 = $request->station_08;
        $route->station_09 = $request->station_09;
        $route->station_10 = $request->station_10;
        $route->save();

        return redirect()->back()->with('msg','Bus route information has been added successfully');
    }
}
