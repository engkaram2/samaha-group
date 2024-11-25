@extends('Dashboard.layouts.master')
@section('title', trans('back.service.services'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="active">@lang('back.service.services')</li>
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
            @include('Dashboard.layouts.parts.table-header', ['collection' => $services, 'name' => 'services', 'icon' => 'services'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="{{route('services.create')}}" class="btn btn-success btn-labeled btn-labeled-left"><b><i
                        class="icon-plus2"></i></b>{{ trans('back.create-var',['var'=>trans('back.service.service')]) }}</a>
        </div>
        <br>
        @if($services->count() > 0)
            <table class="table datatable-button-init-basic" id="services" style="font-size: 16px;">
                <thead>
                <tr style="background-color:gainsboro">
                    <th>#</th>
                    <th>{{ trans('back.icon') }}</th>
                    <th>{{ trans('back.service.name') }}</th>
{{--                    <th>{{ trans('back.service.main_image') }}</th>--}}
                    <th>@lang('back.status')</th>
                    <th>@lang('back.since')</th>
                    <th class="text-center">@lang('back.form-actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                    <tr id="row-{{ $service->id }}">
                        <td>{{ $loop->iteration }}</td>
{{--                        <td><i class="{{ $service->icon }}"></i></td>--}}

                        <td >
                            <a href="{{ $service->IconPath }}" data-popup="lightbox">
                                <img src="{{ $service->IconPath }}" alt="" width="80" height="80" class="img-circle"style="background-color: gray;">
                            </a>
                        </td>
                        <td><a href={{ route('services.show', $service->id) }}> {{ isNullable($service->$name) }}</a></td>

                        <td>
                            <div class="checkbox checkbox-switchery switchery-lg">
                                <label>
                                    @if($service->status == 1)
                                        <input
                                            type="checkbox"
                                            onclick="isChecked('checked', '{{ $service->id }}');"
                                            id="active-id-{{ $service->id }}" checked value="{{ $service->id }}"
                                            name="status" class="form-control switchery form-data" id="status">
                                    @else
                                        <input
                                            type="checkbox" onclick="isChecked('null', '{{ $service->id }}');"
                                            id="active-id-{{ $service->id }}" value="{{ $service->id }}"
                                            name="is_unique" class="form-control switchery form-data" id="status">
                                    @endif
                                </label>
                            </div>
                        </td>

                        <td>{{isset($service->created_at) ?$service->created_at->diffForHumans():'---' }}</td>
                        <td class="text-center">
                            <div class="list-icons text-center">
                                <div class="list-icons-item dropdown text-center">
                                    <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                        <li>
                                            <a href="{{ route('services.show', $service->id) }}"> <i
                                                    class="icon-eye"></i>@lang('back.show') </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.edit',$service->id) }}"> <i
                                                    class="icon-database-edit2"></i>@lang('back.edit') </a>
                                            <a onclick="sweet_delete('{{ route('services.destroy', $service->id) }}', {{ $service->id }})"
                                               class="dropdown-item"><i class="icon-bin"></i>{{ trans('back.delete') }}</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <div style="text-align: center; padding-bottom: 20px;"><h2> @lang('back.no_data_found') </h2></div>
        @endif
    </div>
    <!-- /with Buttons extension -->
    </div>
    <!-- /basic datatable -->

@stop

@section('scripts')
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'service'])
    @include('Dashboard.layouts.parts.ajax-change-status', ['model' => 'service'])

@stop
