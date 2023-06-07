<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeMainSlide extends Model
{
    protected $table = 'home_main_slider';

    use HasFactory;
    protected $fillable = [
        'path',
    ];
}
