@extends('Dashboard.layouts.master')
@section('title', trans('back.create-var',['var'=>trans('back.blog.blog')]))
@section('style')
    <style>
        /*.form-group input[required] + .label-text:after,*/
        /*.form-group select[required] {*/
        /*    color: #c00;*/
        /*    content: " *";*/
        /*    font-family: serif;*/
        /*}*/
    </style>
@endsection
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="{{ route('blogs.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.blog.blogs')</a></li>
            <li class="active">@lang('back.create-var',['var'=>trans('back.blog.blog')])</li>
        </ul>

        @include('Dashboard.layouts.parts.quick-links')
    </div>
@endsection
{{--@section('logo')--}}
{{--    <img class="" width="150" src="{{auth()->guard('admin')->user()->image_path }}"/>--}}
{{--@stop--}}
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')
    {{--    @include('Dashboard/layouts/parts/flash')--}}
    <div class="row" style="padding: 15px;">
        <div class="col-md-9">

            <!-- Basic layout-->
            <form action="{{ route('blogs.store') }}" class="form-horizontal" method="post" id="submitted-form"
                  enctype="multipart/form-data">
                @csrf
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">@lang('back.create-var',['var'=>trans('back.blog.blog')])</h5>
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
                            @if(auth()->guard('admin')->user()->type=='legal')
                                <div class="form-group">
                                    <label class="col-lg-3 control-label display-block"> {{ trans('back.type') }}
                                        : </label>
                                    <div class="col-lg-6">
                                        <select name="blog_type" class="select">
                                            <option selected disabled>{{trans('back.select')}}</option>
                                            <option value="low_update"> low_update</option>
                                            <option value="latest_update"> latest_update</option>
                                            <option value="publications"> publications</option>
                                        </select>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('name_ar') }}" name="name_ar"
                                       placeholder="@lang('back.name_ar')">
                                <span class="label-text"></span>
                                @error('name_ar') <span class="label-text"
                                                        style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('name_en') }}" name="name_en"
                                       placeholder="@lang('back.name_en')" required>
                                <span class="label-text"></span>
                                @error('name_en') <span class="label-text"
                                                        style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>


                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('quote_ar') }}" name="quote_ar"
                                       placeholder="@lang('back.quote_ar')">
                                <span class="label-text"></span>
                                @error('quote_ar') <span class="label-text"
                                                         style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('quote_en') }}" name="quote_en"
                                       placeholder="@lang('back.quote_en')" required>
                                <span class="label-text"></span>
                                @error('quote_en') <span class="label-text"
                                                         style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group">
                                <label><strong>{{ trans('back.description_ar') }}</strong></label>
                                <textarea class=" form-control"
                                          name="description_ar">{{ old('description_ar') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label><strong>{{ trans('back.description_en') }}</strong></label>
                                <textarea class=" form-control"
                                          name="description_en">{{ old('description_en') }}</textarea>
                            </div>


                            <div class="form-group">
                                <label>@lang('back.image')</label>
                                <input type="file" class="form-control image " name="image">
                                @error('image')<span style="color: #e81414;">{{ $message }}</span>@enderror

                            </div>
                            <div class="form-group">
                                <img src=" {{ asset('default.png') }} " width=" 100px "
                                     class="thumbnail image-preview">

                                @error('image')
                                <span><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>صورة صفحة تفاصيل المقالة</label>
                                <input type="file" class="form-control image2 " name="page_image">
                                @error('image2')<span style="color: #e81414;">{{ $message }}</span>@enderror

                            </div>
                            <div class="form-group">
                                <img src=" {{ asset('default.png') }} " width=" 100px "
                                     class="thumbnail image-preview2">

                                @error('image2')
                                <span><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('meta_title') }}"
                                       name="meta_title"
                                       placeholder="@lang('back.blog.meta_title')" required>
                                <span class="label-text"></span>
                                @error('meta_title') <span class="label-text"
                                                           style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('meta_description') }}"
                                       name="meta_description"
                                       placeholder="@lang('back.blog.meta_description')" required>
                                <span class="label-text"></span>
                                @error('meta_description') <span class="label-text"
                                                                 style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary"
                            id="save-form-btn" style="padding-bottom: 10px; padding-left: 10px;">
                        {{ trans('back.add_and_forward_to_list') }}
                        <i class="icon-check position-right"></i>
                    </button>

                </div>
            </form>
            <!-- /basic layout -->

        </div>

    </div>

@stop

@section('scripts')
    <script>
        CKEDITOR.replace('description_ar', {height: '300px'});
        CKEDITOR.replace('description_en', {height: '300px'});
    </script>
    {{--    <script>--}}
    {{--        // ======== image preview ====== //--}}
    {{--        $(".image2").change(function () {--}}
    {{--            if (this.files && this.files[0]) {--}}
    {{--                var reader = new FileReader();--}}
    {{--                reader.onload = function (e) {--}}
    {{--                    $('.image-preview2').attr('src', e.target.result);--}}
    {{--                }--}}
    {{--                reader.readAsDataURL(this.files[0]);--}}
    {{--            }--}}
    {{--        });--}}
    {{--    </script>--}}
@stop

