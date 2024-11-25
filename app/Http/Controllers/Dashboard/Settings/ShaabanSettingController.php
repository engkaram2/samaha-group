<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Models\ShabaanSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShaabanSettingController extends Controller
{
    public function index()
    {
        return view('Dashboard.Domains.Shaaban.Settings.index');
    }

    public function update(Request $request)
    {
        $request_data = $request->except(['']);

        // general
        if ($request->about_app_ar)
            ShabaanSetting::where('key', 'about_app_ar')->update(['value' => $request->about_app_ar]);
        if ($request->about_app_en)
            ShabaanSetting::where('key', 'about_app_en')->update(['value' => $request->about_app_en]);

        if ($request->app_description_ar)
            ShabaanSetting::where('key', 'app_description_ar')->update(['value' => $request->app_description_ar]);
        if ($request->app_description_en)
            ShabaanSetting::where('key', 'app_description_en')->update(['value' => $request->app_description_en]);

        if ($request->conditions_terms_ar)
            ShabaanSetting::where('key', 'conditions_terms_ar')->update(['value' => $request->conditions_terms_ar]);
        if ($request->conditions_terms_en)
            ShabaanSetting::where('key', 'conditions_terms_en')->update(['value' => $request->conditions_terms_en]);

        if ($request->privacy_ar)
            ShabaanSetting::where('key', 'privacy_ar')->update(['value' => $request->privacy_ar]);
        if ($request->privacy_en)
            ShabaanSetting::where('key', 'privacy_en')->update(['value' => $request->privacy_en]);


        if ($request->mobile)
            ShabaanSetting::where('key', 'mobile')->update(['value' => $request->mobile]);
        if ($request->email)
            ShabaanSetting::where('key', 'email')->update(['value' => $request->email]);
        if ($request->fax)
            ShabaanSetting::where('key', 'fax')->update(['value' => $request->fax]);
        if ($request->address)
            ShabaanSetting::where('key', 'address')->update(['value' => $request->address]);

        if ($request->latitude)
            ShabaanSetting::where('key', 'latitude')->update(['value' => $request->latitude]);
        if ($request->longitude)
            ShabaanSetting::where('key', 'longitude')->update(['value' => $request->longitude]);


        //social
        if ($request->facebook_url)
            ShabaanSetting::where('key', 'facebook_url')->update(['value' => $request->facebook_url]);
        if ($request->twitter_url)
            ShabaanSetting::where('key', 'twitter_url')->update(['value' => $request->twitter_url]);
        if ($request->youtube_url)
            ShabaanSetting::where('key', 'youtube_url')->update(['value' => $request->youtube_url]);
        if ($request->linked_in_url)
            ShabaanSetting::where('key', 'linked_in_url')->update(['value' => $request->linked_in_url]);
        if ($request->whatsapp_phone)
            ShabaanSetting::where('key', 'whatsapp_phone')->update(['value' => $request->whatsapp_phone]);



        return redirect()->route('shaaban_settings.index')->with('message', trans('back.messages.updated_successfully'));;
    }

}
