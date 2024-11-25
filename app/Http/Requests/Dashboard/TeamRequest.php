<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;    }

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
                    'full_name_ar'   => 'bail|required',
                    'full_name_en'   => 'bail|required',
                    'mobile'      => 'required|numeric|min:9',
                    'email'       => 'required',
                    'job'         => 'required',
                    'image'       => 'required',

                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'full_name_ar'     => 'sometimes',
                    'full_name_en'     => 'sometimes',
//                    'mobile'        => 'required|numeric|min:9',
                    'image'         => 'sometimes',
                ];
            }
            default:
                break;
        }

    }
}
