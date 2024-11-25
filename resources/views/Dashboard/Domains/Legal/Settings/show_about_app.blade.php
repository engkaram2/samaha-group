@extends('Dashboard.layouts.master')
@section('title', trans('back.settings.settings'))
@section('style')
    <style>
        #map {height: 400px;}
    </style>
@endsection
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')--}}
{{--                </a></li>--}}
            <li class="active">@lang('back.settings.settings')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@endsection
{{--@section('logo')--}}
{{--    <img class="" width="150" src="{{auth()->guard('admin')->user()->image_path }}"/>--}}
{{--@stop--}}
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Basic layout-->
                            <div class="card">
                                <div class="card-header header-elements-inline">
                                    <h5 class="card-title">{{ trans('back.settings.short_description') }}</h5>
                                </div>
                                <br>
                                <div class="card-body">
                                    <form action="{{ route('about.update') }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3"
                                                   style="float: {{ floating('right','left') }}">{{ trans('back.description_ar') }}
                                                :</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" cols="5" name="app_description_ar" class="form-control"
                                                          placeholder="{{ trans('back.settings.app_description_ar') }}">{{legalsettings('app_description_ar') }}
                                                </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3"
                                                   style="float: {{ floating('right','left') }}">{{ trans('back.description_en') }}
                                                :</label>
                                            <div class="col-lg-9">
                                                <textarea rows="5" cols="5" name="app_description_en" class="form-control"
                                                          placeholder="{{ trans('back.settings.app_description_en') }}">{{legalsettings('app_description_en') }}
                                                </textarea>
                                            </div>
                                        </div>
                                        <legend class="font-weight-semibold text-uppercase font-size-sm"></legend>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="icon-paperplane mr-2"></i>{{ trans('back.buttons.submit_back_to_list') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /basic layout -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-12">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">{{ trans('back.settings.vision') }}</h5>
                        </div>
                        <br>
                        <div class="card-body">
                            <form action="{{ route('about.update') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                           style="float: {{ floating('right','left') }}">arabic
                                        :</label>
                                    <div class="col-lg-9">
                                        <textarea rows="5" cols="5" name="app_vision_ar" class="  form-control "
                                                  placeholder="{{ trans('back.settings.vision_ar') }}">{{legalsettings('app_vision_ar') }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-form-label col-lg-3"
                                        style="float: {{ floating('right','left') }}">english
                                        :</label>
                                    <div class="col-lg-9">
                                    <textarea rows="5" cols="5" name="app_vision_en"
                                              class="form-control"
                                              placeholder="{{ trans('back.settings.vision_en') }}">{{legalsettings('app_vision_en') }}
                                    </textarea>
                                    </div>
                                </div>

                                <legend class="font-weight-semibold text-uppercase font-size-sm"></legend>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success"><i
                                            class="icon-paperplane mr-2"></i>{{ trans('back.buttons.submit_back_to_list') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /basic layout -->
                </div>
            </div>
        </div>
    </div>


    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-12">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">{{ trans('back.settings.mission') }}</h5>
                        </div>
                        <br>
                        <div class="card-body">
                            <form action="{{ route('about.update') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                           style="float: {{ floating('right','left') }}">arabic
                                        :</label>
                                    <div class="col-lg-9">
                                        <textarea rows="5" cols="5" name="app_mission_ar" class="  form-control "
                                                  placeholder="{{ trans('back.settings.mission_ar') }}">{{legalsettings('app_mission_ar') }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-form-label col-lg-3"
                                        style="float: {{ floating('right','left') }}">english
                                        :</label>
                                    <div class="col-lg-9">
                                    <textarea rows="5" cols="5" name="app_mission_en"
                                              class="form-control"
                                              placeholder="{{ trans('back.settings.mission_en') }}">{{legalsettings('app_mission_en') }}
                                    </textarea>
                                    </div>
                                </div>
                                <legend class="font-weight-semibold text-uppercase font-size-sm"></legend>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success"><i
                                            class="icon-paperplane mr-2"></i>{{ trans('back.buttons.submit_back_to_list') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /basic layout -->
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        // CKEDITOR.replace('about_app_ar', {height: '200px'});
    </script>
@stop
