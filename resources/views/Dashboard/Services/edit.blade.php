@extends('Dashboard.layouts.master')
@section('title', trans('back.edit-var',['var'=>trans('back.service.service')]))
{{--@section('file_scripts_2')--}}

{{--    <script type="text/javascript" src="{{ asset('Dashboard') }}/assets/js/plugins/editors/summernote/summernote.min.js"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('Dashboard') }}/assets/js/plugins/forms/styling/uniform.min.js"></script>--}}
{{--    <script type="text/javascript" src="{{ asset('Dashboard') }}/assets/js/pages/editor_summernote.js"></script>--}}
{{--@stop--}}
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
{{--@section('logo')--}}
{{--    <img class="" width="150" src="{{auth()->guard('admin')->user()->image_path }}"/>--}}
{{--@stop--}}
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
                            <div class="col-lg-6">
                                <label>@lang('back.icon')</label>
                                <input type="file" class="form-control image " name="icon">
                            </div>
                            <img src=" {{ $service->icon_path }}" width=" 100px " value="{{ $service->icon_path }}"
                                 class="thumbnail image-preview" style="background-color: gray;">
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$service->name_ar}}"
                            name="name_ar" placeholder="@lang('back.name_ar') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$service->name_en}}"
                            name="name_en" placeholder="@lang('back.name_en') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$service->quote_ar}}"
                             name="quote_ar" placeholder="@lang('back.quote_ar') ">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{$service->quote_en}}"
                            name="quote_en" placeholder="@lang('back.quote_en') ">
                        </div>
                        {{-- for section 1  --}}
                        <div class="form-group">
                            <div class="col-lg-6">
                                <label>@lang('back.service.image1')</label>
                                <input type="file" class="form-control image " name="image1">
                            </div>
                            <img src=" {{ $service->image1_path }}" width=" 100px " value="{{ $service->image1_path }}"
                                 class="thumbnail image-preview" style="background-color: gray;">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   value="{{ $service->title1_ar }}" name="title1_ar"
                                   placeholder="@lang('back.service.title1_ar')" required>
                            <span class="label-text"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                                    value="{{ $service->title1_en }}"  name="title1_en"
                                    placeholder="@lang('back.service.title1_en')" required>
                            <span class="label-text"></span>
                            </div>
                       <div class="form-group">
                           <label><strong>{{ trans('back.service.description1_ar') }}</strong></label>
                           <textarea class=" summernote form-control"
                                     name="description1_ar">{{ $service->description1_ar }}</textarea>
                       </div>
                       <div class="form-group">
                           <label><strong>{{ trans('back.service.description2_en') }}</strong></label>
                           <textarea class=" summernote form-control"
                                     name="description1_en">{{ $service->description1_en }}</textarea>
                       </div>
                       {{-- end section 1  --}}

                       {{-- for section 2  --}}
                       <div class="form-group">
                        <div class="col-lg-6">
                            <label>@lang('back.service.image1')</label>
                            <input type="file" class="form-control image " name="image2">
                        </div>
                        <img src=" {{ $service->image2_path }}" width=" 100px " value="{{ $service->image2_path }}"
                             class="thumbnail image-preview" style="background-color: gray;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"
                               value="{{ $service->title2_ar }}" name="title2_ar"
                               placeholder="@lang('back.service.title2_ar')" required>
                        <span class="label-text"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"
                                value="{{ $service->title2_en }}"  name="title2_en"
                                placeholder="@lang('back.service.title2_en')" required>
                        <span class="label-text"></span>
                        </div>
                   <div class="form-group">
                       <label><strong>{{ trans('back.service.description2_ar') }}</strong></label>
                       <textarea class=" summernote form-control"
                                 name="description2_ar">{{ $service->description2_ar }}</textarea>
                   </div>
                   <div class="form-group">
                       <label><strong>{{ trans('back.service.description2_en') }}</strong></label>
                       <textarea class=" summernote form-control"
                                 name="description2_en">{{ $service->description2_en }}</textarea>
                   </div>
                   {{-- end section 2  --}}


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
