<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use App\Models\TipUs;
use Illuminate\Http\Request;

class TipUsController extends Controller
{
    // Show the Tip Us form
    public function create()
    {
        return view('tipus.create');  // Display the form
    }

    // Handle the form submission and store the tip in the database
    public function store(Request $request)
    {
        // Validate the input, including the CAPTCHA
        $request->validate([
            'subject' => 'required|string|max:255',
            'share' => 'required|string',
            'captcha' => ['required', function ($attribute, $value, $fail) {
                if ($value !== '42') {
                    $fail('The CAPTCHA is incorrect.');  // Custom CAPTCHA validation
                }
            }],
        ]);

        // Store the tip in the database
        TipUs::create([
            'subject' => $request->subject,
            'share' => $request->share,
            'captcha' => $request->captcha,
        ]);

        return redirect()->back()->with('success', 'Thank you for your tip!');  // Redirect with success message
    }
}
