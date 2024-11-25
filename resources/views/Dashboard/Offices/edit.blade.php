@extends('Dashboard.layouts.master')
@section('title', trans('back.edit-var',['var'=>trans('back.office.office')]))

@section('style')
    <style>
        #map {height: 400px;}
    </style>
@stop

<!-- Page header -->
<div class="page-header page-header-default">
    @section('breadcrumb')
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
{{--                <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--                </li>--}}
                <li><a href="{{ route('offices.index') }}"><i
                            class="icon-admin position-left"></i> @lang('back.office.offices')</a></li>
                <li class="active">@lang('back.edit-var',['var'=>trans('back.office.office')])</li>
            </ul>

            @include('Dashboard.layouts.parts.quick-links')
        </div>
    @endsection
</div>
<!-- /page header -->
@section('logo')
    <img class="" width="200" src="{{ asset('logo/samaha') }}/legal.png"/>
@stop
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')
    <div class="row" style="padding: 15px;">
        <div class="col-md-9">

            <!-- Basic layout-->
            <form action="{{ route('offices.update',$office) }}" class="form-horizontal" method="POST"
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
                            <input type="text" class="form-control" value="{{$office->name_ar}}" name="name_ar" placeholder="@lang('back.name_ar') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$office->name_en}}" name="name_en" placeholder="@lang('back.name_en') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$office->email}}" name="email" placeholder="@lang('back.email') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"  maxlength="14"  value="{{$office->mobile}}" name="mobile" placeholder="@lang('back.mobile') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$office->address_ar}}" name="address_ar" placeholder="@lang('back.address_ar') ">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$office->address_en}}" name="address_en" placeholder="@lang('back.address_en') ">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$office->description_ar}}" name="description_ar" placeholder="@lang('back.description_ar') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$office->description_en}}" name="description_en" placeholder="@lang('back.description_en') ">
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
                                <input type="text" id="geo_lat" name="latitude" value="{{ $office->latitude }}"
                                       readonly="" placeholder=" latitude" class="form-control">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" id="geo_lng" name="longitude" value="{{ $office->longitude }}"
                                       readonly="" placeholder="longitude" class="form-control">
                            </div>
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn btn-success"
                                   value=" {{ trans('back.update_and_forward_to_list') }} "/>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /basic layout -->

        </div>
    </div>

@stop

@section('scripts')
    @include('Maps.map',['latetude'=>$office->latitude,'longetude'=>$office->longitude])
@stop
