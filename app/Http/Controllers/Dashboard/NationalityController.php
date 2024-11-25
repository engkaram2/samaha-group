<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\NationalityRequest;
use App\Models\Nationality;
use Illuminate\Http\Request;

class NationalityController extends Controller
{

    public function index()
    {
        $data['nationalities'] = Nationality::latest()->get();
        return view('Dashboard.Nationalities.index', $data);
    }

    public function create()
    {
        $data['latest_nationalities'] = Nationality::orderBy('id', 'desc')->take(5)->get();
        return view('Dashboard.Nationalities.create', $data);
    }

    public function store(NationalityRequest $request)
    {
         $nationality= Nationality::create($request->all());

// ===========================================================
        $name='name_' . app()->getLocale();
      $activity=  activity()
            ->performedOn($nationality)
            ->causedBy(auth()->guard('admin')->user())
            ->log(' قام المشرف' . ' '.auth()->guard('admin')->user()->name_ar .' '. ' باضافة جنسية جديد '. ($nationality->$name));
// ===========================================================
        $activity->update(['type'=>auth()->guard('admin')->user()->type]);
        return redirect()->route('nationalities.index')->with('message', trans('back.messages.added_successfully'));
    }



    public function edit($id)
    {

        $data['latest_nationalities'] = Nationality::orderBy('id', 'desc')->take(5)->get();
        $data['nationality'] = Nationality::find($id);
        return view('Dashboard.Nationalities.edit', $data);
    }

    public function update(NationalityRequest $request, $id)
    {
        Nationality::findOrFail($id)->update($request->all());
        return redirect()->route('nationalities.index')->with('success',trans('back.messages.updated_successfully'));
    }


    public function destroy($id)
    {
        if (!Nationality::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }
        $nationality = Nationality::find($id)->forceDelete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }

}
