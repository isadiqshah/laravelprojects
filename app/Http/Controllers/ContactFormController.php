<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageReceived;

class ContactFormController extends Controller
{
    public function inbox()
    {
        return view('backend.inbox.messages');
    }

    public function contact_form_submit(Request $request)
    {
        // Validate the form fields
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('hello@example.com')->send(new ContactMessageReceived($request));

        return redirect()->back()->with('success', "Your Message Sent Successfully.!! Thanks for Contacting Us. We will Reply Very Soon.!");
    }

}
