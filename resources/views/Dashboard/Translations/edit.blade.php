@extends('Dashboard.layouts.master')
@section('title', trans('back.edit-var',['var'=>trans('back.service.service')]))
@section('file_scripts_2')

    <script type="text/javascript" src="{{ asset('Dashboard') }}/assets/js/plugins/editors/summernote/summernote.min.js"></script>
    <script type="text/javascript" src="{{ asset('Dashboard') }}/assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="{{ asset('Dashboard') }}/assets/js/pages/editor_summernote.js"></script>
@stop
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--            </li>--}}
            <li><a href="{{ route('services.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.service.services')</a></li>
            <li class="active">@lang('back.edit-var',['var'=>trans('back.service.service')])</li>
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
        <div class="col-md-9">

            <!-- Basic layout-->
            <form action="{{ route('services.update',$service) }}" class="form-horizontal" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
{{--                <input type="hidden" name="service_id" value="{{$service->id}}"/>--}}
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">{{ trans('back.edit') }} </h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$service->name_ar}}" name="name_ar" placeholder="@lang('back.name_ar') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$service->name_en}}" name="name_en" placeholder="@lang('back.name_en') ">
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$service->quote_ar}}" name="quote_ar" placeholder="@lang('back.quote_ar') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$service->quote_en}}" name="quote_en" placeholder="@lang('back.quote_en') ">
                        </div>

                        <div class="form-group">
                            <label><strong>{{ trans('back.description_ar') }}</strong></label>
                            <textarea class=" summernote form-control"
                                      name="description_ar">{{ $service->description_ar }}</textarea>
                        </div>
                        <div class="form-group">
                            <label><strong>{{ trans('back.description_en') }}</strong></label>
                            <textarea class=" summernote form-control"
                                      name="description_en">{{ $service->description_en }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>@lang('back.image')</label>
                            <input type="file" class="form-control image " name="image">
                        </div>

                        <div class="form-group">
                            <img src=" {{ $service->image_path }}" width=" 100px " value="{{ $service->image_path }}"
                                 class="thumbnail image-preview">
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn btn-success" value=" {{ trans('back.update_and_forward_to_list') }} "/>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /basic layout -->
        </div>
    </div>

@stop
