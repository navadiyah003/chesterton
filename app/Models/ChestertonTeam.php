<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChestertonTeam extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_name',
        'member_position',
        'member_desc',
        'member_image',
    ];
}
