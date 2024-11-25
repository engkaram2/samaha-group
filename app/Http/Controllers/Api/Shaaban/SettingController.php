<?php

namespace App\Http\Controllers\Api\Shaaban;

use App\Http\Controllers\PARENT_API;
use App\Models\ShabaanSetting;
use Illuminate\Http\Request;

class SettingController extends PARENT_API
{

//    public function aboutApp()
//    {
//        $about_app = 'about_app_' . app()->getLocale();
//
//        if (!$about_app = ShabaanSetting::where('key', $about_app)->first()->value) {
//            return responseJson(false, trans('api.page_not_found'), null);//NOT_FOUND
//        }
//        return responseJson(true, trans('api.messages.request_done_successfully'), $about_app);  //OK don-successfully
//    }

    public function conditionsAndTerms()
    {
        $conditions_terms = 'conditions_terms_' . app()->getLocale();

        if (!$conditions_terms = ShabaanSetting::where('key', $conditions_terms)->first()->value) {
            return responseJson(false, trans('api.page_not_found'), null);//NOT_FOUND
        }
        return responseJson(true, trans('api.messages.request_done_successfully'), $conditions_terms);  //OK don-successfully
    }

}
