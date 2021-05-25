<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstName' => 'required|string|max:40',
            'lastName' => 'required|string|max:40',
            'email' => 'required|unique:users|string|email',
            'password' => 'required|confirmed',
            'username' => 'required|unique:users',
            'university' => 'required',
            'college' => 'required',

        ];
    }
}
