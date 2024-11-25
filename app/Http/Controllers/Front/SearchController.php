<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Service;
use App\Models\Country;
use Illuminate\Http\Request;

class

SearchController extends Controller
{
    public function showSearch()
    {
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();

        return view('Front.Legal.show_search' ,$data);
    }

    public function search(Request $request)
    {
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();
        $quote = 'quote_' . app()->getLocale();
        if ($request->has('search_by_word'))
        {
            $data['all_Services'] = Service::where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['all_blogs'] = Blog::where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['legal_Services'] = Service::where('type', 'legal')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['legal_blogs'] = Blog::where('type', 'legal')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['translation_Services'] = Service::where('type', 'translation')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['translation_blogs'] = Blog::where('type', 'translation')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();


            $data['services_Services'] = Service::where('type', 'services')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['services_blogs'] = Blog::where('type', 'services')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['shaaban_Services'] = Service::where('type', 'shaaban')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['shaaban_blogs'] = Blog::where('type', 'shaaban')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['jasem_Services'] = Service::where('type', 'jasem')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
        }
        return view('Front.Legal.search',$data);
    }




    public function translationShowSearch()
    {
        $data['our_services'] = Service::where(['type' => 'translation'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();
        return view('Front.Translation.show_search' , $data);
    }

    public function translationSearch(Request $request)
    {
        $data['our_services'] = Service::where(['type' => 'translation'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();
        $quote = 'quote_' . app()->getLocale();

        if ($request->has('search_by_word'))
        {
            $data['all_Services'] = Service::where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['all_blogs'] = Blog::where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['legal_Services'] = Service::where('type', 'legal')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['legal_blogs'] = Blog::where('type', 'legal')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['translation_Services'] = Service::where('type', 'translation')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['translation_blogs'] = Blog::where('type', 'translation')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();


            $data['services_Services'] = Service::where('type', 'services')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['services_blogs'] = Blog::where('type', 'services')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['shaaban_Services'] = Service::where('type', 'shaaban')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['shaaban_blogs'] = Blog::where('type', 'shaaban')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['jasem_Services'] = Service::where('type', 'jasem')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
        }
        return view('Front.Translation.search',$data);
    }


    public function servicesShowSearch()
    {
        $data['our_services'] = Service::where(['type' => 'services'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();
        return view('Front.Services.show_search' , $data);
    }

    public function servicesSearch(Request $request)
    {
        $data['our_services'] = Service::where(['type' => 'services'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();
        $quote = 'quote_' . app()->getLocale();

        if ($request->has('search_by_word'))
        {
            $data['all_Services'] = Service::where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['all_blogs'] = Blog::where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['legal_Services'] = Service::where('type', 'legal')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['legal_blogs'] = Blog::where('type', 'legal')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['translation_Services'] = Service::where('type', 'translation')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['translation_blogs'] = Blog::where('type', 'translation')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();


            $data['services_Services'] = Service::where('type', 'services')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['services_blogs'] = Blog::where('type', 'services')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['shaaban_Services'] = Service::where('type', 'shaaban')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['shaaban_blogs'] = Blog::where('type', 'shaaban')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['jasem_Services'] = Service::where('type', 'jasem')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
        }
        return view('Front.Services.search',$data);
    }


    public function shaabanShowSearch()
    {
        $data['our_services'] = Service::where(['type' => 'shaaban'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'shaaban'])->get();
        return view('Front.Shaaban.show_search' , $data);
    }

    public function shaabanSearch(Request $request)
    {
        $data['our_services'] = Service::where(['type' => 'shaaban'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'shaaban'])->get();
        $quote = 'quote_' . app()->getLocale();

        if ($request->has('search_by_word'))
        {
            $data['all_Services'] = Service::where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['all_blogs'] = Blog::where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['legal_Services'] = Service::where('type', 'legal')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['legal_blogs'] = Blog::where('type', 'legal')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['translation_Services'] = Service::where('type', 'translation')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['translation_blogs'] = Blog::where('type', 'translation')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();


            $data['services_Services'] = Service::where('type', 'services')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['services_blogs'] = Blog::where('type', 'services')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['shaaban_Services'] = Service::where('type', 'shaaban')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['shaaban_blogs'] = Blog::where('type', 'shaaban')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['jasem_Services'] = Service::where('type', 'jasem')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
        }
        return view('Front.Shaaban.search',$data);
    }

    public function jasemShowSearch()
    {
        $data['our_services'] = Service::where(['type' => 'jasem'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'jasem'])->get();
        return view('Front.Jasem.show_search', $data);
    }

    public function jasemSearch(Request $request)
    {
        $data['our_services'] = Service::where(['type' => 'jasem'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'jasem'])->get();
        $quote = 'quote_' . app()->getLocale();
//        $Services = Service::where($quote, 'like', '%' . $request->search_by_word . '%');
//        $blogs = Blog::where($quote, 'like', '%' . $request->search_by_word . '%');

//        $Services_query = Service::query();

        if ($request->has('search_by_word'))
        {
            $data['all_Services'] = Service::where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['all_blogs'] = Blog::where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['legal_Services'] = Service::where('type', 'legal')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['legal_blogs'] = Blog::where('type', 'legal')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['translation_Services'] = Service::where('type', 'translation')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['translation_blogs'] = Blog::where('type', 'translation')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();


            $data['services_Services'] = Service::where('type', 'services')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['services_blogs'] = Blog::where('type', 'services')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['shaaban_Services'] = Service::where('type', 'shaaban')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
            $data['shaaban_blogs'] = Blog::where('type', 'shaaban')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();

            $data['jasem_Services'] = Service::where('type', 'jasem')->where($quote, 'like', '%' . $request->search_by_word . '%')->get();
        }
        return view('Front.Jasem.search',$data);
    }
}


