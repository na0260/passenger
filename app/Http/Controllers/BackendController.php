<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bus;
use App\Models\BusRoute;

class BackendController extends Controller
{
    public function index()
    {
        $user = User::all();
        $agent = User::all()->where('type','=','agent');
        $bus = Bus::all();
        $route = BusRoute::all();
        return view('backend.index',['users'=>$user,'agents'=>$agent,'buses'=>$bus,'routes'=>$route]);
    }
}
