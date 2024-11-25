<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class OfficeRequest extends FormRequest
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
                        'name_ar' => 'required',
                        'name_en' => 'required',
                        'city_id' => 'required',
                        'email' => 'required',
                        'mobile'      => ['required', 'numeric'],
                        'latitude'      => ['required', 'numeric'],
                        'longitude'      => ['required', 'numeric'],
                        'address_ar' => 'required',
                        'address_en' => 'required',
                        'description_ar' => 'required',
                        'description_en' => 'required',
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'name_ar' => 'required',
                        'name_en' => 'required',
                        'mobile'      => ['required', 'numeric'],

                    ];
                }
            default:
                break;
        }
    }


}
