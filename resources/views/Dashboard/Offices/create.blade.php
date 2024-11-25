@extends('Dashboard.layouts.master')

@section('title', trans('back.create-var',['var'=>trans('back.office.office')]))
@section('style')
    <style> #map {height: 400px;} </style>
@endsection
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            {{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
            {{--            </li>--}}
            <li><a href="{{ route('offices.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.office.offices')</a></li>
            <li class="active">@lang('back.create-var',['var'=>trans('back.office.office')])</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@endsection
@section('logo')
    <img class="" width="200" src="{{ asset('logo/samaha') }}/legal.png"/>
@stop
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')
    <div class="row" style="padding: 15px;">
        <div class="col-md-8">
            <!-- Basic layout-->
            <form action="{{ route('offices.store') }}" class="form-horizontal" method="post" id="submitted-form"
                  enctype="multipart/form-data">
                @csrf
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <i class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.office.office')])
                        </h5>
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
                                <input type="text" class="form-control" value="{{ old('name_ar') }}" name="name_ar"
                                       placeholder="@lang('back.name_ar') " required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('name_en') }}" name="name_en"
                                       placeholder="@lang('back.name_en') " required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('email') }}" name="email"
                                       placeholder="@lang('back.email') " required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"   maxlength="14" value="{{ old('mobile') }}" name="mobile"
                                       placeholder="@lang('back.mobile') " required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('address') }}" name="address_ar"
                                       placeholder="@lang('back.address_ar') " required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('address') }}" name="address_en"
                                       placeholder="@lang('back.address_en') " required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('description_ar') }}" name="description_ar"
                                       placeholder="@lang('back.description_ar') " required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('description_en') }}" name="description_en"
                                       placeholder="@lang('back.description_en') " required>
                            </div>

                            <div class="form-group">
                                <label
                                    class="col-lg-3 control-label display-block">{{ trans('back.city.name')}}</label>
                                <div class="col-lg-9">
                                    <select name="city_id" data-placeholder="{{trans('back.select')}}"
                                            class="select-size-lg">
                                        <option selected disabled>{{trans('back.select')}}</option>
                                        @foreach($cities as $city)
                                            <option value="{{ $city->id }}"> {{ $city->$name }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label
                                    class="col-lg-3 control-label display-block">@lang('back.team.teams')</label>
                                <div class="col-lg-9">
                                    <select name="team_id" data-placeholder="{{trans('back.select')}}"
                                            class="select-size-lg">
                                        <option selected disabled>{{trans('back.select')}}</option>
                                        @foreach($team_members as $team_member)
                                            <option value="{{ $team_member->id }}">
                                                {{app()->getLocale() == 'ar' ? $team_member->full_name_ar :$team_member->full_name_en }}
                                            </option>
                                        @endforeach
                                    </select>
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
                                    <input type="text" id="geo_lat" name="latitude" value="{{ old('latitude') }}"
                                           readonly="" placeholder=" latitude" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" id="geo_lng" name="longitude" value="{{ old('longitude') }}"
                                           readonly="" placeholder="longitude" class="form-control">
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
        <div class="col-md-4">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"> {{ trans('back.office.latest_offices') }} </h5>
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
                            <th> {{ trans('back.name_ar') }} </th>
                            <th> {{ trans('back.name_en') }} </th>
                        </tr>
                        @forelse($latest_offices as $office)
                            <tr>
                                <td> {{ $office->name_ar }} </td>
                                <td> {{ $office->name_en }} </td>
                            </tr>
                        @empty
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
@include('Maps.map',['latetude'=>24.7135517,'longetude'=>46.67529569])
@stop
