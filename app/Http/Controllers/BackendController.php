<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BackendController extends Controller
{
    public function index()
    {
        $user = User::all()->count();
        $agent = User::all()->where('type','=','agent')->count();
        return view('backend.index',['user_count'=>$user,'agent_count'=>$agent]);
    }
}
