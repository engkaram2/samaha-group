<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\IssueRequest;
use App\Models\Issue;
use App\Models\IssueFile;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IssueController extends Controller
{

    public function index()
    {
        $data['issues']= Issue::where(['type'=>auth()->guard('admin')->user()->type])->latest()->get();
        $data['teams'] = Team::where(['type'=>auth()->guard('admin')->user()->type])->get();
        $data['users'] = User::all();
        return view('Dashboard.Issues.index', $data);
    }

    public function store(IssueRequest $request)
    {
        $request_data = $request->except(['file']);
//        if ($request->file) $request_data['file'] = uploaded_file($request->file, 'issue');

         $issue= Issue::create($request_data+['type'=>auth()->guard('admin')->user()->type]);


        //======= upload issue files =======
        $data = [];
        if ($request->hasfile('file')) {
                $data['file'] = ['file' => uploaded_file($request->file, 'issue'), 'issue_id' => $issue->id,'file_name' => $request->file_name ,'created_at' => now()];
        }
        $issue_files = DB::table('issue_files')->insert($data);

// ===========================================================
      $name='name_' . app()->getLocale();
      $activity=  activity()
            ->performedOn($issue)
            ->causedBy(auth()->guard('admin')->user())
            ->log(' قام المشرف' . ' '.auth()->guard('admin')->user()->name_ar .' '. ' باضافة issue جديد '. ($issue->$name));
// ===========================================================
        $activity->update(['type'=>auth()->guard('admin')->user()->type]);

        return redirect()->route('issues.index')->with('message', trans('back.messages.added_successfully'));
    }



    public function update(IssueRequest $request, $id)
    {
        Issue::findOrFail($id)->update($request->all());
        return redirect()->route('issues.index')->with('success',trans('back.messages.updated_successfully'));
    }

    public function show($id)
    {
        if (!Issue::find($id)) {
            return redirect()->route('teams.index')->with('class', 'danger')->with('message', trans('dash.messages.try_2_access_not_found_content'));
        }
        $data['issue'] = Issue::find($id);
        return view('Dashboard.Issues.show', $data);
    }

    public function destroy($id)
    {
        if (!$issue=Issue::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }
//        if (!is_null($issue->file)) unlink('uploads/issues/' . $issue->file);
        if (!is_null($issue->files))
            foreach ($issue->files as $file) {
                unlink('uploads/issues/' . $file->file);
            }
        $issue->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }

    public function deleteIssueFile(Request $request)
    {
        $issue_file = IssueFile::find($request->id);

        if (!$issue_file) return response()->json(['deleteStatus' => false, 'error' => 'Sorry, image is not exists !!']);
        try {
            if (!is_null($issue_file->file)) unlink('uploads/issues/' . $issue_file->file);

            $issue_file->delete();
            return response()->json(['deleteStatus' => true, 'message' => 'تم الحذف  بنجاح']);
        } catch (Exception $e) {
            return response()->json(['deleteStatus' => false, 'error' => 'Server Internal Error 500']);
        }
    }
    public function addIssueFile(Request $request)
    {
        //======= upload issue files =======
        $data = [];
        if ($request->hasfile('file')) {
            $data['file'] = ['file' => uploaded_file($request->file, 'issue'), 'issue_id' => $request->issue_id,'file_name' => $request->file_name ,'created_at' => now()];
        }
        DB::table('issue_files')->insert($data);

        return back()->with('class', 'success')->with('message', trans('messages.messages.added_successfully'));
    }

    public function view($id){
        $file=IssueFile::find($id);
        return view('Dashboard.Issues.view_file',compact('file'));
    }
}
