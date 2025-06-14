<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Room extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
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

    protected function casts(): array
    {
        return [
            'room_amenities' => 'array',
        ];
    }

    public function resort():belongsTo {
        return $this->belongsTo(Resort::class, 'resort_id');
    }
}
