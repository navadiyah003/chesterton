<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceInsight extends Model
{
    protected $table = 'service_insights';

    use HasFactory;
    protected $fillable = [
        'insights_title',
        'insights_content',
        'insights_image',
        'service_id'
    ];
}
