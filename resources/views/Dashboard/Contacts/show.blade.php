@extends('Dashboard.layouts.master')
@section('title', trans('back.contact.contacts'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href=""><i class="icon-home2 position-left"></i> @lang('back.home')</a>
            </li>
            <li><a href="{{ route('contacts.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.contact.contacts')</a></li>
            <li class="active">@lang('back.show',['var'=>trans('back.contact.contacts')])</li>
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
            <div class="row">
                <div class="col-md-8">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header header-elements-inline">
{{--                            <h5 class="card-title">{{ trans('back.contact.show_contact_message') }}</h5>--}}
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">{{ trans('back.contact.name') }} :</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" value="{{ $contact->full_name }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">{{ trans('back.contact.email') }} :</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" value="{{ $contact->email }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">{{ trans('back.contact.mobile') }} :</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" value="{{ $contact->mobile }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">{{ trans('back.contact.address') }} :</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" value="{{ $contact->address }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3">{{ trans('back.contact.message') }} :</label>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" readonly>{{ $contact->message }}</textarea>
                                    </div>
                                </div>
                                <legend class="font-weight-semibold text-uppercase font-size-sm"></legend>
                                <div class="text-right">
                                    <a href="{{ route('contacts.index') }}" class="btn btn-primary text-white"><i class="icon-list2 mr-2"></i>{{ trans('back.buttons_back_to_list') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /basic layout -->
                </div>

            </div>
        </div>
    </div>
    <!-- /basic datatable -->
@stop
