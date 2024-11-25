<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\REQUEST_API_PARENT;
use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends REQUEST_API_PARENT
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
            'full_name'        => 'required|string|between:2,200',
            'email'            => 'required|email|max:100|unique:users,email',
            'mobile'           => 'required|numeric|min:9',
            'password'         => 'required|string|min:6|confirmed',
//            'fcm'              => 'required',
            'image'             => 'sometimes',
            'passport_image'    => 'sometimes',
            'nationality_id'    => 'sometimes',
//            'passport_image'    => 'sometimes|image',
//            'nationality_id'    => 'numeric|exists:nationalities,id',

        ];
    }
}
