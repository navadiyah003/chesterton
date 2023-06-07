<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $fillable = [
        'stories_title',
        'stories_type',
        'short_description',
        'long_description',
        'phone_number',
        'main_image',
        'extra_image',
    ];
}
