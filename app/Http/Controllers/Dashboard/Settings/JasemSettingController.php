<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Models\JasemSetting;
use Illuminate\Http\Request;
class JasemSettingController extends Controller
{
    public function index()
    {
        return view('Dashboard.Domains.Jasem.Settings.index');
    }

    public function update(Request $request)
    {
        $request_data = $request->except(['']);

        // general
        if ($request->about_app_ar)
            JasemSetting::where('key', 'about_app_ar')->update(['value' => $request->about_app_ar]);
        if ($request->about_app_en)
            JasemSetting::where('key', 'about_app_en')->update(['value' => $request->about_app_en]);

        if ($request->app_description_ar)
            JasemSetting::where('key', 'app_description_ar')->update(['value' => $request->app_description_ar]);
        if ($request->app_description_en)
            JasemSetting::where('key', 'app_description_en')->update(['value' => $request->app_description_en]);

        if ($request->conditions_terms_ar)
            JasemSetting::where('key', 'conditions_terms_ar')->update(['value' => $request->conditions_terms_ar]);
        if ($request->conditions_terms_en)
            JasemSetting::where('key', 'conditions_terms_en')->update(['value' => $request->conditions_terms_en]);

        if ($request->privacy_ar)
            JasemSetting::where('key', 'privacy_ar')->update(['value' => $request->privacy_ar]);
        if ($request->privacy_en)
            JasemSetting::where('key', 'privacy_en')->update(['value' => $request->privacy_en]);


        if ($request->mobile)
            JasemSetting::where('key', 'mobile')->update(['value' => $request->mobile]);
        if ($request->email)
            JasemSetting::where('key', 'email')->update(['value' => $request->email]);
        if ($request->fax)
            JasemSetting::where('key', 'fax')->update(['value' => $request->fax]);
        if ($request->address)
            JasemSetting::where('key', 'address')->update(['value' => $request->address]);

        if ($request->latitude)
            JasemSetting::where('key', 'latitude')->update(['value' => $request->latitude]);
        if ($request->longitude)
            JasemSetting::where('key', 'longitude')->update(['value' => $request->longitude]);


        //social
        if ($request->facebook_url)
            JasemSetting::where('key', 'facebook_url')->update(['value' => $request->facebook_url]);
        if ($request->twitter_url)
            JasemSetting::where('key', 'twitter_url')->update(['value' => $request->twitter_url]);
        if ($request->youtube_url)
            JasemSetting::where('key', 'youtube_url')->update(['value' => $request->youtube_url]);
        if ($request->linked_in_url)
            JasemSetting::where('key', 'linked_in_url')->update(['value' => $request->linked_in_url]);
        if ($request->whatsapp_phone)
            JasemSetting::where('key', 'whatsapp_phone')->update(['value' => $request->whatsapp_phone]);



        return redirect()->route('jasem_settings.index')->with('message', trans('back.messages.updated_successfully'));;
    }

}
