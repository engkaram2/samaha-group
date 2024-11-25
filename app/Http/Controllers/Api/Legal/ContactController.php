<?php

namespace App\Http\Controllers\Api\Legal;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PARENT_API;
use App\Http\Requests\Api\ContactUsRequest;
use App\Models\Contact;

class ContactController extends PARENT_API
{
    public function NotAuthContactUs(ContactUsRequest $request)
    {
        $contact = Contact::create($request->all());
        return responseJson(true, trans('api.messages.message_send_successfully'),null );
    }
}

//    public function contactUs(ContactRequest $request)
//    {
//        $admin = auth()->guard('admin-api')->user();
//
//        $contact = Contact::create($request->all()+[
//                'user_id'  =>$admin->id,
//                'first_name'=>$admin->name,
//                'mobile'   =>$admin->mobile,
//                'email'    =>$admin->email,
//            ]);
//        return responseJson(true, trans('api.messages.message_send_successfully'),$contact );
//    }
