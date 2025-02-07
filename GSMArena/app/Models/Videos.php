<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'videos';

    // Specify which attributes should be mass assignable
    protected $fillable = [
        'title',        // Title of the video
        'description',  // Description of the video
        'file_path',    // Path to the video file
        'duration',     // Duration of the video in seconds
        'user_id',      // Foreign key for the user who uploaded the video
        'created_at',
        'updated_at'
    ];

    // Enable timestamps for created_at and updated_at
    public $timestamps = true;

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    // Method to get all videos
    public function getAllVideos()
    {
        return $this->all();
    }

    // Method to get videos by a specific user
    public function getVideosByUser($userId)
    {
        return $this->where('user_id', $userId)->get();
    }

    // Method to search videos by title
    public function searchVideosByTitle($searchTerm)
    {
        return $this->where('title', 'LIKE', '%' . $searchTerm . '%')->get();
    }

    // Method to get videos by duration range
    public function getVideosByDuration($minDuration, $maxDuration)
    {
        return $this->whereBetween('duration', [$minDuration, $maxDuration])->get();
    }
}
