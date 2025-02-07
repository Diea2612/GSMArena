<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GSMArena\Featured;

class FeaturedController extends Controller
{
    // Method to get all featured articles
    public function index()
    {
        $featuredArticles = Featured::getAllFeaturedArticles();
        return response()->json($featuredArticles);
    }

    // Method to create a new featured article
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'published_at' => 'required|date',
            'image_url' => 'nullable|url',
        ]);

        $featuredArticle = Featured::create($validatedData);
        return response()->json($featuredArticle, 201);
    }

    // Method to get featured articles by author
    public function getByAuthor($author)
    {
        $featuredArticles = Featured::getFeaturedByAuthor($author);
        return response()->json($featuredArticles);
    }

    // Method to get featured articles published after a certain date
    public function getAfterDate($date)
    {
        $featuredArticles = Featured::getFeaturedAfterDate($date);
        return response()->json($featuredArticles);
    }
}
