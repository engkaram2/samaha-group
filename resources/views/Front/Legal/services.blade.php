@extends('Front.layouts.legal.master')
@section('title', trans('back.legal.services'))
@section('style')
@stop
{{--@include('front.layouts.splash')--}}
@section('content')
    {{--    @include('front.layouts.parts.alert')--}}
    <!--start main section-->
    <section class="innerserVices_section">
        <div class="welcome_section">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s"
                data-wow-offset="100" data-wow-delay="1s"> @lang('front.our_services.our_services') </h3>
                <p>@lang('front.our_services.our_services_description1') </p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.home')}}">samaha legal > </a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('front.our_services.our_services')</li>
                </ol>
            </div>
        </div>
    </section>

    <!--start services section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center">@lang('front.our_services.our_services') </span>
                <h3> <span> @lang('front.our_services.our_services_titel') </span>  </h3>
                <p>  @lang('front.our_services.our_services_description2') </p>
            </div>
            <div class="row">
                @if($legal_services->count() > 0)
                    @foreach($legal_services as $service)
                <div class="col-12 col-md-4">
                    <a href="{{route('front.legal-service-details',$service->id)}}" class="practice__card hvr-rectangle-out wow bounceIn" data-wow-duration="1s" data-wow-offset="100">
                        <div class="practice_thumb myFlex__center">
                            <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                        </div>
                        <h3> {{ $service->$name }} </h3>
                        <p> {{ $service->$quote }} </p>
                    </a>
                </div>
                    @endforeach
                @else
                    <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
                @endif
            </div>
        </div>
    </section>
@stop
@push('scripts')@endpush
