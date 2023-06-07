<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceConsultants extends Model
{
    protected $table = 'consultants';

    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'name'
    ];
}
