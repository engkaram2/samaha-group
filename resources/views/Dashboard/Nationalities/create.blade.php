@extends('Dashboard.layouts.master')

@section('title', trans('back.create-var',['var'=>trans('back.nationality.nationality')]))

@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
{{--            </li>--}}
            <li><a href="{{ route('nationalities.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.nationality.nationalities')</a></li>
            <li class="active">@lang('back.create-var',['var'=>trans('back.nationality.nationality')])</li>
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
        <div class="col-md-6">
            <!-- Basic layout-->
            <form action="{{ route('nationalities.store') }}" class="form-horizontal" method="post" id="submitted-form"
                  enctype="multipart/form-data">
                @csrf
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <i class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.nationality.nationality')])
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
                                <input type="text" class="form-control" value="" name="name_ar"
                                       placeholder="@lang('back.name_ar') "required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value="" name="name_en"
                                       placeholder="@lang('back.name_en') "required>
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
        <div class="col-md-6">
            <div class="panel panel-flat">

                <div class="panel-heading">
                    <h5 class="panel-title"> {{ trans('back.nationality.latest_nationalities') }} </h5>
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
                            <th> {{ trans('back.name_ar') }} </th>
                            <th> {{ trans('back.name_en') }} </th>
                        </tr>
                        @forelse($latest_nationalities as $nationality)
                            <tr>
                                <td> {{ $nationality->name_ar }} </td>
                                <td> {{ $nationality->name_en }} </td>
                            </tr>
                        @empty
                        @endforelse
                    </table>
                </div>

            </div>
        </div>
    </div>
@stop



