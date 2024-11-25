<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\TranslationRequest;
use App\Models\Team;
use App\Models\Translation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TranslationController extends Controller
{

    public function index()
    {
        $data['teams'] = Team::where(['type'=>auth()->guard('admin')->user()->type])->get();

        $data['users'] = User::all();
        $data['translations'] = Translation::latest()->get();
        return view('Dashboard.Translations.index', $data);
    }

    public function store(TranslationRequest $request)
    {

        $request_data = $request->except(['file']);
        if ($request->file) $request_data['file'] = uploaded_file($request->file, 'translation');

        $translation= Translation::create($request_data);

        $name='name_' . app()->getLocale();
        $activity=  activity()
            ->performedOn($translation)
            ->causedBy(auth()->guard('admin')->user())
            ->log(' قام المشرف' . ' '.auth()->guard('admin')->user()->name_ar .' '. ' باضافة ملف ترجمة جديد '. ($translation->$name));
// ===========================================================
        $activity->update(['type'=>auth()->guard('admin')->user()->type]);

        return redirect()->route('translations.index')->with('message', trans('back.messages.added_successfully'));
    }



    public function update(TranslationRequest $request, $id)
    {
        Translation::findOrFail($id)->update($request->all());
        return redirect()->route('translations.index')->with('success',trans('back.messages.updated_successfully'));
    }

    public function show($id)
    {
        if (!Translation::find($id)) {
            return redirect()->route('teams.index')->with('class', 'danger')->with('message', trans('dash.messages.try_2_access_not_found_content'));
        }
        $data['translation'] = Translation::find($id);
        return view('Dashboard.Translations.show', $data);
    }


    public function destroy($id)
    {
        if (!$translation =Translation::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }
        if (!is_null($translation->file)) unlink('uploads/translations/' . $translation->file);
        if (!is_null($translation->file_translation)) unlink('uploads/translations/' . $translation->file_translation);
        $translation->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }


    public function view_file($id){
        $translation=Translation::find($id);
        $file=$translation->file;
        $file_path=$translation->file_path;
        return view('View_file.view_file',compact('file','file_path'));
    }


    public function view_file_translation($id){
        $translation=Translation::find($id);

        $file=$translation->file_translation;
        $file_path=$translation->file_translation_path;
        return view('View_file.view_file',compact('file','file_path'));
    }


    public function add_translation(Request $request,$id){
        $translation = Translation::findOrFail($id);

        $request_data = $request->except('file_translation');

        if ($request->hasFile('file_translation')) {
            $request_data['file_translation'] = uploaded_file($request->file_translation, 'translation');
        }
        $translation->update($request_data+['status'=>1]);

        return back()->with('success',  trans('back.translation.add_translation_done'));    }

}
