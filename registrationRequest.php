<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'full_name' => 'required|regex:/^[a-z A-Z]+$/u',
            'email'     => 'required|email',
            'password1' => 'required|min:8|max:12',
            'password2' => 'required|same:password1',
            'role_Id'   => 'required'
        ];
    }
}
