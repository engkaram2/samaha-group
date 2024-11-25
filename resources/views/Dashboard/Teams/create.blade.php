@extends('Dashboard.layouts.master')
@section('title', trans('back.create-var',['var'=>trans('back.team.team')]))
@section('style')
@endsection
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--            </li>--}}
            <li><a href="{{ route('teams.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.team.teams')</a></li>
            <li class="active">@lang('back.create-var',['var'=>trans('back.team.team')])</li>
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
        <div class="col-md-6">

            <!-- Basic layout-->
            <form action="{{ route('teams.store') }}" class="form-horizontal" method="post" id="submitted-form"
                  enctype="multipart/form-data">
                @csrf
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">@lang('back.create-var',['var'=>trans('back.team.team')])</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="box-body">
                            <div class="form-group">
                                <label><strong>{{ trans('back.full_name_ar') }}</strong></label>
                                    <input type="text" class="form-control"
                                           value="{{ old('full_name_ar') }}" name="full_name_ar"
                                           placeholder="@lang('back.full_name_ar')" required>
                                    <span class="label-text"></span>
                                @error('full_name_ar')
                                    <span  class="label-text" style="color: #e81414;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label><strong>{{ trans('back.full_name_en') }}</strong></label>
                                <input type="text" class="form-control"
                                       value="{{ old('full_name_en') }}" name="full_name_en"
                                       placeholder="@lang('back.full_name_en')" required>
                                <span class="label-text"></span>
                                @error('full_name_en')
                                    <span  class="label-text" style="color: #e81414;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">{{ trans('back.email') }}</label>
                                <div class="col-lg-9">
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                           placeholder="{{ trans('back.email') }}" required>
                                    <span class="label-text"></span>
                                    @error('email') <span class="label-text"
                                                          style="color: #e81414;">{{ $message }}</span>@enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-lg-3 control-label">{{ trans('back.mobile') }}</label>
                                <div class="col-lg-3">
                                    <input type="text" maxlength="14" name="mobile" value="{{ old('mobile') }}"
                                           class="form-control"
                                           placeholder=" {{ trans('back.mobile') }}" required>
                                    <span class="label-text"></span>
                                    @error('mobile') <span class="label-text"
                                                           style="color: #e81414;">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">{{ trans('back.team.job') }}</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" value="{{ old('job') }}" name="job"
                                           placeholder="@lang('back.team.job')" required>
                                    <span class="label-text"></span>
                                    @error('job') <span class="label-text"
                                                        style="color: #e81414;">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">{{ trans('back.team.fb_link') }}</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" value="{{ old('fb_link') }}" name="fb_link"
                                           placeholder="@lang('back.team.fb_link')" required>
                                    <span class="label-text"></span>
                                    @error('fb_link') <span class="label-text"
                                                        style="color: #e81414;">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">{{ trans('back.team.twitter_link') }}</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" value="{{ old('twitter_link') }}" name="twitter_link"
                                           placeholder="@lang('back.team.twitter_link')" required>
                                    <span class="label-text"></span>
                                    @error('twitter_link') <span class="label-text"
                                                        style="color: #e81414;">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">{{ trans('back.team.instagram_link') }}</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" value="{{ old('instagram_link') }}" name="instagram_link"
                                           placeholder="@lang('back.team.instagram_link')" required>
                                    <span class="label-text"></span>
                                    @error('instagram_link') <span class="label-text"
                                                        style="color: #e81414;">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label><strong>{{ trans('back.description_ar') }}</strong></label>
                                <textarea class=" form-control"
                                          name="description_ar">{{ old('description_ar') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label><strong>{{ trans('back.description_en') }}</strong></label>
                                <textarea class=" form-control"
                                          name="description_en">{{ old('description_en') }}</textarea>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-6">
                                    <label
                                        class=" control-label display-block"> {{ trans('back.image') }}
                                        : </label>
                                    <input type="file" class="form-control image " name="image" required>
                                </div>
                                <div class="col-lg-6">
                                    <img src=" {{ asset('default.png') }} " width=" 100px " class="thumbnail image-preview">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right" style="padding-bottom: 10px; padding-left: 10px;">
                        <input type="submit" class="btn btn-primary" id="save-form-btn"
                               value=" {{ trans('back.add_and_forward_to_list') }} "/>
                    </div>

                </div>
            </form>
            <!-- /basic layout -->
        </div>

        <div class="col-md-6">
            <div class="panel panel-flat">

                <div class="panel-heading">
                    <h5 class="panel-title"> {{ trans('back.team.last_teams') }} </h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <tr class="text-center">
                            <th> {{ trans('back.name') }} </th>
                        </tr>
                        @forelse($latest_teams as $team)
                            <tr>
                                <td> {{ $team->full_name }} </td>
                            </tr>
                        @empty
                        @endforelse
                    </table>
                </div>

            </div>
        </div>
    </div>

@stop
