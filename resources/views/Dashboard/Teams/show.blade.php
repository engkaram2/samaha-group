@extends('Dashboard.layouts.master')
@section('title', trans('back.team.teams'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i--}}
{{--                        class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--            </li>--}}
            <li><a href="{{ route('teams.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.team.teams')</a></li>
            <li class="active">@lang('back.team.show')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop

{{--@section('logo')--}}
{{--    <img class="" width="160" src="{{auth()->guard('admin')->user()->image_path }}"/>--}}
{{--@stop--}}
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')

    <!-- Toolbar -->
    <div class="navbar navbar-default navbar-xs content-group">
        <ul class="nav navbar-nav visible-xs-block">
            <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
        </ul>
        <div class="navbar-collapse collapse" id="navbar-filter">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#team_data" data-toggle="tab"><i
                            class="icon-menu7 position-left"></i> {{ trans('back.team.team_data') }}</a>
                </li>

                <li><a href="#team_issues" data-toggle="tab"><i
                            class="icon-calendar3 position-left"></i> {{ trans('back.team.issues') }} <span
                            class="badge badge-success badge-inline position-right">{{$team->issues->count()}}</span></a>
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
                        <div class="tab-pane fade in active" id="team_data">
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
                                                        <form action="#">

                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <a href="{{ $team->ImagePath }}" data-popup="lightbox">
                                                                        <img src="{{ $team->ImagePath }}" alt="" width="100" height="100" class="img-circle">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label class="col-form-label">{{ trans('back.full_name') }} : </label>
                                                                    {{app()->getLocale() == 'ar' ? $team->full_name_ar : $team->full_name_en }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label class="col-form-label">{{ trans('back.email') }} : </label>
                                                                    {{ $team->email }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label class="col-form-label">{{ trans('back.mobile') }} : </label>
                                                                    {{ $team->mobile }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label class="col-form-label">{{ trans('back.team.job') }} : </label>
                                                                    {{ $team->job }}
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label class="col-form-label">{{ trans('back.team.fb_link') }} : </label>
                                                                    {{ $team->fb_link }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label class="col-form-label">{{ trans('back.team.twitter_link') }} :</label>
                                                                    {{ $team->twitter_link }}
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label class="col-form-label">{{ trans('back.team.instagram_link') }} : </label>
                                                                    {{ $team->instagram_link }}
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label class="col-form-label">{{ trans('back.description_ar') }} : </label>
                                                                    {{ $team->description_ar }}
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-md-12">
                                                                    <label class="col-form-label">{{ trans('back.description_en') }} : </label>
                                                                    {{ $team->description_en }}
                                                                </div>
                                                            </div>
                                                        </form>
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

                        <div class="tab-pane fade" id="team_issues">
                            <!-- user_issues -->
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
                                        <h3 class="card-title">{{ trans('back.user.issues')}}:</h3>
                                    </div>
                                    <br>


                                    @if($team->issues->count() > 0)
                                        <table class="table datatable-button-init-basic" id="issues"
                                               style="font-size: 16px;">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{ trans('back.issue.client_name') }}</th>
                                                <th>{{ trans('back.issue.issue_number') }}</th>
                                                <th>@lang('back.since')</th>
                                                <th class="text-center">@lang('back.form-actions')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($team->issues as $issue)
                                                <tr id="row-{{ $issue->id }}">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td><a href=""> {{ isNullable($issue->user->full_name) }}</a></td>
                                                    <td><a href=""> {{ isNullable($issue->issue_number) }}</a></td>
                                                    <td>{{isset($issue->created_at) ?$issue->created_at->diffForHumans():'---' }}</td>
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
                                                                        <a href="{{ route('issues.show', $issue->id) }}">
                                                                            <i
                                                                                class="icon-eye"></i>@lang('back.show')
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a onclick="sweet_delete('{{ route('issues.destroy', $issue->id) }}', {{ $issue->id }})"
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
                                        <div style="text-align: center; padding-bottom: 20px;">
                                            <h2> @lang('back.no_data_found') </h2></div>
                                    @endif
                                </div>
                            </div>
                            <!-- /user_issues -->
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @stop

@section('scripts')
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'issue'])
@stop


