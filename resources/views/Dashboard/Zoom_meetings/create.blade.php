@extends('Dashboard.layouts.master')

@section('title', trans('back.create-var',['var'=>trans('back.meeting.meeting')]))

@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--            </li>--}}
            <li><a href="{{ route('meetings.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.meeting.meetings')</a></li>
            <li class="active">@lang('back.create-var',['var'=>trans('back.meeting.meeting')])</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@endsection
@section('logo')
    <img class="" width="150" src="{{auth()->guard('admin')->user()->image_path }}"/>
@stop
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')
    <div class="row" style="padding: 15px;">
        <div class="col-md-6">
            <!-- Basic layout-->
            <form action="{{ route('meetings.store') }}" class="form-horizontal" method="post" id="submitted-form"
                  enctype="multipart/form-data">
                @csrf
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <i class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.meeting.meeting')])
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
                                <label>عنوان meeting : <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="" name="topic"
                                       placeholder="@lang('back.meeting.topic') "required>
                            </div>


                            <div class="form-group">
                                <label
                                    class="col-lg-3 control-label display-block">{{ trans('back.user.name')}}</label>
                                <div class="col-lg-9">
                                    <select name="user_id" data-placeholder="{{trans('back.select')}}"
                                            class="select-size-lg">
                                        <option selected disabled>{{trans('back.select')}}</option>

                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->full_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="display-block">{{ trans('back.meeting.start_at') }}:</label>
                                <input type="datetime-local" class="form-control" value="" name="start_time"
                                       placeholder="@lang('back.meeting.start_time') ">
                                @error('start_time')<span style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>

{{--                            <div class="row">--}}
{{--                            --}}
{{--                                <div class="col-md-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>مدة meeting بالدقائق : <span class="text-danger">*</span></label>--}}
{{--                                        <input class="form-control" name="duration" type="text">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}


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
{{--        <div class="col-md-6">--}}
{{--            <div class="panel panel-flat">--}}

{{--                <div class="panel-heading">--}}
{{--                    <h5 class="panel-title"> {{ trans('back.meeting.latest_meetings') }} </h5>--}}
{{--                    <div class="heading-elements">--}}
{{--                        <ul class="icons-list">--}}
{{--                            <li><a data-action="collapse"></a></li>--}}
{{--                            <li><a data-action="reload"></a></li>--}}
{{--                            <li><a data-action="close"></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="panel-body">--}}

{{--                    <table class="table table-bordered table-hover">--}}
{{--                        <tr class="text-center">--}}
{{--                            <th> {{ trans('back.name_ar') }} </th>--}}
{{--                            <th> {{ trans('back.name_en') }} </th>--}}
{{--                        </tr>--}}
{{--                        @forelse($latest_meetings as $meeting)--}}
{{--                            <tr>--}}
{{--                                <td> {{ $meeting->name_ar }} </td>--}}
{{--                                <td> {{ $meeting->name_en }} </td>--}}
{{--                            </tr>--}}
{{--                        @empty--}}
{{--                        @endforelse--}}
{{--                    </table>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
    </div>
@stop



