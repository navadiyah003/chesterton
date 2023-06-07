<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceExplore extends Model
{
    protected $table = 'service_explore';

    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'link',
        'service_id'
    ];
}
