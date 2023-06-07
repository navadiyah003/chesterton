<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSlide extends Model
{
    protected $table = 'service_main_slides';

    use HasFactory;
    protected $fillable = [
        'titles',
        'main_image',
        'description',
        'content',
        'image'
    ];
}
