@extends('Dashboard.layouts.master')
@section('title', trans('back.office.offices'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="active">@lang('back.office.offices')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop
@section('logo')
    <img class="" width="200" src="{{ asset('logo/samaha') }}/legal.png"/>
@stop
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')

    <!-- Basic datatable -->
    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <div class="panel-heading">
            @include('Dashboard.layouts.parts.table-header', ['collection' => $offices, 'name' => 'offices', 'icon' => 'offices'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="{{route('offices.create')}}" class="btn btn-success btn-labeled btn-labeled-left"><b>
                    <i class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.office.office')])
            </a>

{{--            <a href="#" data-toggle="modal" data-target="#add_office"--}}
{{--               class="btn btn-success btn-labeled btn-labeled-left"><b><i--}}
{{--                        class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.office.office')])--}}
{{--            </a>--}}

        </div>

        @if($offices->count() > 0)
            <table class="table datatable-button-init-basic" id="offices" style="font-size: 16px;">
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
                @foreach($offices as $office)
{{--                    <tr id="office-row-{{ $office->id }}">--}}
                    <tr id="row-{{ $office->id }}">
                        <td>{{ $office->id }}</td>
                        <td><a href=""> {{ isNullable($office->name_ar) }}</a></td>
                        <td><a href=""> {{ isNullable($office->name_en) }}</a></td>
                        <td>{{isset($office->created_at) ?$office->created_at->diffForHumans():'---' }}</td>
                        <td class="text-center">
                            <div class="list-icons text-center">
                                <div class="list-icons-item dropdown text-center">
                                    <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                        <li>
                                            <a href="{{ route('offices.edit',$office->id) }}"> <i
                                                    class="icon-database-edit2"></i>@lang('back.edit') </a>
                                        </li>
                                        <li>

                                            <a onclick="sweet_delete('{{ route('offices.destroy', $office->id) }}', {{ $office->id }})"
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
    <!-- /basic datatable -->

{{--    @include('Dashboard.Offices.modal.add_office_modal')--}}

@stop

@section('scripts')
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'office'])
@stop

