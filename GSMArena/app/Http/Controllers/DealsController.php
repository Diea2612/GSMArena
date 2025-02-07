<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deals; // Import the Deals model

class DealsController extends Controller
{
    // Method to get deals by region
    public function getDealsByRegion($region)
    {
        $deals = Deals::getDealsByRegion($region); // Fetch deals from the model

        if ($deals->isEmpty()) {
            return response()->json(['message' => 'No deals found for this region.'], 404); // Return 404 if no deals found
        }

        return response()->json($deals); // Return deals as JSON
    }

    // Method to get a list of all available regions for the dropdown
    public function getAvailableRegions()
    {
        $regions = Deals::getAvailableRegions(); // Fetch all available regions from the model
        return response()->json($regions); // Return the list of regions as JSON
    }
}
