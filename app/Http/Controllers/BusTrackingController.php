<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\BusTracking;
use App\Models\User;
use Illuminate\Http\Request;

class BusTrackingController extends Controller
{
    public function track($id)
    {
        $bus = Bus::find($id);
        $station = BusRoute::all();
        return view('backend.pages.bus.track',['bus'=>$bus,'stations' => $station]);
    }

    public function store(Request $request)
    {
        $track = new BusTracking();
        $track->bus_name = $request->bus_name;
        if (auth()->user()->type == 'admin'){
            $track->organization = $request->organization;
        }else{
            $track->organization = auth()->user()->organization;
        }
        $track->last_stoppage = $request->last_stoppage;
        $track->next_stoppage = $request->next_name;
        $track->save();

        return redirect()->back()->with('msg'.'Tracking information has been added');
    }
    public function update(Request $request,$bus_name)
    {
        $track = BusTracking::find($bus_name);
        $track->bus_name = $request->bus_name;
        if (auth()->user()->type == 'admin'){
            $track->organization = $request->organization;
        }else{
            $track->organization = auth()->user()->organization;
        }
        $track->last_stoppage = $request->last_stoppage;
        $track->next_stoppage = $request->next_name;
        $track->save();

        return redirect()->back()->with('msg'.'Tracking information has been added');
    }

}
