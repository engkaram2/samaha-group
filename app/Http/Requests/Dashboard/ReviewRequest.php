<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
                    'client_name'       => 'required',
                    'client_job'        => 'required',
                    'review'            => 'required',
                    'rate'            => 'required',
                    'client_image'      => 'sometimes|image',
                    'image'             => 'sometimes|image',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'full_name'   => 'sometimes',
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
        ];
    }
}
