<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use App\Models\Compare; // Assuming you have a Brand model
use Illuminate\Http\Request;

class CompareController extends Controller
{
    public function index()
{
    // Fetch the list of available phones from the database or API
    $phones = Phone::all(); // Assuming a Phone model is available
    
    return view('compare.index', compact('phones'));
}
public function compare(Request $request)
{
    // Get the selected phone IDs
    $phoneIds = $request->input('phones'); // Assuming an array of 3 phone IDs

    // Fetch the phone details from the database or API
    $phones = Phone::whereIn('id', $phoneIds)->get();
    
    // Process the data (e.g., extract specific attributes for comparison)
    $comparisonData = $this->getComparisonData($phones);
    
    return view('compare.result', compact('comparisonData', 'phones'));
}
private function getComparisonData($phones)
{
    $comparison = [];
    
    foreach ($phones as $phone) {
        $comparison[$phone->id] = [
            'network' => [
                'technology' => $phone->network_technology,
                '2g_bands' => $phone->bands_2g,
                '3g_bands' => $phone->bands_3g,
                '4g_bands' => $phone->bands_4g,
                '5g_bands' => $phone->bands_5g,
                'speed' => $phone->speed,
            ],
            'body' => [
                'dimensions' => $phone->dimensions,
                'weight' => $phone->weight,
                'build' => $phone->build,
                'sim' => $phone->sim,
            ],
            'display' => [
                'type' => $phone->display_type,
                'size' => $phone->display_size,
                'resolution' => $phone->display_resolution,
                'protection' => $phone->display_protection,
            ],
            'platform' => [
                'os' => $phone->os,
                'chipset' => $phone->chipset,
                'cpu' => $phone->cpu,
                'gpu' => $phone->gpu,
            ],
            'camera' => [
                'main_camera' => $phone->main_camera,
                'selfie_camera' => $phone->selfie_camera,
                'features' => $phone->camera_features,
            ],
            'battery' => [
                'type' => $phone->battery_type,
                'charging' => $phone->charging,
            ],
            'price' => $phone->price,
        ];
    }

    return $comparison;
}
public function show($id)
{
    $phone = Phone::findOrFail($id);
    return view('compare.show', compact('phone'));
}
public function category($category)
{
    $phones = Phone::where('category', $category)->get();
    return view('compare.category', compact('phones'));
}

}
