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
            'organization' => ['unique:users,organization','required'],
        ],[
            'organization.unique' => 'The organization is already has been registered',
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

    public function status($id)
    {
        $user = User::find($id);
        if ('active' == $user->status){
            $user->status = 'inactive';
        }
        else{
            $user->status = 'active';
        }
        $user->save();

        return redirect()->back()->with('msg','Agent status updated successfully');
    }
}
