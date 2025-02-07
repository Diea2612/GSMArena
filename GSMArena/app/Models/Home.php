<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = 'homes';
    protected $primaryKey = 'id';

    protected $fillable = [
        'featured_devices',
        'latest_articles',
        'top_deals',
        'banner_image'
    ];

    protected $casts = [
        'featured_devices' => 'array',
        'latest_articles'  => 'array',
        'top_deals'        => 'array',
    ];

    public $timestamps = true;

    public static function getHomePageData()
    {
        return self::first(); // Fetch the first record
    }
}
