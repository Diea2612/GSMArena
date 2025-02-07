<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Display the home page data.
     */
    public function index()
    {
        $homeData = Home::first(); // Get the first record from home_page_data

        if (!$homeData) {
            return abort(404, 'Home page data not found.');
        }

        return view('home.index', compact('homeData'));
    }

    /**
     * Update the home page data.
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'featured_devices' => 'required|array',
            'latest_articles'  => 'required|array',
            'top_deals'        => 'required|array',
            'banner_image'     => 'required|string',
        ]);

        $homeData = Home::first();

        if ($homeData) {
            $homeData->update($validatedData);
        } else {
            $homeData = Home::create($validatedData);
        }

        return redirect()->route('home.index')->with('success', 'Home page updated successfully.');
    }
}
