@extends('Front.layouts.translation.master')
@section('title', trans('back.service_details'))
@section('style')
@stop
@section('content')
    <!--start main section-->
    <section class="transORder_section relBKcover_sec inBKmain__color">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> order translation </h3>
                <ol class="breadcrumb tanslate_breadCrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.translation-home')}}"> samaha translation > </a></li>
                    <li class="breadcrumb-item"><a href="{{route('front.translation-services')}}"> our services > </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> order translation </li>
                </ol>
            </div>
        </div>
    </section>

    <!--start order section-->
    <section class="orderT_section greySEC_section">
        <div class="container pxLG-0">
            <div class="row orderTR_bkRow">
                <div class="col-12 col-md-6">
                    <div class="legalTH_wrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <img src="{{asset('Front/assets')}}/img/ab8.png" alt="" class="legalTH_thumb">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about_desWrap pdTop_70 width_90 wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> order translation </span>
                        <h3> feel free to <br> <span> order translation </span> </h3>
                        <p> Recognizing the importance of the Saudi Arabian market, Al Tamimi & Company opened its first office in Saudi Arabia, We service clients locally
                            in all practice areas in the three largest markets in Saudi Arabia.</p>
                        <div class="orderDes_list">
                            <a href="#" class="aboutDes_link">
                                <span class="contact_thumb"> <i class="fa-solid fa-location-dot"></i> </span>
                                <span> United Arab EmiratesSheikh </span>
                            </a>
                            <a href="#" class="aboutDes_link">
                                <span class="contact_thumb"> <i class="fa-solid fa-envelope"></i> </span>
                                <u> mailto:info@samahalegal.com </u>
                            </a>
                            <a href="#" class="aboutDes_link">
                                <span class="contact_thumb"> <i class="fa-solid fa-phone"></i> </span>
                                <span> 0020502255112 </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start definition section-->
    <section class="definition_section">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="definition__card">
                        <div class="definition__content Difbttm__50 order__two">
                            <h3> {{$translation_service_details->$title1}}</h3>
                            <p>{{ $translation_service_details->$description1 }} </p>
                        </div>
                        <div class="definition_thumb order__one">
                            <img src="{{ $translation_service_details->image1_path }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="definition__card">
                        <div class="definition_thumb Difbttm__50">
                            <img src="{{ $translation_service_details->image2_path }}" alt="" class="img-fluid">
                        </div>
                        <div class="definition__content">
                            <h3> {{$translation_service_details->$title2}}</h3>
                            <p>{{ $translation_service_details->$description2 }} </p>
                        </div>
                    </div>
                </div>
{{--                <div class="col-12 col-lg-6">--}}
{{--                    <div class="definition__card">--}}
{{--                        <div class="definition__content Difbttm__50 order__two">--}}
{{--                            <h3> Definition of Intellectual Property </h3>--}}
{{--                            <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts of Swift will be familiar to you. Swift provides its own versions--}}
{{--                                of all fundamental C and Objective-C types, including Int for integers, </p>--}}
{{--                        </div>--}}
{{--                        <div class="definition_thumb order__one">--}}
{{--                            <img src="{{asset('Front/assets')}}/img/d3.png" alt="" class="img-fluid">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-lg-6">--}}
{{--                    <div class="definition__card">--}}
{{--                        <div class="definition_thumb Difbttm__50">--}}
{{--                            <img src="{{asset('Front/assets')}}/img/d4.png" alt="" class="img-fluid">--}}
{{--                        </div>--}}
{{--                        <div class="definition__content">--}}
{{--                            <h3> Definition of Intellectual Property </h3>--}}
{{--                            <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts of Swift will be familiar to you. Swift provides its own versions--}}
{{--                                of all fundamental C and Objective-C types, including Int for integers, </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

    <!--start services section-->
    <section class="secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 aboutmx-auto">
                <span class="smOffer myFlex__center mx-auto"> our services </span>
                <h3> other <span> services </span> </h3>
                <p> Samaha Advocates and Legal Consultants offers
                    comprehensive legal services to clients in the aviation and maritime industries </p>
            </div>
            @if($latest_service->count() > 0)

            <div class="row">
                @foreach($latest_service as $service)
                <div class="col-12 col-md-4">
                    <a href="{{route('front.translation-service-details',$service->id)}}" class="practice__card greyBK_seCard hvr-rectangle-out wow bounceIn" data-wow-duration="1s" data-wow-offset="100">
                        <div class="practice_thumb myFlex__center">
                            <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                        </div>
                        <h3> {{ $service->$name }}</h3>
                        <p> {{ $service->$quote }} </p>
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
