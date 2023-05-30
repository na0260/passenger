<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function create()
    {
        return view('backend.pages.privacy.create');
    }

    public function update()
    {
        return view('backend.pages.privacy.edit');
    }
}
