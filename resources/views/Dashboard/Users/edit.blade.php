@extends('Dashboard.layouts.master')
@section('title', trans('back.edit-var',['var'=>trans('back.user.user')]))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--            </li>--}}
            <li><a href="{{ route('users.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.user.users')</a></li>
            <li class="active">@lang('back.edit-var',['var'=>trans('back.user.user')])</li>
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
            <form action="{{ route('users.update',$user) }}" class="form-horizontal" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
{{--                <input type="hidden" name="user_id" value="{{$user->id}}"/>--}}
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
                            <label class=" control-label display-block"> {{ trans('back.full_name') }}: </label>
                            <input type="text" class="form-control" value="{{$user->full_name}}" name="full_name">
                        </div>
                        <div class="form-group">
                            <label class=" control-label display-block"> {{ trans('back.mobile') }}: </label>
                            <input type="text" class="form-control" value="{{$user->mobile}}" name="mobile">
                        </div>
                        <div class="form-group">
                            <label class=" control-label display-block"> {{ trans('back.email') }}: </label>
                            <input type="text" class="form-control" value="{{$user->email}}" name="email">
                        </div>
                        <div class="form-group">
                            <label>@lang('back.user.image')</label>
                            <input type="file" class="form-control image " name="image">
                            <img src=" {{ $user->image_path }}" width=" 100px " value="{{ $user->image_path }}"
                                 class="thumbnail image-preview">
                        </div>
                        <div class="form-group">
                            <label>@lang('back.user.passport_image')</label>
                            <input type="file" class="form-control image2 " name="passport_image">
                            <img src=" {{ $user->passport_image_path }}" width=" 100px " value="{{ $user->passport_image_path }}"
                                 class="thumbnail image-preview2">
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
@section('scripts')
@stop
