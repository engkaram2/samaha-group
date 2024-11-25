<?php

namespace App\Http\Controllers\Api\Jasem;

use App\Http\Controllers\PARENT_API;
use App\Models\JasemSetting;
use App\Models\ShabaanSetting;
use Illuminate\Http\Request;

class SettingController extends PARENT_API
{

    public function conditionsAndTerms()
    {
        $conditions_terms = 'conditions_terms_' . app()->getLocale();

        if (!$conditions_terms = JasemSetting::where('key', $conditions_terms)->first()->value) {
            return responseJson(false, trans('api.page_not_found'), null);//NOT_FOUND
        }
        return responseJson(true, trans('api.messages.request_done_successfully'), $conditions_terms);  //OK don-successfully
    }

}
