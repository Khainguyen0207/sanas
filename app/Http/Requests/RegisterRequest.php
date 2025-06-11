<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'nullable|string',
            'email' => 'required|email|unique:customers,email',
            'password' => 'nullable|confirmed|string',
        ];
    }
}
