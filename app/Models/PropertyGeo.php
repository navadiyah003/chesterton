<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyGeo extends Model
{
    use HasFactory;
    protected $fillable = [
        'ptown',
        'pdistrict',
        'pcounty',
        'pstate',
        'displayStreet',
        'streetKey',
        'geonameid',
        'displayName',
        'shortName',
        'searchKey'
    ];
}
