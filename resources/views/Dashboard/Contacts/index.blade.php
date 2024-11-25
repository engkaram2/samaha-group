@extends('Dashboard.layouts.master')
@section('title', trans('back.contact.contacts'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href=""><i class="icon-home2 position-left"></i> @lang('back.home')</a>
            </li>
            <li class="active">@lang('back.contact.contacts')</li>
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
            @include('Dashboard.layouts.parts.table-header', ['collection' => $contacts, 'name' => 'contacts', 'icon' => 'contacts'])
        </div>
        <br>
        <br>

        <!-- Basic pills -->
        <div class="row" style="padding: 15px;">
            <div class="col-md-12">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            @if($contacts->count() > 0)

                                <table class="table datatable-button-init-basic" id="contacts">
                                    <thead>
                                    <tr class="text-center">
                                        <th class="text-center">#</th>
                                        <th class="text-center">{{ trans('back.contact.name') }}</th>
                                        <th class="text-center">{{ trans('back.contact.message') }}</th>
                                        <th class="text-center">{{ trans('back.contact.is_seen') }}</th>
                                        <th class="text-center">@lang('back.since')</th>
                                        <th class="text-center">@lang('back.form-actions')</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                        <tr class="text-center" id="row-{{ $contact->id }}">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{$contact->full_name}}</td>

                                            <td>
                                                <a data-popup="tooltip" title="{{ $contact->message }}">
                                                    {{ substr($contact->message, 0, 20) }} ...
                                                </a>
                                            </td>
                                            <td>
                                                @if($contact->read_at == null)
                                                    <span
                                                        class="badge badge-warning">{{ trans('back.contact.unseen') }}</span>
                                                @else
                                                    <span
                                                        class="badge badge-primary">{{ trans('back.contact.seen') }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $contact->created_at->diffforHumans() }}</td>
                                            <td>
                                                <div class="list-icons">
                                                    <div class="list-icons-item dropdown">
                                                        <a href="#"
                                                           class="list-icons-item caret-0 dropdown-toggle"
                                                           data-toggle="dropdown">
                                                            <i class="icon-menu9"></i>
                                                        </a>

                                                        <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                                            <li>
                                                                <a href="{{ route('contacts.show', $contact->id) }}">
                                                                    <i
                                                                        class="icon-eye"></i>@lang('back.show')
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a onclick="sweet_delete('{{ route('contacts.destroy', $contact->id) }}', {{ $contact->id }})"
                                                                   class="dropdown-item"><i class="icon-bin"></i>{{ trans('back.delete') }}</a>

                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div style="text-align: center;"><h3> @lang('back.no_data_found') </h3>
                                </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /basic pills -->

    </div>
    <!-- /basic datatable -->
@stop

@section('scripts')
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'contact'])

@stop
