@extends('Front.layouts.jasem.master')
@section('title', trans('back.Jasem.home'))
@section('style')
@stop
@section('content')
    {{--    @include('Front.layouts.parts.alert')--}}
    <!--start main section-->
    <section class="mainFifth__section inShFifth__color">
        <div class="container welcmInner_container pxLG-0">
            <div class="shbTop__Start">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> jassem
                    legal </h3>
                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Samaha
                    translation Company is at the forefront of sharing knowledge and insights from
                    the Middle East & North Africa combining knowledge and experience to bring you up-to-date insights,
                    thoughtful analysis. </p>
                <div class="flexBttins_wrap">
                    <a href="{{route('front.show-jasem-contact-us')}}"
                       class="main__btn hvr-bounce-to-right transparent__btn"> contact us </a>
                    <a data-fancybox="" class="playVdTH_btn4" data-width="640" data-height="360"
                       href="https://innoplanet.net/wp-content/uploads/2023/06/Innovation-Planet-HQ.mp4" data-thumb="">
                        <img src="{{asset('Front/assets')}}/img/play4.png" alt=""> </a>
                </div>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/gsm1.png" alt="" class="GSMImg_grey d__mob__none">
    </section>

    <!--start about section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> about us </span>
                <h3><span> about </span> jassem legal </h3>
                <p> Samaha Advocates and Legal Consultants offers comprehensive legal services to clients in the
                    aviation and maritime industries </p>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="aboutJS__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100"
                         data-wow-delay="0.2s">
                        <div class="aboutJS_thumb">
                            <img src="{{asset('Front/assets')}}/img/n11.png" alt="">
                        </div>
                        <div class="ourNews_content">
                            <a href="#" class="newsCard_title"> Definition of Intellectual Property </a>
                            <p> The maritime laws of the Arabic Republic of
                                Egypt Corporate laws are the rules and regulations. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="aboutJS__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100"
                         data-wow-delay="0.2s">
                        <div class="aboutJS_thumb">
                            <img src="{{asset('Front/assets')}}/img/n12.png" alt="">
                        </div>
                        <div class="ourNews_content">
                            <a href="#" class="newsCard_title"> Definition of Intellectual Property </a>
                            <p> The maritime laws of the Arabic Republic of
                                Egypt Corporate laws are the rules and regulations. </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="aboutJS__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100"
                         data-wow-delay="0.2s">
                        <div class="aboutJS_thumb">
                            <img src="{{asset('Front/assets')}}/img/n13.png" alt="">
                        </div>
                        <div class="ourNews_content">
                            <a href="#" class="newsCard_title"> Definition of Intellectual Property </a>
                            <p> The maritime laws of the Arabic Republic of
                                Egypt Corporate laws are the rules and regulations. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start services section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> our services </span>
                <h3> our <span> services </span></h3>
                <p> Samaha Advocates and Legal Consultants offers comprehensive legal
                    services to clients in the aviation and maritime industries </p>
            </div>
            @if($our_services->count() > 0)
                <div class="row">
                    @foreach($our_services as $service)
                        <div class="col-12 col-md-4">
                            <a href="{{route('front.jasem-service-details',$service->id)}}"
                               class="SHBserv__card practGRey_card wow bounceIn" data-wow-duration="1s"
                               data-wow-offset="100">
                                <div class="prSRV4_thumb myFlex__center">
                                    <img src="{{ $service->IconPath }}" alt="" class="prctSH_thImg4">
                                </div>
                                <div class="SHBserv4__cont">
                                    <h3> {{ $service->$name }} </h3>
                                    <p> {{ $service->$quote }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
            @endif
            <a href="{{route('front.jasem-services')}}" class="showBtn_all main__btn mxST_auto hvr-bounce-to-right"> show all </a>

        </div>
    </section>

    <!--start testimonials section-->
    <section class="secPadding" dir="rtl">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__50">
                <span class="smOffer myFlex__center"> Testimonials </span>
                <h3> What <span> Our Clients </span> Say about us </h3>
            </div>
            @if($reviews->count() > 0)
                <div class="ServicesTS__slider">
                    @foreach($reviews as $review)
                        <div class="oneItem_Slide">
                            <div class="srvItemCard greyBK_seCard">
                                <div class="usTStcard_Flex mbTm_30">
                                    <img src="{{ $review->client_image_path }}" alt="" class="uSTi_Img">
                                    <div class="usTStcard_cont">
                                        <h5> {{ ucwords($review->client_name) }} </h5>
                                        <p> {{ isNullable($review->client_job) }} </p>
                                        <div class="starsTS_wrap">
                                            @for($i=1; $i <= 5; $i++)
                                                <i class="fa-{{ (int)$review->rate >= $i ? 'solid' : 'regular' }} fa-star"></i>
                                            @endfor
                                            {{--                                    <i class="fa-solid fa-star"></i>--}}
                                            {{--                                    <i class="fa-solid fa-star"></i>--}}
                                            {{--                                    <i class="fa-solid fa-star"></i>--}}
                                            {{--                                    <i class="fa-solid fa-star"></i>--}}
                                            {{--                                    <i class="fa-regular fa-star"></i>--}}
                                        </div>
                                    </div>
                                </div>
                                <p> {{ isNullable($review->review) }} </p>
                            </div>
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
