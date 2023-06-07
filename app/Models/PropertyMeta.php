<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyMeta extends Model
{
    use HasFactory;
    protected $fillable = [
        'strapline',
        'leaseExpiresTerm',
        'leaseExpiresDate',
        'shortLease',
        'tenure',
        'newDate',
        'propertyStatus',
        'negQuote',
        'sqm',
        'sqft',
        'description',
        'summary',
        'decorationStr',
        'furnishedStr',
        'situation',
        'propertyDetails',
        'propertySummary',
        'propertyShortSummary',
        'buyType',
        'pool',
        'rooms',
        'canonical',
        'orlist',
        'metaDescription',
        'searchKeywords',
        'allPropertyFeatures'
    ];
}
