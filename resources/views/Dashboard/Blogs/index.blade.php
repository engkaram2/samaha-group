@extends('Dashboard.layouts.master')
@section('title', trans('back.blog.blogs'))
@section('files_scripts')
    <script type="text/javascript" src="{{asset('Dashboard/assets/js/pages/form_checkboxes_radios.js')}}"></script>
@stop
@section('style')
@stop
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li class="active">@lang('back.blog.blogs')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop
{{--@section('logo')--}}
{{--    <img class="" width="150" src="{{auth()->guard('admin')->user()->image_path }}"/>--}}
{{--@stop--}}
@section('content')

    <!-- Basic datatable -->
    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <div class="panel-heading">
            @include('Dashboard.layouts.parts.table-header', ['collection' => $blogs, 'name' => 'blogs', 'icon' => 'blogs'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="{{route('blogs.create')}}" class="btn btn-success btn-labeled btn-labeled-left"><b><i
                        class="icon-plus2"></i></b>{{ trans('back.add') }}</a>
        </div>
        <br>
        {{--        @include('Dashboard.layouts.parts.flash')--}}
    </div>
    <!-- /basic datatable -->

    <!-- Post grid -->
    <div class="row" style="margin:3px;">
        @if($blogs->count() > 0)
            @foreach($blogs as $blog)
                <div class="col-md-4" id="row-{{ $blog->id }}">
                    <div class="panel panel-flat">
                        <div class="panel-body">
                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                                class="icon-menu7"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li>
                                                <a href="{{ route('blogs.show', $blog->id) }}"> <i
                                                        class="icon-eye"></i>@lang('back.show') </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('blogs.edit',$blog->id) }}"> <i
                                                        class="icon-database-edit2"></i>@lang('back.edit') </a>
                                                <a onclick="sweet_delete('{{ route('blogs.destroy', $blog->id) }}', {{ $blog->id }})"
                                                   class="dropdown-item"><i
                                                        class="icon-bin"></i>{{ trans('back.delete') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="thumb content-group">
                                <div class="" style=" height: 160px; width:100%;">
                                    <img src="{{ $blog->ImagePath }}" alt="" style=" height: 160px; width:100%;">
                                </div>
                                {{--                                    <img src="{{ $blog->image_path }}" alt="" class="img-responsive">--}}
                                <div class="caption-overflow">
											<span>
												<a href="{{ route('blogs.show', $blog->id) }}"
                                                   class="btn btn-flat border-white text-white btn-rounded btn-icon"><i
                                                        class="icon-arrow-right8"></i></a>
											</span>
                                </div>
                            </div>

                            <h5 class="text-semibold mb-5">
                                <a href="#" class="text-default">{{ $blog->$name }}</a>
                            </h5>

                            <ul class="list-inline list-inline-separate text-muted content-group">
                                <li><a href="#" class="text-muted">{{isset($blog->created_at) ?$blog->created_at->diffForHumans():'---' }}</a></li>
                                <li>{{$blog->created_at->format('Y-m-d')}}</li>
                            </ul>

                            {{ $blog->$quote }}
                        </div>

                        <div class="panel-footer panel-footer-condensed">
                            <div class="heading-elements not-collapsible">
                                <ul class="list-inline list-inline-separate heading-text text-muted">
                                    <li><a href="#" class="text-muted"><i
                                                class="icon-heart6 text-size-base text-pink position-left"></i>
                                            {{ $blog->blog_type }}</a></li>
                                </ul>

                                <a href="{{ route('blogs.show', $blog->id) }}" class="heading-text pull-right">Read more
                                    <i
                                        class="icon-arrow-left13 position-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        @else
            <div style="text-align: center; padding-bottom: 20px;"><h2> @lang('back.no_data_found') </h2></div>
        @endif
    </div>
@stop

@section('scripts')
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'blog'])

@stop


{{--<table class="table datatable-button-init-basic" id="blogs" style="font-size: 16px;">--}}
{{--    <thead>--}}
{{--    <tr style="background-color:gainsboro">--}}
{{--        <th>#</th>--}}
{{--        <th>{{ trans('back.image') }}</th>--}}
{{--        <th>{{ trans('back.name') }}</th>--}}
{{--        <th>@lang('back.since')</th>--}}
{{--        <th class="text-center">@lang('back.form-actions')</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    @if($blogs->count() > 0)--}}
{{--        <tbody>--}}
{{--        @foreach($blogs as $blog)--}}
{{--            <tr id="row-{{ $blog->id }}">--}}

{{--                <td>{{ $loop->iteration }}</td>--}}
{{--                <td>--}}
{{--                    <a href="{{ $blog->image_path }}" data-popup="lightbox">--}}
{{--                        <img src="{{ $blog->image_path }}" alt="" width="80" height="80" class="img-circle">--}}
{{--                    </a>--}}
{{--                </td>--}}

{{--                <td> {{ isNullable($blog->$name) }}--}}
{{--                    --}}{{--                        <td><a href={{ route('blogs.show', $blog->id) }}> {{ isNullable($blog->$name) }}</a>--}}
{{--                </td>--}}
{{--                <td>{{isset($blog->created_at) ?$blog->created_at->diffForHumans():'---' }}</td>--}}
{{--                <td class="text-center">--}}
{{--                    <div class="list-icons text-center">--}}
{{--                        <div class="list-icons-item dropdown text-center">--}}
{{--                            <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">--}}
{{--                                <i class="icon-menu9"></i>--}}
{{--                            </a>--}}

{{--                            <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">--}}
{{--                                --}}{{--                                        <li>--}}
{{--                                --}}{{--                                            <a href="{{ route('blogs.show', $blog->id) }}"> <i--}}
{{--                                --}}{{--                                                    class="icon-eye"></i>@lang('back.show') </a>--}}
{{--                                --}}{{--                                        </li>--}}
{{--                                <li>--}}
{{--                                    <a href="{{ route('blogs.edit',$blog->id) }}"> <i--}}
{{--                                            class="icon-database-edit2"></i>@lang('back.edit') </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a onclick="sweet_delete('{{ route('blogs.destroy', $blog->id) }}', {{ $blog->id }})"--}}
{{--                                       class="dropdown-item"><i class="icon-bin"></i>{{ trans('back.delete') }}--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    @endif--}}
{{--</table>--}}
