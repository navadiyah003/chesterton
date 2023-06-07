<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'address_property_sfid',
        'address_country',
        'address_lng',
        'address_town',
        'address_city',
        'address_countrycode',
        'address_county',
        'address_sectorName',
        'address_cTaxYear',
        'address_os_town_city',
        'address_propertyReference',
        'address_council',
        'address_displayAddress',
        'address_street',
        'address_outcode',
        'address_cTaxPrice',
        'address_full_postcode',
        'address_state',
        'address_outcodeName',
        'address_village',
        'address_cTaxBand',
        'address_sector',
        'address_lat'
    ];
}
