<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\OfficeRequest;
use App\Models\City;
use App\Models\Office;
use App\Models\Team;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class OfficeController extends Controller
{

    public function index()
    {
        $data['offices'] = Office::where(['type' => auth()->guard('admin')->user()->type])->latest()->get();

        return view('Dashboard.Offices.index', $data);
    }

    public function create()
    {
//        $data['countries'] = Country::all();
        $cities = City::where(['type' => auth()->guard('admin')->user()->type])->get();
        $team_members = Team::where(['type'=>auth()->guard('admin')->user()->type])->get();
//        $data['late'] = 24.7135517;
//        $data['loge'] = 46.67529569;
        $latest_offices = Office::where(['type' => auth()->guard('admin')->user()->type])->orderBy('id', 'desc')->take(5)->get();
        return view('Dashboard.Offices.create' , compact('cities' , 'team_members' , 'latest_offices'));
    }


    public function store(OfficeRequest $request)
    {
        Office::create($request->all()+['type'=>auth()->guard('admin')->user()->type]);

        return redirect()->route('offices.index')->with('class', 'success')->with('message', trans('back.messages.added_successfully'));
    }


    public function edit($id)
    {
        if (!Office::find($id)) {
            return redirect()->route('offices.index')->with('class', 'danger')->with('message', trans('back.messages.try_2_access_not_found_content'));
        }
        $data['latest_offices'] = Office::orderBy('id', 'desc')->take(5)->get();
        $data['office'] = Office::find($id);
        return view('Dashboard.Offices.edit', $data);
    }


    public function update(OfficeRequest $request, Office $office)
    {
        $request_data = $request->except('image', 'page_image');


        $office->update($request_data);

        return redirect()->route('offices.index')->with('success', trans('back.messages.updated_successfully'));
    }


    public function destroy($id)
    {
        if (!$office = Office::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }
        $office->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }


}
