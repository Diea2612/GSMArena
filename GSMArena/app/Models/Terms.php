<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terms extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'terms';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'title',
        'content',  // The main text or content of the terms and conditions
        'type',     // To distinguish between different types of terms if needed (e.g., 'privacy', 'terms', 'disclaimer')
        'created_at',
        'updated_at',
    ];

    // Optionally, define any relationships or methods related to the Terms model
}
