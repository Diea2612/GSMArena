<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glossary extends Model
{
    use HasFactory;

    // Specify the table associated with the model (if it's different from the default plural form of the model name)
    protected $table = 'glossary';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'term',        // The glossary term
        'definition',  // Definition or explanation of the term
        'category',    // Optional: Category of the term (e.g., 'network', 'display')
        'created_at',
        'updated_at',
    ];

    // Optionally, define any relationships or methods related to the Glossary model
}
