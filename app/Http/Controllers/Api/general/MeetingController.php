<?php

namespace App\Http\Controllers\Api\general;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PARENT_API;
use App\Http\Requests\Api\MakeAppointmentRequest;
use App\Http\Resources\Api\MeetingsResource;
use App\Models\Appointment;
use Illuminate\Http\Request;

class MeetingController extends PARENT_API
{
    public function myMeetings()
    {
        $meetings =  auth()->user()->meetings()->latest()->get();
        return responseJson(true, trans('api.all_meetings'),MeetingsResource::collection($meetings) );  //OK don-successfully
    }
   public function servicesMeetings()
    {
        $meetings =  auth()->user()->meetings()->where('type','services')->latest()->get();
        return responseJson(true, trans('api.all_meetings'),MeetingsResource::collection($meetings) );  //OK don-successfully
    }
    public function translationMeetings()
    {
        $meetings =  auth()->user()->meetings()->where('type','translation')->latest()->get();
        return responseJson(true, trans('api.all_meetings'),MeetingsResource::collection($meetings) );  //OK don-successfully
    }
    public function shaabanMeetings()
    {
        $meetings =  auth()->user()->meetings()->where('type','shaaban')->latest()->get();
        return responseJson(true, trans('api.all_meetings'),MeetingsResource::collection($meetings) );  //OK don-successfully
    }
    public function jasemMeetings()
    {
        $meetings =  auth()->user()->meetings()->where('type','jasem')->latest()->get();
        return responseJson(true, trans('api.all_meetings'),MeetingsResource::collection($meetings) );  //OK don-successfully
    }



//==============================================================================================
    public function makeAppointment(MakeAppointmentRequest $request)
    {
        $user = auth()->user();
        if (!$user) {
            return responseJson(false, trans('api.page_not_found'), null); //
        }
        $appointment = Appointment::create($request->all()+['user_id'=>$user->id,'client_name'=>$user->full_name,'client_mobile'=>$user->mobile,'email_address'=>$user->email]
        );
        return responseJson(true, trans('api.messages.request_done_successfully'),null );
    }

    public function servicesMakeAppointment(MakeAppointmentRequest $request)
    {
        $user = auth()->user();
        $appointment = Appointment::create($request->all()+['type'=>'services','user_id'=>$user->id]);
        return responseJson(true, trans('api.messages.request_done_successfully'),null );
    }

    public function translationMakeAppointment(MakeAppointmentRequest $request)
    {
        $user = auth()->user();
        $appointment = Appointment::create($request->all()+['type'=>'translation','user_id'=>$user->id]);
        return responseJson(true, trans('api.messages.request_done_successfully'),null );
    }

    public function shaabanMakeAppointment(MakeAppointmentRequest $request)
    {
        $user = auth()->user();
        $appointment = Appointment::create($request->all()+['type'=>'shaaban','user_id'=>$user->id]);
        return responseJson(true, trans('api.messages.request_done_successfully'),null );
    }

    public function jasemMakeAppointment(MakeAppointmentRequest $request)
    {
        $user = auth()->user();
        $appointment = Appointment::create($request->all()+['type'=>'jasem','user_id'=>$user->id]);
        return responseJson(true, trans('api.messages.request_done_successfully'),null );
    }

}
