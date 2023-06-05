<?php

namespace App\Http\Controllers;

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
            'total_stoppage' => 'required|numeric',
            'start_point' => 'required',
            'end_point' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);
        $bus = new Bus();
        $bus->name = $request->name;
        if (auth()->user()->type == 'admin'){
            $bus->organization = $request->organization;
        }else{
            $bus->organization = auth()->user()->organization;
        }
        $bus->number = $request->number;
        $bus->total_stoppage= $request->total_stoppage;
        $bus->start_point = $request->start_point;
        $bus->end_point = $request->end_point;
        $bus->start_time = $request->start_time;
        $bus->end_time = $request->end_time;
        $bus->save();

        return redirect()->back()->with('msg','Bus has been registered successfully.');
    }
}
