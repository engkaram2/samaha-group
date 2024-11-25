<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Service;
use App\Models\Country;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function legalNotifications()
    {
//        $notifications = Notification::whereNull('user_id')->latest()->get();
//        $data['_notifications'] = $notifications->merge(auth()->user()->notifications)->sortDesc();
//
//        $data['_notifications'] =  auth()->user()->notifications()->latest()->get();
//
//        foreach ($data['_notifications'] as $notification) {
//            $notification->update(['is_seen' => 1]);
//        }

//        $_notifications =  auth()->user()->notifications()->where('type','legal')->latest()->get();
        $data['_notifications']  =  Notification::where(['user_id'=>auth()->user()->id,'seen'=>0,'type'=>'legal'])->latest()->get();

        $data['our_services'] = Service::where(['type' => 'legal'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();

        return view('Front.Legal.my_notifications',$data);
    }

    public function legalNotificationDetails(Request  $request,$id)
    {
        $data['notification']  =  Notification::where('id',$id)->first();
        $notify=$data['notification'];
        $notify->update(['seen'=>'1']);
        $data['our_services'] = Service::where(['type' => 'legal'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();
        return view('Front.Legal.notification_details',$data);
    }

    public function translationNotifications()
    {
        $data['_notifications']  =  Notification::where(['user_id'=>auth()->user()->id,'seen'=>0,'type'=>'translation'])->latest()->get();

        $data['our_services'] = Service::where(['type' => 'translation'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();
        return view('Front.Translation.my_notifications',$data);
    }

    public function translationNotificationDetails(Request  $request,$id)
    {
        $data['notification']  =  Notification::where('id',$id)->first();
        $notify=$data['notification'];
        $notify->update(['seen'=>'1']);
        $data['our_services'] = Service::where(['type' => 'translation'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();
        return view('Front.Translation.notification_details',$data);
    }


    public function servicesNotifications()
    {
        $data['_notifications']  =  Notification::where(['user_id'=>auth()->user()->id,'seen'=>0,'type'=>'services'])->latest()->get();

        $data['our_services'] = Service::where(['type' => 'services'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();

        return view('Front.Services.my_notifications',$data);
    }
    public function servicesNotificationDetails(Request  $request,$id)
    {
        $data['notification']  =  Notification::where('id',$id)->first();
        $notify=$data['notification'];
        $notify->update(['seen'=>'1']);
        $data['our_services'] = Service::where(['type' => 'services'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();
        return view('Front.Services.notification_details',$data);
    }




    public function shaabanNotifications()
    {
        $data['_notifications']  =  Notification::where(['user_id'=>auth()->user()->id,'seen'=>0,'type'=>'shaaban'])->latest()->get();

        $data['our_services'] = Service::where(['type' => 'shaaban'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'shaaban'])->get();
        return view('Front.Shaaban.my_notifications',$data);
    }

    public function shaabanNotificationDetails(Request  $request,$id)
    {
        $data['notification']  =  Notification::where('id',$id)->first();
        $notify=$data['notification'];
        $notify->update(['seen'=>'1']);
        $data['our_services'] = Service::where(['type' => 'shaaban'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'shaaban'])->get();
        return view('Front.Shaaban.notification_details',$data);
    }


    public function jasemNotifications()
    {
        $data['_notifications']  =  Notification::where(['user_id'=>auth()->user()->id,'seen'=>0,'type'=>'jasem'])->latest()->get();

        $data['our_services'] = Service::where(['type' => 'jasem'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'jasem'])->get();
        return view('Front.Jasem.my_notifications',$data);
    }

    public function jasemNotificationDetails(Request  $request,$id)
    {
        $data['notification']  =  Notification::where('id',$id)->first();
        $notify=$data['notification'];
        $notify->update(['seen'=>'1']);
        $data['our_services'] = Service::where(['type' => 'jasem'])->latest()->take(3)->get();
        $data['offices'] = Country::where(['type' => 'jasem'])->get();
        return view('Front.Jasem.notification_details',$data);
    }


}
