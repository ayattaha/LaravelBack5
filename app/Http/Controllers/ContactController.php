<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactClient;
use App\Models\Client;
use Mail;

class ContactController extends Controller
  // to make client send mail first show the form in the blade file
  
{
    // Show the contact form
    public function showContactForm()
    {
        return view('emails.contactForm');
    }
    
    // Handle form submission and send email
    public function sendEmail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Prepare data for the email
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        // Send email using the ContactClient Mailable class
        Mail::to('admin@example.com')->send(new ContactClient($data));

        // Redirect back to the contact form with success message
        return redirect()->route('showContactForm')->with('success', 'Email sent successfully!');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
