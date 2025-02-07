<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    // Define the fillable attributes based on the form inputs
    protected $fillable = [
        'nickname',           // The user's chosen nickname
        'email',              // The user's email address
        'password',           // The user's hashed password
        'email_consent',      // Consent for storing email, nickname, and password
        'age_consent',        // Confirmation that the user is at least 16 years old
    ];

    // Ensure passwords are hashed when stored
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Hash the password before saving
            $model->password = bcrypt($model->password);
        });
    }
}