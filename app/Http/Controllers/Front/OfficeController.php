<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Service;
use Illuminate\Http\Request;

class OfficeController extends Controller
{

    public function legalOffices()
    {
        $data['legal_offices'] = Country::where(['type' => 'legal'])->get();
        $data['offices'] = Country::where(['type' => 'legal'])->get();
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();

        return view('Front.Legal.offices',$data);
    }

    public function legalLocationOffices(Request $request ,$country_id)
    {
        $data['country'] = Country::where(['id' => $country_id])->first();
        $data['offices'] = Country::where(['type' => 'legal'])->get();
        $data['our_services'] = Service::where(['type' => 'legal'])->take(3)->get();
        return view('Front.Legal.location_offices',$data);
    }

    public function translationOffices()
    {
        $data['translation_offices'] = Country::where(['type' => 'translation'])->get();

        return view('Front.Translation.offices',$data);
    }

    public function translationLocationOffices(Request $request ,$country_id)
    {
        $data['country'] = Country::where(['id' => $country_id])->first();
        $data['offices'] = Country::where(['type' => 'translation'])->get();
        $data['our_services'] = Service::where(['type' => 'translation'])->take(3)->get();
        return view('Front.Translation.location_offices',$data);
    }


}
