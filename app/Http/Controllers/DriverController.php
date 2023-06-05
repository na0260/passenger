<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;
use App\Models\Bus;

class DriverController extends Controller
{
    public function register()
    {
        $bus = Bus::all();
        return view('backend.pages.bus.register',['buses'=>$bus]);
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
        $driver->name = $request->name;
        $driver->number = $request->number;
        $driver->nid = $request->nid;
        $driver->driving_license = $request->driving_license;
        $driver->address = $request->address;
        $driver->save();

        return redirect()->back()->with('msg','Driver info has been added successfully');
    }
}
