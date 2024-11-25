<?php

namespace App\Http\Controllers\Api\general;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PARENT_API;
use App\Http\Resources\Api\NotificationsResource;
use Illuminate\Http\Request;

class NotificationController extends PARENT_API
{
    public function legalNotifications()
    {
        $_notifications =  auth()->user()->notifications()->where('type','legal')->latest()->get();
        return responseJson(true, trans('api.all_notifications'),NotificationsResource::collection($_notifications) );  //OK don-successfully
    }
    public function servicesNotifications()
    {
        $_notifications =  auth()->user()->notifications()->where('type','services')->latest()->get();
        return responseJson(true, trans('api.all_notifications'),NotificationsResource::collection($_notifications) );  //OK don-successfully
    }

    public function translationNotifications()
    {
        $_notifications =  auth()->user()->notifications()->where('type','translation')->latest()->get();
        return responseJson(true, trans('api.all_notifications'),NotificationsResource::collection($_notifications) );  //OK don-successfully
    }

    public function shaabanNotifications()
    {
        $_notifications =  auth()->user()->notifications()->where('type','shaaban')->latest()->get();
        return responseJson(true, trans('api.all_notifications'),NotificationsResource::collection($_notifications) );  //OK don-successfully
    }

    public function jasemNotifications()
    {
        $_notifications =  auth()->user()->notifications()->where('type','jasem')->latest()->get();
        return responseJson(true, trans('api.all_notifications'),NotificationsResource::collection($_notifications) );  //OK don-successfully
    }

}
