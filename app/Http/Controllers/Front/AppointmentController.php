<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Tymon\JWTAuth\Facades\JWTAuth;


class AppointmentController extends Controller
{
    public function legalMakeAppointment(AppointmentRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = auth()->user();

            $appointment = Appointment::create($request->all()+['user_id'=>$user->id,'client_name'=>$user->full_name,'client_mobile'=>$user->mobile,'email_address'=>$user->email]);

            DB::commit();
            return back()->with('message',trans('back.messages.send_successfully'));

//            return redirect()->route('front.home');
        } catch (\Exception $e) {
            return back();
        }
    }


    public function translationMakeAppointment(AppointmentRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = auth()->user();

            $appointment = Appointment::create($request->all()+['user_id'=>$user->id,'client_name'=>$user->full_name,'client_mobile'=>$user->mobile,'email_address'=>$user->email,'type'=>'translation']);

            DB::commit();
            return back()->with('message',trans('back.messages.send_successfully'));

//            return redirect()->route('front.home');
        } catch (\Exception $e) {
            return back();
        }
    }

    public function servicesMakeAppointment(AppointmentRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = auth()->user();

            $appointment = Appointment::create($request->all()+['user_id'=>$user->id,'client_name'=>$user->full_name,'client_mobile'=>$user->mobile,'email_address'=>$user->email,'type'=>'services']);

            DB::commit();
            return back()->with('message',trans('back.messages.send_successfully'));
        } catch (\Exception $e) {
            return back();
        }
    }


    public function shaabanMakeAppointment(AppointmentRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = auth()->user();

            $appointment = Appointment::create($request->all()+['user_id'=>$user->id,'client_name'=>$user->full_name,'client_mobile'=>$user->mobile,'email_address'=>$user->email,'type'=>'shaaban']);

            DB::commit();
            return back()->with('message',trans('back.messages.send_successfully'));
        } catch (\Exception $e) {
            return back();
        }
    }


    public function jasemMakeAppointment(AppointmentRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = auth()->user();

            $appointment = Appointment::create($request->all()+['user_id'=>$user->id,'client_name'=>$user->full_name,'client_mobile'=>$user->mobile,'email_address'=>$user->email,'type'=>'jasem']);

            DB::commit();
            return back()->with('message',trans('back.messages.send_successfully'));
        } catch (\Exception $e) {
            return back();
        }
    }


}
