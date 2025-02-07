<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coverage; // Import the Coverage model

class CoverageController extends Controller
{
    // Method to get coverage details for a specific country
    public function getCoverageDetails($country)
    {
        $coverage = Coverage::getCoverageDetails($country); // Fetch coverage details from the model

        if (!$coverage) {
            return response()->json(['message' => 'Coverage details not found for this country.'], 404); // Return 404 if not found
        }

        return response()->json($coverage); // Return coverage details as JSON
    }

    // Method to get a list of all countries for the dropdown
    public function getAllCountries()
    {
        $countries = Coverage::getAllCountries(); // Fetch all countries from the model
        return response()->json($countries); // Return the list of countries as JSON
    }
}
