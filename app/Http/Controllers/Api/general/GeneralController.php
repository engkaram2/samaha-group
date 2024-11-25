<?php

namespace App\Http\Controllers\Api\general;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PARENT_API;
use App\Http\Resources\Api\BlogDetailsResource;
use App\Http\Resources\Api\CityDetailsResource;
use App\Http\Resources\Api\IssueDetailsResource;
use App\Http\Resources\Api\OfficeDetailsResource;
use App\Http\Resources\Api\OurTeamsResource;
use App\Http\Resources\Api\ServiceDetailsResource;
use App\Models\Blog;
use App\Models\City;
use App\Models\Issue;
use App\Models\Office;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class GeneralController extends PARENT_API
{

    public function blogDetails(Request $request, $id)
    {
        $blog = Blog::where('id', $id)->first();
        return responseJson(true, trans('api.blog_details'),  new BlogDetailsResource($blog));  //OK don-successfully
    }

    public function teamDetails(Request $request, $id)
    {
        if (!$team = Team::where('id', $id)->first()) {
            return responseJson(false, trans('api.page_not_found'), null);  //
        }
        return responseJson(true, trans('api.team_details'),  new OurTeamsResource($team));  //OK don-successfully
    }

    public function serviceDetails(Request $request, $id)
    {
        if (!$service = Service::where('id', $id)->first()) {
            return responseJson(false, trans('api.page_not_found'), null);  //
        }
        return responseJson(true, trans('api.service_details'),  new ServiceDetailsResource($service));  //OK don-successfully
    }

    public function officeDetails(Request $request, $id)
    {
        if (!$office_details = Office::where('id', $id)->first()) {
            return responseJson(false, trans('api.page_not_found'), null);  //
        }
        return responseJson(true, trans('api.office_details'),   new OfficeDetailsResource($office_details));  //OK don-successfully
    }

    public function issueDetails(Request $request, $id)
    {
        if (!$issue = Issue::where('id', $id)->first()) {
            return responseJson(false, trans('api.page_not_found'), null);  //
        }
        return responseJson(true, trans('api.issue_details'),  new IssueDetailsResource($issue));  //OK don-successfully
    }

}
