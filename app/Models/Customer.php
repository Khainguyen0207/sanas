<?php

namespace App\Models;

use App\Enums\CustomerStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'id',
        'name',
        'password',
        'phone',
        'email',
        'cash',
        'status',
        'avatar',
        'birthday',
        'email_verified_at',
        'remember_token',
        'last_login_at',
        'gender',
        'address',
    ];

    protected $casts = [
        'birthday' => 'datetime',
        'cash' => 'integer',
        'status' => CustomerStatusEnum::class,
        'password' => 'hashed',
    ];

    protected $hidden = ['password'];
}
