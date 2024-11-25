<?php

namespace App\Http\Controllers\Api\general;

use App\Http\Controllers\PARENT_API;
use App\Http\Resources\Api\collections\OurBlogsCollection;
use App\Http\Resources\Api\collections\OurOfficesCollection;
use App\Http\Resources\Api\collections\OurServicesCollection;
use App\Http\Resources\Api\collections\OurTeamsCollection;
use App\Http\Resources\Api\OurBlogsResource;
use App\Http\Resources\Api\OurOfficesCountriesResource;
use App\Http\Resources\Api\OurServicesResource;
use App\Http\Resources\Api\OurTeamsResource;
use App\Models\Country;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Team;
use Illuminate\Http\Request;

class FilterController extends PARENT_API
{
    public function filter(Request $request)
    {
//        $data['services']=Service::search('test')->paginate(5);
//        if ($request->has('search_by_name')) {

        if ($request->domain_type == 'legal') {
            $name = 'name_' . app()->getLocale();
            $services_query = Service::query()->where(['type' => 'legal'])->where($name, 'like', '%' . $request->search_by_name . '%');
            $blogs_query = Blog::query()->where(['type' => 'legal'])->where($name, 'like', '%' . $request->search_by_name . '%');
            $teams_query = Team::query()->where(['type' => 'legal'])->where('full_name', 'like', '%' . $request->search_by_name . '%');
            $offices_query = Country::query()->where(['type' => 'legal'])->where($name, 'like', '%' . $request->search_by_name . '%');

            if ($request->category == 'services') {
                $related_services = $services_query->paginate(5);
                return responseJson(true, trans('api.our_services'),  new OurServicesCollection($related_services));
            }

            if ($request->category == 'blogs') {
                $related_blogs = $blogs_query->paginate(5);
                return responseJson(true, trans('api.our_blogs'), new OurBlogsCollection($related_blogs));
            }

            if ($request->category == 'teams') {
                $related_teams = $teams_query->paginate(5);
                return responseJson(true, trans('api.our_teams'), new OurTeamsCollection($related_teams));
            }

           if ($request->category == 'offices') {
                $related_offices = $offices_query->paginate(5);
                return responseJson(true, trans('api.our_offices_countries'), new OurOfficesCollection($related_offices));
            }

            $data = [
                'related_services' =>  new OurServicesCollection($services_query->paginate(5)),
                'related_blogs' => new OurBlogsCollection($blogs_query->paginate(5)),
                'related_teams' => new OurTeamsCollection($teams_query->paginate(5)),
                'related_offices' => new OurOfficesCollection($offices_query->paginate(5)),
            ];

            return responseJson(true, trans('api.search'), $data);  //OK don-successfully
        }

        if ($request->domain_type == 'services') {
            $name = 'name_' . app()->getLocale();
            $services_query = Service::query()->where(['type' => 'services'])->where($name, 'like', '%' . $request->search_by_name . '%');
            $blogs_query = Blog::query()->where(['type' => 'services'])->where($name, 'like', '%' . $request->search_by_name . '%');
            $teams_query = Team::query()->where(['type' => 'services'])->where('full_name', 'like', '%' . $request->search_by_name . '%');

            if ($request->category == 'services') {
                $related_services = $services_query->paginate(5);
                return responseJson(true, trans('api.our_services'),  new OurServicesCollection($related_services));
            }
            if ($request->category == 'blogs') {
                $related_blogs = $blogs_query->paginate(5);
                return responseJson(true, trans('api.our_blogs'), new OurBlogsCollection($related_blogs));
            }
            if ($request->category == 'teams') {
                $related_teams = $teams_query->paginate(5);
                return responseJson(true, trans('api.our_teams'), new OurTeamsCollection($related_teams));
            }

            $data = [
                'related_services' =>  new OurServicesCollection($services_query->paginate(5)),
                'related_blogs' => new OurBlogsCollection($blogs_query->paginate(5)),
                'related_teams' => new OurTeamsCollection($teams_query->paginate(5)),
            ];
            return responseJson(true, trans('api.search'), $data);  //OK don-successfully
        }

        if ($request->domain_type == 'translation') {
            $name = 'name_' . app()->getLocale();
            $services_query = Service::query()->where(['type' => 'translation'])->where($name, 'like', '%' . $request->search_by_name . '%');
            $blogs_query = Blog::query()->where(['type' => 'translation'])->where($name, 'like', '%' . $request->search_by_name . '%');
            $teams_query = Team::query()->where(['type' => 'translation'])->where('full_name', 'like', '%' . $request->search_by_name . '%');
            $offices_query = Country::query()->where(['type' => 'translation'])->where($name, 'like', '%' . $request->search_by_name . '%');

            if ($request->category == 'services') {
                $related_services = $services_query->paginate(5);
                return responseJson(true, trans('api.our_services'),  new OurServicesCollection($related_services));
            }
            if ($request->category == 'blogs') {
                $related_blogs = $blogs_query->paginate(5);
                return responseJson(true, trans('api.our_blogs'), new OurBlogsCollection($related_blogs));
            }
            if ($request->category == 'teams') {
                $related_teams = $teams_query->paginate(5);
                return responseJson(true, trans('api.our_teams'), new OurTeamsCollection($related_teams));
            }
            if ($request->category == 'offices') {
                $related_offices = $offices_query->paginate(5);
                return responseJson(true, trans('api.our_offices_countries'), new OurOfficesCollection($related_offices));
            }
            $data = [
                'related_services' =>  new OurServicesCollection($services_query->paginate(5)),
                'related_blogs' => new OurBlogsCollection($blogs_query->paginate(5)),
                'related_teams' => new OurTeamsCollection($teams_query->paginate(5)),
                'related_offices' => new OurOfficesCollection($offices_query->paginate(5)),
            ];
            return responseJson(true, trans('api.search'), $data);  //OK don-successfully
        }





        if ($request->domain_type == 'shaaban') {
            $name = 'name_' . app()->getLocale();
            $services_query = Service::query()->where(['type' => 'shaaban'])->where($name, 'like', '%' . $request->search_by_name . '%');
            $blogs_query = Blog::query()->where(['type' => 'shaaban'])->where($name, 'like', '%' . $request->search_by_name . '%');

            if ($request->category == 'services') {
                $related_services = $services_query->paginate(5);
                return responseJson(true, trans('api.our_services'),  new OurServicesCollection($related_services));
            }
            if ($request->category == 'blogs') {
                $related_blogs = $blogs_query->paginate(5);
                return responseJson(true, trans('api.our_blogs'), new OurBlogsCollection($related_blogs));
            }
            $data = [
                'related_services' =>  new OurServicesCollection($services_query->paginate(5)),
                'related_blogs' => new OurBlogsCollection($blogs_query->paginate(5)),
            ];
            return responseJson(true, trans('api.search'), $data);  //OK don-successfully
        }

        if ($request->domain_type == 'jasem') {
            $name = 'name_' . app()->getLocale();
            $services_query = Service::query()->where(['type' => 'jasem'])->where($name, 'like', '%' . $request->search_by_name . '%');
            $blogs_query = Blog::query()->where(['type' => 'jasem'])->where($name, 'like', '%' . $request->search_by_name . '%');

            if ($request->category == 'services') {
                $related_services = $services_query->paginate(5);
                return responseJson(true, trans('api.our_services'),  new OurServicesCollection($related_services));
            }
//            if ($request->category == 'blogs') {
//                $related_blogs = $blogs_query->paginate(5);
//                return responseJson(true, trans('api.our_blogs'), new OurBlogsCollection($related_blogs));
//            }
            $data = [
                'related_services' =>  new OurServicesCollection($services_query->paginate(5)),
//                'related_blogs' => new OurBlogsCollection($blogs_query->paginate(5)),
            ];
            return responseJson(true, trans('api.search'), $data);  //OK don-successfully
        }


        return responseJson(true, trans('api.search'), null);  //OK don-successfully
    }


    public function get_categories_of_subdomains(Request $request)
    {
        if ($request->domain_type == 'services') {
//            $data = ['services' => 'services','blogs' => 'blogs','teams' => 'teams'];
            return responseJson(true, trans('api.categories_of_subdomains'),['services','blogs','teams'] );  //OK don-successfully
        }

        if ($request->domain_type == 'shaaban') {
            return responseJson(true, trans('api.categories_of_subdomains'),['services','blogs'] );  //OK don-successfully
        }
        if ($request->domain_type == 'jasem') {
            return responseJson(true, trans('api.categories_of_subdomains'),['services'] );  //OK don-successfully
        }
        return responseJson(true, trans('api.categories_of_subdomains'),['services','blogs','teams','offices'] );  //OK don-successfully

    }
}

//    public function ourServices(Request $request)
//    {
//        $our_services = Service::where(['type' => 'legal'])->paginate(5);
//        return responseJson(true, trans('api.our_services'),  new OurServicesCollection($our_services));
//    }


//    public function ourBlogs(Request $request)
//    {
//        $our_blogs = Blog::where(['type' => 'legal'])->take(2)->paginate(5);
//        return responseJson(true, trans('api.our_blogs'), new OurBlogsCollection($our_blogs));
//    }
