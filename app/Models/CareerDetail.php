<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'career_detail_title',
        'career_detail_type',
        'location',
        'description',
        'main_duties',
        'attributes',
        'benefits',
        'company_profile'
    ];
}
