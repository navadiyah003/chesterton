<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalNetwork extends Model
{
    use HasFactory;
    protected $fillable = [
        'banner_image',
        'banner_title',
        'short_desc',
        'long_desc',
        'web_link_content',
        'web_link',
        'office_address',
        'office_phone',
        'office_email',
        'popular_city_content',
        'popular_city_image',
        'image_slide',
    ];
}