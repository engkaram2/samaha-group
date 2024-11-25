<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{

    public function servicesTeams()
    {
        $data['teams'] = Team::where(['type' => 'services'])->get();
        $data['our_services'] = Service::where(['type' => 'services'])->take(3)->get();
        $data['offices'] = Country::where(['type' => 'services'])->get();

        return view('Front.Services.teams',$data);
    }




}
