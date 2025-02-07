<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Glossary;


class GlossaryController extends Controller
{
    public function index()
{
    // Fetch all glossary terms
    $terms = Glossary::orderBy('term')->get();
    
    // Group terms by the first letter
    $groupedTerms = $terms->groupBy(function($term) {
        return strtoupper(substr($term->term, 0, 1));
    });
    
    return view('glossary.index', compact('groupedTerms'));
}
public function show($term)
{
    $glossaryTerm = Glossary::where('term', $term)->firstOrFail();
    return view('glossary.show', compact('glossaryTerm'));
}
public function category($letter)
{
    $terms = Glossary::where('term', 'like', $letter . '%')->orderBy('term')->get();
    return view('glossary.category', compact('terms', 'letter'));
}
public function search(Request $request)
{
    $searchTerm = $request->input('search');
    $results = Glossary::where('term', 'like', '%' . $searchTerm . '%')->get();
    
    return view('glossary.search', compact('results'));
}
}
