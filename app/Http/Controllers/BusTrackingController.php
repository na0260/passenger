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
    public function update(Request $request,$id)
    {
        $bus = Bus::find($id);
        $track = BusTracking::where('bus_name',$bus->name)->first();
        $track->last_stoppage = $request->last_stoppage;
        $track->next_stoppage = $request->next_stoppage;
        $track->save();

        return redirect()->back()->with('msg'.'Tracking information has been added');
    }

}
