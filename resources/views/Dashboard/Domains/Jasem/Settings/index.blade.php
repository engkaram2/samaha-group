@extends('Dashboard.layouts.master')
@section('title', trans('back.settings.settings'))
@section('style')
    <style>#map {height: 400px;}</style>
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
    @include('Dashboard.layouts.parts.validation_errors')

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
                <div class="panel-heading">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">{{ trans('back.settings.general_settings') }}</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('jasem_settings.update') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-4"
                                           style="float: {{ floating('right','left') }}">{{ trans('back.settings.mobile') }}
                                        :</label>
                                    <div class="col-lg-8">
                                        <input type="phone" name="mobile" value="{{jasemsettings('mobile') }}"
                                               class="form-control"
                                               placeholder="{{ trans('back.settings.mobile') }}">
                                    </div>
                                </div>
{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-form-label col-lg-4"--}}
{{--                                           style="float: {{ floating('right','left') }}">{{ trans('back.settings.whatsapp_phone') }}--}}
{{--                                        :</label>--}}
{{--                                    <div class="col-lg-8">--}}
{{--                                        <input type="text" name="whatsapp_phone"--}}
{{--                                               value="{{jasemsettings('whatsapp_phone') }}"--}}
{{--                                               class="form-control"--}}
{{--                                               placeholder="{{ trans('back.settings.whatsapp_phone') }}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-4"
                                           style="float: {{ floating('right','left') }}">{{ trans('back.settings.email') }}
                                        :</label>
                                    <div class="col-lg-8">
                                        <input type="email" name="email" value="{{jasemsettings('email') }}"
                                               class="form-control"
                                               placeholder="{{ trans('back.settings.email') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-4"
                                           style="float: {{ floating('right','left') }}">{{ trans('back.settings.address') }}
                                        :</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="address" value="{{jasemsettings('address') }}"
                                               class="form-control"
                                               placeholder="{{ trans('back.settings.address') }}">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label
                                        class="col-form-label col-lg-4">{{ trans('back.settings.location_on_google_maps') }}
                                        :</label>

                                    <div class="col-lg-12">
                                        <input id="searchInput" class=" form-control"
                                               style="background-color: #FFF;margin-left: -250px;"
                                               placeholder=" اختر المكان علي الخريطة " name="other">
                                        <div id="map"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" id="geo_lat" name="latitude"
                                               value="{{ jasemsettings('latitude') }}"
                                               readonly="" placeholder=" latitude" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" id="geo_lng" name="longitude"
                                               value="{{ jasemsettings('longitude') }}"
                                               readonly="" placeholder="longitude" class="form-control">
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
        <div class="col-md-6">
            <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
                <div class="panel-heading">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">{{ trans('back.settings.social_settings') }}</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('jasem_settings.update') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-4"
                                           style="float: {{ floating('right','left') }}">{{ trans('back.settings.facebook_url') }}
                                        :</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="facebook_url" value="{{jasemsettings('facebook_url') }}"
                                               class="form-control"
                                               placeholder="{{ trans('back.settings.facebook_url') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-4"
                                           style="float: {{ floating('right','left') }}">{{ trans('back.settings.twitter_url') }}
                                        :</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="twitter_url" value="{{jasemsettings('twitter_url') }}"
                                               class="form-control"
                                               placeholder="{{ trans('back.settings.twitter_url') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-4"
                                           style="float: {{ floating('right','left') }}">{{ trans('back.settings.youtube_url') }}
                                        :</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="youtube_url" value="{{jasemsettings('youtube_url') }}"
                                               class="form-control"
                                               placeholder="{{ trans('back.settings.youtube_url') }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-form-label col-lg-4"
                                        style="float: {{ floating('right','left') }}">{{ trans('back.settings.linked_in_url') }}
                                        :</label>
                                    <div class="col-lg-8">
                                        <input type="text" name="linked_in_url" value="{{jasemsettings('linked_in_url') }}"
                                               class="form-control"
                                               placeholder="{{ trans('back.settings.linked_in_url') }}">
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
    @include('Dashboard.Domains.Shaaban.Settings.about&desc')
    @include('Dashboard.Domains.Shaaban.Settings.terms')
@stop

@section('scripts')
    <script>
        CKEDITOR.replace('conditions_terms_ar', {height: '200px'});
        CKEDITOR.replace('conditions_terms_en', {height: '200px'});

        CKEDITOR.replace('about_app_ar', {height: '200px'});
        CKEDITOR.replace('about_app_en', {height: '200px'});

        {{--CKEDITOR.instances.about_us_en.setData(`{!! isset($setting) ? $setting->value : '' !!}`);--}}
    </script>
{{--    @include('Dashboard.Domains.Translation.Settings.app_location_map')--}}

@include('Maps.map',[
  'latetude'=>App\Models\ShabaanSetting::where('key','latitude')->first()->value,
  'longetude'=>App\Models\ShabaanSetting::where('key','longitude')->first()->value])
@stop
