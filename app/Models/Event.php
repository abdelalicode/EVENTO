<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'date',
        'duration_hours',
        'duration_minutes',
        'acceptance',
        'numplaces_available',
        'user_id',
        'place_id',
        'category_id',
    ];
}
