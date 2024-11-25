<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

    public function index()
    {
        $data['countries'] = Country::where(['type'=>auth()->guard('admin')->user()->type])->latest()->get();
        return view('Dashboard.Countries.index', $data);
    }

    public function store(CountryRequest $request)
    {
        $request_data = $request->except(['image']);
        if ($request->image) $request_data['image'] = uploaded($request->image, 'country');
        $country=  Country::create($request_data+['type'=>auth()->guard('admin')->user()->type]);

// ===========================================================
        $name='name_' . app()->getLocale();
      $activity=  activity()
            ->performedOn($country)
            ->causedBy(auth()->guard('admin')->user())
            ->log(' قام المشرف' . ' '.auth()->guard('admin')->user()->name_ar .' '. ' باضافة دولة جديد '. ($country->$name));
// ===========================================================
        $activity->update(['type'=>auth()->guard('admin')->user()->type]);
        return redirect()->route('countries.index')->with('message', trans('back.messages.added_successfully'));
    }

    public function update(CountryRequest $request, $id)
    {
        Country::findOrFail($id)->update($request->all());
        return redirect()->route('countries.index')->with('success',trans('back.messages.updated_successfully'));
    }


    public function destroy($id)
    {
        if (!$country=Country::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }
          if (!is_null($country->image)) unlink('uploads/countries/'. $country->image);
        $country->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }

}
