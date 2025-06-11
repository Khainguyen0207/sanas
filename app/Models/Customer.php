<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'password',
        'email',
        'cash',
        'status',
        'birthday'
    ];

    protected $casts = [
        'birthday' => 'date',
        'cash' => 'integer',
        'status' => 'string',
        'password' => 'hashed'
    ];

    protected $hidden = [
        'password',
    ];

}
