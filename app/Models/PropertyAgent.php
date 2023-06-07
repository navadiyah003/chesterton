<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAgent extends Model
{
    use HasFactory;

    protected $fillable = [
        'agent_property_sfid',
        'agent_sfid',
        'agent_name',
        'agent_profilePicture',
        'agent_mobileNumber',
        'agent_email',
        'agent_description'
    ];
}
