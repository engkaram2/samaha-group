<?php

namespace App\Http\Requests\Front;


use Illuminate\Foundation\Http\FormRequest;

class resetPasswordRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'password' => 'required|confirmed'
        ];
    }
}
