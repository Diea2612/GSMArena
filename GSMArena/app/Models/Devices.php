<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'devices';

    // Specify which attributes should be mass assignable
    protected $fillable = [
        'name',
        'brand',
        'model_number',
        'release_date',
        'specifications',
        'price',
        'region'
    ];

    // Enable timestamps for created_at and updated_at
    public $timestamps = true;

    // Method to get devices by region
    public function getDevicesByRegion($region)
    {
        return $this->where('region', $region)->get();
    }

    // Method to search devices by name
    public function searchDevices($searchTerm)
    {
        return $this->where('name', 'LIKE', '%' . $searchTerm . '%')->get();
    }

    // Method to get all devices
    public function getAllDevices()
    {
        return $this->all();
    }

    //   public static function getAllDevices()
    // {
    //     // Implement logic to fetch all devices
    //     return self::all();
    // }
}
