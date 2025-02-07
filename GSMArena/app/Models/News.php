<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'news_articles';

    // Specify which attributes should be mass assignable
    protected $fillable = [
        'title',
        'content',
        'author',
        'published_at',
        'image_url',
        'category', // To categorize the news articles
        'is_featured' // To indicate if the news article is featured
    ];

    // Enable timestamps for created_at and updated_at
    public $timestamps = true;

    // Method to get all news articles
    public function getAllNews()
    {
        return $this->all();
    }

    // Method to get news articles by category
    public function getNewsByCategory($category)
    {
        return $this->where('category', $category)->get();
    }

    // Method to search news articles by title or content
    public function searchNews($searchTerm)
    {
        return $this->where('title', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('content', 'LIKE', '%' . $searchTerm . '%')
                    ->get();
    }

    // Method to get featured news articles
    public function getFeaturedNews()
    {
        return $this->where('is_featured', true)->get();
    }
}
