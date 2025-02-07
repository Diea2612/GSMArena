<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneFinder extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'phones';

    // Specify which attributes should be mass assignable
    protected $fillable = [
        'brand',
        'model',
        'release_date',
        'specifications', // JSON or string to store specifications
        'price',
        'image_url',
        'features' // Optional: to store additional features
    ];

    // Enable timestamps for created_at and updated_at
    public $timestamps = true;

    // Method to search phones by brand
    public function searchByBrand($brand)
    {
        return $this->where('brand', 'LIKE', '%' . $brand . '%')->get();
    }

    // Method to search phones by model
    public function searchByModel($model)
    {
        return $this->where('model', 'LIKE', '%' . $model . '%')->get();
    }

    // Method to filter phones by release date
    public function filterByReleaseDate($date)
    {
        return $this->where('release_date', '>=', $date)->get();
    }

    // Method to search phones by specifications
    public function searchBySpecifications($specifications)
    {
        return $this->where('specifications', 'LIKE', '%' . $specifications . '%')->get();
    }

    // Method to get all phones
    public function getAllPhones()
    {
        return $this->all();
    }
}
