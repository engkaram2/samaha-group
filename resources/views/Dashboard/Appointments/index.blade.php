@extends('Dashboard.layouts.master')
@section('title', trans('back.appointment.appointments'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href=""><i class="icon-home2 position-left"></i> @lang('back.home')</a>
            </li>
            <li class="active">@lang('back.appointment.appointments')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')

    <!-- Basic datatable -->
    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <div class="panel-heading">
            <h5 class="panel-title" dir="{{ direction() }}" style="float: {{ floating('right', 'left') }};">
              @lang('back.appointment.all_appointments') ({{ $appointments_count }})
            </h5>
        </div>
        <br>
        <br>
        <!-- Basic pills -->
        <div class="row" style="padding: 15px;">
            <div class="col-md-12">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="tabbable">
                            <ul class="nav nav-pills nav-pills-bordered nav-justified">
                                <li class="active"><a href="#pending_appointments"
                                                      data-toggle="tab">{{ trans('back.appointment.pending_appointments') }}</a></li>
                                <li><a href="#approved_appointments"
                                       data-toggle="tab">{{ trans('back.appointment.approved_appointments') }}</a></li>
                                <li><a href="#done_appointments"
                                       data-toggle="tab">{{ trans('back.appointment.done_appointments') }}</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="pending_appointments">
                                    <div class="panel-body">
                                        <div class="row">
                                            @if($pending_appointments->count() > 0)

                                                <table class="table datatable-button-init-basic" id="appointments">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">{{ trans('back.user_name') }}</th>
{{--                                                        <th class="text-center">{{ trans('back.appointment.problem') }}</th>--}}
                                                        <th class="text-center">@lang('back.appointment.date')</th>
                                                        <th class="text-center">@lang('back.appointment.approve')</th>
                                                        <th class="text-center">@lang('back.form-actions')</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($pending_appointments as $appointment)
                                                        <tr class="text-center" id="row-{{ $appointment->id }}">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td><a href=> {{ isNullable($appointment->user->full_name) }}</a></td>
                                                            <td>{{ $appointment->date }}</td>
                                                            <td class="text-center">
                                                                <a href="{{route('appointment/approve',$appointment->id)}}" class="btn btn-success btn-sm"> <i
                                                                        class="icon-check2"></i> {{trans('back.appointment.approve')}}</a>
                                                            </td>
                                                            <td>
                                                                <div class="list-icons">
                                                                    <div class="list-icons-item dropdown">
                                                                        <a href="#"
                                                                           class="list-icons-item caret-0 dropdown-toggle"
                                                                           data-toggle="dropdown">
                                                                            <i class="icon-menu9"></i>
                                                                        </a>

                                                                        <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                                                            <li>
                                                                                <a href="{{ route('appointments.show', $appointment->id) }}">
                                                                                    <i
                                                                                        class="icon-eye"></i>@lang('back.show')
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a onclick="sweet_delete('{{ route('appointments.destroy', $appointment->id) }}', {{ $appointment->id }})"
                                                                                   class="dropdown-item"><i
                                                                                        class="icon-bin"></i>{{ trans('back.delete') }}
                                                                                </a>
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
                                                <div style="text-align: center;"><h3> @lang('back.no_data_found') </h3>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="approved_appointments">
                                    <div class="panel-body">
                                        <div class="row">
                                            @if($approved_appointments->count() > 0)

                                                <table class="table datatable-button-init-basic" id="appointments">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">{{ trans('back.user_name') }}</th>
                                                        <th class="text-center">@lang('back.appointment.date')</th>
                                                        <th class="text-center">@lang('back.appointment.done')</th>
                                                        <th class="text-center">create meeting</th>
                                                        <th class="text-center">@lang('back.form-actions')</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($approved_appointments as $appointment)
                                                        <tr class="text-center" id="row-{{ $appointment->id }}">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td><a href=> {{ isNullable($appointment->user->full_name) }}</a></td>
{{--                                                             <td>--}}
{{--                                                                <a data-popup="tooltip" title="{{ $appointment->problem }}">--}}
{{--                                                                    {{ substr($appointment->problem, 0, 20) }} ...--}}
{{--                                                                </a>--}}
{{--                                                            </td>--}}
                                                            <td>{{ $appointment->date }}</td>
                                                            <td class="text-center">
                                                                <a href="{{route('appointment/done',$appointment->id)}}" class="btn btn-success btn-sm"> <i
                                                                        class="icon-check2"></i> {{trans('back.appointment.done')}}</a>
                                                            </td>
                                                            <td class="text-center">
                                                                <a href="{{route('show-create-meeting',$appointment->user_id)}}" class="btn btn-success btn-labeled btn-labeled-left"  target="_blank"><b><i
                                                                            class="icon-plus2"></i></b>create in agora</a>

                                                            </td>
                                                            <td>
                                                                <div class="list-icons">
                                                                    <div class="list-icons-item dropdown">
                                                                        <a href="#"
                                                                           class="list-icons-item caret-0 dropdown-toggle"
                                                                           data-toggle="dropdown">
                                                                            <i class="icon-menu9"></i>
                                                                        </a>

                                                                        <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                                                            <li>
                                                                                <a href="{{ route('appointments.show', $appointment->id) }}">
                                                                                    <i
                                                                                        class="icon-eye"></i>@lang('back.show')
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a onclick="sweet_delete('{{ route('appointments.destroy', $appointment->id) }}', {{ $appointment->id }})"
                                                                                   class="dropdown-item"><i
                                                                                        class="icon-bin"></i>{{ trans('back.delete') }}
                                                                                </a>
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
                                                <div style="text-align: center;"><h3> @lang('back.no_data_found') </h3>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane " id="done_appointments">
                                    <div class="panel-body">
                                        <div class="row">
                                            @if($done_appointments->count() > 0)

                                                <table class="table datatable-button-init-basic" id="appointments">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">{{ trans('back.user_name') }}</th>
{{--                                                        <th class="text-center">{{ trans('back.appointment.problem') }}</th>--}}
                                                        <th class="text-center">@lang('back.appointment.date')</th>
                                                        <th class="text-center">@lang('back.form-actions')</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($done_appointments as $appointment)
                                                        <tr class="text-center" id="row-{{ $appointment->id }}">
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td><a href=> {{ isNullable($appointment->user->full_name) }}</a></td>
{{--q                                                            <td>--}}
{{--                                                                <a data-popup="tooltip" title="{{ $appointment->problem }}">--}}
{{--                                                                    {{ substr($appointment->problem, 0, 20) }} ...--}}
{{--                                                                </a>--}}
{{--                                                            </td>--}}
                                                            <td>{{ $appointment->date }}</td>
                                                            <td>
                                                                <div class="list-icons">
                                                                    <div class="list-icons-item dropdown">
                                                                        <a href="#"
                                                                           class="list-icons-item caret-0 dropdown-toggle"
                                                                           data-toggle="dropdown">
                                                                            <i class="icon-menu9"></i>
                                                                        </a>

                                                                        <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                                                            <li>
                                                                                <a href="{{ route('appointments.show', $appointment->id) }}">
                                                                                    <i
                                                                                        class="icon-eye"></i>@lang('back.show')
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a onclick="sweet_delete('{{ route('appointments.destroy', $appointment->id) }}', {{ $appointment->id }})"
                                                                                   class="dropdown-item"><i
                                                                                        class="icon-bin"></i>{{ trans('back.delete') }}
                                                                                </a>
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
                                                <div style="text-align: center;"><h3> @lang('back.no_data_found') </h3>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /basic pills -->
    </div>
    <!-- /basic datatable -->
@stop

@section('scripts')
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'appointment'])
@stop
