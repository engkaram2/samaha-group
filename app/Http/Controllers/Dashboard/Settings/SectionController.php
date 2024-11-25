<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SectionRequest;
use App\Models\AboutSection;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    public function index()
    {
        $data['sections'] = AboutSection::where(['type'=>auth()->guard('admin')->user()->type])->latest()->get();
        return view('Dashboard.Sections.index', $data);
    }

    public function store(SectionRequest $request)
    {
        $request_data = $request->except(['image']);
        if ($request->image) $request_data['image'] = uploaded($request->image, 'section');

        AboutSection::create($request_data+['type'=>auth()->guard('admin')->user()->type]);

        return redirect()->route('sections.index')->with('message', trans('back.messages.added_successfully'));
    }


    public function update(SectionRequest $request, $id)
    {
        AboutSection::findOrFail($id)->update($request->all());
        return redirect()->route('sections.index')->with('message',trans('back.messages.updated_successfully'));
    }


    public function destroy($id)
    {
        if (!$section =AboutSection::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }
        if (!is_null($section->image)) unlink('uploads/sections/'. $section->image);
        $section->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }

}
