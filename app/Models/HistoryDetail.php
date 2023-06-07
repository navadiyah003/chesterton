<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'year',
        'history_image',
        'history_title',
        'history_desc',
    ];
}
