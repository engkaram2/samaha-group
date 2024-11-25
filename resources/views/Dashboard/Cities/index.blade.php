@extends('Dashboard.layouts.master')
@section('title', trans('back.city.cities'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            {{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')--}}
            {{--                </a>--}}
            {{--            </li>--}}
            <li class="active">@lang('back.city.cities')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop
{{--@section('logo')--}}
{{--    <img class="" width="150" src="{{auth()->guard('admin')->user()->image_path }}"/>--}}
{{--@stop--}}
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')

    <!-- Basic datatable -->
    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <div class="panel-heading">
            @include('Dashboard.layouts.parts.table-header', ['collection' => $cities, 'name' => 'cities', 'icon' => 'cities'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="#" data-toggle="modal" data-target="#add_city"
               class="btn btn-success btn-labeled btn-labeled-left"><b><i
                        class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.city.city')])
            </a>

        </div>

        @if($cities->count() > 0)
            <table class="table datatable-button-init-basic" id="cities" style="font-size: 16px;">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{ trans('back.name_ar') }}</th>
                    <th>{{ trans('back.name_en') }}</th>
                    <th>@lang('back.since')</th>
                    <th class="text-center">@lang('back.form-actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cities as $city)
                    <tr id="row-{{ $city->id }}">
                        <td>{{ $city->id }}</td>
                        <td><a href=""> {{ isNullable($city->name_ar) }}</a></td>
                        <td><a href=""> {{ isNullable($city->name_en) }}</a></td>
                        <td>{{isset($city->created_at) ?$city->created_at->diffForHumans():'---' }}</td>
                        <td class="text-center">
                            <div class="list-icons text-center">
                                <div class="list-icons-item dropdown text-center">
                                    <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                        <li>
                                            <a href="javascript:void(0);"
                                               data-toggle="modal"
                                               data-target="#edit_city_{{$city->id}}">
                                                <i class="icon-database-edit2"></i>@lang('back.edit')
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="sweet_delete('{{ route('cities.destroy', $city->id) }}', {{ $city->id }})"
                                               class="dropdown-item"><i class="icon-bin"></i>{{ trans('back.delete') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @include('Dashboard.Cities.edit_modal')
                @endforeach
                </tbody>
            </table>

        @else
            <div style="text-align: center; padding-bottom: 20px;"><h2> @lang('back.no_data_found') </h2></div>
        @endif
    </div>
    <!-- /basic datatable -->

    <!--  modal -->
    <div id="add_city" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive content-group">

                        <!-- Basic layout-->
                        <form action="{{ route('cities.store') }}" class="form-horizontal" method="post"
                              id="submitted-form"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <i class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.city.city')])
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
                                            <label
                                                class="col-lg-3 control-label display-block">{{ trans('back.country.name')}}</label>
                                            <div class="col-lg-9">
                                                <select name="country_id" data-placeholder="{{trans('back.select')}}"
                                                        class="select-size-lg">
                                                    <option selected disabled>{{trans('back.select')}}</option>
                                                    @foreach($countries as $country)
                                                        <option value="{{ $country->id }}"> {{ $country->$name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" value="" name="name_ar"
                                                   placeholder="@lang('back.name_ar') " required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="" name="name_en"
                                                   placeholder="@lang('back.name_en') " required>
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
                    <div class="modal-footer">

                        <button type="button" class="btn btn-link btn-xs text-uppercase text-semibold"
                                data-dismiss="modal">Close
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / modal -->

@stop

@section('scripts')
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'city'])
@stop

