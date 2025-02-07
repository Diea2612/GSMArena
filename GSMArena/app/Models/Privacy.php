<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    use HasFactory;

    // Specify the table associated with the model (if it's different from the default plural form of the model name)
    protected $table = 'privacy';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'title',       // Title of the privacy policy
        'content',     // Content of the privacy policy
        'created_at',
        'updated_at',
    ];

    // Optionally, define any relationships or methods related to the Privacy model
}
