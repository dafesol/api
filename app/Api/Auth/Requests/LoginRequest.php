<?php

namespace App\Api\Auth\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            User::EMAIL => ['required', 'email'],
            User::PASSWORD => ['required'],
        ];
    }
}
