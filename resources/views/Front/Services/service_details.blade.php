@extends('Front.layouts.services.master')
@section('title', trans('back.service_details'))
@section('style')
@stop
@section('content')
    <!--start main section-->
    <section class="innAbouThird_section inBKmain__color">
        <div class="container welcmInner_container pxLG-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about_topWrap">
                        <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> legal services </h3>
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

    <!--start contact section-->
    <section class="contact_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="about_desWrap pdTop_40 wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> Our services </span>
                        <h3> Samaha <span> services </span> </h3>
                        <p> Samaha Advocates and Legal Consultants is one of the leading offices in the legal profession
                            in the United Arab Emirates and the Arab Republic of Egypt.</p>
                        <p> The team consists of a distinguished elite of professional cadres of lawyers and legal consultants in all areas of the law. </p>
                        <ul class="aboutDes_list">
                            <li> No matter what type of legal issue you are facing, our team can help. </li>
                            <li> Our number one priority is always the satisfaction of our clients. </li>
                            <li> We take the time to listen to our client’s concerns. </li>
                        </ul>
                        <a href="{{route('front.show-services-contact-us')}}" class="main__btn search__btn hvr-bounce-to-right"> contact Us </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="legalTH_wrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <div class="srVPic_flexWrap">
                            <div class="col-12 col-lg-6">
                                <div class="srVPic_Fluid">
                                    <img src="{{asset('Front/assets')}}/img/svv1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="srVPic_Fluid">
                                    <img src="{{asset('Front/assets')}}/img/svv2.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="srVPic_Fluid">
                                    <img src="{{asset('Front/assets')}}/img/svv3.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="srVPic_Fluid">
                                    <img src="{{asset('Front/assets')}}/img/svv4.png" alt="" class="img-fluid">
                                </div>
                            </div>
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
                            <h3> {{$services_service_details->$title1}}</h3>
                            <p>{{ $services_service_details->$description1 }} </p>
                        </div>
                        <div class="definition_thumb order__one">
                            <img src="{{ $services_service_details->image1_path }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="definition__card">
                        <div class="definition_thumb Difbttm__50">
                            <img src="{{ $services_service_details->image2_path }}" alt="" class="img-fluid">
                        </div>
                        <div class="definition__content">
                            <h3> {{$services_service_details->$title2}}</h3>
                            <p>{{ $services_service_details->$description2 }} </p>
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
{{--                            <img src="{{asset('Front/assets')}}/img/d7.png" alt="" class="img-fluid">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-lg-6">--}}
{{--                    <div class="definition__card">--}}
{{--                        <div class="definition_thumb Difbttm__50">--}}
{{--                            <img src="{{asset('Front/assets')}}/img/d8.png" alt="" class="img-fluid">--}}
{{--                        </div>--}}
{{--                        <div class="definition__content">--}}
{{--                            <h3> Definition of Intellectual Property </h3>--}}
{{--                            <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts of Swift will be familiar to you. Swift provides its own versions--}}
{{--                                of all fundamental C and Objective-C types, including Int for integers, </p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
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
            @if($latest_service->count() > 0)
                <div class="row">
                    @foreach($latest_service as $service)
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
