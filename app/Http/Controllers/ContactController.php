<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Session;

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

    //delete contact
    function delete($id)  
    {
        $message = Message::find($id);
        if ($message->delete()) {
            Session::put('message', 'Message deleted');
            return redirect('viewmessages');
        } else {
            Session::put('message', 'Something went wrong');
            return redirect('viewmessages');
        }
       
    }

}
