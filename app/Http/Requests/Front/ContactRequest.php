<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name'         => 'required',
            'last_name'         => 'required',
            'mobile'            => 'required',
            'email'             => 'required|email',
            'message'           => 'required',
            ];
    }
}
