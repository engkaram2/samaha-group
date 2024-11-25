<?php

namespace App\Http\Controllers\Api\Legal;

use App\Http\Controllers\PARENT_API;

use App\Http\Resources\Api\AllNationalitiesResource;
use App\Http\Resources\Api\CityResource;
use App\Http\Resources\Api\collections\OurBlogsCollection;
use App\Http\Resources\Api\collections\OurServicesCollection;
use App\Http\Resources\Api\OurBlogsResource;
use App\Http\Resources\Api\OurOfficesCountriesResource;
use App\Http\Resources\Api\OurServicesResource;
use App\Http\Resources\Api\OurTeamsResource;
use App\Http\Resources\Api\SliderResource;
use App\Models\Blog;
use App\Models\City;
use App\Models\Country;
use App\Models\LegalSetting;
use App\Models\Nationality;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends PARENT_API
{
    public function home(Request $request)
    {
//        $quote = 'quote_' . app()->getLocale();
//        $legal_quote = LegalSetting::where('key', $quote)->first()->value;

        $whatsapp_num = LegalSetting::where('key', 'whatsapp_phone')->first()->value;

        $slider = Slider::where(['type' => 'legal'])->get();
        $our_teams = Team::where(['type' => 'legal'])->take(3)->get();
        $our_services = Service::where(['type' => 'legal'])->take(3)->get();
        $our_blogs = Blog::where(['type' => 'legal'])->take(3)->get();
        $our_offices = Country::where(['type' => 'legal'])->take(3)->get();

        $data = [
//            'legal_quote'        => $legal_quote,
            'whatsapp_num' => $whatsapp_num,
            'slider'       => SliderResource::collection($slider),
            'our_teams'    => OurTeamsResource::collection($our_teams),
            'our_services' => OurServicesResource::collection($our_services),
            'our_blogs'    => OurBlogsResource::collection($our_blogs),
            'offices_countries' => OurOfficesCountriesResource::collection($our_offices),
        ];
        return responseJson(true, trans('api.home'), $data);  //OK don-successfully
    }

    public function ourTeams(Request $request)
    {
        if ($request->has('search_by_name')) {
            $lang = app()->getLocale();
            $our_teams = Team::where(['type' => 'legal'])->where('full_name_'.$lang, 'like', '%' . $request->search_by_name . '%')->get();
            if ($our_teams->count() > 0) {
                return responseJson(true, trans('api.our_teams'), OurTeamsResource::collection($our_teams));
            }
            return responseJson(false, trans('api.Sorry,Your search did not match any results'), null);  //
        }
        $our_teams = Team::where(['type' => 'legal'])->get();
        return responseJson(true, trans('api.our_teams'), OurTeamsResource::collection($our_teams));
    }

    public function allNationalities (Request $request)
    {
        $all_nationalities = Nationality::all();
        return responseJson(true, trans('api.all_nationalities'),AllNationalitiesResource::collection($all_nationalities));
    }


    public function ourServices(Request $request)
    {
        $name = 'name_' . app()->getLocale();
        if ($request->has('search_by_name')) {
            $our_services = Service::where(['type' => 'legal'])->where($name, 'like', '%' . $request->search_by_name . '%')->paginate(10);

            if ($our_services->count() > 0) {
                return responseJson(true, trans('api.our_services'), new OurServicesCollection($our_services));  //OK don-successfully
            }
            return responseJson(false, trans('api.Sorry,Your search did not match any results'), null);  //
        }
        $our_services = Service::where(['type' => 'legal'])->paginate(5);
        return responseJson(true, trans('api.our_services'), new OurServicesCollection($our_services));  //OK don-successfully
    }


    public function ourBlogs(Request $request)
    {
        $name = 'name_' . app()->getLocale();
        if ($request->has('search_by_name')) {
            $our_blogs = Blog::where(['type' => 'legal'])->where($name, 'like', '%' . $request->search_by_name . '%')->paginate(5);

            if ($our_blogs->count() > 0) {
                return responseJson(true, trans('api.our_blogs'), new OurBlogsCollection($our_blogs));  //OK don-successfully
            }
            return responseJson(false, trans('api.Sorry,Your search did not match any results'), null);  //
        }
        $our_blogs = Blog::where(['type' => 'legal'])->paginate(5);
        return responseJson(true, trans('api.our_blogs'), new OurBlogsCollection($our_blogs));  //OK don-successfully
    }


    public function ourOfficesCountries(Request $request)
    {
        $our_offices_countries = Country::where(['type' => 'legal'])->get();
        return responseJson(true, trans('api.our_offices_countries'), OurOfficesCountriesResource::collection($our_offices_countries));
    }

    public function ourCities(Request $request,$country_id)
    {
        $our_cities = City::where('country_id', $country_id)->get();
        return responseJson(true, trans('api.our_Cities'), CityResource::collection($our_cities));
    }


    public function create_ticket_id(Request $request)
    {
        $ticket_id= generateRandomString();
        return responseJson(true, trans('api.ticket_id'),$ticket_id);
    }

}
