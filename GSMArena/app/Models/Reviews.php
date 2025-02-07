<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'reviews';

    // Specify which attributes should be mass assignable
    protected $fillable = [
        'phone_id', // Foreign key for the phone being reviewed
        'user_id',  // Foreign key for the user who wrote the review
        'title',
        'content',
        'rating',   // Rating out of 10 or 5
        'created_at',
        'updated_at'
    ];

    // Enable timestamps for created_at and updated_at
    public $timestamps = true;

    // Define the relationship with the Phone model
    public function phone()
    {
        return $this->belongsTo('App\Models\Phone', 'phone_id');
    }

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    // Method to get all reviews for a specific phone
    public function getReviewsByPhone($phoneId)
    {
        return $this->where('phone_id', $phoneId)->get();
    }

    // Method to get all reviews by a specific user
    public function getReviewsByUser($userId)
    {
        return $this->where('user_id', $userId)->get();
    }

    // Method to search reviews by title
    public function searchReviewsByTitle($searchTerm)
    {
        return $this->where('title', 'LIKE', '%' . $searchTerm . '%')->get();
    }

    // Method to calculate the average rating for a specific phone
    public function averageRating($phoneId)
    {
        return $this->where('phone_id', $phoneId)->avg('rating');
    }
}
