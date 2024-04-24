<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactFormSubmitted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        // Store the contact message in the database
        ContactMessage::create($request->all());

        // Send email notification
        Mail::to('Bookerttransportllc@gmail.com')->send(new ContactFormSubmitted($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
