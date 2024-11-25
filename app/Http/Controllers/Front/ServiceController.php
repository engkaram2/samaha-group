<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Country;
use Illuminate\Http\Request;


class ServiceController extends Controller
{

    public function legalServices()
    {
        $data['legal_services'] = Service::where(['type' => 'legal','status'=>1])->get();
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();
        return view('Front.Legal.services',$data);
    }
    public function legalServiceDetails(Request $request,$service_id)
    {
        $data['latest_service'] = Service::where(['type' => 'legal'])->latest()->take(3)->get();

        $data['legal_service_details'] = Service::where(['type' => 'legal','id'=>$service_id])->first();
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();

        return view('Front.Legal.service_details',$data);
    }




    public function translationServices()
    {
        $data['translation_services'] = Service::where(['type' => 'translation'])->get();
        $data['our_services'] = Service::where(['type' => 'translation'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();

        return view('Front.Translation.services',$data);
    }
    public function translationServiceDetails(Request $request,$service_id)
    {
        $data['latest_service'] = Service::where(['type' => 'translation'])->latest()->take(3)->get();
        $data['translation_service_details'] = Service::where(['type' => 'translation','id'=>$service_id])->first();
        $data['our_services'] = Service::where(['type' => 'translation'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'translation'])->get();

        return view('Front.Translation.service_details',$data);
    }



    public function servicesServices()
    {
        $data['our_services'] = Service::where(['type' => 'services'])->get();
        $data['our_services'] = Service::where(['type' => 'services'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();

        return view('Front.Services.services',$data);
    }
   public function servicesServiceDetails(Request $request,$service_id)
    {
        $data['latest_service'] = Service::where(['type' => 'services'])->latest()->take(3)->get();

        $data['services_service_details'] = Service::where(['type' => 'services','id'=>$service_id])->first();
        $data['our_services'] = Service::where(['type' => 'services'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();

        return view('Front.Services.service_details',$data);
    }


    public function jasemServices()
    {
        $data['jasem_services'] = Service::where(['type' => 'jasem'])->get();
        $data['our_services'] = Service::where(['type' => 'jasem'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'jasem'])->get();
        return view('Front.Jasem.services',$data);
    }

    public function jasemServiceDetails(Request $request,$service_id)
    {
        $data['jasem_service_details'] = Service::where(['type' => 'jasem','id'=>$service_id])->first();
        $data['jasem_services'] = Service::where(['type' => 'jasem'])->get();
        $data['our_services'] = Service::where(['type' => 'jasem'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'jasem'])->get();

        return view('Front.Jasem.service_details',$data);
    }


    public function shaabanServiceDetails(Request $request,$service_id)
    {
        $data['latest_service'] = Service::where(['type' => 'shaaban'])->latest()->take(3)->get();
        $data['our_services'] = Service::where(['type' => 'shaaban'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'shaaban'])->get();


        $data['shaaban_service_details'] = Service::where(['type' => 'shaaban','id'=>$service_id])->first();
        return view('Front.Shaaban.service_details',$data);
    }

}
