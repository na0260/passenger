<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function create()
    {
        return view('backend.pages.about.create');
    }

    public function update()
    {
        return view('backend.pages.about.edit');
    }
}
