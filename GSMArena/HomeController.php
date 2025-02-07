<?php

namespace App\Http\Controllers\GSMArenaController;

use Illuminate\Http\Request;
use App\Models\GSMArena\Home;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $homeData = Home::getHomePageData(); // Safely fetch data
        return view('home.index', compact('homeData')); // For web view

        // Uncomment the following if you need a JSON response:
        // return response()->json($homeData);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'featured_devices' => 'required|array',
            'latest_articles' => 'required|array',
            'top_deals' => 'required|array',
            'banner_image' => 'nullable|url',
        ]);

        // Fetch the first record or create a new one
        $homeData = Home::firstOrNew([]);
        $homeData->fill($validatedData)->save();

        return response()->json($homeData);
    }
}
