<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerDescriptions extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'bg_image',
        'sub_title',
        'sub_description',
        'images',
        'opp_title',
        'opp_description',
        'contact_title'
    ];
}
