@extends('Dashboard.layouts.master')
@section('title', trans('back.review.reviews'))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li class="active">@lang('back.review.reviews')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop
@section('content')
    @include('Dashboard.layouts.parts.validation_errors')

    <!-- Basic datatable -->
    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <div class="panel-heading">
            @include('Dashboard.layouts.parts.table-header', ['collection' => $reviews, 'name' => 'reviews', 'icon' => 'reviews'])
        </div>
        <br>
        <div class="list-icons" style="padding-right: 10px;">
            <a href="#" data-toggle="modal" data-target="#add_review"
               class="btn btn-success btn-labeled btn-labeled-left"><b><i
                        class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.review.review')])
            </a>
        </div>
        @if($reviews->count() > 0)
            <table class="table datatable-button-init-basic" id="reviews" style="font-size: 16px;">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{{ trans('back.review.client_image') }}</th>
                    <th>{{ trans('back.review.client_name') }}</th>
                    <th>{{ trans('back.review.client_job') }}</th>
                    <th>{{ trans('back.review.rate') }}</th>
                    <th>@lang('back.since')</th>
                    <th class="text-center">@lang('back.form-actions')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                    <tr id="row-{{ $review->id }}">
                        <td>{{ $review->id }}</td>
                        <td>
                            <a href="{{ $review->client_image_path }}" data-popup="lightbox">
                                <img src="{{ $review->client_image_path }}" alt="" width="80" height="80" class="img-circle">
                            </a>
                        </td>
                        <td> {{ ucwords($review->client_name) }}</td>

                        <td> {{ isNullable($review->client_job) }}</td>
                        <td>
                                @for($i=1; $i <= 5; $i++)
                                        <i class="fa{{ (int)$review->rate >= $i ? 's' : 'r' }} fa-star"></i>
                                @endfor
                        </td>
                        <td>{{isset($review->created_at) ?$review->created_at->diffForHumans():'---' }}</td>
                        <td class="text-center">
                            <div class="list-icons text-center">
                                <div class="list-icons-item dropdown text-center">
                                    <a href="#" class="list-icons-item caret-0 dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-{{ floating('right', 'left') }}">
{{--                                        <li>--}}
{{--                                            <a href="javascript:void(0);"--}}
{{--                                               data-toggle="modal"--}}
{{--                                               data-target="#edit_review_{{$review->id}}">--}}
{{--                                                <i class="icon-database-edit2"></i>@lang('back.edit')--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                        <li>--}}
{{--                                            <a onclick="sweet_delete('{{ route('reviews.destroy', $review->id) }}', {{ $review->id }})"--}}
{{--                                               class="dropdown-item"><i class="icon-bin"></i>{{ trans('back.delete') }}--}}
{{--                                            </a>--}}
{{--                                        </li>--}}

                                        <li>
                                            <a href="{{ route('reviews.edit',$review->id) }}"> <i
                                                    class="icon-database-edit2"></i>@lang('back.edit') </a>
                                            <a onclick="sweet_delete('{{ route('reviews.destroy', $review->id) }}', {{ $review->id }})"
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
    <!-- /basic datatable -->

    <!--  modal -->
    <div id="add_review" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive content-group">
                        <!-- Basic layout-->
                        <form action="{{ route('reviews.store') }}" class="form-horizontal" method="post"
                              id="submitted-form"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">
                                        <i class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.review.review')])
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
                                                <input type="text" class="form-control" value="" name="client_name"
                                                       placeholder="@lang('back.review.client_name') " required>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" value="" name="client_job"
                                                       placeholder="@lang('back.review.client_job') " required>                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <label class=" control-label display-block"> {{ trans('back.review.client_image') }}: </label>
                                                <input type="file" class="form-control image " name="client_image" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src=" {{ asset('default.png') }} " width=" 100px " class="thumbnail image-preview">
                                            </div>
                                        </div>
                                        <div class="form-group">

                                        <label class=" control-label display-block"> {{ trans('back.review.rate') }}: </label>

                                        <input type="hidden" id="rateInput" name="rate" value="1" required>

                                        <div class="text-center">
                                            <a href="#" onclick="setRateValue('1')"><i id="rate-1" class="fas fa-star"style="color:yellow;"></i></a>
                                            <a href="#" onclick="setRateValue('2')"><i id="rate-2" class="far fa-star"style="color:yellow;"></i></a>
                                            <a href="#" onclick="setRateValue('3')"><i id="rate-3" class="far fa-star"style="color:yellow;"></i></a>
                                            <a href="#" onclick="setRateValue('4')"><i id="rate-4" class="far fa-star"style="color:yellow;"></i></a>
                                            <a href="#" onclick="setRateValue('5')"><i id="rate-5" class="far fa-star"style="color:yellow;"></i></a>
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <label><strong>{{ trans('back.review.review') }}</strong></label>
                                            <textarea class=" form-control" name="review" required>{{ old('review') }}</textarea>
                                        </div>

{{--                                        @if(auth()->guard('admin')->user()->type !='translation')--}}
                                            @if(auth()->guard('admin')->user()->type == 'legal')

                                            <div class="form-group">
                                            <label>صورة اخري</label>
                                            <input type="file" class="form-control image2 " name="image" required >
                                            @error('image2')<span style="color: #e81414;">{{ $message }}</span>@enderror

                                        </div>
                                        <div class="form-group">
                                            <img src=" {{ asset('default.png') }} " width=" 100px "
                                                 class="thumbnail image-preview2">

                                            @error('image2')
                                            <span><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        @endif
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
    @include('Dashboard.layouts.parts.ajax_delete', ['model' => 'review'])
    <script>
        function setRateValue(value)
        {
            let rateInput = $('#rateInput');

            rateInput.val('');

            rateInput.val(value);

            for (var i = 1;i<=5;i++)
            {
                if(value >= i)
                {
                    $('#rate-'+i).removeClass('far fas-star');
                    $('#rate-'+i).addClass('fas fas-star');
                }
                else
                {
                    $('#rate-'+i).removeClass('fas fas-star');
                    $('#rate-'+i).addClass('far fas-star');
                }
            }
        }
    </script>
@stop
