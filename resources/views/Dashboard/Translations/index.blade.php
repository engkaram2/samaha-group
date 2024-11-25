@extends('Dashboard.layouts.master')
@section('title', trans('back.translation.translations'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
{{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="active">@lang('back.translation.translations')</li>
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
            @include('Dashboard.layouts.parts.table-header', ['collection' => $translations, 'name' => 'translations', 'icon' => 'translations'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="#" data-toggle="modal" data-target="#add_translation_modal"
               class="btn btn-success btn-labeled btn-labeled-left"><b><i
                        class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.translation.translation')])
            </a>
        </div>
        <br>
        @if($translations->count() > 0)
            <table class="table datatable-button-init-basic" id="translations" style="font-size: 16px;">
                <thead>
                <tr style="background-color:gainsboro">
                    <th>#</th>
                    <th>{{ trans('back.translation.file') }}</th>
                    <th>{{ trans('back.user_name') }}</th>
                    <th>{{ trans('back.team_name') }}</th>
                    <th>{{ trans('back.file_name') }}</th>
                    <th>@lang('back.translation.status')</th>
                    <th>@lang('back.since')</th>
                    <th class="text-center">@lang('back.form-actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($translations as $translation)
                    <tr id="row-{{ $translation->id }}">
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{route('view_file',$translation->id)}}" target="_blank"> open<i
                                    class="icon-file-pdf" style="color: red;"> </i></a>
                        </td>
                        <td>
                            <a href="{{ $translation->user->ImagePath }}" data-popup="lightbox">
                                <img src="{{ $translation->user->ImagePath }}" alt="" width="80" height="80" class="img-circle">
                            </a>
                        </td>
                        <td>
                            <a href="{{ $translation->team->ImagePath }}" data-popup="lightbox">
                                <img src="{{ $translation->team->ImagePath }}" alt="" width="80" height="80" class="img-circle">
                            </a>
                        </td>
                        <td>
                            {{ $translation->$name }}
                        </td>
                        <td>
                            @if($translation->file_translation == null)
                                <span
                                    class="badge badge-warning">{{ trans('back.translation.not_translate') }}</span>
                            @else
                                <span
                                    class="badge badge-primary">{{ trans('back.translation.translate') }}</span>
                            @endif
                        </td>
                        <td>{{isset($translation->created_at) ?$translation->created_at->diffForHumans():'---' }}</td>
                        <td class="text-center">
                            <div class="list-icons text-center">
                                <div class="list-icons-item dropdown text-center">
                                    <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
                                        <li>
                                            <a href="{{ route('translations.show', $translation->id) }}"> <i
                                                    class="icon-eye"></i>@lang('back.show') </a>
                                        </li>
                                        <li>
{{--                                            <a href="{{ route('translations.edit',$translation->id) }}"> <i--}}
{{--                                                    class="icon-database-edit2"></i>@lang('back.edit') </a>--}}
                                            <a onclick="sweet_delete('{{ route('translations.destroy', $translation->id) }}', {{ $translation->id }})"
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
            <div style="text-align: center; padding-bottom: 20px;"><h2> @lang('back.no_data_found') </h2></div>
        @endif
    </div>
    <!-- /with Buttons extension -->

    <!-- /basic datatable -->
        @include('Dashboard.Translations.modal.add_translation_modal')
@stop

@section('scripts')
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'translation'])
@stop
