<?php

namespace App\Http\Controllers;

use App\Models\BusTracking;
use App\Models\Driver;
use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\User;

class BusController extends Controller
{
    public function register()
    {
        $user = User::all()->where('type','=','agent');
        return view('backend.pages.bus.register',['users' => $user]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'number' => 'required|unique:buses,number',
            'start_point' => 'required',
            'end_point' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        $bus = new Bus();
        $track = new BusTracking();

        if (auth()->user()->type == 'admin'){
            $bus->name = $request->name;
            $track->bus_name = $request->name;
            $bus->organization = $request->organization;
            $track->organization = $request->organization;
        }else{
            $bus->name = auth()->user()->organization."-".$request->name;
            $track->bus_name = auth()->user()->organization."-".$request->name;
            $bus->organization = auth()->user()->organization;
            $track->organization = auth()->user()->organization;
        }
        $bus->number = $request->number;
        $bus->start_point = $request->start_point;
        $bus->end_point = $request->end_point;
        $bus->start_time = $request->start_time;
        $bus->end_time = $request->end_time;
        $bus->save();
        $track->save();

        return redirect()->back()->with('msg','Bus has been registered successfully.');
    }

    public function manage()
    {
        if (auth()->user()->type == 'admin'){
            $bus = Bus::all();
            $driver = Driver::all();
            $track = BusTracking::all();
        }else{
            $bus = Bus::all()->where('organization','=',auth()->user()->organization);
            $driver = Driver::all()->where('organization','=',auth()->user()->organization);
            $track= BusTracking::all()->where('organization','=',auth()->user()->organization);
        }
        return view('backend.pages.bus.manage',['buses'=>$bus,'drivers'=>$driver,'tracks'=>$track]);
    }
}
