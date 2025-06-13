<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    protected $fillable = [
        'id',
        'resort_id',
        'name',
        'price',
        'quantity',
        'description',
        'images',
        'room_amenities',
        'number_of_adults',
        'number_of_children',
    ];
}
