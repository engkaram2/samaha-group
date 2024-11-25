<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name_ar' => 'bail|required',
                    'name_en' => 'required',
                    'icon' => 'required',
//                    'description_ar' => 'required',
//                    'description_en' => 'required',
                    'image1'          => 'required|image',
                    'image2'          => 'required|image',

                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name_ar' => 'sometimes',
                    'name_en' => 'sometimes',
                    ];
            }
            default:
                break;
        }

    }


    public function attributes()
    {
        return [
            'name_ar' => ' الاسم بالعربيه',
            'name_en' => ' الاسم بالانجليزية',
        ];
    }
}
