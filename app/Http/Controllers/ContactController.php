<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    //create contact
    function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone'=>'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $contact = new Message();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        if ($contact->save()) {
            $request->session()->put('message', 'Message sent');
            return redirect('contact');
        } else {
            $request->session()->put('message', 'Something went wrong');
            return redirect('contact');
        }
    }

    //show contact
    function view()
    {
        $messages = Message::all();
        return view('messages.viewmessages', ['received' => $messages]);
    }

}
