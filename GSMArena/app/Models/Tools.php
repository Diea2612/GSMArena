<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    use HasFactory;

    // Specify the table associated with the model (if it's different from the default plural form of the model name)
    protected $table = 'tools';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'name',        // The name of the tool
        'description', // Description or details about the tool
        'type',        // Type of the tool (e.g., 'compare', 'battery', 'photo')
        'created_at',
        'updated_at',
    ];

    // Optionally, define any relationships or methods related to the Tools model
}
