<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\BusRoute;
use App\Models\User;
use Illuminate\Http\Request;

class BusTrackingController extends Controller
{
    public function track()
    {
        if (auth()->user()->type == 'admin'){
            $bus = Bus::all();
        }else{
            $bus = Bus::all()->where('organization','=',auth()->user()->organization);
        }
        $station = BusRoute::all();
        $user = User::all()->where('type','=','agent');
        return view('backend.pages.bus.track',['buses'=>$bus,'users' => $user,'stations' => $station]);
    }

}
