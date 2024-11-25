<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Country;
use App\Models\LegalSetting;
use App\Models\Review;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use App\Models\TranslationSetting;
use Illuminate\Support\Facades\Log;


class HomeController extends Controller
{

    public function home()
    {
        $data['our_teams'] = Team::where(['type' => 'legal'])->get();
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();
        $data['our_blogs'] = Blog::where(['type' => 'legal'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();

        $data['our_sliders'] = Slider::where(['type' => 'legal'])->get();

        $app_description = 'app_description_' . app()->getLocale();
        $data['description'] = LegalSetting::where('key', $app_description)->first()->value;
        //        $data['our_offices'] = Country::where(['type' => 'legal'])->take(3)->get();
        return view('Front.Legal.home', $data);
    }

    public function translation_home()
    {
        $data['our_teams'] = Team::where(['type' => 'translation'])->get();
        $data['our_services'] = Service::where(['type' => 'translation'])->take(3)->get();
        $data['our_blogs'] = Blog::where(['type' => 'translation'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();
//        $app_description = 'app_description_' . app()->getLocale();
//
//        $data['description'] = TranslationSetting::where('key', $app_description)->first()->value;

//        $data['our_offices'] = Country::where(['type' => 'translation'])->take(3)->get();
        return view('Front.Translation.home', $data);
    }



    public function servicesHome()
    {
        $data['our_teams'] = Team::where(['type' => 'services'])->get();
        $data['our_services'] = Service::where(['type' => 'services'])->take(3)->get();
        $data['our_blogs'] = Blog::where(['type' => 'services'])->take(3)->get();
        $data['reviews'] = Review::where(['type' => 'services'])->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();

        return view('Front.Services.home', $data);
    }

    public function shaabanHome()
    {
        $data['our_services'] = Service::where(['type' => 'shaaban'])->take(3)->get();
        $data['reviews'] = Review::where(['type' => 'shaaban'])->get();
        $data['offices'] = Country::where(['type' => 'shaaban'])->get();

        return view('Front.Shaaban.home', $data);
    }


    public function jasemHome()
    {
        $data['our_services'] = Service::where(['type' => 'jasem'])->take(3)->get();
        $data['reviews'] = Review::where(['type' => 'jasem'])->get();
        $data['offices'] = Country::where(['type' => 'jasem'])->get();

        return view('Front.Jasem.home', $data);
    }

//        $data['our_blogs'] = Blog::where(['type' => 'shaaban'])->take(3)->get();

    public function showChat()
    {
        $data['id'] = generateRandomString();

        return view('Front.Legal.chat_page', $data);
    }





}
