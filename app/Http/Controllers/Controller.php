<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
//use View;
//use LaravelLocalization;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        if (LaravelLocalization::getCurrentLocale() == 'ar') {
            $name = 'name_ar';
            $quote = 'quote_ar';
            $description = 'description_ar';
            $description1 = 'description1_ar';
            $description2 = 'description2_ar';
            $title1 = 'title1_ar';
            $title2 = 'title2_ar';
            $question = 'question_ar';
            $conditions_terms = 'conditions_terms_ar';
            $auction_terms = 'auction_terms_ar';
            $about_app = 'about_app_ar';
            $app_description = 'app_description_ar';
            $privacy = 'privacy_ar';
            $app_vision = 'app_vision_ar';
            $app_mission = 'app_mission_ar';
        } elseif (LaravelLocalization::getCurrentLocale() == 'en') {
            $name = 'name_en';
            $quote = 'quote_en';
            $description = 'description_en';
            $description1 = 'description1_en';
            $description2 = 'description2_en';
            $title1 = 'title1_en';
            $title2 = 'title2_en';
            $question = 'question_en';
            $conditions_terms = 'conditions_terms_en';
            $auction_terms = 'auction_terms_en';
            $about_app = 'about_app_en';
            $app_description = 'app_description_en';
            $privacy = 'privacy_en';
            $app_vision = 'app_vision_en';
            $app_mission = 'app_mission_en';        }
        View::share('name', $name);
        View::share('quote', $quote);
        View::share('description', $description);
        View::share('description1', $description1);
        View::share('description2', $description2);
        View::share('title1', $title1);
        View::share('title2', $title2);
        View::share('question', $question);
        View::share('conditions_terms', $conditions_terms);
        View::share('auction_terms', $auction_terms);
        View::share('about_app', $about_app);
        View::share('app_description', $app_description);
        View::share('privacy', $privacy);
        View::share('vision', $app_vision);
        View::share('mission', $app_mission);
//        $categories = Category::all();
//        // Sharing is caring
//        View::share('categories', $categories);
//        $this->admin = auth()->guard('admin')->user();

    }
}
