<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'devices';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'name',
        'model',
        'status',         // e.g., 'announced', 'released'
        'release_date',   // Date when the device is expected to release
        'details'         // Additional details or specifications
    ];

    // Define any relationships or methods related to the Device model
}
