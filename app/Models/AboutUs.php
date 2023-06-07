<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'main_image',
        'short_desc',
        'long_desc',
        'future_image',
        'future_title',
        'future_desc',
        'social_images',
        'social_title',
        'social_desc',
    ];
}
