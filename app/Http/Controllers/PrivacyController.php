<?php

namespace App\Http\Controllers;

use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function edit($id)
    {
        $privacy                = Privacy::find($id);
        return view('backend.pages.privacy.edit',['privacy'=>$privacy]);
    }

    public function update(Request $request, $id)
    {
        $privacy                = privacy::find($id);
        $privacy->privacy       = $request->privacy;
        $privacy->personally    = $request->personally;
        $privacy->check_out     = $request->check_out;
        $privacy->security      = $request->security;
        $privacy->consent       = $request->consent;
        $privacy->sharing       = $request->sharing;
        $privacy->save();
        return redirect()->back()->with('msg', 'Updated successfully');
    }
}
