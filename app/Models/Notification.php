<?php

namespace App\Models;

use App\Firebase\Firebase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function sendApproveAppointmentNotify($user_id,$domain_type)
    {
        $user = User::find($user_id);

        if (is_null($user)) {
            return back()->with('class', 'success')->with('message', trans('back.messages.user_not_found'));
        }
        $title = 'قبول الموعد you have a new meeting';
        $text = '  Please be ready at 21/06/2023 , 2pm good luck تم قبول الموعد الذي قمت بحجزه من ادارة موقع سماحة ';
        $type = $domain_type;


        $notify = Notification::create([
            'user_id' => $user->id,
            'title' => $title,
            'text' => $text,
            'type' => $type,

        ]);

        if ($user->token->fcm != null) {
            Firebase::send([
                'title' => $title,
                'text' => $text,
                'notificationable_type' => $type,
                'fcm_tokens' => $user->token->fcm
            ]);
        }
        Firebase::createWebCurl($user->token->fcm_web_token, [
            'title' => $title,
            'body' => $text,
            'icon' => '',
//            'icon'  => 'https://mzadat.com.sa/public/Dashboard/assets/images/mazadat_logo.jpg',
        ]);
    }









    //--------------------------------------------------------------------------------

    public function sendAgoraMeetingNotify($meeting_url,$client_id)
    {
        $user = User::find($client_id)->first();

        $join_url =route('webJoinUserMeeting',$meeting_url);
        if ($user->token->fcm != null) {
            Firebase::send([
                'title' => 'you have a new meeting join this link',
                'text' => $join_url,
//                'meeting_id' => $meeting_id,
                'fcm_tokens' => $user->token->fcm
            ]);
        }
        Firebase::createWebCurl($user->token->fcm_web_token, [
            'title' => 'you have a new meeting join this link',
            'body' => $join_url,
            'icon' => 'https://samha.com/Front/assets/imgs/mini-logo.svg'
        ]);

        Notification::create([
            'user_id' => $user->id,
            'is_link' =>1,
            'title'   => 'you have a new agora meeting join this link',
            'text'    =>  $join_url,
        ]);
    }

}
