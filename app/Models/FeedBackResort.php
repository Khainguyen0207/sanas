<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedBackResort extends Model
{
    protected $table = 'feedback_resorts';
    protected $fillable = [
        'id',
        'customer_id',
        'resort_id',
        'rate',
        'comment',
    ];
}
