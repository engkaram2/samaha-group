@extends('Front.layouts.services.master')
@section('title', trans('back.about_app'))
@section('style')
{{--    <link href="{{asset('Front/assets')}}/css/style-ar.css" rel="stylesheet">--}}
@stop
{{--@include('front.layouts.splash')--}}
@section('content')
    <!--start main section-->
    <section class="innAbouThird_section inBKmain__color">
        <div class="container welcmInner_container pxLG-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about_topWrap">
                        <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> About Us </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('front.services-home')}}">samaha services > </a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/sbs.png" alt="" class="sbsImg_grey d__mob__none">
    </section>

    <!--start about section-->
    <section class="about_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="about_desWrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> About us </span>
                        <h3> <span> About </span> <br> Samaha services </h3>
                        <p> samaha Advocates and Legal Consultants is one of the leading offices
                            in the legal profession in the United Arab Emirates and the Arab Republic of
                            Egypt. The team consists of a distinguished elite of professional cadres of lawyers and legal consultants in all areas of the law.
                            samaha Advocates and Legal Consultants is one of the leading offices in the legal profession in the United Arab Emirates and the Arab Republic of Egypt. </p>

                        <a href="{{route('front.show-services-contact-us')}}" class="main__btn search__btn hvr-bounce-to-right"> contact Us </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="aboutTHree_wrap wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <img src="{{asset('Front/assets')}}/img/bttt1.png" alt="" class="SaboutFull_img">
                        <img src="{{asset('Front/assets')}}/img/bttt2.png" alt="" class="SaboutSM_img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start definition section-->
    <section class="secPadding greyBK_section">
        <div class="container pxLG-0">
            <div class="row abThrd_definCArd">
                <div class="col-12">
                    <div class="abThrd_defThumb mbTm_60">
                        <img src="{{asset('Front/assets')}}/img/dif1.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12">
                    <div class="abThrd_defCont">
                        <h3> Definition of Intellectual Property </h3>
                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts
                            of Swift will be familiar to you. Swift provides its own versions of all fundamental C and Objective-C types, including Int for integers, Double and Float for floating-point values, Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types. </p>
                    </div>
                </div>
            </div>
            <div class="row abThrd_definCArd">
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defThumb">
                        <img src="{{asset('Front/assets')}}/img/dif2.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defCont">
                        <h3> <span> Definition </span> of Intellectual Property </h3>
                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts
                            of Swift will be familiar to you. Swift provides its own versions of all fundamental C and Objective-C types, including Int for integers, Double and Float for floating-point values, Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types. </p>
                    </div>
                </div>
            </div>
            <div class="row abThrd_definCArd">
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defCont">
                        <h3> <span> Definition </span> of Intellectual Property </h3>
                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts
                            of Swift will be familiar to you. Swift provides its own versions of all fundamental C and Objective-C types, including Int for integers, Double and Float for floating-point values, Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types. </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defThumb">
                        <img src="{{asset('Front/assets')}}/img/dif3.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start testimonials section-->
    <section class="greyBK_section secPadding" dir="rtl">
        <div class="container pxLG-0">
            <div class="about_desWrap testmon_center text-center">
                <span class="smOffer myFlex__center mx-auto"> Testimonials </span>
                <h3> What <span> Our Clients </span> Say about us </h3>
            </div>
            @if($reviews->count() > 0)
            <div class="ServicesTS__slider">
                @foreach($reviews as $review)

                <div class="oneItem_Slide">
                    <div class="srvItemCard">
                        <div class="usTStcard_Flex mbTm_30">
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
