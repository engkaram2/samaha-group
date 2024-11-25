@extends('Dashboard.layouts.master')
@section('title', trans('back.appointment.appointments'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i--}}
{{--                        class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--            </li>--}}
            <li><a href="{{ route('appointments.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.appointment.appointments')</a></li>
            <li class="active">@lang('back.show')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop

@section('content')
    @include('Dashboard.layouts.parts.validation_errors')
    <!-- Content area -->
    <div class="content">

     <div class="row">
         <div class="col-md-9">
             <!-- Detached content -->
             <div class="container-detached">
                 <div class="content-detached">

                     <!-- Post -->
                     <div class="panel">
                         <div class="panel-body">
                             <div class="content-group-lg">

                                 <h3 class="text-semibold mb-5">
                                   {{ $appointment->appointment_type }} meeting
                                 </h3>
                                 <blockquote class="no-margin panel panel-body border-left-lg border-left-warning">
                                     <img src="{{ $appointment->user->image_path }}" class="img-circle" alt="">
                                     <footer> <cite title="Source Title">اسم المستخدم : </cite></footer>
                                     {{ $appointment->user->full_name }}


                                     <footer> <cite title="Source Title">عنوان المستخدم : </cite></footer>
                                     {{ $appointment->client_address }}

                                     <footer> <cite title="Source Title"> رقم الجوال : </cite></footer>
                                     {{ $appointment->client_mobile}}
                                 </blockquote>
                                 <br>
                                 <blockquote class="no-margin panel panel-body border-left-lg border-left-warning">
                                     <footer> <cite title="Source Title">عنوان الاجتماع </cite></footer>
                                     {{ $appointment->problem }}
                                 </blockquote>

                                 <h3 class="text-semibold mb-5">
                                     <a href="#" class="text-default">{{ $appointment->date }}</a>
                                 </h3>
                             </div>
                         </div>
                     </div>
                     <!-- /post -->
                 </div>
             </div>
             <!-- /detached content -->

         </div>
     </div>
    </div>
    <!-- /content area -->

    @stop

@section('scripts')
@stop


{{--<td>--}}
{{--                                                                <a data-popup="tooltip" title="{{ $appointment->problem }}">--}}
{{--                                                                    {{ substr($appointment->problem, 0, 20) }} ...--}}
{{--                                                                </a>--}}
{{--                                                            </td>--}}
