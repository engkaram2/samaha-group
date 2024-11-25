<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\NationalityRequest;
use App\Http\Requests\Dashboard\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $data['sliders'] = Slider::where(['type'=>auth()->guard('admin')->user()->type])->latest()->get();
        return view('Dashboard.Sliders.index', $data);
    }

    public function store(SliderRequest $request)
    {
        $request_data = $request->except(['image']);
        if ($request->image) $request_data['image'] = uploaded($request->image, 'slider');

        Slider::create($request_data+['type'=>auth()->guard('admin')->user()->type]);

        return redirect()->route('sliders.index')->with('message', trans('back.messages.added_successfully'));
    }


    public function update(SliderRequest $request,$id)
    {
//        Slider::findOrFail($id)->update($request->all());

        $slider = Slider::findOrFail($id);
        $request_data = $request->except('image');

        if ($request->hasFile('image')) {
            if (!is_null($slider->image)) unlink('uploads/sliders/' . $slider->image);

            $request_data['image'] = uploaded($request->image, 'slider');
        }
        $slider->update($request_data);
        return redirect()->route('sliders.index')->with('message',trans('back.messages.updated_successfully'));

    }


    public function destroy($id)
    {
        if (!$slider =Slider::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }
        if (!is_null($slider->image)) unlink('uploads/sliders/'. $slider->image);
        $slider->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }

}
