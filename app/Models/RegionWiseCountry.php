<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionWiseCountry extends Model
{
    use HasFactory;

    protected $fillable = [
        'asia',
        'caribbean',
        'europe',
        'mena'
    ];
}
