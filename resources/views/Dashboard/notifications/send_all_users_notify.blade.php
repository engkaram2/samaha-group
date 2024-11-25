{{--@extends('Dashboard.layouts.master')--}}
{{--@section('title', trans('back.create-var',['var'=>trans('back.notification.notification')]))--}}

{{--@section('breadcrumb')--}}
{{--    <div class="breadcrumb-line">--}}
{{--        <ul class="breadcrumb">--}}
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--            </li>--}}
{{--            <li><a href="{{ route('send_notify_to_all_users') }}"><i class="icon-admin position-left"></i> @lang('back.notification.notifications')</a></li>--}}
{{--            <li class="active">@lang('back.create-var',['var'=>trans('back.notification.notification')])</li>--}}
{{--        </ul>--}}
{{--        @include('Dashboard.layouts.parts.quick-links')--}}
{{--    </div>--}}
{{--@endsection--}}
{{--@section('content')--}}
{{--    @include('Dashboard.layouts.parts.validation_errors')--}}
{{--    <div class="row" style="padding: 15px;">--}}
{{--            <div class="panel panel-flat">--}}
{{--                <div class="panel-heading">--}}
{{--                    <div class="heading-elements">--}}
{{--                        <ul class="icons-list">--}}
{{--                            <li><a data-action="collapse"></a></li>--}}
{{--                            <li><a data-action="reload"></a></li>--}}
{{--                            <li><a data-action="close"></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="panel-body">--}}
{{--                    <h6 class="content-group-sm text-semibold">{{__('back.notification.send_to_all_users')}}</h6>--}}
{{--                    <div class="row">--}}
{{--                        <form action="{{ route('send_notify_to_all_users') }}" class="form-horizontal" method="post" id="submitted-form" enctype="multipart/form-data"--}}
{{--                              style="border:1px solid grey;padding:20px 30px">--}}
{{--                            @csrf--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" value="" name="title"--}}
{{--                                       placeholder="@lang('back.notification.title') ">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <input type="text" class="form-control" value="" name="message"--}}
{{--                                       placeholder="@lang('back.notification.text') ">--}}
{{--                            </div>--}}

{{--                            <div style="text-align: center;">--}}
{{--                                <button type="submit"--}}
{{--                                        class="btn btn-primary"> {{ trans('back.notification.send') }}--}}
{{--                                    <i class="icon-arrow-left13 position-right"></i></button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--@stop--}}



