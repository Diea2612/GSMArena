<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deals extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'deals';

    // Specify which attributes should be mass assignable
    protected $fillable = ['region', 'deal_title', 'deal_description', 'price', 'valid_until'];

    // Enable timestamps for created_at and updated_at
    public $timestamps = true;

    // Method to get deals by region
    public function getDealsByRegion($region)
    {
        return $this->where('region', $region)->get();
    }

    // Method to get all available regions for the dropdown
    public function getAvailableRegions()
    {
        return [
            'United States',
            'United Kingdom',
            'Europe',
            'International',
            'Canada'
        ];
    }
}
