<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CityRequest extends FormRequest
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
                        'country_id' => 'required',

                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'name_ar' => 'required',
                        'name_en' => 'required'
                    ];
                }
            default:
                break;
        }
    }


}
