<?php

namespace App\Http\Controllers\Api\Shaaban;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PARENT_API;
use App\Http\Requests\Api\ContactUsRequest;
use App\Models\Contact;

class ContactController extends PARENT_API
{
    public function NotAuthContactUs(ContactUsRequest $request)
    {
        $contact = Contact::create($request->all()+['type'=>'shaaban']);
        return responseJson(true, trans('api.messages.message_send_successfully'),null );
    }
}
