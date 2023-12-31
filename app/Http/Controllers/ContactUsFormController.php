<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;
class ContactUsFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request)
    {
        return view('contacts');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required'
        ]);
        //  Store data in database
        Comment::create($request->all());
        //  Send mail to admin
        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ), function($message) use ($request){
            $message->to($request->email);
            $message->from('admin@elriyadhtransport.com', 'Admin')->subject($request->get('subject'));
        });
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
