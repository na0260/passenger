<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function create()
    {
        return view('backend.pages.terms.create');
    }

    public function update()
    {
        return view('backend.pages.terms.edit');
    }
}
