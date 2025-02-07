<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'featured_articles';

    // Specify which attributes should be mass assignable
    protected $fillable = [
        'title',
        'content',
        'author',
        'published_at',
        'image_url'
    ];

    // Enable timestamps for created_at and updated_at
    public $timestamps = true;

    // Method to get all featured articles
    public function getAllFeaturedArticles()
    {
        return $this->all();
    }

    // Method to get featured articles by author
    public function getFeaturedByAuthor($author)
    {
        return $this->where('author', $author)->get();
    }

    // Method to get featured articles published after a certain date
    public function getFeaturedAfterDate($date)
    {
        return $this->where('published_at', '>', $date)->get();
    }
}
