<?php

namespace App\Http\Controllers\Dashboard;

use App\Firebase\Firebase;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\OnlineMeeting;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{



    public function sendMeetingNotify(Request $request,$meeting_id)
    {

        $meeting = OnlineMeeting::find($meeting_id);
        $user = User::find($meeting->user->id);

        if (is_null($user)) {
            return back()->with('class', 'success')->with('message', trans('back.messages.user_not_found'));
        }

        $join_url =route('zoom.start',[
                                'meeting_id' =>$meeting->meeting_id,
                                'password'  =>$meeting->password,
                                'name'  =>$meeting->topic,
                                'email' =>'elshenaweymona92@gmail.com', ]);



        if ($user->token->fcm != null) {
            Firebase::send([
                'title' => 'you have a new meeting join this link',
                'text' => $meeting->join_url,
                'meeting_id' => $meeting_id,
                'fcm_tokens' => $user->token->fcm
            ]);
        }
        Firebase::createWebCurl($user->token->fcm_web_token, [
            'title' => 'you have a new meeting join this link',
            'body' => $meeting->join_url,
            'icon' => 'https://samha.com/Front/assets/imgs/mini-logo.svg'
        ]);
        Notification::create([
            'user_id' => $meeting->user->id,
            'title' => 'you have a new meeting join this link',
            'text' =>  $join_url,
        ]);

        return back()->with('class', 'success')->with('message', trans('back.messages.send_successfully'));
    }
}


//public function send_notify_to_all_users(NotifyRequest $request)
//{
//    $message = Message::where('text', $request->text)->first();
//    $users = User::where(['is_company' => 'person'])->get();
//    if ($users->count() <= 0) {
//        return back()->with('class', 'error')->with('message', trans('messages.messages.user_not_found'));
//    } else {
//        foreach ($users as $user) {
//            if ($user->token->fcm != null) {
//                Firebase::send([
//                    'title' => '',
//                    'text' => $request->text,
//                    'auction_id' => '',
//                    'fcm_tokens' => $user->token->fcm
//                ]);
//            }
//            Firebase::createWebCurl($user->token->fcm_web_token, [
//                'title' => $message->title,
//                'body' => $request->text,
//                'icon' => 'https://mzadat.com.sa/Front/assets/imgs/mini-logo.svg'
//            ]);
//            Notification::create([
//                'user_id' => $user->id,
//                'title' => $message->title,
//                'text' => $request->text,
//            ]);
//            SmsController::sendSms($user->mobile, $request->text);
//        }
//        return back()->with('class', 'success')->with('message', trans('messages.messages.send_successfully'));
//    }
//}
//
