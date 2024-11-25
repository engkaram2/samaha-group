@extends('Dashboard.layouts.master')
@section('title', trans('back.slider.sliders'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            {{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')--}}
            {{--                </a>--}}
            {{--            </li>--}}
            <li class="active">@lang('back.slider.sliders')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop

@section('content')
    @include('Dashboard.layouts.parts.validation_errors')

    <!-- Basic datatable -->
    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <div class="panel-heading">
            @include('Dashboard.layouts.parts.table-header', ['collection' => $sliders, 'name' => 'sliders', 'icon' => 'sliders'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="#" data-toggle="modal" data-target="#add_slider"
               class="btn btn-success btn-labeled btn-labeled-left"><b><i
                        class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.slider.slider')])
            </a>

        </div>

        @if($sliders->count() > 0)
            <table class="table datatable-button-init-basic" id="sliders" style="font-size: 16px;">
                <thead>
                <tr>
                    <th class="text-center">#</th>
{{--                    <th class="text-center">{{ trans('back.image') }}</th>--}}
                    <th class="text-center">{{ trans('back.name') }}</th>
                    <th class="text-center">{{ trans('back.quote') }}</th>
                    <th class="text-center">@lang('back.since')</th>
                    <th class="text-center">@lang('back.form-actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $slider)
                    <tr id="row-{{ $slider->id }}">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">
                            <a href="{{ $slider->ImagePath }}" data-popup="lightbox">
                                <img src="{{ $slider->ImagePath }}" alt="" width="80" height="80" class="img-circle">
                            </a>
                        </td>
                        <td class="text-center"><a href=""> {{ isNullable($slider->$name) }}</a></td>
                        <td class="text-center">{{ isNullable($slider->$quote) }}</td>
                        <td class="text-center">{{isset($slider->created_at) ?$slider->created_at->diffForHumans():'---' }}</td>
                        <td class="text-center">
                            <div class="list-icons text-center">
                                <div class="list-icons-item dropdown text-center">
                                    <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                        <li>
                                            <a href="javascript:void(0);"
                                               data-toggle="modal"
                                               data-target="#edit_slider_{{$slider->id}}">
                                                <i class="icon-database-edit2"></i>@lang('back.edit')
                                            </a>
                                        </li>
                                        <li>
                                            <a onclick="sweet_delete('{{ route('sliders.destroy', $slider->id) }}', {{ $slider->id }})"
                                               class="dropdown-item"><i class="icon-bin"></i>{{ trans('back.delete') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @include('Dashboard.Sliders.edit_modal')
                @endforeach
                </tbody>
            </table>

        @else
            <div style="text-align: center; padding-bottom: 20px;"><h2> @lang('back.no_data_found') </h2></div>
        @endif
    </div>
    <!-- /basic datatable -->

    <!--  modal -->
    <div id="add_slider" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive content-group">

                        <!-- Basic layout-->
                        <form action="{{ route('sliders.store') }}" class="form-horizontal" method="post"
                              id="submitted-form"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <i class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.slider.slider')])
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
                                            <input type="text" class="form-control" value="" name="name_ar" maxlength="50"
                                                   placeholder="@lang('back.name_ar') -- عدد الاحرف لايزيد عن50 /" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="" name="name_en" maxlength="50"
                                                   placeholder="@lang('back.name_en') " required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="" name="quote_ar"
                                                   placeholder="@lang('back.quote_ar') " required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="" name="quote_en"
                                                   placeholder="@lang('back.quote_en') " required>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <label class=" control-label display-block"> {{ trans('back.image') }}: </label>
                                                <input type="file" class="form-control image " name="image" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src=" {{ asset('default.png') }} " width=" 100px " class="thumbnail image-preview">
                                            </div>
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
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'slider'])
@stop

