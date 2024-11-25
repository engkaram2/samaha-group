@extends('Dashboard.layouts.master')
@section('title', trans('back.edit-var',['var'=>trans('back.review.review')]))
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            {{--            <li><a href="{{route('admin.home')}}"><i class="icon-home2 position-left"></i> @lang('back.home')</a>--}}
            {{--            </li>--}}
            <li><a href="{{ route('reviews.index') }}"><i
                        class="icon-admin position-left"></i> @lang('back.review.reviews')</a></li>
            <li class="active">@lang('back.edit-var',['var'=>trans('back.review.review')])</li>
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
            <form action="{{ route('reviews.update',$review) }}" class="form-horizontal" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{--                <input type="hidden" name="review_id" value="{{$review->id}}"/>--}}
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
                            <label class=" control-label display-block"> {{ trans('back.review.client_name') }}
                                : </label>
                            <input type="text" class="form-control" value="{{$review->client_name}}" name="client_name">
                        </div>
                        <div class="form-group">
                            <label class=" control-label display-block"> {{ trans('back.review.client_job') }}: </label>
                            <input type="text" class="form-control" value="{{$review->client_job}}" name="client_job">
                        </div>

                        <div class="form-group">
                            <label class=" control-label display-block"> {{ trans('back.review.rate') }}: </label>
                            <input type="hidden" id="rateInput" name="rate" value="">

                            <div class="text-center">
                                {{--                                @for($i=1; $i <= 5; $i++)--}}
                                {{--                                <a href="#" onclick="setRateValue({{$i}})"><i id="rate-"{{$i}} class="fa{{ (int)$review->rate >= $i ? 's' : 'r' }} fa-star"  style="color:yellow;"></i></a>--}}
                                {{--                                @endfor--}}
                                <a href="#" onclick="setRateValue('1')"><i id="rate-1"
                                                                           class="fa{{ (int)$review->rate >= 1 ? 's' : 'r' }} fa-star"
                                                                           style="color:yellow;"></i></a>

                                <a href="#" onclick="setRateValue('2')"><i id="rate-2"
                                                                           class="fa{{ (int)$review->rate >= 2 ? 's' : 'r' }} fa-star"
                                                                           style="color:yellow;"></i></a>
                                <a href="#" onclick="setRateValue('3')"><i id="rate-3"
                                                                           class="fa{{ (int)$review->rate >= 3 ? 's' : 'r' }} fa-star"
                                                                           style="color:yellow;"></i></a>
                                <a href="#" onclick="setRateValue('4')"><i id="rate-4"
                                                                           class="fa{{ (int)$review->rate >= 4 ? 's' : 'r' }} fa-star"
                                                                           style="color:yellow;"></i></a>
                                <a href="#" onclick="setRateValue('5')"><i id="rate-5"
                                                                           class="fa{{ (int)$review->rate >= 5 ? 's' : 'r' }} fa-star"
                                                                           style="color:yellow;"></i></a>

                            </div>


                        </div>
                        <div class="form-group">
                            <label class=" control-label display-block"> {{ trans('back.review.review') }}: </label>
                            <textarea class=" form-control" name="review">{{$review->review}}</textarea>

                        </div>

                        <div class="form-group">
                            <label>@lang('back.review.client_image')</label>
                            <input type="file" class="form-control image " name="client_image">
                            <img src=" {{ $review->client_image_path }}" width=" 100px "
                                 value="{{ $review->client_image_path }}"
                                 class="thumbnail image-preview">
                        </div>

                        @if(auth()->guard('admin')->user()->type == 'legal')
                            <div class="form-group">
                                <label>صورة اخري</label>
                                <input type="file" class="form-control image2 " name="image">
                                <img src=" {{ $review->image_path }}" width=" 100px " value="{{ $review->image_path }}"
                                     class="thumbnail image-preview2">
                            </div>
                        @endif
                        <div class="text-right">
                            <input type="submit" class="btn btn-success"
                                   value=" {{ trans('back.update_and_forward_to_list') }} "/>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /basic layout -->
        </div>
    </div>

@stop
@section('scripts')
    <script>
        function setRateValue(value) {
            let rateInput = $('#rateInput');

            rateInput.val('');

            rateInput.val(value);

            for (var i = 1; i <= 5; i++) {
                if (value >= i) {
                    $('#rate-' + i).removeClass('far fas-star');
                    $('#rate-' + i).addClass('fas fas-star');
                } else {
                    $('#rate-' + i).removeClass('fas fas-star');
                    $('#rate-' + i).addClass('far fas-star');
                }
            }
        }
    </script>
@stop
