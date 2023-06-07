<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalNetworkIntegrated extends Model
{
    use HasFactory;

    protected $fillable = [
        'global_network_country',
        'global_network_integrate_title',
        'global_network_integrate_description',
        'global_network_integrate_image',
    ];
}
