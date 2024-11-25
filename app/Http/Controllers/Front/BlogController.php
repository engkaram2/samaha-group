<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Country;
use App\Models\Service;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function legalNews()
    {
        $data['news'] = Blog::where(['type' => 'legal'])->paginate('6');
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();

//        $data['news'] = Blog::where(['type' => 'legal'])->get();
        return view('Front.Legal.news.all_news',$data);
    }

    public function legalLowUpdateNews()
    {
        $data['news'] = Blog::where(['type' => 'legal','blog_type'=>'low'])->paginate('6');
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();

//        $data['news'] = Blog::where(['type' => 'legal'])->get();
        return view('Front.Legal.news.low_news',$data);
    }

    public function legalLatestUpdateNews()
    {
        $data['news'] = Blog::where(['type' => 'legal','blog_type'=>'latest'])->paginate('6');
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();

//        $data['news'] = Blog::where(['type' => 'legal'])->get();
        return view('Front.Legal.news.latest_news',$data);
    }

    public function legalPublicationNews()
    {
        $data['news'] = Blog::where(['type' => 'legal','blog_type'=>'publications'])->paginate('6');
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();

//        $data['news'] = Blog::where(['type' => 'legal'])->get();
        return view('Front.Legal.news.publications_news',$data);
    }




    public function legalNewsDetails(Request $request,$new_id)
    {
        $data['related_news'] = Blog::where(['type' => 'legal'])->latest()->take(3)->get();

        $data['news_details'] = Blog::where(['type' => 'legal','id'=>$new_id])->first();
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();
        return view('Front.Legal.news.news_details',$data);
    }


    public function shaabanKnowledge()
    {
        $data['latest_news'] = Blog::where(['type' => 'shaaban'])->latest()->take(3)->get();
        $data['publications_news'] = Blog::where(['type' => 'shaaban'])->latest()->take(3)->get();
        $data['low_news'] = Blog::where(['type' => 'shaaban'])->latest()->take(3)->get();
        $data['our_services'] = Service::where(['type' => 'shaaban'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'shaaban'])->get();
        return view('Front.Shaaban.knowledge',$data);
    }



    public function shaabanBlogs()
    {
        $data['news'] = Blog::where(['type' => 'shaaban'])->paginate(1);
        $data['our_services'] = Service::where(['type' => 'shaaban'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'shaaban'])->get();
        return view('Front.Shaaban.blogs',$data);
    }

    public function shaabanBlogDetails(Request $request,$blog_id)
    {
        $data['related_news'] = Blog::where(['type' => 'shaaban'])->latest()->take(3)->get();
        $data['news_details'] = Blog::where(['type' => 'shaaban','id'=>$blog_id])->first();
        $data['our_services'] = Service::where(['type' => 'shaaban'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'shaaban'])->get();
        return view('Front.Shaaban.blog_details',$data);
    }


    public function translationNews()
    {
        $data['news'] = Blog::where(['type' => 'translation'])->paginate('6');
        $data['our_services'] = Service::where(['type' => 'translation'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();
        return view('Front.Translation.news',$data);
    }
    public function translationNewsDetails(Request $request,$new_id)
    {
        $data['related_news'] = Blog::where(['type' => 'translation'])->latest()->take(3)->get();
        $data['news_details'] = Blog::where(['type' => 'translation','id'=>$new_id])->first();
        $data['our_services'] = Service::where(['type' => 'translation'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();
        return view('Front.Translation.new_details',$data);
    }



    public function servicesNews()
    {
        $data['news'] = Blog::where(['type' => 'services'])->paginate('6');
        $data['our_services'] = Service::where(['type' => 'services'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();
        return view('Front.Services.news',$data);
    }
    public function servicesNewsDetails(Request $request,$new_id)
    {
        $data['related_news'] = Blog::where(['type' => 'services'])->latest()->take(3)->get();
        $data['news_details'] = Blog::where(['type' => 'services','id'=>$new_id])->first();
        $data['our_services'] = Service::where(['type' => 'services'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();
        return view('Front.Services.new_details',$data);
    }

}
