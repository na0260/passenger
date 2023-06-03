<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'mail' => 'email|required',
            'phone' => 'numeric|digits:11|required',
            'desc' => 'required'
        ],[
            'mail.email' => 'Please enter a valid mail. (Ex. example@mail.com)',
            'phone.numeric' => 'Please enter a valid phone number. (Ex. 01XXXXXXXXX)',
            'phone.digits' => 'Opps!!! You missed out some digits, Please check again. (Ex. 01XXXXXXXXX)',
            'desc.required' => 'Please enter any message.'
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->mail = $request->mail;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->desc = $request->desc;
        $contact->save();
        return redirect()->back();
    }

    public function manage()
    {
        $contact = Contact::all();
        return view('backend.pages.contact-us.manage',['contacts'=>$contact]);
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('msg','Agent request has been removed successfully');
    }
}
