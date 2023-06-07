<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offices extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'main_image',
        'office_address',
        'office_email',
        'facebook',
        'linkedin',
        'instagram',
    ];
}
