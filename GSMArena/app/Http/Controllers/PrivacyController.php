<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privacy;


class PrivacyController extends Controller
{
    // Function to show the main Privacy Policy page
    public function index()
    {
        return view('privacy.index'); // Main privacy policy content
    }

    // Function to display the section on data processing
    public function categoriesOfData()
    {
        return view('privacy.categories'); // Categories of personal data processed by the website
    }

    // Function to show automatically collected information (IP address, cookies)
    public function automaticallyCollectedInfo()
    {
        return view('privacy.automatically_collected'); // Automatically collected data info
    }

    // Function to display the Cookie Policy
    public function cookiePolicy()
    {
        return view('privacy.cookie_policy'); // Cookie policy and information
    }

    // Function to handle rights of the users under GDPR
    public function userRights()
    {
        return view('privacy.user_rights'); // User rights under GDPR
    }

    // Function for security policies
    public function dataSecurity()
    {
        return view('privacy.data_security'); // Data security measures
    }

    // Function for updates to the privacy policy
    public function updates()
    {
        return view('privacy.updates'); // Display updates to privacy policy
    }
}
