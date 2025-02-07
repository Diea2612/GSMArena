<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use App\Models\Brand; // Assuming you have a Brand model
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    // Method to display a list of all brands
    public function index()
    {
        $brands = Brand::all(); // Retrieve all brands from the database
        return response()->json($brands); // Return brands as JSON
    }

    // Method to show a specific brand by ID
    public function show($id)
    {
        $brand = Brand::find($id); // Find the brand by ID
        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404); // Return 404 if not found
        }
        return response()->json($brand); // Return the brand as JSON
    }

    // Method to create a new brand
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Validate the name
            'logo' => 'nullable|string|max:255', // Validate the logo URL (optional)
        ]);

        $brand = Brand::create($request->all()); // Create a new brand
        return response()->json($brand, 201); // Return the created brand with a 201 status
    }

    // Method to update an existing brand
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id); // Find the brand by ID
        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404); // Return 404 if not found
        }

        $request->validate([
            'name' => 'sometimes|required|string|max:255', // Validate the name if present
            'logo' => 'sometimes|nullable|string|max:255', // Validate the logo URL if present
        ]);

        $brand->update($request->all()); // Update the brand
        return response()->json($brand); // Return the updated brand as JSON
    }

    // Method to delete a brand
    public function destroy($id)
    {
        $brand = Brand::find($id); // Find the brand by ID
        if (!$brand) {
            return response()->json(['message' => 'Brand not found'], 404); // Return 404 if not found
        }

        $brand->delete(); // Delete the brand
        return response()->json(['message' => 'Brand deleted successfully']); // Return success message
    }
    
        public function getDeviceCount()
    {
        $count = Device::count(); // Count all devices
        return response()->json(['count' => $count]);
    }

}
