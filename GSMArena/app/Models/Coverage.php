<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coverage extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'coverages';

    // Specify which attributes should be mass assignable
    protected $fillable = ['country', 'coverage_details'];

    // Enable timestamps for created_at and updated_at
    public $timestamps = true;

    // Method to get coverage details for a specific country
    public function getCoverageDetails($country)
    {
        // Assuming you have a method to fetch coverage details from the database
        return $this->where('country', $country)->first();
    }

    // Method to get a list of all countries for the dropdown
    public function getAllCountries()
    {
        // Assuming you have a countries table or a predefined list
        return ['USA', 'Canada', 'UK', 'Germany', 'France']; // Example list
    }
}
