<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    // Specify the table associated with the model (if it's different from the default plural form of the model name)
    protected $table = 'faqs';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'question',    // The FAQ question
        'answer',      // The answer to the FAQ question
        'created_at',
        'updated_at',
    ];

    // Optionally, define any relationships or methods related to the FAQ model
}
