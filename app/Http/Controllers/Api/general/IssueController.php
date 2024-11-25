<?php

namespace App\Http\Controllers\Api\general;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PARENT_API;
use App\Http\Resources\Api\IssuesResource;
use Illuminate\Http\Request;

class IssueController extends PARENT_API
{
    public function myIssues()
    {
        $issues =  auth()->user()->issues()->latest()->get();
        return responseJson(true, trans('api.all_issues'),IssuesResource::collection($issues) );  //OK don-successfully
    }

    public function servicesIssues()
    {
        $issues =  auth()->user()->issues()->where('type','services')->latest()->get();
        return responseJson(true, trans('api.all_issues'),IssuesResource::collection($issues) );  //OK don-successfully
    }
    public function translationIssues()
    {
        $issues =  auth()->user()->issues()->where('type','translation')->latest()->get();
        return responseJson(true, trans('api.all_issues'),IssuesResource::collection($issues) );  //OK don-successfully
    }

    public function shaabanIssues()
    {
        $issues =  auth()->user()->issues()->where('type','shaaban')->latest()->get();
        return responseJson(true, trans('api.all_issues'),IssuesResource::collection($issues) );  //OK don-successfully
    }

    public function jasemIssues()
    {
        $issues =  auth()->user()->issues()->where('type','jasem')->latest()->get();
        return responseJson(true, trans('api.all_issues'),IssuesResource::collection($issues) );  //OK don-successfully
    }


}
