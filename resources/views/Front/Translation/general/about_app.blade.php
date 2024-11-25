@extends('Front.layouts.translation.master')
@section('title', trans('back.about_app'))
@section('style')
{{--    <link href="{{asset('Front/assets')}}/css/style-ar.css" rel="stylesheet">--}}
@stop
@section('content')
    <!--start main section-->
    <section class="transAbout_section relBKcover_sec inBKmain__color">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> About Us </h3>
                <ol class="breadcrumb tanslate_breadCrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.translation-home')}}">samaha translation > </a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </div>
        </div>
    </section>

    <!--start about section-->
    <section class="about_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="about_desWrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> About us </span>
                        <h3> <span> About </span> Samaha <br> translation </h3>
                        <p> Samaha Advocates and Legal Consultants is one of the leading offices in the legal profession in the United Arab
                            Emirates and the Arab Republic of Egypt. The team consists of a distinguished elite of professional cadres of lawyers and legal consultants in all areas of the law.
                            Samaha Advocates and Legal Consultants is one of the leading offices in the legal profession in the United Arab Emirates and the Arab Republic of Egypt. </p>
                        <a href="{{route('front.show-translation-contact-us')}}" class="main__btn search__btn hvr-bounce-to-right margin_TopMD"> learn more </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="abotTRns_wrap">
                        <img src="{{asset('Front/assets')}}/img/abtv.png" alt="" class="img-fluid">
                        <a data-fancybox="" class="playVdNd_btn" data-width="640" data-height="360" href="https://innoplanet.net/wp-content/uploads/2023/06/Innovation-Planet-HQ.mp4" data-thumb=""> <img src="{{asset('Front/assets')}}/img/play.png" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start skills section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="aboutTH_wrap wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <img src="{{asset('Front/assets')}}/img/about2.png" alt="" class="aboutTH_img">
                        <img src="{{asset('Front/assets')}}/img/dots.png" alt="" class="AbDotts_img">
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="about_desWrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> our skill </span>
                        <h3> We Are <span> Increasing Business </span> Success</h3>
                        <p> Samaha Advocates and Legal Consultants is one of the leading offices in the legal profession in the United Arab Emirates and the Arab Republic of Egypt.</p>
                        <div class="progress__wrapper">
                            <h5 class="porgress_name"> quality </h5>
                            <div class="progress skill_progress">
                                <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress__wrapper">
                            <h5 class="porgress_name"> team experience </h5>
                            <div class="progress skill_progress">
                                <div class="progress-bar" role="progressbar" style="width: 98%;" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="progress__wrapper">
                            <h5 class="porgress_name"> soft skills </h5>
                            <div class="progress skill_progress">
                                <div class="progress-bar" role="progressbar" style="width: 88%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start services section-->
    <section class="secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 aboutmx-auto">
                <span class="smOffer myFlex__center mx-auto"> how it works </span>
                <h3> how it <span> works </span> </h3>
                <p> Samaha Advocates and Legal Consultants offers
                    comprehensive legal services to clients in the aviation and maritime industries </p>
            </div>
            @if($translation_services->count() > 0)
                <div class="row">
                    @foreach($translation_services as $service)
                <div class="col-12 col-md-4">
                    <a href="{{route('front.translation-service-details',$service->id)}}" class="practice__card greyBK_seCard hvr-rectangle-out wow bounceIn" data-wow-duration="1s" data-wow-offset="100">
                        <div class="practice_thumb myFlex__center">
                            <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                        </div>
                        <h3> {{ $service->$name }}  </h3>
                        <p>{{ $service->$quote }}  </p>
                    </a>
                </div>
                    @endforeach
                </div>
            @else
                <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
            @endif
        </div>
    </section>

    <!--start contact section-->
    <section class="aboutContact__section">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="statsC_desWrap paddMY_90 wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer white_smOffer myFlex__center"> call us </span>
                        <h3> feel free to call us anytime  </h3>
                        <p> Have any idea or project for in your mind call usor schedule a appointment. Our representativewill reply you shortly. </p>
                        <a href="{{route('front.show-translation-contact-us')}}" class="main__btn outline__btn margin_TopMD"> contact us </a>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="contMan__thumb">
                        <img src="{{asset('Front/assets')}}/img/man.png" alt="" class="contMan__img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start testimonials section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            @if($reviews->count() > 0)

            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about_desWrap pdTop_70 wow bounceIn" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> Testimonials </span>
                        <h3> What <span> Our Clients </span> Say about us </h3>
                        <div class="tranlateTS__slider" dir="rtl">
                            @foreach($reviews as $review)
                            <div class="oneItem_Slide">
                                <p> {{ isNullable($review->review) }} </p>
                                <div class="usTStcard_Flex">

                                    <img src="{{ $review->client_image_path }}" alt="" class="uSTi_Img">
                                    <div class="usTStcard_cont">
                                        <h5> {{ ucwords($review->client_name) }} </h5>
                                        <p> {{ isNullable($review->client_job) }} </p>
                                        <div class="starsTS_wrap">
                                            @for($i=1; $i <= 5; $i++)
                                                <i class="fa-{{ (int)$review->rate >= $i ? 'solid' : 'regular' }} fa-star"></i>
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="testPHoto__wrapper">
                        <div class="width__62">
                            <img src="{{asset('Front/assets')}}/img/ts1.png" alt="" class="img-fluid">
                        </div>
                        <div class="width__36">
                            <img src="{{asset('Front/assets')}}/img/ts2.png" alt="" class="img-fluid">
                        </div>
                        <div class="width__36 moveTop_60">
                            <img src="{{asset('Front/assets')}}/img/ts3.png" alt="" class="img-fluid">
                        </div>
                        <div class="width__62 moveTop_60">
                            <img src="{{asset('Front/assets')}}/img/ts4.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
            @endif
        </div>
    </section>
@stop
@push('scripts')@endpush
