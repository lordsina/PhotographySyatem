<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserApiRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
        'firstname'=>['required','string','max:255'],
        'lastname'=>['required','string','max:255'],
        'email'=>['required','string','max:255','unique:users'],
        'phone'=>['required','string','max:255'],
        'password'=>['required','confirmed','max:255'],
        ];
    }
}
