<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\BusRoute;
use Illuminate\Http\Request;

class BusTrackingController extends Controller
{
    public function track($id)
    {
        $bus = Bus::find($id);
        $station = BusRoute::all();
        return view('backend.pages.bus.track',['bus'=>$bus,'stations' => $station]);
    }

}
