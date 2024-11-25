@extends('Dashboard.layouts.master')
@section('title', trans('back.service.services'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            {{--            <li><a href="{{route('admin.home')}}"><i--}}
            {{--                        class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
            {{--            </li>--}}
            <li><a href="{{ route('services.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.service.services')</a></li>
            <li class="active">@lang('back.show')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop

@section('content')
    @include('Dashboard.layouts.parts.validation_errors')

    <!-- Toolbar -->
    <div class="navbar navbar-default navbar-xs content-group">
        <ul class="nav navbar-nav visible-xs-block">
            <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i
                        class="icon-menu7"></i></a></li>
        </ul>
        <div class="navbar-collapse collapse" id="navbar-filter">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#service_data" data-toggle="tab"><i
                            class="icon-menu7 position-left"></i> {{ trans('back.show') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /toolbar -->

    <!-- Content area -->
    <div class="content">

        <!-- Category profile -->
        <div class="row">
            <div class="col-lg-12">
                <div class="tabbable">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="service_data">

                            <!-- Content area -->
                            <div class="content">

                                <!-- Basic dropdowns -->
                                <h1 class="content-group text-semibold">
                                    {{ $service->$name }}
                                    <small class="display-block">{{ $service->$quote }}</small>
                                </h1>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-body ">
                                            <div class="">
                                                <h4 class="text-semibold ">{{ $service->$title1 }}</h4>
                                                <p class="content-group-sm text-muted">{{ $service->$description1 }}</p>
                                            </div>
                                            <img src="{{ $service->image1_path }}"
                                                 class="img-responsive" alt=""
                                                 style="height: auto;">
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="panel panel-body ">
                                            <img src="{{ $service->image2_path }}"
                                                 class="img-responsive" alt=""
                                                 style="height: auto;">
                                            <div class="">
                                                <h4 class="text-semibold ">{{ $service->$title2 }}</h4>
                                                <p class="content-group-sm text-muted">{{ $service->$description2 }}</p>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                                <!-- /basic dropdowns -->

                            </div>
                            </div>




{{--                                <!-- Detached content -->--}}
{{--                            <div class="container-detached">--}}
{{--                                <div class="content-detached">--}}

{{--                                    <!-- Post -->--}}
{{--                                    <div class="panel">--}}
{{--                                        <div class="panel-body">--}}
{{--                                            <div class="content-group-lg">--}}

{{--                                                <div class="row ">--}}
{{--                                                    <div class="col-md-6">--}}
{{--                                                        <div class="content-group text-center">--}}
{{--                                                            <a href="#" class="display-inline-block">--}}
{{--                                                                <img src="{{ $service->image_path }}"--}}
{{--                                                                     class="img-responsive" alt=""--}}
{{--                                                                     style="height: auto;">--}}
{{--                                                            </a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                --}}{{--                                                    <div class="col-md-6">--}}
{{--                                                --}}{{--                                                        <h3 class="text-semibold mb-5">--}}
{{--                                                --}}{{--                                                            <a href="#" class="text-default">{{ $service->$name }}</a>--}}
{{--                                                --}}{{--                                                        </h3>--}}
{{--                                                --}}{{--                                                        <blockquote class="no-margin panel panel-body border-left-lg border-left-warning">--}}

{{--                                                --}}{{--                                                            <div class="icon text-center"  style="background: #f0ad4e;color: #eeeded;height: 50px;width: 50px;border-radius: 50%;">--}}
{{--                                                --}}{{--                                                                <i class="{{ $service->icon }}"style="margin: auto;text-align: center;font-size: 40px;"></i>--}}
{{--                                                --}}{{--                                                            </div>--}}

{{--                                                --}}{{--                                                            <footer> {{ $service->$quote }}</footer>--}}
{{--                                                --}}{{--                                                        </blockquote>--}}
{{--                                                --}}{{--                                                    </div>--}}
{{--                                                --}}{{--                                                </div>--}}
{{--                                                --}}{{--                                                <hr>--}}
{{--                                                --}}{{--                                                <div class="content-group">--}}
{{--                                                --}}{{--                                                    {!! $service_details->$description !!}--}}
{{--                                                --}}{{--                                                </div>--}}

{{--                                                --}}{{--                                                <!-- Summernote editor -->--}}
{{--                                                --}}{{--                                                <div class="panel panel-flat">--}}
{{--                                                --}}{{--                                                    <div class="panel-body">--}}
{{--                                                --}}{{--                                                        <div class="">--}}
{{--                                                --}}{{--                                                            {!! $service->$description  !!}--}}

{{--                                                --}}{{--                                                            Source: <a href="http://en.wikipedia.org/wiki/Apollo_11">Wikipedia.org</a>--}}
{{--                                                --}}{{--                                                        </div>--}}
{{--                                                --}}{{--                                                    </div>--}}
{{--                                                --}}{{--                                                </div>--}}
{{--                                                --}}{{--                                                <!-- /summernote editor -->--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <!-- /post -->--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /detached content -->--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')

@stop
