<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Models\LegalSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LegalSettingController extends Controller
{
    public function index()
    {
        return view('Dashboard.Domains.Legal.Settings.index');
    }

    public function update(Request $request)
    {
        $request_data = $request->except(['']);

        // general
        if ($request->about_app_ar)
            LegalSetting::where('key', 'about_app_ar')->update(['value' => $request->about_app_ar]);
        if ($request->about_app_en)
            LegalSetting::where('key', 'about_app_en')->update(['value' => $request->about_app_en]);

        if ($request->conditions_terms_ar)
            LegalSetting::where('key', 'conditions_terms_ar')->update(['value' => $request->conditions_terms_ar]);
        if ($request->conditions_terms_en)
            LegalSetting::where('key', 'conditions_terms_en')->update(['value' => $request->conditions_terms_en]);

//        if ($request->privacy_ar)
//            LegalSetting::where('key', 'privacy_ar')->update(['value' => $request->privacy_ar]);
//        if ($request->privacy_en)
//            LegalSetting::where('key', 'privacy_en')->update(['value' => $request->privacy_en]);
//

        if ($request->mobile)
            LegalSetting::where('key', 'mobile')->update(['value' => $request->mobile]);
        if ($request->email)
            LegalSetting::where('key', 'email')->update(['value' => $request->email]);
        if ($request->fax)
            LegalSetting::where('key', 'fax')->update(['value' => $request->fax]);
        if ($request->address)
            LegalSetting::where('key', 'address')->update(['value' => $request->address]);

        if ($request->latitude)
            LegalSetting::where('key', 'latitude')->update(['value' => $request->latitude]);
        if ($request->longitude)
            LegalSetting::where('key', 'longitude')->update(['value' => $request->longitude]);

        //social
        if ($request->facebook_url)
            LegalSetting::where('key', 'facebook_url')->update(['value' => $request->facebook_url]);
        if ($request->twitter_url)
            LegalSetting::where('key', 'twitter_url')->update(['value' => $request->twitter_url]);
        if ($request->youtube_url)
            LegalSetting::where('key', 'youtube_url')->update(['value' => $request->youtube_url]);
        if ($request->linked_in_url)
            LegalSetting::where('key', 'linked_in_url')->update(['value' => $request->linked_in_url]);
        if ($request->whatsapp_phone)
            LegalSetting::where('key', 'whatsapp_phone')->update(['value' => $request->whatsapp_phone]);


        return redirect()->route('legal_settings.index')->with('message', trans('back.messages.updated_successfully'));;
    }





    public function showAboutApp()
    {
        return view('Dashboard.Domains.Legal.Settings.show_about_app');
    }

    public function aboutUpdate(Request $request)
    {
        $request_data = $request->except(['']);

        if ($request->app_description_ar)
            LegalSetting::where('key', 'app_description_ar')->update(['value' => $request->app_description_ar]);
        if ($request->app_description_en)
            LegalSetting::where('key', 'app_description_en')->update(['value' => $request->app_description_en]);

        if ($request->app_vision_ar)
            LegalSetting::where('key', 'app_vision_ar')->update(['value' => $request->app_vision_ar]);
        if ($request->app_vision_en)
            LegalSetting::where('key', 'app_vision_en')->update(['value' => $request->app_vision_en]);

        if ($request->app_mission_ar)
            LegalSetting::where('key', 'app_mission_ar')->update(['value' => $request->app_mission_ar]);
        if ($request->app_mission_en)
            LegalSetting::where('key', 'app_mission_en')->update(['value' => $request->app_mission_en]);

        return redirect()->route('show-about-app')->with('message', trans('back.messages.updated_successfully'));;
    }

}
