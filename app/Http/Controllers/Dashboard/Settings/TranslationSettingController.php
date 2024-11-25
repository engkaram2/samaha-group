<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Models\TranslationSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TranslationSettingController extends Controller
{
    public function index()
    {
        return view('Dashboard.Domains.Translation.Settings.index');
    }

    public function update(Request $request)
    {
        $request_data = $request->except(['']);

        // general
        if ($request->about_app_ar)
            TranslationSetting::where('key', 'about_app_ar')->update(['value' => $request->about_app_ar]);
        if ($request->about_app_en)
            TranslationSetting::where('key', 'about_app_en')->update(['value' => $request->about_app_en]);

        if ($request->app_description_ar)
            TranslationSetting::where('key', 'app_description_ar')->update(['value' => $request->app_description_ar]);
        if ($request->app_description_en)
            TranslationSetting::where('key', 'app_description_en')->update(['value' => $request->app_description_en]);

        if ($request->conditions_terms_ar)
            TranslationSetting::where('key', 'conditions_terms_ar')->update(['value' => $request->conditions_terms_ar]);
        if ($request->conditions_terms_en)
            TranslationSetting::where('key', 'conditions_terms_en')->update(['value' => $request->conditions_terms_en]);

        if ($request->privacy_ar)
            TranslationSetting::where('key', 'privacy_ar')->update(['value' => $request->privacy_ar]);
        if ($request->privacy_en)
            TranslationSetting::where('key', 'privacy_en')->update(['value' => $request->privacy_en]);


        if ($request->mobile)
            TranslationSetting::where('key', 'mobile')->update(['value' => $request->mobile]);
        if ($request->email)
            TranslationSetting::where('key', 'email')->update(['value' => $request->email]);
        if ($request->fax)
            TranslationSetting::where('key', 'fax')->update(['value' => $request->fax]);
        if ($request->address)
            TranslationSetting::where('key', 'address')->update(['value' => $request->address]);

        if ($request->latitude)
            TranslationSetting::where('key', 'latitude')->update(['value' => $request->latitude]);
        if ($request->longitude)
            TranslationSetting::where('key', 'longitude')->update(['value' => $request->longitude]);


        //social
        if ($request->facebook_url)
            TranslationSetting::where('key', 'facebook_url')->update(['value' => $request->facebook_url]);
        if ($request->twitter_url)
            TranslationSetting::where('key', 'twitter_url')->update(['value' => $request->twitter_url]);
        if ($request->youtube_url)
            TranslationSetting::where('key', 'youtube_url')->update(['value' => $request->youtube_url]);
        if ($request->linked_in_url)
            TranslationSetting::where('key', 'linked_in_url')->update(['value' => $request->linked_in_url]);
        if ($request->whatsapp_phone)
            TranslationSetting::where('key', 'whatsapp_phone')->update(['value' => $request->whatsapp_phone]);



        return redirect()->route('translation_settings.index')->with('message', trans('back.messages.updated_successfully'));;
    }

}
