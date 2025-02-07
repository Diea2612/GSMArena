<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneFinder;

class PhoneFinderController extends Controller
{
    // Method to get all phones
    public function index()
    {
        $phones = PhoneFinder::getAllPhones();
        return response()->json($phones);
    }

    // Method to search phones by brand
    public function searchByBrand(Request $request)
    {
        $brand = $request->input('brand');
        $phones = PhoneFinder::searchByBrand($brand);
        return response()->json($phones);
    }

    // Method to search phones by model
    public function searchByModel(Request $request)
    {
        $model = $request->input('model');
        $phones = PhoneFinder::searchByModel($model);
        return response()->json($phones);
    }

    // Method to filter phones by release date
    public function filterByReleaseDate(Request $request)
    {
        $date = $request->input('release_date');
        $phones = PhoneFinder::filterByReleaseDate($date);
        return response()->json($phones);
    }

    // Method to search phones by specifications
    public function searchBySpecifications(Request $request)
    {
        $specifications = $request->input('specifications');
        $phones = PhoneFinder::searchBySpecifications($specifications);
        return response()->json($phones);
    }
}
