<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    protected $table = 'home_about';

    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'description',
        'content',
        'link'
    ];
}
