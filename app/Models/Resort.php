<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{
    protected $table = 'resorts';

    protected $fillable = [
        'id',
        'slug',
        'customer_id',
        'name',
        'address',
        'map',
        'images',
        'option_success',
        'option_error',
        'general_amenities',
    ];

    protected $casts = [

    ];

}
