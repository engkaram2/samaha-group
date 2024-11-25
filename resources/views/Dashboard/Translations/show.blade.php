@extends('Dashboard.layouts.master')
@section('title', trans('back.translation.translations'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="{{ route('translations.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.translation.translations')</a></li>
            <li class="active">@lang('back.show')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop

@section('content')
    @include('Dashboard.layouts.parts.validation_errors')

    <!-- Toolbar -->
    <div class="navbar navbar-default navbar-xs content-group">
        <ul class="nav navbar-nav visible-xs-block">
            <li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
        </ul>
        <div class="navbar-collapse collapse" id="navbar-filter">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#translation_data" data-toggle="tab"><i
                            class="icon-menu7 position-left"></i> {{ trans('back.show') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /toolbar -->

    <!-- Content area -->
    <div class="content">

        <!-- Category profile -->
        <div class="row">
            <div class="col-lg-12">
                <div class="tabbable">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="translation_data">
                            <!-- Detached content -->
                            <div class="container-detached">
                                <div class="content-detached">
                                    <!-- Post -->
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="content-group-lg">
                                                <table class="table" style="font-size: 16px;">
                                                    <thead>
                                                    <tr style="background-color:gainsboro">
                                                        <th>{{ trans('back.translation.file') }}</th>
                                                        <th>{{ trans('back.translation.file_translation') }}</th>
                                                        <th>{{ trans('back.user_name') }}</th>
                                                        <th>{{ trans('back.team_name') }}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="{{route('view_file',$translation->id)}}" target="_blank">Open <i
                                                                        class="icon-file-pdf" style="color: red;"> </i>
                                                                <iframe height="100%"  width="100%" src="{{ $translation->file_path}}"></iframe></a>
                                                            </td>
                                                            <td>
                                                                @if($translation->file_translation == null)

                                                                    <a href="#" data-toggle="modal" data-target="#add_translation_file_modal"
                                                                       class="btn btn-success btn-labeled btn-labeled-left"><b><i
                                                                                class="icon-plus2"></i></b>{{ trans('back.translation.add_translation') }}
                                                                    </a>
                                                                @else
                                                                    <a href="{{route('view_file_translation',$translation->id)}}" target="_blank">Open <i
                                                                            class="icon-file-pdf" style="color: red;"> </i>
                                                                        <iframe height="100%"  width="100%" src="{{ $translation->file_translation_path}}"></iframe></a>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <a href="{{ $translation->user->ImagePath }}" data-popup="lightbox">
                                                                    <img src="{{ $translation->user->ImagePath }}" alt="" width="80" height="80" class="img-circle">
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ $translation->team->ImagePath }}" data-popup="lightbox">
                                                                    <img src="{{ $translation->team->ImagePath }}" alt="" width="80" height="80" class="img-circle">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

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
                </div>
            </div>
        </div>

    <!--  modal -->
    <div id="add_translation_file_modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive content-group">

                        <!-- Basic layout-->
                        <form action="{{route('translation/add_translation',$translation->id)}}" class="form-horizontal" method="post" id="submitted-form"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <i class="icon-plus2"></i></b>{{ trans('back.translation.add_translation') }}
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
                                            <input type="file" class="file-input" name="file_translation"
                                                   data-show-caption="false" data-show-upload="false"
                                                   data-browse-class="btn btn-primary btn-lg"
                                                   data-remove-class="btn btn-default btn-lg">
                                            <span class="help-block"> file input button</span>
                                            @error('file')<span
                                                style="color: #e81414;">{{ $message }}</span>@enderror
                                        </div>
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
@stop
