<?php

namespace App\Http\Controllers;

use App\Models\Terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{
    public function edit($id)
    {
        $terms             = Terms::find($id);
        return view('backend.pages.terms.edit',['terms'=>$terms]);
    }

    public function update(Request $request, $id)
    {
        $terms              = Terms::find($id);
        $terms->important   = $request->important;
        $terms->policy      = $request->policy;
        $terms->scope       = $request->scope;
        $terms->disclaimer  = $request->disclaimer;
        $terms->save();
        return redirect()->back()->with('msg', 'Updated successfully');
    }
}
