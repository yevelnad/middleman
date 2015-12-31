<?php

namespace App\Http\Requests;

use Auth;
use App\Http\Requests\Request;

class TransactionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'recipient' => 'required|alphanum|exists:users,name',
            'name' => 'required|alphanum',
            'description' => 'required|max:500',
            'reward' => 'required|integer',
        ];
    }
}
