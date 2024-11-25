@extends('Dashboard.layouts.master')
@section('title', trans('back.team.teams'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            {{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')--}}
            {{--                </a>--}}
            {{--            </li>--}}
            <li class="active">@lang('back.team.teams')</li>
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
            @include('Dashboard.layouts.parts.table-header', ['collection' => $teams, 'name' => 'teams', 'icon' => 'teams'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="{{route('teams.create')}}" class="btn btn-success btn-labeled btn-labeled-left"><b><i
                        class="icon-plus2"></i></b>{{ trans('back.create-var',['var'=>trans('back.team.team')]) }}</a>
        </div>
        <br>
    </div>
    <!-- /with Buttons extension -->

        <div class="row" style="margin:3px;">
            @if($teams->count() > 0)
                @foreach($teams as $team)
                    <div class="col-lg-3 col-md-6"  id="row-{{ $team->id }}">
                        <div class="thumbnail">
                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                class="icon-menu7"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="{{ route('teams.show', $team->id) }}"> <i
                                                        class="icon-eye"></i>@lang('back.show') </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('teams.edit',$team->id) }}"> <i
                                                        class="icon-database-edit2"></i>@lang('back.edit') </a>
                                                <a onclick="sweet_delete('{{ route('teams.destroy', $team->id) }}', {{ $team->id }})"
                                                   class="dropdown-item"><i
                                                        class="icon-bin"></i>{{ trans('back.delete') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="thumb thumb-rounded thumb-slide">
                                <div class="" style=" height: 140px; width: 140px;">
                                    <img src="{{ $team->ImagePath }}" alt="" style=" height: 140px; width: 140px;">
                                </div>
                                <div class="caption">
										<span>
											<a href="{{ $team->ImagePath }}" target="_blank" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
											<a href="{{ route('teams.show', $team->id) }}" class="btn bg-success-400 btn-icon btn-xs"><i class="icon-link"></i></a>
										</span>
                                </div>
                            </div>

                            <div class="caption text-center">
                                <h6 class="text-semibold no-margin">
                                    {{app()->getLocale() == 'ar' ? $team->full_name_ar : $team->full_name_en }}
                                    <small class="display-block">{{ $team->job }}</small>
                                </h6>
                                <ul class="icons-list mt-15">
                                    <li><a href="{{ $team->fb_link }}" target="_blank" data-popup="tooltip"
                                           title="facebook" data-container="body"><i class="icon-facebook2"></i></a>
                                    </li>
                                    <li><a href="{{ $team->twitter_link }}" target="_blank" data-popup="tooltip"
                                           title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>
                                    <li><a href="{{ $team->instagram_link }}" target="_blank" data-popup="tooltip"
                                           title="instagram" data-container="body"><i class="icon-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            @else
                <div style="text-align: center; padding-bottom: 20px;"><h2> @lang('back.no_data_found') </h2></div>
            @endif
        </div>




    <!-- /basic datatable -->

@stop

@section('scripts')
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'team'])

@stop


{{--                                            <li><a href="#"><i class="icon-comment-discussion pull-right"></i> Start chat</a></li>--}}
{{--                                            <li><a href="#"><i class="icon-phone2 pull-right"></i> Make a call</a></li>--}}
{{--                                            <li><a href="#"><i class="icon-mail5 pull-right"></i> Send mail</a></li>--}}
{{--                                            <li class="divider"></li>--}}
{{--                                            <li><a href="#"><i class="icon-statistics pull-right"></i> Statistics</a></li>--}}



{{--                <div class="col-lg-3 col-md-6">--}}
{{--                    <div class="thumbnail no-padding">--}}
{{--                        <div class="thumb">--}}
{{--                            <img class="" src="{{ $team->ImagePath }}"/>--}}
{{--                            <div class="caption-overflow">--}}
{{--										<span>--}}
{{--											<a href="{{ $team->ImagePath }}"--}}
{{--                                               class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i--}}
{{--                                                    class="icon-plus2"></i></a>--}}
{{--											<a href="{{ route('teams.show', $team->id) }}"--}}
{{--                                               class="btn bg-success-400 btn-icon btn-xs"><i class="icon-link"></i></a>--}}
{{--										</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="caption text-center">--}}
{{--                            <h6 class="text-semibold no-margin">James Alexander <small class="display-block">Lead--}}
{{--                                    developer</small></h6>--}}
{{--                            <ul class="icons-list mt-15">--}}
{{--                                <li><a href="#" data-popup="tooltip" title="Google Drive" data-container="body"><i--}}
{{--                                            class="icon-google-drive"></i></a></li>--}}
{{--                                <li><a href="#" data-popup="tooltip" title="Twitter" data-container="body"><i--}}
{{--                                            class="icon-twitter"></i></a></li>--}}
{{--                                <li><a href="#" data-popup="tooltip" title="Github" data-container="body"><i--}}
{{--                                            class="icon-github"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--        @if($teams->count() > 0)--}}
{{--            <table class="table datatable-button-init-basic" id="teams" style="font-size: 16px;">--}}
{{--                <thead>--}}
{{--                <tr style="background-color:gainsboro">--}}
{{--                    <th>#</th>--}}
{{--                    <th>{{ trans('back.image') }}</th>--}}
{{--                    <th>{{ trans('back.full_name') }}</th>--}}
{{--                    <th>@lang('back.since')</th>--}}
{{--                    <th class="text-center">@lang('back.form-actions')</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($teams as $team)--}}
{{--                    <tr id="row-{{ $team->id }}">--}}
{{--                        <td>{{ $loop->iteration }}</td>--}}
{{--                        <td>--}}
{{--                            <a href="{{ $team->ImagePath }}" data-popup="lightbox">--}}
{{--                                <img src="{{ $team->ImagePath }}" alt="" width="80" height="80" class="img-circle">--}}
{{--                            </a>--}}
{{--                        </td>--}}

{{--                        <td><a href={{ route('teams.show', $team->id) }}> {{ isNullable($team->full_name) }}</a></td>--}}

{{--                        <td>{{isset($team->created_at) ?$team->created_at->diffForHumans():'---' }}</td>--}}

{{--                        <td class="text-center">--}}
{{--                            <div class="list-icons text-center">--}}
{{--                                <div class="list-icons-item dropdown text-center">--}}
{{--                                    <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">--}}
{{--                                        <i class="icon-menu9"></i>--}}
{{--                                    </a>--}}

{{--                                    <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">--}}
{{--                                        <li>--}}
{{--                                            <a href="{{ route('teams.show', $team->id) }}"> <i--}}
{{--                                                    class="icon-eye"></i>@lang('back.show') </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a href="{{ route('teams.edit',$team->id) }}"> <i--}}
{{--                                                    class="icon-database-edit2"></i>@lang('back.edit') </a>--}}
{{--                                            <a onclick="sweet_delete('{{ route('teams.destroy', $team->id) }}', {{ $team->id }})"--}}
{{--                                               class="dropdown-item"><i class="icon-bin"></i>{{ trans('back.delete') }}--}}
{{--                                            </a>--}}
{{--                                        </li>--}}

{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        @else--}}
{{--            <div style="text-align: center; padding-bottom: 20px;"><h2> @lang('back.no_data_found') </h2></div>--}}
{{--        @endif--}}





{{--                    <div class="col-lg-3 col-md-6" id="row-{{ $team->id }}">--}}
{{--                        <div class="thumbnail">--}}
{{--                            <div class="media-right media-middle">--}}
{{--                                <ul class="icons-list">--}}
{{--                                    <li class="dropdown">--}}
{{--                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i--}}
{{--                                                class="icon-menu7"></i></a>--}}
{{--                                        <ul class="dropdown-menu dropdown-menu-right">--}}
{{--                                            <li>--}}
{{--                                                <a href="{{ route('teams.show', $team->id) }}"> <i--}}
{{--                                                        class="icon-eye"></i>@lang('back.show') </a>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <a href="{{ route('teams.edit',$team->id) }}"> <i--}}
{{--                                                        class="icon-database-edit2"></i>@lang('back.edit') </a>--}}
{{--                                                <a onclick="sweet_delete('{{ route('teams.destroy', $team->id) }}', {{ $team->id }})"--}}
{{--                                                   class="dropdown-item"><i--}}
{{--                                                        class="icon-bin"></i>{{ trans('back.delete') }}--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="thumb thumb-rounded">--}}
{{--                                <div class="" style=" height: 120px; width: 120px;">--}}
{{--                                    <img src="{{ $team->ImagePath }}" alt="" style=" height: 120px; width: 120px;">--}}
{{--                                </div>--}}
{{--                                <div class="caption-overflow">--}}
{{--										<span>--}}
{{--											<a href="{{ $team->ImagePath }}" target="_blank"--}}
{{--                                               class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i--}}
{{--                                                    class="icon-plus2"></i></a>--}}
{{--											<a href="{{ route('teams.show', $team->id) }}"--}}
{{--                                               class="btn bg-success-400 btn-icon btn-xs"><i class="icon-link"></i></a>--}}
{{--										</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="caption text-center">--}}
{{--                                <h6 class="text-semibold no-margin">{{ $team->full_name }} <small--}}
{{--                                        class="display-block">{{ $team->job }}</small></h6>--}}
{{--                                <ul class="icons-list mt-15">--}}
{{--                                    <li><a href="{{ $team->fb_link }}" target="_blank" data-popup="tooltip"--}}
{{--                                           title="facebook" data-container="body"><i class="icon-facebook2"></i></a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="{{ $team->twitter_link }}" target="_blank" data-popup="tooltip"--}}
{{--                                           title="Twitter" data-container="body"><i class="icon-twitter"></i></a></li>--}}
{{--                                    <li><a href="{{ $team->instagram_link }}" target="_blank" data-popup="tooltip"--}}
{{--                                           title="instagram" data-container="body"><i class="icon-instagram"></i></a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
