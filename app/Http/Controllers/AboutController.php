<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function edit($id)
    {
        $about = About::find($id);
        return view('backend.pages.about.edit',['about'=>$about]);
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $about->our_story = $request->our_story;
        $about->services = $request->services;
        $about->technology = $request->technology;
        $about->save();
        return redirect()->back()->with('msg', 'Updated successfully');
    }
}
