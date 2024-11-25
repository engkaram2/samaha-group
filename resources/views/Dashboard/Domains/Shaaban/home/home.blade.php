@extends('Dashboard.layouts.master')
@section('title', __('back.home'))
@section('style')
    <style></style>
@stop

@section('files_scripts')
    {{--    <script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/plugins/visualization/d3/d3.min.js"></script>--}}
    {{--    <script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/plugins/visualization/c3/c3.min.js"></script>--}}
@stop

@section('file_scripts_2')
    <script src="{{ asset('Dashboard') }}/assets/js/plugins/visualization/echarts/echarts.min.js"></script>

    <script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/charts/c3_advanced.js"></script>
    {{--            <script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/charts/c3/c3_advanced.js"></script>--}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            UsersChart.init();
        });
    </script>

@stop
{{--@section('logo')--}}
{{--    <img class="" width="150" src="{{ asset('logo/samaha') }}/translation.png"/>--}}
{{--@stop--}}
<!-- Page header -->
@section('breadcrumb')

    <div class="breadcrumb-line">
        <ul class="breadcrumb" style="float: {{ floating('right', 'left') }}">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a></li>--}}
            <li class="active">@lang('back.Dashboard')</li>
        </ul>

{{--        <ul class="breadcrumb-elements" style="float: {{ floating('left', 'right') }}">--}}
{{--            <li><a href="{{ route('contacts.index') }}"><i--}}
{{--                        class="icon-comment-discussion position-left"></i> {{trans('back.contact.contacts')}}</a></li>--}}
{{--            <li class="dropdown">--}}
{{--                <a href="{{ route('settings.index') }}" class="dropdown-toggle" data-toggle="dropdown">--}}
{{--                    <i class="icon-gear position-left"></i>--}}
{{--                    {{ trans('back.settings.settings') }}--}}
{{--                    <span class="caret"></span>--}}
{{--                </a>--}}

{{--                <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                    <li><a href="{{ route('admin.showProfile') }}"><i--}}
{{--                                class="icon-user-lock"></i> @lang('back.my-account')</a></li>--}}
{{--                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>--}}
{{--                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>--}}
{{--                    <li class="divider"></li>--}}
{{--                    <li><a href="{{ route('settings.index') }}"><i--}}
{{--                                class="icon-gear"></i> {{ trans('back.settings.settings') }}</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </ul>--}}
    </div>
@stop

<!-- /page header -->
@section('content')

    {{--    @include('notify::messages')--}}
    <!-- Content area -->
    <div class="content">
        <div class="row">
            <h3 style="padding: 10px;">{{trans('back.Statistics')}}</h3>
            <div class="col-lg-12" dir="{{ direction() }}">
                <div class="row">
                    @foreach (models(true) as $color => $model)
{{--                        <div class="col-lg-2" style="float: {{ floating('right', 'left') }};">--}}

{{--                            <div class="panel bg-{{ $color }}-400">--}}
{{--                                <div class="panel-body shadow-depth5" style="height: 100px;">--}}
{{--                                    <i class="icon-home2"></i>--}}
{{--                                    <a href="{{route(Str::plural($model). '.'.'index')}}"--}}
{{--                                       style="color: whitesmoke; font-weight: bold;">--}}
{{--                                        <h6 class=""> {{trans('back.count')}}   @lang('back.'.$model. '.' .Str::plural($model))--}}
{{--                                            ({{ model_count($model) ?? 0 }}) </h6>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="container-fluid">--}}
{{--                                    <div class="chart" id="members-online"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    @endforeach
                </div>
            </div>

            <br>
            <br>
            <br>
            <!-- Dashboard content -->
            <div class="row" style="font-family: Sans-Serif;">
                <div class="col-lg-6" style="float: {{ floating('right', 'left') }}">
                </div>
            </div>

            <div class="row" style="font-family: Sans-Serif;">
                <div class="panel panel-flat">
                    <div class="panel-heading">
{{--                        <h6 class="panel-title text-semibold">احصائيات اضافة العملاء والخبراء اثناء العام الحالي</h6>--}}
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <div class="chart-container">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="customers_chart" style="height: 450px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- /dashboard content -->
        </div>
        <!-- /content area -->


        <div class="row" style="font-family: Sans-Serif;">
            <div class="col-lg-6" style="float: {{ floating('right', 'left') }}">
                <!-- Latest courses -->
{{--                <div class="panel panel-flat">--}}
{{--                    <div class="panel-heading">--}}
{{--                        <h6 class="panel-title">{{ trans('back.course.latest_courses') }}</h6>--}}
{{--                        <div class="heading-elements" style="float: {{ floating('right', 'left') }}">--}}
{{--                            <ul class="icons-list">--}}
{{--                                <li><a data-action="collapse"></a></li>--}}
{{--                                <li><a data-action="reload"></a></li>--}}
{{--                                <li><a data-action="close"></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="panel-body">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <ul class="media-list content-group">--}}
{{--                                    @foreach($latest_courses as $course)--}}
{{--                                        <li class="media stack-media-on-mobile">--}}
{{--                                            <div class="media-left">--}}
{{--                                                <div class="thumb" style="height: 80px;width: 80px;">--}}
{{--                                                    <a href="{{ route('courses.show', $course->id) }}">--}}
{{--                                                        <img src="{{ $course->image_path }}"--}}
{{--                                                             class="img-responsive img-rounded media-preview" alt=""--}}
{{--                                                             style="width: 100%">--}}
{{--                                                        <span class="zoom-image"><i class="icon-play3"></i></span>--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="media-body">--}}
{{--                                                <h6 class="media-heading"><a href="#">{{$course->$name}}</a></h6>--}}
{{--                                                <ul class="list-inline list-inline-separate text-muted mb-5">--}}
{{--                                                    <i class="icon-hour-glass3"></i>--}}
{{--                                                    <li>{{$course->created_at->diffForHumans()}}</li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!-- /latest courses -->
            </div>
        </div>


        <div class="row" style="font-family: 'Cairo',Sans-Serif;height: 100px;">
        </div>

        <!-- Footer -->
        <div class="row" style="font-family: 'Cairo',Sans-Serif;">
            <div class="footer-boxed text-center" style="margin-bottom: 0px; background-color: whitesmoke;">

                {{--            <h4><a href="#">Developed </a> by <a href="" target="_blank"> &copy; Connect Team devlopers</a> 2022.--}}
                {{--            </h4>--}}
                @if(app()->getLocale() == 'ar')
                    {{ trans('back.copy_write_ar') }} @ {{ date('Y') }}
                @else
                    {{ trans('back.copy_write_en') }} @ {{ date('Y') }}
                @endif
            </div>
        </div>
        <!-- /footer -->
    </div>
@stop





