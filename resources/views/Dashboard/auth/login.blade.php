{{--@extends('Dashboard.layouts.master')--}}

{{--@section('title', trans('back.login'))--}}
{{--@section('content')--}}

{{--    <body class="login-cover"--}}
{{--          style="background-image: url({{ asset('Dashboard/assets/images/backgrounds/user_bg1.png') }}); background-repeat: no-repeat; background-size: cover;">--}}
{{--    --}}{{--    <body class="login-cover" style="background-image: url({{ asset('Dashboard/assets/images/login_cover.jpg') }}); background-repeat: no-repeat; background-size: cover;">--}}
{{--    <!-- Content area -->--}}
{{--    <div style="width: 320px;height: 50px; padding-top: 50px;  text-align: center; margin: auto;">--}}
{{--    @include('Dashboard.layouts.parts.validation_errors')--}}

{{--    <!-- Form with validation -->--}}
{{--        <form method="Post" action="{{ route('admin.submit.login') }}" class="form-validate">--}}
{{--            @csrf--}}
{{--            <div class="panel panel-body login-form" style="">--}}
{{--                --}}{{--            <div class="panel panel-body login-form" style=" box-shadow: 4px 2px 5px #aaa; border-radius:  20px;">--}}

{{--                <div class="text-center mb-3">--}}
{{--                    <div class="icon-object" style="background-color: #1a294a;"><img--}}
{{--                            src="{{ asset('Dashboard/assets') }}/images/backgrounds/PNG/TreeCourses1.png"--}}
{{--                            style="width: 90px; height: 90px"></div>--}}
{{--                    <h5 class="mb-0">{{ trans('back.login') }}</h5>--}}
{{--                    <span class="d-block text-muted">لوحة تحكم موقع تري كورسيز </span>--}}
{{--                    <span class="d-block text-muted">{{ settings('dashboard_name_' . app()->getLocale()) }}</span>--}}
{{--                </div>--}}
{{--                <br>--}}

{{--                <div class="form-group has-feedback has-feedback-left">--}}
{{--                    <input type="email" class="form-control" value="{{ old('email') }}"--}}
{{--                           placeholder="@lang('back.email')"--}}
{{--                           name="email" autocomplete="email" required="required">--}}
{{--                    <div class="form-control-feedback">--}}
{{--                        <i class="icon-user text-muted"></i>--}}
{{--                    </div>--}}

{{--                    @error('email')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                        	<strong style="color: red;">{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="form-group has-feedback has-feedback-left">--}}
{{--                    <input type="password" class="form-control"--}}
{{--                           placeholder="@lang('back.password')" name="password" autocomplete="password"--}}
{{--                           required="required">--}}
{{--                    <div class="form-control-feedback">--}}
{{--                        <i class="icon-lock2 text-muted"></i>--}}
{{--                    </div>--}}

{{--                    @error('password')--}}
{{--                    <span class="invalid-feedback" role="alert">--}}
{{--                            <strong style="color: red;">{{ $message }}</strong>--}}
{{--                        </span>--}}
{{--                    @enderror--}}
{{--                </div>--}}

{{--                <div class="form-group login-options">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-6">--}}
{{--                            <label class="checkbox-inline">--}}
{{--                                <input type="checkbox" name="remember" class="form-input-styled" checked--}}
{{--                                       data-fouc> {{ trans('back.remember_me') }}--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                        <a href="" class="ml-auto">{{ trans('back.forgot_password') }}</a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <button type="submit" class="btn btn-primary btn-block" style="background-color: #1a294a;">{{ trans('back.login') }}--}}
{{--                        <i class="{{app()->getLocale() == 'ar' ? 'icon-circle-left2' : 'icon-circle-right2'}} ml-2"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--        <!-- /form with validation -->--}}


{{--        <div class=" text-muted text-center mt-10">--}}
{{--            <h2>&copy; {{ date('Y') }}. developed by <a href="" target="_blank">Connect</a></h2>--}}
{{--        </div>--}}
{{--        <!-- /footer -->--}}

{{--    </div><!-- /content area -->--}}
{{--    </body>--}}
{{--@stop--}}



