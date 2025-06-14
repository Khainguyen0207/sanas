<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Resort extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
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
        'images' => 'array',
        'option_success' => 'array',
        'option_error' => 'array',
        'general_amenities' => 'array',
    ];
    public function customer(): belongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function rooms(): hasMany {
        return $this->hasMany(Room::class, 'resort_id');
    }
}
