<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Bus;

class DriverController extends Controller
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
        $request->validate([
            'bus_name'=>'required',
            'name'=>'required',
            'number'=>'required|unique:drivers,number',
            'nid'=>'required|unique:drivers,nid',
            'driving_license'=>'required|unique:drivers,driving_license',
        ]);
        $driver = new Driver();
        $driver->bus_name = $request->bus_name;
        if (auth()->user()->type == 'admin'){
            $driver->organization = $request->organization;
        }else{
            $driver->organization = auth()->user()->organization;
        }
        $driver->name = $request->name;
        $driver->number = $request->number;
        $driver->nid = $request->nid;
        $driver->driving_license = $request->driving_license;
        $driver->address = $request->address;
        $driver->save();

        return redirect()->back()->with('msg','Driver info has been added successfully');
    }
}
