<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use App\Models\Register; // Make sure this path is correct
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('gsmarena.register');
    }

    // Handle registration submissions
    public function register(Request $request)
    {
        // Validate the form inputs
        $validator = Validator::make($request->all(), [
            'nickname' => 'required|string|max:255|unique:gsmarena_registers,nickname',
            'email' => 'required|email|unique:gsmarena_registers,email',
            'password' => 'required|string|min:8|confirmed', // Include password confirmation
        ], [
            // Custom validation messages (optional)
            'nickname.required' => 'Nickname is required.',
            'email.required' => 'Email is required.',
            'password.required' => 'Password is required.',
            'password.confirmed' => 'Password confirmation does not match.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new registration entry
        Register::create([
            'nickname' => $request->input('nickname'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')), // Encrypt password
        ]);

        // Redirect the user to a success page or login page
        return redirect()->route('gsmarena.login')->with('success', 'Registration successful! Please log in.');
    }
}
