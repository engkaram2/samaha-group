@extends('Dashboard.layouts.master')
@section('title', trans('back.blog.blogs'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i--}}
{{--                        class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--            </li>--}}
            <li><a href="{{ route('blogs.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.blog.blogs')</a></li>
            <li class="active">@lang('back.show')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop

@section('content')
    @include('Dashboard.layouts.parts.validation_errors')
    <!-- Content area -->
    <div class="content">

     <div class="row">
         <div class="col-md-9">
             <!-- Detached content -->
             <div class="container-detached">
                 <div class="content-detached">

                     <!-- Post -->
                     <div class="panel">
                         <div class="panel-body">
                             <div class="content-group-lg">
                                 <div class="content-group text-center">
{{--                                     <a href="#" class="display-inline-block">--}}
{{--                                         <img src="{{ $blog->PageImagePath }}" class="img-responsive" alt="">--}}
{{--                                     </a>--}}

                                     <div class="" style=" height: 100%; width:100%;">
                                         <img src="{{ $blog->PageImagePath }}" alt="" style=" height: 100%; width:100%;">
                                     </div>
                                 </div>

                                 <h3 class="text-semibold mb-5">
                                     <a href="#" class="text-default">{{ $blog->$name }}</a>
                                 </h3>

                                 <ul class="list-inline list-inline-separate text-muted content-group">
                                     <li><a href="#" class="text-muted">{{isset($blog->created_at) ?$blog->created_at->diffForHumans():'---' }}</a></li>
                                     <li>{{$blog->created_at->format('Y-m-d')}}</li>
                                     <li><a href="#" class="text-muted"><i class="icon-heart6 text-size-base text-pink position-left"></i> 281</a></li>
                                 </ul>

                                 <div class="content-group">
                                     {!! $blog_details->$description !!}
                                 </div>

                                 <blockquote class="no-margin panel panel-body border-left-lg border-left-warning">
                                     <img src="{{ $blog->image_path }}" class="img-circle" alt="">
                                     {{ $blog->$quote }}
                                     <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                 </blockquote>

                             </div>
                         </div>
                     </div>
                     <!-- /post -->

                 </div>
             </div>
             <!-- /detached content -->

         </div>

         <div class="col-md-3">
             <!-- Detached sidebar -->
             <div class="sidebar-detached">
                 <div class="sidebar sidebar-default sidebar-separate">
                     <div class="sidebar-content" style="color: black;">

                     <!-- Related Blogs -->
                         <div class="sidebar-category">
                             <div class="category-title">
                                 <span>Related Blogs</span>
                                 <ul class="icons-list">
                                     <li><a href="#" data-action="collapse"></a></li>
                                 </ul>
                             </div>

                             <div class="category-content">
                                 <ul class="media-list">
                                     @foreach($related_blogs as $related_blog)
                                     <li class="media">
                                         <div class="media-left">
                                             <img src="{{$related_blog->ImagePath}}" class="img-circle img-sm" alt="">
                                         </div>

                                         <div class="media-body">
                                             <a href="#" class="media-heading">
                                                 <span class="text-semibold">{{$related_blog->$name}}</span>
                                             </a>

                                             <span class="text-muted">Who knows, maybe that...</span>
                                         </div>
                                     </li>
                                     @endforeach
                                 </ul>
                             </div>
                         </div>
                         <!-- /recent comments -->

{{--                         <!-- Share -->--}}
{{--                         <div class="sidebar-category">--}}
{{--                             <div class="category-title">--}}
{{--                                 <span>Share</span>--}}
{{--                                 <ul class="icons-list">--}}
{{--                                     <li><a href="#" data-action="collapse"></a></li>--}}
{{--                                 </ul>--}}
{{--                             </div>--}}

{{--                             <div class="category-content no-padding-bottom text-center">--}}
{{--                                 <ul class="list-inline no-margin">--}}
{{--                                     <li>--}}
{{--                                         <a href="#" class="btn bg-indigo btn-icon content-group">--}}
{{--                                             <i class="icon-facebook"></i>--}}
{{--                                         </a>--}}
{{--                                     </li>--}}
{{--                                     <li>--}}
{{--                                         <a href="#" class="btn bg-danger btn-icon content-group">--}}
{{--                                             <i class="icon-youtube3"></i>--}}
{{--                                         </a>--}}
{{--                                     </li>--}}
{{--                                     <li>--}}
{{--                                         <a href="#" class="btn bg-info btn-icon content-group">--}}
{{--                                             <i class="icon-twitter"></i>--}}
{{--                                         </a>--}}
{{--                                     </li>--}}
{{--                                     <li>--}}
{{--                                         <a href="#" class="btn bg-orange btn-icon content-group">--}}
{{--                                             <i class="icon-feed3"></i>--}}
{{--                                         </a>--}}
{{--                                     </li>--}}
{{--                                 </ul>--}}
{{--                             </div>--}}
{{--                         </div>--}}
{{--                         <!-- /share -->--}}
                     </div>
                 </div>
             </div>
             <!-- /detached sidebar -->
         </div>
     </div>

    </div>
    <!-- /content area -->

    @stop

@section('scripts')
@stop


