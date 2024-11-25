@extends('Front.layouts.services.master')
@section('title', trans('back.services.services'))
@section('style')
@stop
{{--@include('front.layouts.splash')--}}
@section('content')
    <!--start main section-->
    <section class="innAbouThird_section inBKmain__color">
        <div class="container welcmInner_container pxLG-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about_topWrap">
                        <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> our services </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('front.services-home')}}">samaha services > </a></li>
                            <li class="breadcrumb-item active" aria-current="page">our services</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/sbs.png" alt="" class="sbsImg_grey d__mob__none">
    </section>

    <!--start services section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> Our services </span>
                <h3> our <span> services </span> </h3>
                <p class="mx-auto"> Samaha Advocates and Legal Consultants offers comprehensive legal
                    services to clients in the aviation and maritime industries </p>
            </div>
            @if($our_services->count() > 0)
            <div class="row">
                @foreach($our_services as $service)

                <div class="col-12 col-md-4">
                    <a href="{{route('front.services-service-details',$service->id)}}" class="practice__card hvr-rectangle-out wow bounceIn" data-wow-duration="1s" data-wow-offset="100">
                        <div class="practice_thumb myFlex__center">
                            <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                        </div>
                        <h3> {{ $service->$name }} </h3>
                        <p> {{ $service->$quote }}</p>
                    </a>
                </div>
                @endforeach
            </div>
            @else
                <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
            @endif
        </div>
    </section>
@stop
@push('scripts')@endpush
