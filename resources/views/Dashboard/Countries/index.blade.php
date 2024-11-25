@extends('Dashboard.layouts.master')
@section('title', trans('back.country.countries'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            {{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')--}}
            {{--                </a>--}}
            {{--            </li>--}}
            <li class="active">@lang('back.country.countries')</li>
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
            @include('Dashboard.layouts.parts.table-header', ['collection' => $countries, 'name' => 'countries', 'icon' => 'countries'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="#" data-toggle="modal" data-target="#add_country"
               class="btn btn-success btn-labeled btn-labeled-left"><b><i
                        class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.country.country')])
            </a>

        </div>

        @if($countries->count() > 0)
            <table class="table datatable-button-init-basic" id="countries" style="font-size: 16px;">
                <thead>
                <tr>
                    <th>#</th>
                    <th class="text-center">{{ trans('back.image') }}</th>
                    <th>{{ trans('back.name_ar') }}</th>
                    <th>{{ trans('back.name_en') }}</th>
                    <th>@lang('back.since')</th>
                    <th class="text-center">@lang('back.form-actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $country)
                    <tr id="row-{{ $country->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td class="text-center">
                            <a href="{{ $country->ImagePath }}" data-popup="lightbox">
                                <img src="{{ $country->ImagePath }}" alt="" width="80" height="80" class="img-circle">
                            </a>
                        </td>
                        <td><a href=""> {{ isNullable($country->name_ar) }}</a></td>
                        <td><a href=""> {{ isNullable($country->name_en) }}</a></td>
                        <td>{{isset($country->created_at) ?$country->created_at->diffForHumans():'---' }}</td>
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
                                               data-target="#edit_country_{{$country->id}}">
                                                <i class="icon-database-edit2"></i>@lang('back.edit')
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="sweet_delete('{{ route('countries.destroy', $country->id) }}', {{ $country->id }})"
                                               class="dropdown-item"><i class="icon-bin"></i>{{ trans('back.delete') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @include('Dashboard.Countries.edit_modal')
                @endforeach
                </tbody>
            </table>

        @else
            <div style="text-align: center; padding-bottom: 20px;"><h2> @lang('back.no_data_found') </h2></div>
        @endif
    </div>
    <!-- /basic datatable -->

    <!--  modal -->
    <div id="add_country" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive content-group">

                        <!-- Basic layout-->
                        <form action="{{ route('countries.store') }}" class="form-horizontal" method="post"
                              id="submitted-form"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <i class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.country.country')])
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
                                            <input type="text" class="form-control" value="" name="name_ar"
                                                   placeholder="@lang('back.name_ar') " required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="" name="name_en"
                                                   placeholder="@lang('back.name_en') " required>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <label class=" control-label display-block"> {{ trans('back.image') }}: </label>
                                                <input type="file" class="form-control image " name="image" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src=" {{ asset('default.png') }} " width=" 100px " class="thumbnail image-preview">
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
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'country'])
{{--    <script>--}}
{{--        // ======================== saveBtn disabled ============--}}
{{--        let saveBtn = $('#save-form-btn');--}}
{{--        let registerForm = $('#submitted-form');--}}

{{--        registerForm.on('submit', function(e){--}}
{{--            saveBtn.attr('disabled', 'true');--}}
{{--        });--}}
{{--        // ====================================--}}
{{--    </script>--}}
@stop

