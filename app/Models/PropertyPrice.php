<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPrice extends Model
{
    use HasFactory;
    protected $fillable = [
        'price_property_sfid',
        'price_property_price',
        'price_property_price_gbp',
        'price_property_currency_symbol',
        'price_displaySoldDetails',
        'price_sale_price_gbp',
        'price_displayPrice',
        'price_displayQualifier',
        'price_currency',
        'price_property_currency',
        'price_sale_price',
        'price_trxDate'
    ];
}
