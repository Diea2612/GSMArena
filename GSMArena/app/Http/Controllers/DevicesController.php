<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devices; // Import the Devices model

class DevicesController extends Controller
{
    // Method to get devices by region
    public function getDevicesByRegion($region)
    {
        $devices = Devices::getDevicesByRegion($region); // Fetch devices from the model

        if ($devices->isEmpty()) {
            return response()->json(['message' => 'No devices found for this region.'], 404); // Return 404 if no devices found
        }

        return response()->json($devices); // Return devices as JSON
    }

    // Method to search devices by name
    public function searchDevices(Request $request)
    {
        $searchTerm = $request->input('searchTerm'); // Get the search term from the request
        $devices = Devices::searchDevices($searchTerm); // Fetch devices matching the search term

        if ($devices->isEmpty()) {
            return response()->json(['message' => 'No devices found matching your search.'], 404); // Return 404 if no devices found
        }

        return response()->json($devices); // Return devices as JSON
    }

    // Method to get all devices
    public function getAllDevices()
    {
        $devices = Devices::getAllDevices(); // Fetch all devices from the model
        return response()->json($devices); // Return all devices as JSON
    }



     public function deviceCount()
    {
        // Get the count of devices
        $deviceCount = Device::count();

        // Pass the count to the view
        return view('devices.index', compact('deviceCount'));
    }
}
