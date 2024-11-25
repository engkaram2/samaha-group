<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Notification;
use Illuminate\Http\Request;
class AppointmentController extends Controller
{

    public function index()
    {
        $type = auth()->guard('admin')->user()->type;
        $data['appointments_count'] = Appointment::where(['type' => $type,'appointment_type'=>'office'])->latest()->count();
        $data['pending_appointments'] = Appointment::where(['type' => $type,'status'=>'pending','appointment_type'=>'office'])->latest()->get();
        $data['approved_appointments'] = Appointment::where(['type' => $type,'status'=>'approved','appointment_type'=>'office'])->latest()->get();
        $data['done_appointments'] = Appointment::where(['type' => $type,'status'=>'done','appointment_type'=>'office'])->latest()->get();
        return view('Dashboard.Appointments.index', $data);
    }

    public function online_appointments()
    {
        $type = auth()->guard('admin')->user()->type;
        $data['appointments_count'] = Appointment::where(['type' => $type,'appointment_type'=>'online'])->latest()->count();
        $data['pending_appointments'] = Appointment::where(['type' => $type,'status'=>'pending','appointment_type'=>'online'])->latest()->get();
        $data['approved_appointments'] = Appointment::where(['type' => $type,'status'=>'approved','appointment_type'=>'online'])->latest()->get();
        $data['done_appointments'] = Appointment::where(['type' => $type,'status'=>'done','appointment_type'=>'online'])->latest()->get();
        return view('Dashboard.Appointments.index', $data);
    }

    public function approve($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->update(['status'=>'approved']);
        $sendApproved = new Notification();
        $sendApproved->sendApproveAppointmentNotify($appointment->user_id,auth()->guard('admin')->user()->type);

        return back()->with('success',  trans('back.appointment.approve'));
    }
    public function done($id)
    {
        $appointment = Appointment::findOrFail($id);
//        $user = User::where('id',$appointment->user_id)->first();
        $appointment->update(['status'=>'done']);
        return back()->with('success',  trans('back.appointment.done'));
    }

    public function show($id)
    {
        if (!Appointment::find($id)) {
            return redirect()->route('blogs.index')->with('class', 'danger')->with('message', trans('dash.messages.try_2_access_not_found_content'));
        }
        $data['appointment'] = Appointment::find($id);

        return view('Dashboard.Appointments.show', $data);
    }

    public function destroy($id)
    {
        if (!$appointment = Appointment::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }
        $appointment->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }

}
