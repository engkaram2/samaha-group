@extends('Dashboard.layouts.master')
@section('title', trans('back.meeting.meetings'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            {{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')--}}
            {{--                </a>--}}
            {{--            </li>--}}
            <li class="active">@lang('back.meeting.meetings')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop
@section('logo')
    <img class="" width="150" src="{{auth()->guard('admin')->user()->image_path }}"/>
@stop
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')
    <!-- Basic datatable -->
    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <div class="panel-heading">
            @include('Dashboard.layouts.parts.table-header', ['collection' => $meetings, 'name' => 'meetings', 'icon' => 'meetings'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="{{route('meetings.create')}}" class="btn btn-success btn-labeled btn-labeled-left"><b><i
                        class="icon-plus2"></i></b>{{ trans('back.create-var',['var'=>trans('back.meeting.meeting')]) }}</a>
        </div>
        <br>
        @if($meetings->count() > 0)
            <table class="table datatable-button-init-basic" id="meetings" style="font-size: 16px;">
                <thead>
                <tr style="background-color:gainsboro">
                    <th>#</th>
                    <th>{{ trans('back.meeting.user_image') }}</th>
                    <th>{{ trans('back.meeting.user_name') }}</th>
                    <th>{{ trans('back.meeting.topic') }}</th>
                    <th>{{ trans('back.meeting.start_at') }}</th>
                    <th>{{ trans('back.meeting.join') }}</th>
                    <th>{{ trans('back.meeting.share_link') }}</th>
                    <th class="text-center">@lang('back.form-actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($meetings as $meeting)
                    <tr id="row-{{ $meeting->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="{{$meeting->user->image_path}}" data-popup="lightbox">
                                <img src="{{$meeting->user->image_path}}" alt="" width="80" height="80" class="img-circle">
                            </a>
                        </td>
                        <td>{{$meeting->user->full_name}}</td>
                        <td><a href=""> {{ isNullable($meeting->topic) }}</a></td>

                        <td>{{$meeting->start_at}}</td>

                        <td class="text-danger">
{{--                          <a href="{{$meeting->join_url}}" target="_blank">انضم الان</a>--}}


                            <a target="_blank" href="{{route('zoom.start',[
                                'meeting_id' =>$meeting->meeting_id,
                                'password'  =>$meeting->password,


                                'name'  =>$meeting->topic,
                               'email' =>'elshenaweymona92@gmail.com',

                                 ])}}"
                               target="_blank">انضم عبر المنصة</a>


{{--                            <a target="_blank" href="{{route('zoom.start',[--}}
{{--                                'meeting_id'    =>$meeting->meeting_id ])}}"--}}
{{--                               target="_blank">انضم عبر المنصة</a>--}}


                        </td>
                        <td class="text-danger"><a href="{{route('send-meeting-notify',$meeting->id)}}">{{ trans('back.send') }}</a></td>

                        <td class="text-center">
                            <div class="list-icons text-center">
                                <div class="list-icons-item dropdown text-center">
                                    <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                        <li>
{{--                                            <a href="{{ route('meetings.edit',$meeting->id) }}"> <i--}}
{{--                                                    class="icon-database-edit2"></i>@lang('back.edit') </a>--}}
                                            <a onclick="sweet_delete('{{ route('meetings.destroy', $meeting->id) }}', {{ $meeting->id }})"
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
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'meeting'])
@stop
