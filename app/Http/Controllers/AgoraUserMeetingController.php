<?php

namespace App\Http\Controllers;

use App\Events\sendNotification;
use App\Models\MeetingEntry;
use App\Models\Notification;
use App\Models\User;
use App\Models\UserMeeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AgoraUserMeetingController extends Controller
{


    public function index()
    {
        $type = auth()->guard('admin')->user()->type;
//        $data['meetings'] = OnlineMeeting::where(['type' => $type])->latest()->get();
        return view('Dashboard.Agora_meetings.index');
    }

    public function showCreateMeeting(Request $request, $client_id)
    {
        $data['client']=User::where('id',$client_id)->first();
        return view('Dashboard.Appointments.createMeeting',$data);
    }

    public function createUserMeeting(Request $request, $client_id)
    {
        $admin=auth()->guard('admin')->user();

        $client =User::where('id',$client_id)->first();
        $meeting = $admin->getAdminMeetingInfo()->first();

        if(!isset($meeting->id)){
            $name       =   'agora'. rand(1111,9999);
            $meetingData = cretaAgoraProject($name);
            if(isset($meetingData->project->id)){
                $meeting             =    new UserMeeting();
                $meeting->admin_id   =   $admin->id;
                $meeting->user_id    =   $client_id;
//                $meeting->user_id      =   1;
                $meeting->app_id     =   $meetingData->project->vendor_key;
                $meeting->appCertificate   = $meetingData->project->sign_key;
                $meeting->channel    =    $meetingData->project->name;
                $meeting->uid        =   rand(11111,99999);
                $meeting->save();

            }else{
                echo"Project not created";
            }
        }

        $meeting    =   $admin->getAdminMeetingInfo()->first();
        $token      =   createToken($meeting->app_id , $meeting->appCertificate ,$meeting->channel ) ;
        $meeting->token = $token ;
        $meeting->url = generateRandomString();
        $meeting->event = generateRandomString(5);
        $meeting->save();

        Notification::sendAgoraMeetingNotify($meeting->url,$client_id);

        // Meeting HOst
        if($admin->id == $meeting->admin_id){
            Session::put('meeting',$meeting->url);
        }
//        return redirect('joinMeeting/'.$meeting->url);
        return redirect()->route('joinUserMeeting', $meeting->url);

    }

//    public function joinMeeting($url='')
    public function joinUserMeeting($url)
    {
        $admin=auth()->guard('admin')->user();

        $meeting = UserMeeting::where('url',$url)->first();
        if(isset($meeting->id)){
// Meeting exist
            $meeting->app_id = trim($meeting->app_id);
            $meeting->appCertificate = trim($meeting->appCertificate);
            $meeting->channel = trim($meeting->channel);
            $meeting->token = trim($meeting->token);

            if($admin && $admin->id == $meeting->admin_id){
                // meeting create
                $channel =  $meeting->channel;
                $event   = $meeting->event;
            }else{
                if(!$admin){
                $random_user = rand(111111,999999);
                Session::put('random_user',$random_user);
                $event = generateRandomString(5);

//                    $this->createEntry($meeting->user_id , $random_user , $meeting->url,$event , $meeting->channel);
                    $channel =  $meeting->channel;
                }else{
                    $event = generateRandomString(5);
//                    $this->createEntry($meeting->user_id , $admin->id , $meeting->url,$event ,$meeting->channel);
                    $channel =  $meeting->channel;
                    Session::put('random_user',$admin->id);
                }

            }
            // prx(get_defined_vars());
            return view('Dashboard.Agora_meetings.joinUser',get_defined_vars());
        }else{
            // meeting not exist

        }
    }





//
//    public function createEntry($user_id , $random_user , $url ,$event ,$channel)
//    {
//        $entry = new MeetingEntry();
//        $entry->user_id = $user_id;
//        $entry->random_user = $random_user;
//        $entry->url = $url;
//        $entry->status = 0;
//        $entry->channel = $channel;
//        $entry->event = $event;
//        $entry->save();
//    }

//    public function saveUserName(Request $request)
//    {
//        $saveName = MeetingEntry::where(['random_user'=>$request->random , 'url'=>$request->url])->first();
//        if($saveName->status == 3){
//            // Host reject
//
//        }else{
//            $saveName->name = $request->name;
//            $saveName->status = 1;
//            $saveName->save();
//
//            $meeting = UserMeeting::where('url',$request->url)->first();
//            $data = ['random_user'=>$request->random , 'title'=> $saveName->name .' wants to enter in the meeting'];
//            event(new sendNotification($data,$meeting->channel , $meeting->event));
//        }
//
//    }

//    public function meetingApprove(Request $request)
//    {
//        $saveName = MeetingEntry::where(['random_user'=>$request->random , 'url'=>$request->url])->first();
//
//            $saveName->status = $request->type;
//            $saveName->save();
//
//            $data = ['status'=>$request->type ];
//            event(new sendNotification($data,$saveName->channel , $saveName->event));
//
//    }

}
