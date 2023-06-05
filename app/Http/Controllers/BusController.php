<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    public function register()
    {
        return view('backend.pages.bus.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numer'
        ]);
        $bus = new Bus();
        $bus->name = $request->name;
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
