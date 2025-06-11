<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'password' => 'required|confirmed|min:6',
            'email' => 'required|email|unique:customers,email',
            'cash' => 'required|numeric|min:0',
            'status' => 'required|in:active,locked',
            'birthday' => 'required|date',
        ];
    }
}
