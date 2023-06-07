<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'f_name',
        'l_name',
        'email',
        'phone_number',
        'address',
        'zipcode',
        'contact_help'
    ];
}
