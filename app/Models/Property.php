<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'sfid',
        'region',
        'country',
        'city',
        'areaLocationTitle',
        'areaLocationDescription',
        'locationMapLat',
        'locationMapLon',
        'propertyLat',
        'propertyLon',
        'propertyType',
        'featured',
        'saleRentType',
        'type',
        'rentalType',
        'bedrooms',
        'bathrooms',
        'diningRooms',
        'livingRooms',
        'unit',
        'unitStreetName',
        'price',
        'currency',
        'askingPriceFlag',
        'dateTimeAdded',
        'uniqueIdentifier',
        'propertyName',
        'shortDescription',
        'longDescription',
        'images',
        'coveredArea',
        'measureUnit',
        'lifeStyle',
        'amenities',
        'dataSource',
    ];
}
