<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipUs extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = [
        'subject',      // The subject of the tip
        'share',        // The main body or content of the tip
        'captcha'       // The CAPTCHA response (e.g., the number "42")
    ];

    // Optionally, you can add validation logic within the model or in a form request
    public static function validateCaptcha($input)
    {
        // Simple validation for the CAPTCHA where "42" is the expected input
        return $input === '42';
    }
}
