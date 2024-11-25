<?php

namespace App\Http\Controllers;

use App\Http\Traits\WorkingZoomTrait;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use MacsiDigital\Zoom\Facades\Zoom;

class ZoomController extends Controller
{
    use WorkingZoomTrait;
    const MEETING_TYPE_INSTANT = 1;
    const MEETING_TYPE_SCHEDULE = 2;
    const MEETING_TYPE_RECURRING = 3;
    const MEETING_TYPE_FIXED_RECURRING_FIXED = 8;
    public function index(){
        $meetings=[];//LiveMeeting::all();
        return view('zoom.index',compact('meetings'));
    }
    public function newZoom(){
        return view('zoom.create');
    }


    public function store(Request $request){
        $request->validate([
            'topic'     =>'required',
            'desc'      =>'required',
            'duration'  =>'required',
            'start_time'=>'required',
            'zoom_user_id'=>'required',
        ]);
        return $request->all();
        $meeting= (object)$this->create($request->all())['data'];
        //return redirect("http://localhost:8080/meeting?nickname=Meeting%20Admin&meetingId=$meeting->id&passcode=$meeting->password");
        LiveMeeting::create([
            'start_at'     =>  $request->start_time,
            'topic'        =>  $meeting->topic,
            'meeting_id'   =>  $meeting->id,
            'duration'     =>  $meeting->duration,
            'password'     =>  $meeting->password,
            'start_url'    =>  $meeting->start_url,
            'join_url'     =>  $meeting->join_url,
            'signature'    =>  $this->generate_signature($meeting->id,1),
        ]);
        return redirect()->to(route('zoom.index'))->with('success','new meeting created success');
        /*route('zoom.start',[
        //'topic'        =>  $meeting->topic,
        'meeting_id'   =>  $meeting->id,
        //'duration'     =>  $meeting->duration,
        'password'     =>  $meeting->password,
        //'start_url'    =>  $meeting->start_url,
        //'join_url'     =>  $meeting->join_url,
        'signature'    =>  $this->generate_signature($meeting->id,1),
    ]));*/

    }
    public function createUser(Request $request){
        //return $request;
        $request->validate([
            'name'      =>'required',
            'email'     =>'required',
        ]);
        //return $user=$this->createZoomUser($request->all());
        return $user=$this->createZoomUser($request->all())['data']['id'];


    }
    public function storeAPI(Request $request){
        $meeting= (object)$this->create([
            'topic'     =>$request->topic,
            'zoom_user_id'=>$request->zoom_user_id,
            'start_time'=>Carbon::parse($request->start_time)->format("Y-m-d h:i:s"),
            'duration'  =>Carbon::parse($request->start_time)->diffInMinutes(Carbon::parse($request->end_time)),

        ])['data'];
        return $meeting;

    }
    public function updateAPI(Request $request){
        $meeting= (object)$this->update($request->zoom_id,[
            'topic'       =>$request->topic,
            'zoom_user_id'=>$request->zoom_user_id,
            'start_time'  =>Carbon::parse($request->start_time)->format("Y-m-d h:i:s"),
            'duration'    =>Carbon::parse($request->start_time)->diffInMinutes(Carbon::parse($request->end_time)),

        ])['data'];
        return $meeting;

    }
    public function deleteAPI(Request $request){
        $meeting= (object)$this->delete($request->meeting_id);
        return $meeting;

    }
    public function start(Request $request){
        //return $request;
        //meeting password ??
        return view('zoom.start',$request->toArray());
    }

    public function getUserToken()
    {

        try{
            $zoomClientId = env('ZOOM_SSO_KEY');
            $zoomClientSecret = env('ZOOM_SSO_SECRET');
            $zoomClientAccountID = env('ZOOM_SSO_ACCOUNT_ID');

            $httpClient = new Client();
            $responsetoken = $httpClient->post('https://zoom.us/oauth/token', [
                'form_params' => [
                    'grant_type' => 'account_credentials',
                    'account_id' => $zoomClientAccountID,
                    'client_id' => $zoomClientId,
                    'client_secret' => $zoomClientSecret,
                ],
            ]);

            $ZoomUserToken = json_decode($responsetoken->getBody(), true)['access_token'];
//            session()->put('zoom_user_token', $ZoomUserToken);

            $client = new Client();
            $response = $client->get('https://api.zoom.us/v2/users/' . Zoom::user()->first()->id . '/token', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $ZoomUserToken, // I want this Token do you have it ?
                ],
            ]);
            return json_decode($response->getBody()->getContents(), true)['token'];
        } catch(\Exception $e)
        {
            return response()->json(['zaktoken' => $e->getMessage()]);
        }
    }

    public function meeting(Request $request){
        $zakToken = $this->getUserToken();
        $zoomEmail = Zoom::user()->first();
        return view('zoom.meeting',$request->toArray(),['zakToken' => $zakToken,'zoomUserID'=> $zoomEmail->id,'zoomEmail' => $zoomEmail->email]);
    }


    function generate_signature ( $meeting_number, $role){

        $time = time() * 1000; //time in milliseconds (or close enough)

        $data = base64_encode(env('ZOOM_API_KEY') . $meeting_number . $time . $role);

        $hash = hash_hmac('sha256', $data, env('ZOOM_API_SECRET'), true);

        $_sig = env('ZOOM_API_KEY') . "." . $meeting_number . "." . $time . "." . $role . "." . base64_encode($hash);

        //return signature, url safe base64 encoded
        return rtrim(strtr(base64_encode($_sig), '+/', '-_'), '=').'22';
    }

    public function records(Request $request,VimeoManager $vimeo){
        //return $this->recordingList($request->meeting_id);
        $videoURL=static::recordingList($request->meeting_id)->download_url;


    }
}
