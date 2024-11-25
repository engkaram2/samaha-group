<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class TranslationRequest extends FormRequest
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
                        'user_id' => 'required',
                        'team_id' => 'required',
                        'name_ar' => 'required',
                        'name_en' => 'required',
                        'file' => 'required',

                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'file' => 'required',
                    ];
                }
            default:
                break;
        }
    }


}
