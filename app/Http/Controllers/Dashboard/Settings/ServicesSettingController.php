<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Models\ServiceSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesSettingController extends Controller
{
    public function index()
    {
        return view('Dashboard.Domains.Services.Settings.index');
    }

    public function update(Request $request)
    {
        $request_data = $request->except(['']);

        // general
        if ($request->about_app_ar)
            ServiceSetting::where('key', 'about_app_ar')->update(['value' => $request->about_app_ar]);
        if ($request->about_app_en)
            ServiceSetting::where('key', 'about_app_en')->update(['value' => $request->about_app_en]);

        if ($request->app_description_ar)
            ServiceSetting::where('key', 'app_description_ar')->update(['value' => $request->app_description_ar]);
        if ($request->app_description_en)
            ServiceSetting::where('key', 'app_description_en')->update(['value' => $request->app_description_en]);

        if ($request->conditions_terms_ar)
            ServiceSetting::where('key', 'conditions_terms_ar')->update(['value' => $request->conditions_terms_ar]);
        if ($request->conditions_terms_en)
            ServiceSetting::where('key', 'conditions_terms_en')->update(['value' => $request->conditions_terms_en]);

        if ($request->privacy_ar)
            ServiceSetting::where('key', 'privacy_ar')->update(['value' => $request->privacy_ar]);
        if ($request->privacy_en)
            ServiceSetting::where('key', 'privacy_en')->update(['value' => $request->privacy_en]);


        if ($request->mobile)
            ServiceSetting::where('key', 'mobile')->update(['value' => $request->mobile]);
        if ($request->email)
            ServiceSetting::where('key', 'email')->update(['value' => $request->email]);
        if ($request->fax)
            ServiceSetting::where('key', 'fax')->update(['value' => $request->fax]);
        if ($request->address)
            ServiceSetting::where('key', 'address')->update(['value' => $request->address]);

        if ($request->latitude)
            ServiceSetting::where('key', 'latitude')->update(['value' => $request->latitude]);
        if ($request->longitude)
            ServiceSetting::where('key', 'longitude')->update(['value' => $request->longitude]);


        //social
        if ($request->facebook_url)
            ServiceSetting::where('key', 'facebook_url')->update(['value' => $request->facebook_url]);
        if ($request->twitter_url)
            ServiceSetting::where('key', 'twitter_url')->update(['value' => $request->twitter_url]);
        if ($request->youtube_url)
            ServiceSetting::where('key', 'youtube_url')->update(['value' => $request->youtube_url]);
        if ($request->linked_in_url)
            ServiceSetting::where('key', 'linked_in_url')->update(['value' => $request->linked_in_url]);
        if ($request->whatsapp_phone)
            ServiceSetting::where('key', 'whatsapp_phone')->update(['value' => $request->whatsapp_phone]);



        return redirect()->route('services_settings.index')->with('message', trans('back.messages.updated_successfully'));;
    }

}
