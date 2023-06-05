<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;

class BusRouteController extends Controller
{
    public function register()
    {
        if (auth()->user()->type == 'admin'){
            $bus = Bus::all();
        }else{
            $bus = Bus::all()->where('organization','=',auth()->user()->organization);
        }
        return view('backend.pages.bus.register',['buses'=>$bus]);
    }

    public function store($re)
    {

    }
}
