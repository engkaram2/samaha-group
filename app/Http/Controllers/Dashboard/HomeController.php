<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function legal_home()
    {
        $data['latest_services']= Service::where(['type'=>auth()->guard('admin')->user()->type])->orderBy('id', 'desc')->take(3)->get();

        return  view('Dashboard.Domains.Legal.home.home',$data);
    }
    public  function translation_home()
    {
//        $data['latest_courses'] = Course::orderBy('id', 'desc')->take(5)->get();

        return  view('Dashboard.Domains.Translation.home.home');
    }
    public  function services_home()
    {
//        $data['latest_courses'] = Course::orderBy('id', 'desc')->take(5)->get();

        return  view('Dashboard.Domains.Services.home.home');
    }

    public  function shaaban_home()
    {
//        $data['latest_courses'] = Course::orderBy('id', 'desc')->take(5)->get();

        return  view('Dashboard.Domains.Shaaban.home.home');
    }

    public  function jasem_home()
    {
//        $data['latest_courses'] = Course::orderBy('id', 'desc')->take(5)->get();

        return  view('Dashboard.Domains.Jasem.home.home');
    }
}
