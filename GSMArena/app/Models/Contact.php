<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'contacts';

    // Specify which attributes should be mass assignable
    protected $fillable = ['name', 'email', 'message'];

    // Enable timestamps for created_at and updated_at
    public $timestamps = true;

    // Method to get the Tip Us form link
    public function getTipUsFormLink()
    {
        return route('tip.us.form'); // Assuming you have a route named 'tip.us.form'
    }

    // Method to get the support email
    public function getSupportEmail()
    {
        return 'support@gsmarena.com';
    }

    // Method to get the advertising link
    public function getAdvertisingLink()
    {
        return 'https://www.gsma.com/advertising'; // Replace with the actual advertising link
    }
}
