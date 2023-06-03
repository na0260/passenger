<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AgentController extends Controller
{
    public function registration()
    {
        return view('backend.pages.agent.registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => 'numeric|digits:11|required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->organization = $request->organization;
        $user->password = Hash::make('Agent123');
        $user->type = 'agent';
        $user->save();

        return redirect()->back()->with('msg', 'New agent added successfully');
    }
    public function manage()
    {
        $user = User::all()->where('type','=','agent');
        return view('backend.pages.agent.manage',['users'=>$user]);
    }
}
