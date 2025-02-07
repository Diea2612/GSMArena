<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'photos';

    // Specify which attributes should be mass assignable
    protected $fillable = [
        'title',
        'description',
        'file_path',
        'user_id', // Foreign key for user
        'created_at',
        'updated_at'
    ];

    // Enable timestamps for created_at and updated_at
    public $timestamps = true;

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Define the relationship with the Tag model
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'image_tag', 'image_id', 'tag_id');
    }

    // Method to get all photos
    public function getAllPhotos()
    {
        return $this->all();
    }

    // Method to get photos by user
    public function getPhotosByUser($userId)
    {
        return $this->where('user_id', $userId)->get();
    }

    // Method to search photos by title
    public function searchPhotosByTitle($searchTerm)
    {
        return $this->where('title', 'LIKE', '%' . $searchTerm . '%')->get();
    }

    // Method to get photos with specific tags
    public function getPhotosByTag($tagId)
    {
        return $this->whereHas('tags', function ($query) use ($tagId) {
            $query->where('tag_id', $tagId);
        })->get();
    }
}
