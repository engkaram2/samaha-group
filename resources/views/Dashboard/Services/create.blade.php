@extends('Dashboard.layouts.master')
@section('title', trans('back.create-var',['var'=>trans('back.service.service')]))
@section('style')
@endsection
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
            <li class="active">@lang('back.create-var',['var'=>trans('back.service.service')])</li>
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
            <form action="{{ route('services.store') }}" class="form-horizontal" method="post" id="submitted-form"
                  enctype="multipart/form-data">
                @csrf
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">@lang('back.create-var',['var'=>trans('back.service.service')])</h5>
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
                                <div class="col-lg-6">
                                    <label
                                        class=" control-label display-block"> {{ trans('back.icon') }}
                                        : </label>
                                    <input type="file" class="form-control image " name="icon" required>
                                </div>
                                <div class="col-lg-6">
                                    <img src=" {{ asset('default.png') }} " width=" 100px " class="thumbnail image-preview"style="background-color: gray;">
                                </div>
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control"
                                           value="{{ old('name_ar') }}" name="name_ar"
                                           placeholder="@lang('back.name_ar')" required>
                                    <span class="label-text"></span>
                                @error('name_ar') <span  class="label-text" style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('name_en') }}"  name="name_en"
                                       placeholder="@lang('back.name_en')" required>
                                <span class="label-text"></span>
                                @error('name_en') <span  class="label-text" style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control"
                                       value="{{ old('quote_ar') }}" name="quote_ar"
                                       placeholder="@lang('back.quote_ar')" required>
                                <span class="label-text"></span>
                                @error('quote_ar') <span  class="label-text" style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('quote_en') }}"  name="quote_en"
                                       placeholder="@lang('back.quote_en')" required>
                                <span class="label-text"></span>
                                @error('quote_en') <span  class="label-text" style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"
                                       value="{{ old('title1_ar') }}" name="title1_ar"
                                       placeholder="@lang('back.service.title1_ar')" required>
                                <span class="label-text"></span>
                                @error('title1_ar') <span  class="label-text" style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('title1_en') }}"  name="title1_en"
                                       placeholder="@lang('back.service.title1_en')" required>
                                <span class="label-text"></span>
                                @error('title1_en') <span  class="label-text" style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group">
                                <label><strong>{{ trans('back.service.description1_ar') }}</strong></label>
                                <textarea  class=" form-control"
                                          name="description1_ar" placeholder="Enter text ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label><strong>{{ trans('back.service.description1_en') }}</strong></label>
                                <textarea  class=" form-control"
                                          name="description1_en" placeholder="Enter text ..."></textarea>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-6">
                                    <label
                                        class=" control-label display-block"> {{ trans('back.service.image1') }}
                                        : </label>
                                    <input type="file" class="form-control image1 " name="image1" required>
                                </div>
                                <div class="col-lg-6">
                                    <img src=" {{ asset('default.png') }} " width=" 100px " class="thumbnail image-preview1">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control"
                                       value="{{ old('title2_ar') }}" name="title2_ar"
                                       placeholder="@lang('back.service.title2_ar')" required>
                                <span class="label-text"></span>
                                @error('title2_ar') <span  class="label-text" style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="{{ old('title2_en') }}"  name="title2_en"
                                       placeholder="@lang('back.service.title2_en')" required>
                                <span class="label-text"></span>
                                @error('title2_en') <span  class="label-text" style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>

                            <div class="form-group">
                                <label><strong>{{ trans('back.service.description2_ar') }}</strong></label>
                                <textarea  class=" form-control"
                                           name="description2_ar" placeholder="Enter text ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label><strong>{{ trans('back.service.description2_en') }}</strong></label>
                                <textarea  class=" form-control"
                                           name="description2_en" placeholder="Enter text ..."></textarea>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-6">
                                    <label
                                        class=" control-label display-block"> {{ trans('back.service.image2') }}
                                        : </label>
                                    <input type="file" class="form-control image2 " name="image2" required>
                                </div>
                                <div class="col-lg-6">
                                    <img src=" {{ asset('default.png') }} " width=" 100px " class="thumbnail image-preview2">
                                </div>
                            </div>


{{--                            <div class="form-group">--}}
{{--                                <label><strong>{{ trans('back.description_ar') }}</strong></label>--}}
{{--                                <textarea cols="18" rows="18" class="summernote form-control"--}}
{{--                                          name="description_ar" placeholder="Enter text ..."></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label><strong>{{ trans('back.description_en') }}</strong></label>--}}
{{--                                <textarea cols="18" rows="18" class="summernote form-control"--}}
{{--                                          name="description_en" placeholder="Enter text ..."></textarea>--}}
{{--                            </div>--}}

{{--                            <div class="form-group">--}}
{{--                                <div class="col-xs-12 @error('icon') has-error @enderror">--}}
{{--                                    <label for="icon">@lang('back.icon')</label>--}}
{{--                                    <select name="icon" id="icon" class="selectpicker form-control">--}}
{{--                                        @foreach($icons as $key => $value)--}}
{{--                                            <option data-content="<i class='{{ $value }}' aria-hidden='true'></i>"--}}
{{--                                                    value="{{ $value }}"></option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}

{{--                                </div>--}}
{{--                            </div>--}}
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
        <div class="col-md-3">
            <div class="panel panel-flat">

                <div class="panel-heading">
                    <h5 class="panel-title"> {{ trans('back.service.latest_services') }} </h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <tr class="text-center">
                            <th> {{ trans('back.name') }} </th>
                        </tr>
                        @forelse($latest_services as $service)
                            <tr>
                                <td> {{ $service->name_ar }} </td>
                            </tr>
                        @empty
                        @endforelse
                    </table>
                </div>

            </div>
        </div>
    </div>

@stop
