<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumorMil extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'rumors';

    // Specify which attributes should be mass assignable
    protected $fillable = [
        'phone_id', // Foreign key for the phone related to the rumor
        'title',
        'content',
        'source', // Source of the rumor
        'status', // Status of the rumor (e.g., 'confirmed', 'unconfirmed', 'speculative')
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

    // Define the relationship with the Photo model
    public function photos()
    {
        return $this->hasMany('App\Models\Photo', 'rumor_id');
    }

    // Method to get all rumors
    public function getAllRumors()
    {
        return $this->all();
    }

    // Method to get rumors by phone
    public function getRumorsByPhone($phoneId)
    {
        return $this->where('phone_id', $phoneId)->get();
    }

    // Method to search rumors by title
    public function searchRumorsByTitle($searchTerm)
    {
        return $this->where('title', 'LIKE', '%' . $searchTerm . '%')->get();
    }

    // Method to filter rumors by status
    public function getRumorsByStatus($status)
    {
        return $this->where('status', $status)->get();
    }

    // Method to get all photos associated with a rumor
    public function getPhotos()
    {
        return $this->photos()->get();
    }
}
