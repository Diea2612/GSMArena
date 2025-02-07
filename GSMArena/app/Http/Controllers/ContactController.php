<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Import the Contact model
use Illuminate\Support\Facades\Mail; // For sending emails
use App\Mail\ContactFormSubmitted; // Assuming you have a Mailable for contact form submissions

class ContactController extends Controller
{
    // Method to show the contact form
    public function showContactForm()
    {
        return view('contact.form'); // Return the view for the contact form
    }

    // Method to handle form submission
    public function submitContactForm(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Create a new contact entry in the database
        $contact = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Send a notification email (optional)
        Mail::to('support@gsmarena.com')->send(new ContactFormSubmitted($contact));

        // Return a response indicating success
        return response()->json(['message' => 'Your message has been sent successfully!'], 200);
    }

    // Method to get the Tip Us form link
    public function getTipUsFormLink()
    {
        return Contact::getTipUsFormLink(); // Call the method from the Contact model
    }

    // Method to get the support email
    public function getSupportEmail()
    {
        return Contact::getSupportEmail(); // Call the method from the Contact model
    }

    // Method to get the advertising link
    public function getAdvertisingLink()
    {
        return Contact::getAdvertisingLink(); // Call the method from the Contact model
    }
}
