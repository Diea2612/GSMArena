<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tools;


class ToolsController extends Controller
{
    public function compare(Request $request)
{
    // Fetch devices based on IDs from request
    $devices = Device::whereIn('id', $request->input('device_ids'))->get();
    
    // Return comparison view with the selected devices
    return view('tools.compare', compact('devices'));
}
public function photoVideoCompare(Request $request)
{
    // Fetch camera performance comparison data (photos, videos) for selected devices
    $devices = Device::whereIn('id', $request->input('device_ids'))->with('photos', 'videos')->get();

    return view('tools.photo_video_compare', compact('devices'));
}
public function batteryLifeTable()
{
    // Fetch battery life data from the database
    $batteryTests = BatteryTest::all();
    
    return view('tools.battery_life_table', compact('batteryTests'));
}
public function labs()
{
    // Return a view that explains the testing process for various device features
    return view('tools.labs');
}
public function coverage()
{
    // Fetch coverage data from the database
    $coverageMap = CoverageMap::all();
    
    return view('tools.coverage', compact('coverageMap'));
}
public function faq()
{
    // Fetch FAQs from the database
    $faqs = FAQ::all();
    
    return view('tools.faq', compact('faqs'));
}
public function glossary()
{
    // Redirect to the GlossaryController
    return redirect()->action([GlossaryController::class, 'index']);
}

}
