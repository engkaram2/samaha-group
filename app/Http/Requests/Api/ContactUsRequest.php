<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\REQUEST_API_PARENT;
use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends REQUEST_API_PARENT
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
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'          => 'required',
            'last_name'           => 'required',
            'mobile'              => 'required',
            'email'               => 'required',
            'address'             => 'required',
            'situation'           => 'required',
            'message'             => 'required',
        ];
    }
}
