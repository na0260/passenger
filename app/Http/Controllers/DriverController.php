<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function register()
    {
        return view('backend.pages.bus.register');
    }
}
