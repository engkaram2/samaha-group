<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\REQUEST_API_PARENT;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UpdateUserProfileRequest extends REQUEST_API_PARENT
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
    public function rules(Request $request)
    {
        return [
            'full_name'        => 'sometimes|string|max:255',
            'mobile'           => 'sometimes|string|min:9|max:255',
            'email'            => 'sometimes|email|max:255|unique:users,email,'. auth()->user()->id,
            'image'            => 'sometimes|image|mimes:jpeg,png,jpg,gif',
        ];
    }

//    public function attributes()
//    {
//        return [
//            'mobile' => 'رقم الجوال ',
//        ];
//    }
}
