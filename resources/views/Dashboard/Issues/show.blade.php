@extends('Dashboard.layouts.master')
@section('title', trans('back.issue.issues'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            {{--            <li><a href="{{route('admin.home')}}"><i--}}
            {{--                        class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
            {{--            </li>--}}
            <li><a href="{{ route('issues.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.issue.issues')</a></li>
            <li class="active">@lang('back.show')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop

{{--@section('file_scripts_2')--}}
{{--    <!-- Core JS files -->--}}
{{--    <script src="{{ asset('Dashboard') }}/assets/js/plugins/loaders/pace.min.js"></script>--}}
{{--    <script src="{{ asset('Dashboard') }}/assets/js/plugins/loaders/blockui.min.js"></script>--}}
{{--    <script src="{{ asset('Dashboard') }}/assets/js/plugins/uploaders/fileinput.min.js"></script>--}}
{{--    <script src="{{ asset('Dashboard') }}/assets/js/pages/uploader_bootstrap.js"></script>--}}
{{--    <script src="{{ asset('Dashboard') }}/assets/js/plugins/ui/ripple.min.js"></script>--}}
{{--    <!-- /core JS files -->--}}
{{--@stop--}}
{{--@section('logo')--}}
{{--    <img class="" width="160" src="{{auth()->guard('admin')->user()->image_path }}"/>--}}
{{--@stop--}}
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')

    <!-- Toolbar -->
    <div class="navbar navbar-default navbar-xs content-group">
        <ul class="nav navbar-nav visible-xs-block">
            <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i
                        class="icon-menu7"></i></a></li>
        </ul>
        <div class="navbar-collapse collapse" id="navbar-filter">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#issue_data" data-toggle="tab"><i
                            class="icon-menu7 position-left"></i> {{ trans('back.issue.issue_data') }}</a>
                </li>

                <li><a href="#issue_files" data-toggle="tab"><i
                            class="icon-calendar3 position-left"></i> {{ trans('back.issue.issue_files') }} <span
                            class="badge badge-success badge-inline position-right">{{$issue->files->count()}}</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /toolbar -->


    <!-- Content area -->
    <div class="content">

        <!-- Category profile -->
        <div class="row">
            <div class="col-lg-9">
                <div class="tabbable">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="issue_data">
                            <!-- Timeline -->
                            <div class="timeline timeline-left content-group">
                                <div class="timeline-container">
                                    <!-- Sales stats -->
                                    <div class="timeline-row">
                                        <div class="panel panel-flat timeline-content">
                                            <div class="panel-heading">
                                                <div class="card">
                                                    <br>
                                                    <div class="card-body">
                                                        {{--                                                        <form action="#">--}}

                                                        {{--                                                            <div class="form-group row">--}}
                                                        {{--                                                                <div class="col-md-12">--}}
                                                        {{--                                                                    <a href="{{ $issue->ImagePath }}" data-popup="lightbox">--}}
                                                        {{--                                                                        <img src="{{ $issue->ImagePath }}" alt="" width="100" height="100" class="img-circle">--}}
                                                        {{--                                                                    </a>--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                            </div>--}}
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label
                                                                    class="col-form-label">{{ trans('back.issue.client_name') }}
                                                                    : </label>
                                                                {{ $issue->user->full_name }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label
                                                                    class="col-form-label">{{ trans('back.team_name') }}
                                                                    : </label>
                                                                {{ $issue->team->full_name }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label
                                                                    class="col-form-label">{{ trans('back.issue.issue_number') }}
                                                                    : </label>
                                                                {{ $issue->issue_number }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label
                                                                    class="col-form-label">{{ trans('back.issue.issue_name') }}
                                                                    : </label>
                                                                {{ $issue->issue_name }}
                                                            </div>
                                                        </div>

                                                        <hr>
                                                        <div class="form-group row">
                                                            <div class="col-md-12">
                                                                <label
                                                                    class="col-form-label">{{ trans('back.issue.status') }}
                                                                    : </label>
                                                                {{ $issue->status }}
                                                            </div>
                                                        </div>

                                                        {{--                                                        </form>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /sales stats -->
                                </div>
                            </div>
                            <!-- /timeline -->

                        </div>


                        <div class="tab-pane fade" id="issue_files">
                            <!-- issue_files -->
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

                                    <div class="card-header header-elements-inline">
                                        <h3 class="card-title">{{ trans('back.issue.issue_files')}}:</h3>
                                    </div>
                                    <br>
                                    <a href="#" data-toggle="modal" data-target="#addIssueFile"
                                       class="btn btn-success btn-labeled btn-labeled-left"><b><i
                                                class="icon-plus2"></i></b>{{ trans('back.issue.add_issue_file') }}
                                    </a>

                                    @if($issue->files->count() > 0)
                                        <table class="table datatable-button-init-basic" id="courses"
                                               style="font-size: 16px;">
                                            <thead>
                                            <tr style="background-color:gainsboro">
                                                <th>#</th>
                                                <th>{{ trans('back.name') }}</th>
                                                <th>{{ trans('back.file') }}</th>
                                                <th>@lang('back.since')</th>
                                                <th class="text-center">@lang('back.form-actions')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($issue->files as $file)
                                                {{--                                                <tr id="row-{{ $issue->id }}">--}}
                                                <tr id="issue_file-row-{{ $file->id }}">

                                                    <td>{{ $loop->iteration }}</td>
                                                    {{--                                                    <td><a href={{ route('issues.show', $issue->id) }}> {{ isNullable($issue->$name) }}</a></td>--}}
                                                    <td> {{ isNullable($file->file_name) }}</td>
                                                    <td><a href="{{route('view',$file->id)}}" target="_blank"> <i
                                                                class="icon-file-pdf" style="color: red;"> </i></a>
                                                    </td>
                                                    <td>{{isset($file->created_at) ?$file->created_at->diffForHumans():'---' }}</td>
                                                    <td class="text-center">
                                                        <div class="list-icons text-center">
                                                            <div class="list-icons-item dropdown text-center">
                                                                <a href="#"
                                                                   class="list-icons-item caret-0 dropdown-toggle"
                                                                   data-toggle="dropdown">
                                                                    <i class="icon-menu9"></i>
                                                                </a>

                                                                <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                                                    <li>
                                                                        {{--                                                                        <a href="{{ route('issues.edit',$issue->id) }}"> <i--}}
                                                                        {{--                                                                                class="icon-database-edit2"></i>@lang('back.edit') </a>--}}
                                                                        {{--                                                                        <a onclick="sweet_delete('{{ route('ajax-delete-issue_file', $file->id) }}', {{ $file->id }})"--}}
                                                                        {{--                                                                           class="dropdown-item"><i class="icon-bin"></i>{{ trans('back.delete') }}</a>--}}
                                                                        <a data-id="{{ $file->id }}"
                                                                           class="delete-action">
                                                                            <i class="icon-database-remove"></i>@lang('back.delete')
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
                                        <div style="text-align: center; padding-bottom: 20px;">
                                            <h2> @lang('back.no_data_found') </h2></div>
                                    @endif
                                </div>
                            </div>
                            <!-- /issue_files -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <div id="addIssueFile" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive content-group">
                        <!-- Basic layout-->
                        <form action="{{ route('addIssueFile') }}" class="form-horizontal" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title"><i
                                            class="icon-file-pdf"> </i> {{ trans('back.issue.add_issue_file') }}</h5>
                                </div>
                                <div class="panel-body">
                                    <div class="box-body">
                                        <input type="hidden" name="issue_id" value="{{$issue->id}}">

                                        <div class="row">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="file_name"
                                                       placeholder="@lang('back.issue.file_name')" required>
                                                @error('file_name')<span
                                                    style="color: #e81414;">{{ $message }}</span>@enderror
                                            </div>
                                            {{--                                            <div class="form-group">--}}
                                            {{--                                                الملف <input type="file" multiple class="form-control" name="file">--}}
                                            {{--                                                @error('file')<span style="color: #e81414;">{{ $message }}</span>@enderror--}}
                                            {{--                                            </div>--}}


                                            <div class="form-group form-group-lg">
                                                <input type="file" class="file-input" name="file"
                                                       data-show-caption="false" data-show-upload="false"
                                                       data-browse-class="btn btn-primary btn-lg"
                                                       data-remove-class="btn btn-default btn-lg">
                                                <span class="help-block"> file input button</span>
                                                @error('file')<span
                                                    style="color: #e81414;">{{ $message }}</span>@enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                    </div>

                </div>
                <div class="text-right" style="padding-bottom: 10px; padding-left: 10px;">
                    <input type="submit" class="btn btn-primary"
                           value=" {{ trans('back.add_and_forward_to_list') }} "/>
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
    {{--    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'issue_file'])--}}
    <script>
        let modelTable = '{{ str()->plural('issue_file') }}';
        let currentModel = '{{ 'issue_file' }}';

        $('a.delete-action').on('click', function (e) {
            var id = $(this).data('id');
            var tbody = $('table#' + modelTable + ' tbody');
            var count = tbody.data('count');

            e.preventDefault();

            swal({
                title: "{{ trans('back.confirm-delete-message-var', ['var' => trans('back.'.'issue_file'.'.'.'issue_file')]) }}",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        var tbody = $('table#' + modelTable + ' tbody');
                        var count = tbody.data('count');

                        $.ajax({
                            type: 'Delete',
                            url: '{{ route('ajax-delete-' . 'issue_file') }}',
                            data: {id: id, _token: '{{ csrf_token() }}'},
                            success: function (response) {
                                if (response.deleteStatus) {
                                    $('#' + currentModel + '-row-' + id).remove();
                                    count = count - 1;
                                    tbody.attr('data-count', count);
                                    swal(response.message, {icon: "success"});
                                } else {
                                    swal(response.error);
                                }
                            },
                            error: function (x) {
                                crud_handle_server_errors(x);
                            },
                            complete: function () {
                                if (count === 1) tbody.append(`<tr><td colspan="5"><strong>No data available in table</strong></td></tr>`);
                            }
                        });
                    } else {
                        swal("تم الغاء الحذف");
                    }
                });
        })
    </script>
@stop
