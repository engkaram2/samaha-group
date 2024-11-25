<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CityRequest;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function index()
    {
        $data['cities'] = City::where(['type'=>auth()->guard('admin')->user()->type])->latest()->get();
        $data['countries'] = Country::where(['type'=>auth()->guard('admin')->user()->type])->get();

        return view('Dashboard.Cities.index', $data);
    }

    public function store(CityRequest $request)
    {
         $city = City::create($request->all()+['type'=>auth()->guard('admin')->user()->type]);

//// ===========================================================
//        $name='name_' . app()->getLocale();
//      $activity=  activity()
//            ->performedOn($city)
//            ->causedBy(auth()->guard('admin')->user())
//            ->log(' قام المشرف' . ' '.auth()->guard('admin')->user()->name_ar .' '. ' باضافة دولة جديد '. ($city->$name));
//// ===========================================================
//        $activity->update(['type'=>auth()->guard('admin')->user()->type]);


        return redirect()->route('cities.index')->with('message', trans('back.messages.added_successfully'));
    }



    public function update(CityRequest $request, $id)
    {
        City::findOrFail($id)->update($request->all());
        return redirect()->route('cities.index')->with('success',trans('back.messages.updated_successfully'));
    }


    public function destroy($id)
    {
        if (!City::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }
        $city = City::find($id)->forceDelete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }

}
