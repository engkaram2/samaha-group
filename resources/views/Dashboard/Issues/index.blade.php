@extends('Dashboard.layouts.master')
@section('title', trans('back.issue.issues'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            {{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')--}}
            {{--                </a>--}}
            {{--            </li>--}}
            <li class="active">@lang('back.issue.issues')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop
@section('logo')
    <h1>{{auth()->guard('admin')->user()->type}}</h1>
{{--    <img class="" width="150" src="{{auth()->guard('admin')->user()->image_path }}"/>--}}
@stop
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')

    <!-- Basic datatable -->
    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <div class="panel-heading">
            @include('Dashboard.layouts.parts.table-header', ['collection' => $issues, 'name' => 'issues', 'icon' => 'issues'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="#" data-toggle="modal" data-target="#add_issue"
               class="btn btn-success btn-labeled btn-labeled-left"><b><i
                        class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.issue.issue')])
            </a>

        </div>

        @if($issues->count() > 0)
            <table class="table datatable-button-init-basic" id="issues" style="font-size: 16px;">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{ trans('back.issue.client_name') }}</th>
                    <th>{{ trans('back.team_name') }}</th>
                    <th>{{ trans('back.issue.issue_number') }}</th>
                    <th>@lang('back.since')</th>
                    <th class="text-center">@lang('back.form-actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($issues as $issue)
                    <tr id="row-{{ $issue->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td><a href=""> {{ isNullable($issue->user->full_name) }}</a></td>
                        <td><a href=""> {{ isNullable($issue->team->full_name) }}</a></td>
                        <td><a href=""> {{ isNullable($issue->issue_number) }}</a></td>
                        <td>{{isset($issue->created_at) ?$issue->created_at->diffForHumans():'---' }}</td>
                        <td class="text-center">
                            <div class="list-icons text-center">
                                <div class="list-icons-item dropdown text-center">
                                    <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                        <li>
                                            <a href="{{ route('issues.show', $issue->id) }}"> <i
                                                    class="icon-eye"></i>@lang('back.show') </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"
                                               data-toggle="modal"
                                               data-target="#edit_issue_{{$issue->id}}">
                                                <i class="icon-database-edit2"></i>@lang('back.edit')
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="sweet_delete('{{ route('issues.destroy', $issue->id) }}', {{ $issue->id }})"
                                               class="dropdown-item"><i class="icon-bin"></i>{{ trans('back.delete') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
{{--                    @include('Dashboard.Issues.edit_modal')--}}
                @endforeach
                </tbody>
            </table>

        @else
            <div style="text-align: center; padding-bottom: 20px;"><h2> @lang('back.no_data_found') </h2></div>
        @endif
        @include('Dashboard.Issues.add_issue_modal')

    </div>
    <!-- /basic datatable -->


@stop

@section('scripts')
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'issue'])
@stop

