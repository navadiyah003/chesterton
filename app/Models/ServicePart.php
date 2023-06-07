<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePart extends Model
{
    protected $table = 'service_parts';

    use HasFactory;
    protected $fillable = [
        'offer_title',
        'offer_content',
        'service_id'
        ];
}
