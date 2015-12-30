<?php

namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;

class RegisterRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return (!Auth::check());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|alphanum|min:8|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|alphanum|min:8'
        ];
    }
}
