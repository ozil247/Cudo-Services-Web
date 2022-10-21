<?php

namespace App\Http\Controllers;

use App\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
   {
       return view('contact');
   }

    public function contactMessage(Request $request)
    {
        $contact = new Contacts();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->subject = $request->subject;
        $contact->save();
        return back()->with(['success'=>'Message sent']);
    }

    public function allContactMessages()
    {
        $feedbacks = Contacts::latest()->get();
        return view('all_contact_messages',compact('feedbacks'));
    }
}
