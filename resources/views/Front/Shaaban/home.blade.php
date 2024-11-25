@extends('Front.layouts.shaaban.master')
@section('title', trans('back.shaaban.home'))
@section('style')
@stop

@section('content')
{{--    @include('Front.layouts.parts.alert')--}}
    <!--start main section-->
    <section class="mainFourth__section inShFourth__color">
        <div class="container welcmInner_container pxLG-0 ">
            <div class="shbTop__center">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> shaaban samaha </h3>
                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Samaha translation Company is at the forefront of sharing knowledge and insights from
                    the Middle East & North Africa combining knowledge and experience to bring you up-to-date insights, thoughtful analysis. </p>
                <div class="flexBttins_wrap">
                    <a href="{{route('front.show-shaaban-contact-us')}}" class="main__btn hvr-bounce-to-right transparent__btn"> contact us </a>
                    <a data-fancybox="" class="playVdTH_btn4" data-width="640" data-height="360" href="https://innoplanet.net/wp-content/uploads/2023/06/Innovation-Planet-HQ.mp4" data-thumb=""> <img src="{{asset('Front/assets')}}/img/play4.png" alt=""> </a>
                </div>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/shb1.png" alt="" class="shbOne_imgAbs d__mob__none">
        <img src="{{asset('Front/assets')}}/img/shb2.png" alt="" class="shbtwo_imgAbs d__mob__none">
    </section>

    <!--start definition section-->
    <section class="secPadding greyBK_section">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> Shaaban samaha </span>
                <h3> <span> about </span> shaaban samaha</h3>
                <p class="mx-auto"> Samaha Advocates and Legal Consultants offers comprehensive legal
                    services to clients in the aviation and maritime industries </p>
            </div>
            <div class="row abThrd_definCArd">
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defThumb">
                        <img src="{{asset('Front/assets')}}/img/dif4.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defCont">
                        <h3> Definition of Intellectual Property </h3>
                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts
                            of Swift will be familiar to you. Swift provides its own versions of all fundamental C and Objective-C types, including Int for integers, Double and Float for floating-point values, Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types. </p>
                    </div>
                </div>
            </div>
            <div class="row abThrd_definCArd">
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defCont">
                        <h3> Definition of Intellectual Property </h3>
                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts
                            of Swift will be familiar to you. Swift provides its own versions of all fundamental C and Objective-C types, including Int for integers, Double and Float for floating-point values, Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types. </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defThumb">
                        <img src="{{asset('Front/assets')}}/img/dif5.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row abThrd_definCArd">
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defThumb">
                        <img src="{{asset('Front/assets')}}/img/dif6.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defCont">
                        <h3> Definition of Intellectual Property </h3>
                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts
                            of Swift will be familiar to you. Swift provides its own versions of all fundamental C and Objective-C types, including Int for integers, Double and Float for floating-point values, Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start services section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> our services </span>
                <h3> our <span> services </span> </h3>
                <p class="mx-auto"> Samaha Advocates and Legal Consultants offers comprehensive legal
                    services to clients in the aviation and maritime industries </p>
            </div>
            @if($our_services->count() > 0)
                <div class="row">
                    @foreach($our_services as $service)
                <div class="col-12 col-md-4">
                    <a href="{{route('front.shaaban-service-details',$service->id)}}" class="SHBserv__card wow bounceIn" data-wow-duration="1s" data-wow-offset="100">
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
        </div>
    </section>

    <!--start testimonials section-->
    <section class="greyBK_section secPadding" dir="rtl">
        <div class="container pxLG-0">
            <div class="about_desWrap testmon_center text-center mbttom__90">
                <span class="smOffer myFlex__center mx-auto"> Testimonials </span>
                <h3> What <span> Our Clients </span> Say </h3>
            </div>
            @if($reviews->count() > 0)

            <div class="ShabbanTS__slider">
                @foreach($reviews as $review)

                <div class="oneTSh_item">
                    <div class="SHbtsItem_Card">
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <div class="SHbtsItem_thumb">
                                    <img src="{{asset('Front/assets')}}/img/ts44.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 col-lg-7">
                                <div class="SHbtsItem_cont">
                                    <div class="usTStcard_Flex mbTm_30">
                                        <img src="{{ $review->client_image_path }}" alt="" class="uSTi_Img">
                                        <div class="usTStcard_cont">
                                            <h5> {{ ucwords($review->client_name) }} </h5>
                                            <p> {{ isNullable($review->client_job) }} </p>
                                            <div class="starsTS_wrap">
{{--                                                <i class="fa-solid fa-star"></i>--}}
{{--                                                <i class="fa-solid fa-star"></i>--}}
{{--                                                <i class="fa-solid fa-star"></i>--}}
{{--                                                <i class="fa-solid fa-star"></i>--}}
{{--                                                <i class="fa-regular fa-star"></i>--}}

                                                @for($i=1; $i <= 5; $i++)
                                                    <i class="fa-{{ (int)$review->rate >= $i ? 'solid' : 'regular' }} fa-star"></i>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <p> {{ isNullable($review->review) }} </p>

                                </div>
                            </div>
                        </div>
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
