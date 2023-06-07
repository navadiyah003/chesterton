<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceValuation extends Model
{
    protected $table = 'service_valuation';

    use HasFactory;
    protected $fillable = [
        'valution_image',
        'valution_content',
        'service_id'
    ];
}
