<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumorMill;

class RumorMillController extends Controller
{
    // Method to get all rumors
    public function index()
    {
        $rumors = RumorMill::getAllRumors();
        return response()->json($rumors);
    }

    // Method to get rumors by phone
    public function getRumorsByPhone($phoneId)
    {
        $rumors = RumorMill::getRumorsByPhone($phoneId);
        return response()->json($rumors);
    }

    // Method to search rumors by title
    public function searchRumorsByTitle(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $rumors = RumorMill::searchRumorsByTitle($searchTerm);
        return response()->json($rumors);
    }

    // Method to filter rumors by status
    public function getRumorsByStatus($status)
    {
        $rumors = RumorMill::getRumorsByStatus($status);
        return response()->json($rumors);
    }

    // Method to create a new rumor
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phone_id' => 'required|exists:phones,id',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'source' => 'required|string|max:255',
            'status' => 'required|string|in:confirmed,unconfirmed,speculative',
        ]);

        $rumor = RumorMill::create($validatedData);
        return response()->json($rumor, 201);
    }

    // Method to update an existing rumor
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'source' => 'sometimes|required|string|max:255',
            'status' => 'sometimes|required|string|in:confirmed,unconfirmed,speculative',
        ]);

        $rumor = RumorMill::find($id);
        if ($rumor) {
            $rumor->update($validatedData);
            return response()->json($rumor);
        }

        return response()->json(['message' => 'Rumor not found'], 404);
    }

    // Method to delete a rumor
    public function destroy($id)
    {
        $rumor = RumorMill::find($id);
        if ($rumor) {
            $rumor->delete();
            return response()->json(['message' => 'Rumor deleted successfully']);
        }

        return response()->json(['message' => 'Rumor not found'], 404);
    }
}
