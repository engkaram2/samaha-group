<?php

namespace App\Http\Controllers\Api\general;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PARENT_API;
use App\Http\Resources\Api\TranslationsResource;


class TranslationController extends PARENT_API
{
    public function translationTranslations()
    {
        $translations =  auth()->user()->translations()->latest()->get();
        return responseJson(true, trans('api.all_translations'),TranslationsResource::collection($translations) );  //OK don-successfully
    }



}
