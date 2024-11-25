{{--@extends('Dashboard.layouts.master')--}}
{{--@section('title', trans('back.meeting.meetings'))--}}
{{--@section('breadcrumb')--}}
{{--    <div class="breadcrumb-line">--}}
{{--        <ul class="breadcrumb">--}}
{{--            <li class="active">@lang('back.meeting.meetings')</li>--}}
{{--        </ul>--}}
{{--        @include('Dashboard.layouts.parts.quick-links')--}}
{{--    </div>--}}
{{--@stop--}}
{{--@section('content')--}}
{{--    @include('Dashboard.layouts.parts.validation_errors')--}}
{{--    <!-- Basic datatable -->--}}
{{--    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">--}}
{{--        <div class="panel-heading">--}}
{{--            @include('Dashboard.layouts.parts.table-header', ['collection' => $meetings, 'name' => 'meetings', 'icon' => 'meetings'])--}}
{{--        </div>--}}
{{--        <br>--}}
{{--        <div class="list-icons" style="padding-right: 10px;">--}}
{{--            <a href="{{route('show-create-meeting')}}" class="btn btn-success btn-labeled btn-labeled-left"  target="_blank"><b><i--}}
{{--                        class="icon-plus2"></i></b>{{ trans('back.create-var',['var'=>trans('back.meeting.meeting')]) }} in agora</a>--}}

{{--        </div>--}}
{{--        <br>--}}
{{--    </div>--}}
{{--    <!-- /with Buttons extension -->--}}
{{--    <!-- /basic datatable -->--}}

{{--@stop--}}

{{--@section('scripts')--}}
{{--    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'meeting'])--}}
{{--@stop--}}
