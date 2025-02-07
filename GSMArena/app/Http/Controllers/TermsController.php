<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terms;


class TermsController extends Controller
{
    public function index()
    {
        return view('terms.terms');
    }
}
