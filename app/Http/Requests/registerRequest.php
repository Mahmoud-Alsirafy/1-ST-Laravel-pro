<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
           "first_name"=>"required|string|min:3",
           "last_name"=>"required|string|min:3",
            "email"=>"required|string|min:3|unique:users,email",
            'password' =>"required|confirmed|min:5"

        ];
    }
}