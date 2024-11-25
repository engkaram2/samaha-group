@extends('Dashboard.layouts.master')

@section('title', trans('back.admin.admins'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb" style="float: {{ floating('right', 'left') }}">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--            </li>--}}

            <li class="active">@lang('back.profile')</li>
        </ul>

        @include('Dashboard.layouts.parts.quick-links')
    </div>
@endsection
@section('style')
    <style>
        .admin-profile {
            background-image: url('{{url('http://demo.interface.club/limitless/assets/images/bg.png')}}');
            background-size: contain;
        }
        .admin-image { width: 110px; height: 110px; }
    </style>
@stop
{{--@section('logo')--}}
{{--    <img class="" width="150" src="{{ $admin->image_path }}"/>--}}
{{--@stop--}}

@section('content')

{{--    @include('Dashboard.layouts.parts.validation_errors')--}}

    <div class="content">
        <div class="row">
            <div class="col-md-3" style="float: {{ floating('right', 'left') }}">

                <div class="sidebar-detached">
                    <div class="sidebar sidebar-default sidebar-separate">
                        <div class="sidebar-content">
                            <!-- User details -->
                            <div class="content-group">
                                <div class="panel-body bg-indigo-400 border-radius-top text-center admin-profile">
                                    <div class="content-group-sm">
                                        <h6 class="text-semibold no-margin-bottom">{{ ucwords($admin->full_name) }}</h6>
                                        <span class="display-block">{{$admin->email}}</span>
                                    </div>
                                    {{--                                    legal::guard('admin')->user()->ImagePath--}}
                                    <a href="javascript:void(0);" class="display-inline-block content-group-sm">
                                        <img src="{{$admin->image_path}}" class="img-circle img-responsive admin-image" alt="">
                                    </a>
                                </div>

                                <div class="panel no-border-top no-border-radius-top">
                                    <ul class="navigation">
                                        <li class="navigation-header">@lang('back.main')</li>

                                        <li class="active">
                                            <a href="#profile" data-toggle="tab"><i class="icon-user"></i> @lang('back.profile')</a>
                                        </li>

{{--                                        <li style="background-color: #009688;">--}}
                                        <li style="background-color: #1a294a;">
                                            <a href="#schedule" data-toggle="tab"><i class="icon-gear"></i> @lang('back.edit')</a>
                                        </li>

                                        <li class="navigation-divider"></li>

                                        <li style="background-color: #1a294a;">
                                            <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form-2').submit();">
                                                <i class="icon-switch2"></i> @lang('back.logout')
                                            </a>

                                            <form id="logout-form-2" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /user details -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9" style="float: {{ floating('left', 'right') }}">
                <div class="container-detached">

                    <div class="content-detached">

                        <!-- Tab content -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="profile">
                                <!-- Profile info -->
                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h6 class="panel-title">@lang('back.profile-info')</h6>
                                    </div>

                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>@lang('back.name')</label>
                                                    <input type="text" dir="{{ direction() }}" value="{{ ucwords($admin->$name) }}" readonly class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>@lang('back.email')</label>
                                                    <input type="text" dir="{{ direction() }}" value="{{$admin->email}}" readonly class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>@lang('back.mobile')</label>
                                                    <input type="text" dir="{{ direction() }}" value="{{ !empty(auth()->guard('admin')->user()->mobile) ? auth()->guard('admin')->user()->mobile : trans('back.no-value') }}" readonly class="form-control">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>@lang('back.since')</label>
                                                    <input type="text" dir="{{ direction() }}" value="{{ auth()->guard('admin')->user()->created_at->diffForHumans() }}" readonly class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>@lang('back.type')</label><br>
                                                    {{--													@if ($admin->is_super_admin == 1)--}}
                                                    {{--														<label class="label label-success">@lang('back.super-admin')</label>--}}
                                                    {{--													@else--}}
                                                    {{--														<label class="label label-danger">@lang('back.admin')</label>--}}
                                                    {{--													@endif--}}
                                                    <label class="label label-danger">@lang('back.admin.admin')</label>

                                                </div>
                                                <div class="col-md-6">
                                                    <label>@lang('back.form-status')</label><br>
                                                    {{--								                    @if($admin->status == 1)--}}
                                                    {{--                                                        <span class="label label-success">@lang('back.active')</span>--}}
                                                    {{--								                    @else <span class="label label-danger">@lang('back.disactive')</span>--}}
                                                    {{--								                    @endif--}}

                                                    <span class="label label-success">@lang('back.active')</span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /profile info -->
                            </div>

                            <div class="tab-pane fade" id="schedule">
                                <!-- Account settings -->
                                <div class="panel panel-flat">

                                    <div class="panel-heading"><h6 class="panel-title">@lang('back.account_settings')</h6></div>

                                    <div class="panel-body">
                                        <form action="{{ route('admin.updateProfile', $admin->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                    <div class="form-valid floating @error('name_ar') 'has-error' @enderror">
                                                        <label for="name_ar">{{ trans('back.name_ar') }}</label>
                                                        <input type="text" value="{{ $admin->name_ar }}" class="form-control" name="name_ar" id="full_name" dir="{{ direction() }}">
                                                    </div>
                                                    <div class="form-valid floating @error('name_en') 'has-error' @enderror">
                                                        <label for="name_en">{{ trans('back.name_en') }}</label>
                                                        <input type="text" value="{{ $admin->name_en }}" class="form-control" name="name_en" id="full_name" dir="{{ direction() }}">
                                                    </div><br>

                                                    <div class="form-valid floating @error('email') 'has-error' @enderror">
                                                        <label for="email">{{ trans('back.email') }}</label>
                                                        <input type="email" value="{{ $admin->email }}" class="form-control" name="email" id="email" dir="{{ direction() }}">
{{--                                                        @error('email') <span><strong>{{ $message }}</strong></span> @enderror--}}
                                                    </div><br>

                                                    <div class="form-valid floating @error('mobile') 'has-error' @enderror">
                                                        <label for="mobile">{{ trans('back.mobile') }}</label>
                                                        <input type="tel"  value="{{ $admin->mobile }}"maxlength="11" class="form-control" name="mobile" id="mobile" dir="{{ direction() }}">
{{--                                                        @error('mobile') <span><strong>{{ $message }}</strong></span> @enderror--}}
                                                    </div><br>

                                                    <div class="form-valid floating @error('password') 'has-error' @enderror">
                                                        <label for="password">{{ trans('back.password') }}</label>
                                                        <input type="password" class="form-control" name="password" id="password" dir="{{ direction() }}">
{{--                                                        @error('password') <span><strong>{{ $message }}</strong></span> @enderror--}}
                                                    </div><br>

                                                    <div class="form-valid floating">
                                                        <label for="password_confirmation">{{ trans('back.confirm_password') }}</label>
                                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" dir="{{ direction() }}">
                                                    </div><br>

                                                    <div class="form-group">
                                                        <label>@lang('back.logo')</label>
                                                        <input type="file" class="form-control image " name="image">
                                                    </div>

                                                    <div class="form-group">
                                                        <img src=" {{ $admin->image_path }}" width=" 100px " value="{{ $admin->image_path }}"
                                                             class="thumbnail image-preview">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="text-right">
                                                <input type="submit" name="submit" class="btn btn-primary" value="@lang('back.save')">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /account settings -->
                            </div>
                        </div>
                        <!-- /tab content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

