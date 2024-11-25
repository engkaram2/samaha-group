<?php

namespace App\Http\Controllers\Api\Shaaban;

use App\Http\Controllers\PARENT_API;

use App\Http\Resources\Api\collections\OurBlogsCollection;
use App\Http\Resources\Api\collections\OurServicesCollection;
use App\Http\Resources\Api\OurBlogsResource;
use App\Http\Resources\Api\OurServicesResource;
use App\Http\Resources\Api\SliderResource;
use App\Models\Blog;
use App\Models\Service;
use App\Models\ShabaanSetting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends PARENT_API
{

    public function home(Request $request)
    {

        $whatsapp_num = ShabaanSetting::where('key', 'whatsapp_phone')->first()->value;

        $slider       = Slider::where(['type' => 'shaaban'])->get();
        $our_services = Service::where(['type' => 'shaaban'])->take(3)->get();
        $our_blogs    = Blog::where(['type' => 'shaaban'])->take(3)->get();

        $data = [
            'whatsapp_num'         => $whatsapp_num,
            'slider'               => SliderResource::collection($slider),
            'our_services'         => OurServicesResource::collection($our_services),
            'our_blogs'            => OurBlogsResource::collection($our_blogs),
        ];

        return responseJson(true, trans('api.home'), $data);  //OK don-successfully
    }


    public function ourServices(Request $request)
    {
        $name = 'name_' . app()->getLocale();
        if ($request->has('search_by_name')) {
            $our_services = Service::where(['type' => 'shaaban'])->where($name, 'like', '%' . $request->search_by_name . '%')->paginate(5);

            if ($our_services->count() > 0) {
                return responseJson(true, trans('api.our_services'), new OurServicesCollection($our_services));  //OK don-successfully
            }
            return responseJson(false, trans('api.Sorry,Your search did not match any results'), null);  //
        }
        $our_services = Service::where(['type' => 'shaaban'])->paginate(5);
        return responseJson(true, trans('api.our_services'), new OurServicesCollection($our_services));  //OK don-successfully
    }


    public function ourBlogs(Request $request)
    {
        $name = 'name_' . app()->getLocale();
        if ($request->has('search_by_name')) {
            $our_blogs = Blog::where(['type' => 'shaaban'])->where($name, 'like', '%' . $request->search_by_name . '%')->paginate(5);

            if ($our_blogs->count() > 0) {
                return responseJson(true, trans('api.our_blogs'), new OurBlogsCollection($our_blogs));  //OK don-successfully
            }
            return responseJson(false, trans('api.Sorry,Your search did not match any results'), null);  //
        }
        $our_blogs = Blog::where(['type' => 'shaaban'])->paginate(5);
        return responseJson(true, trans('api.our_blogs'), new OurBlogsCollection($our_blogs));  //OK don-successfully
    }


}
