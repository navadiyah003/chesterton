<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyContact extends Model
{
    use HasFactory;
    protected $fillable = [
        'contact_property_sfid',
        'contact_officeName',
        'contact_officeLng',
        'contact_officeImg',
        'contact_webTel',
        'contact_shortOfficeName',
        'contact_officeAddress',
        'contact_officeEmail',
        'contact_officeLat',
        'contact_offcode',
        'contact_officeManager',
        'contact_officeID',
        'contact_officeURL',
        'contact_portalEmail',
        'contact_officeManagerID'
    ];
}
