<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                    return [
                        'full_name'        => 'required|string|between:2,200',
                        'email'            => 'required|email|max:100|unique:users,email',
                        'mobile'           => 'required|numeric|min:9',
                        'password'         => 'required|string|min:6|confirmed',
                        'image'             => 'sometimes',
                        'passport_image'    => 'sometimes',
                        'nationality_id'    => 'sometimes',
//                        'passport_image'    => 'sometimes|image',
//                        'nationality_id'    => 'numeric|exists:nationalities,id',

                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'full_name' => 'required',
                    ];
                }
            default:
                break;
        }
    }


}
