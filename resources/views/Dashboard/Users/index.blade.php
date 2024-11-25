@extends('Dashboard.layouts.master')
@section('title', trans('back.user.users'))
@section('style')
<style>
</style>
@stop

@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            {{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')--}}
            {{--                </a>--}}
            {{--            </li>--}}
            <li class="active">@lang('back.user.users')</li>
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
            @include('Dashboard.layouts.parts.table-header', ['collection' => $users, 'name' => 'users', 'icon' => 'users'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="#" data-toggle="modal" data-target="#add_user"
               class="btn btn-success btn-labeled btn-labeled-left"><b><i
                        class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.user.user')])
            </a>

        </div>

        @if($users->count() > 0)
            <table class="table datatable-button-init-basic" id="users" style="font-size: 16px;">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{ trans('back.user.image') }}</th>
                    <th>{{ trans('back.user.name') }}</th>
                    <th>{{ trans('back.mobile') }}</th>
                    <th>{{ trans('back.nationality.nationality') }}</th>
                    <th>@lang('back.since')</th>
                    <th class="text-center">@lang('back.form-actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr id="row-{{ $user->id }}">
                        <td>{{ $user->id }}</td>
                        <td>
                            <a href="{{ $user->image_path }}" data-popup="lightbox">
                                <img src="{{ $user->image_path }}" alt="" width="80" height="80" class="img-circle">
                            </a>
                        </td>

                        <td> <a href="{{ route('users.show', $user->id) }}"> {{ ucwords($user->full_name) }}</a></td>

                        <td> {{ isNullable($user->mobile) }}</td>
                        <td> {{ isNullable($user->nationality->$name) }}</td>

                        <td>{{isset($user->created_at) ?$user->created_at->diffForHumans():'---' }}</td>
                        <td class="text-center">
                            <div class="list-icons text-center">
                                <div class="list-icons-item dropdown text-center">
                                    <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                        <li>

                                            <a href="{{ route('users.show', $user->id) }}"> <i
                                                    class="icon-eye"></i>@lang('back.show') </a>

                                            <a href="{{ route('users.edit',$user->id) }}"> <i
                                                    class="icon-database-edit2"></i>@lang('back.edit') </a>
                                            <a onclick="sweet_delete('{{ route('users.destroy', $user->id) }}', {{ $user->id }})"
                                               class="dropdown-item"><i class="icon-bin"></i>{{ trans('back.delete') }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
{{--                    @include('Dashboard.Countries.edit_modal')--}}
                @endforeach
                </tbody>
            </table>

        @else
            <div style="text-align: center; padding-bottom: 20px;"><h2> @lang('back.no_data_found') </h2></div>
        @endif
    </div>
    <!-- /basic datatable -->

    <!--  modal -->
    <div id="add_user" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive content-group">

                        <!-- Basic layout-->
                        <form action="{{ route('users.store') }}" class="form-horizontal" method="post"
                              id="submitted-form"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <i class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.user.user')])
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
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" value="" name="full_name"
                                                       placeholder="@lang('back.full_name') " required>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" value="" name="mobile"
                                                       placeholder="@lang('back.mobile') " required>                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" value="" name="email"
                                                       placeholder="@lang('back.email') " required>
                                            </div>
                                            <div class="col-lg-6">
                                                <select name="nationality_id" data-placeholder="{{trans('back.select')}}"
                                                        class="select-size-lg">
                                                    <option selected disabled>{{trans('back.select')}}</option>
                                                    @foreach($nationalities as $nationality)
                                                        <option value="{{ $nationality->id }}"> {{ $nationality->$name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-valid floating @error('password') 'has-error' @enderror">
                                            <label for="password">{{ trans('back.password') }}</label>
                                            <input type="password" class="form-control" name="password" id="password" dir="{{ direction() }}">
                                            {{--                                                        @error('password') <span><strong>{{ $message }}</strong></span> @enderror--}}
                                        </div><br>

                                        <div class="form-valid floating">
                                            <label for="password_confirmation">{{ trans('back.confirm_password') }}</label>
                                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" dir="{{ direction() }}">
                                        </div><br>

                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <label class=" control-label display-block"> {{ trans('back.user.image') }}: </label>
                                                <input type="file" class="form-control image " name="image" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src=" {{ asset('default.png') }} " width=" 100px " class="thumbnail image-preview">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <label class=" control-label display-block"> {{ trans('back.user.passport_image') }}: </label>
                                                <input type="file" class="form-control image1 " name="passport_image" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src=" {{ asset('default.png') }} " width=" 100px " class="thumbnail image-preview1">
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
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'user'])
@stop
