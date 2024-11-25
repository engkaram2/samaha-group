<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Traits\MeetingZoomTrait;
use App\Models\OnlineMeeting;
use App\Models\User;
use Illuminate\Http\Request;
use MacsiDigital\Zoom\Facades\Zoom;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class MeetingController extends Controller
{
    use MeetingZoomTrait;

    public function index()
    {
        $type = auth()->guard('admin')->user()->type;
        $data['meetings'] = OnlineMeeting::where(['type' => $type])->latest()->get();
        return view('Dashboard.Zoom_meetings.index', $data);
    }

    public function create()
    {
        $data['latest_meetings'] = OnlineMeeting::orderBy('id', 'desc')->take(5)->get();
        $data['users'] = User::all();
        return view('Dashboard.Zoom_meetings.create', $data);
    }

    public function store(Request $request)
    {
        try {

            $meeting = $this->createMeeting($request);

            OnlineMeeting::create([
//                'integration' => true,
                'user_id' => $request->user_id,
//                'created_by' => auth()->user()->email,
                'created_by' => 'elshenaweymona92@gmail.com',
                'meeting_id' => $meeting->id,
                'topic'      => $request->topic,
                'start_at'   => $request->start_time,
                'duration'   => $meeting->duration,
                'password'   => $meeting->password,
                'start_url'  => $meeting->start_url,
                'join_url'   => $meeting->join_url,
            ]);
//            toastr()->success(trans('messages.success'));
            return redirect()->route('meetings.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function destroy($id)
    {
        try {
            $info = OnlineMeeting::find($id);

            $meeting = Zoom::meeting()->find($info->meeting_id);
            $meeting->delete();
            OnlineMeeting::destroy($id);

            return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }


}
