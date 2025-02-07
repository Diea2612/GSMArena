<?php

//namespace App\Http\Controllers\GSMArenaControllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    // Method to get all news articles
    public function index()
    {
        $newsArticles = News::getAllNews();
        return response()->json($newsArticles);
    }

    // Method to get news articles by category
    public function getByCategory($category)
    {
        $newsArticles = News::getNewsByCategory($category);
        return response()->json($newsArticles);
    }

    // Method to search news articles by title or content
    public function search(Request $request)
    {
        $searchTerm = $request->input('searchTerm');
        $newsArticles = News::searchNews($searchTerm);
        return response()->json($newsArticles);
    }

    // Method to get featured news articles
    public function getFeatured()
    {
        $featuredArticles = News::getFeaturedNews();
        return response()->json($featuredArticles);
    }

    // Method to create a new news article
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'published_at' => 'required|date',
            'image_url' => 'nullable|url',
            'category' => 'required|string|max:100',
            'is_featured' => 'boolean',
        ]);

        $newsArticle = News::create($validatedData);
        return response()->json($newsArticle, 201);
    }

    // Method to update an existing news article
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'author' => 'sometimes|required|string|max:255',
            'published_at' => 'sometimes|required|date',
            'image_url' => 'sometimes|nullable|url',
            'category' => 'sometimes|required|string|max:100',
            'is_featured' => 'sometimes|boolean',
        ]);

        $newsArticle = News::find($id);
        if ($newsArticle) {
            $newsArticle->update($validatedData);
            return response()->json($newsArticle);
        }

        return response()->json(['message' => 'News article not found'], 404);
    }

    // Method to delete a news article
    public function destroy($id)
    {
        $newsArticle = News::find($id);
        if ($newsArticle) {
            $newsArticle->delete();
            return response()->json(['message' => 'News article deleted successfully']);
        }

        return response()->json(['message' => 'News article not found'], 404);
    }
}
