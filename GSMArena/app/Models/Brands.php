<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'brands';

    // Specify which attributes should be mass assignable
    protected $fillable = ['name', 'logo', 'country'];

    // Enable timestamps for created_at and updated_at
    public $timestamps = true;

    // Define a relationship with the Phone model
    public function phones()
    {
        return $this->hasMany('App\Models\Phone');
    }
}
