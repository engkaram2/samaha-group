<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\REQUEST_API_PARENT;
use Illuminate\Foundation\Http\FormRequest;

class MakeAppointmentRequest extends REQUEST_API_PARENT
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
            'appointment_type'     => 'required|in:office,online',
//            'client_name'          => 'required',
//            'client_mobile'        => 'required',
//            'email_address'        => 'required',
            'problem'              => 'required',
            'date'                 => 'required',
        ];
    }
}
