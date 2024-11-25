@extends('Dashboard.layouts.master')
@section('title', trans('back.edit-var',['var'=>trans('back.team.team')]))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--            </li>--}}
            <li><a href="{{ route('teams.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.team.teams')</a></li>
            <li class="active">@lang('back.edit-var',['var'=>trans('back.team.team')])</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@endsection
{{--@section('logo')--}}
{{--    <img class="" width="150" src="{{auth()->guard('admin')->user()->image_path }}"/>--}}
{{--@stop--}}
@section('content')

    @include('Dashboard.layouts.parts.validation_errors')
    <div class="row" style="padding: 15px;">
        <div class="col-md-9">

            <!-- Basic layout-->
            <form action="{{ route('teams.update',$team) }}" class="form-horizontal" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">{{ trans('back.edit') }} </h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            <label><strong>{{ trans('back.full_name_ar') }}</strong></label>
                            <input type="text" class="form-control"
                            value="{{$team->full_name_ar}}" name="full_name_ar" placeholder="@lang('back.full_name_ar') ">
                        </div>
                        <div class="form-group">
                            <label><strong>{{ trans('back.full_name_en') }}</strong></label>
                            <input type="text" class="form-control"
                            value="{{$team->full_name_en}}" name="full_name_en" placeholder="@lang('back.full_name_en') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$team->email}}" name="email" placeholder="@lang('back.email') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$team->mobile}}" name="mobile" placeholder="@lang('back.mobile') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$team->job}}" name="job" placeholder="@lang('back.job') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$team->twitter_link}}" name="twitter_link" placeholder="@lang('back.twitter_link') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$team->fb_link}}" name="fb_link" placeholder="@lang('back.fb_link') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$team->instagram_link}}" name="instagram_link" placeholder="@lang('back.instagram_link') ">
                        </div>

                        <div class="form-group">
                            <label><strong>{{ trans('back.description_ar') }}</strong></label>
                            <textarea class=" form-control"
                                      name="description_ar">{{ $team->description_ar }}</textarea>
                        </div>

                        <div class="form-group">
                            <label><strong>{{ trans('back.description_en') }}</strong></label>
                            <textarea class=" form-control"
                                      name="description_en">{{$team->description_en }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>@lang('back.image')</label>
                            <input type="file" class="form-control image " name="image">
                        </div>

                        <div class="form-group">
                            <img src=" {{ $team->image_path }}" width=" 100px " value="{{ $team->image_path }}"
                                 class="thumbnail image-preview">
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn btn-success" value=" {{ trans('back.update_and_forward_to_list') }} "/>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /basic layout -->
        </div>
    </div>

@stop
