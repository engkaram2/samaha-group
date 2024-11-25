<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServiceController extends Controller
{

//    public function __construct()
//    {
//        $this->admin = auth()->guard('admin')->user();
//    }

    public function index()
    {
        $data['services']= Service::where(['type'=>auth()->guard('admin')->user()->type])->latest()->get();
        return view('Dashboard.Services.index', $data);
    }

    public function create()
    {
        $data['latest_services'] = Service::where(['type'=>auth()->guard('admin')->user()->type])->orderBy('id', 'desc')->take(5)->get();
//        $data['icons'] = $this->getIcons();
        return view('Dashboard.Services.create', $data);
    }


    public function store(ServiceRequest $request)
    {
        $request_data = $request->except(['icon','image1','image2']);
        if ($request->icon) $request_data['icon'] = uploaded($request->icon, 'service');
        if ($request->image1) $request_data['image1'] = uploaded($request->image1, 'service');
        if ($request->image2) $request_data['image2'] = uploaded($request->image2, 'service');

        Service::create($request_data+['type'=>auth()->guard('admin')->user()->type]);

        return redirect()->route('services.index')->with('class', 'success')->with('message', trans('back.messages.added_successfully'));
    }

    public function show($id)
    {
        if (!Service::find($id)) {
            return redirect()->route('services.index')->with('class', 'danger')->with('message', trans('dash.messages.try_2_access_not_found_content'));
        }
        $data['service'] = Service::find($id);
        $data['service_details'] = Service::where('id', $data['service']->id)->first();

        return view('Dashboard.Services.show', $data);
    }


    public function edit($id)
    {
        if (!Service::find($id)) {
            return redirect()->route('services.index')->with('class', 'danger')->with('message', trans('back.messages.try_2_access_not_found_content'));
        }
        $data['latest_services'] = Service::orderBy('id', 'desc')->take(5)->get();
        $data['service'] = Service::find($id);
        return view('Dashboard.Services.edit', $data);
    }


    public function update(ServiceRequest $request, Service $service)
    {
        $request_data = $request->except('icon');

        if ($request->hasFile('icon')) {

            if (!is_null($service->icon)) unlink('uploads/services/' . $service->icon);
            $request_data['icon'] = uploaded($request->icon, 'service');
        }
        $service->update($request_data);

        return redirect()->route('services.index')->with('success', trans('back.messages.updated_successfully'));
    }


    public function destroy($id)
    {
        if (!$service =Service::find($id)) {
            $response = ['status' => 'false', 'message' => trans('dash.messages.try_2_access_not_found_content')];
            return $response;
        }
        if (!is_null($service->image)) unlink('uploads/services/' . $service->image);
        $service->delete();
        return ['status' => 'true', 'message' => trans('back.messages.deleted_successfully')];
    }


    public function ChangeStatus(Request $request)
    {
        $data = $request->all();

        $currentModel = Service::find($request->id);

        if (!$updateStatus = updateStatus($data, $currentModel))
            return response()->json(['requestStatus' => false, 'message' => trans('api.server-internal-error')]);

        return response()->json(['requestStatus' => true, 'message' => trans('back.edit-status')]);
    }





}
