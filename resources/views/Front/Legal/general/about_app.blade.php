@extends('Front.layouts.legal.master')
@section('title', trans('back.about_app'))
@section('style')
    {{--    <link href="{{asset('Front/assets')}}/css/style-ar.css" rel="stylesheet">--}}
@stop
{{--@include('front.layouts.splash')--}}
@section('content')
    {{--    @include('front.layouts.parts.alert')--}}
    @php($app_description= 'app_description_'.app()->getLocale())
    @php($vision= 'app_vision_'.app()->getLocale())
    @php($mission= 'app_mission_'.app()->getLocale())
    <!--start main section-->
    <section class="innerAbout_section">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> About
                    Us </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.home')}}">samaha legal > </a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us .</li>
                </ol>
            </div>
        </div>
    </section>

    <!--start about section-->
    <section class="about_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="aboutTH_wrap wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <img src="{{asset('Front/assets')}}/img/ab1.png" alt="" class="aboutWide_img">
                        <img src="{{asset('Front/assets')}}/img/ab2.png" alt="" class="aboutSCmd_img">
                        <img src="{{asset('Front/assets')}}/img/dots23.png" alt="" class="ScDotts_img2">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about_desWrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> About us </span>
                        <h3><span> About </span> Samaha <br> Legal Consultants </h3>
                        <p>
                            {{App\Models\LegalSetting::where('key',$app_description)->first()->value}}
                        </p>
                        <ul class="aboutDes_list">
                            <li> No matter what type of legal issue you are facing, our team can help.</li>
                            <li> Our number one priority is always the satisfaction of our clients.</li>
                            <li> We take the time to listen to our client’s concerns.</li>
                        </ul>
                        <a href="{{route('front.show-legal-contact-us')}}"
                           class="main__btn search__btn hvr-bounce-to-right"> contact Us </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start services section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> what we do </span>
                <h3> Legal Practice Areas</h3>
                <p> Samaha Advocates and Legal Consultants offers comprehensive legal
                    services to clients in the aviation and maritime industries </p>
            </div>
            <div class="row">
                @if($our_services->count() > 0)
                    @foreach($our_services as $service)
                        <div class="col-12 col-md-4">
                            <a href="{{route('front.legal-service-details',$service->id)}}"
                               class="practice__card hvr-rectangle-out wow bounceIn" data-wow-duration="1s"
                               data-wow-offset="100">
                                <div class="practice_thumb myFlex__center">
                                    <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                                </div>
                                <h3> {{ $service->$name }}</h3>
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

    <!--start message section-->
    <section class="message_section">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="about_desWrap pdTop_70 wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> our vission </span>
                        <h3> our <span> message </span></h3>
                        <p>  {{App\Models\LegalSetting::where('key',$vision)->first()->value}}</p>
{{--                        <p> government entities, financial institutions, and high-net-worth individuals. Our practice--}}
{{--                            areas include corporate, aviation and marine,--}}
{{--                            debt recovery, intellectual property rights management, and other legal services. </p>--}}
                        <a href="{{route('front.home')}}" class="main__btn search__btn hvr-bounce-to-right"> Get
                            started </a>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="aboutTH_wrap hasRounded_bk wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <img src="{{asset('Front/assets')}}/img/ct2.png" alt="" class="aboutTH_img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start Statistics section-->
    <section class="statistics_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="statsC_desWrap pdTop_70 wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer white_smOffer myFlex__center"> about us </span>
                        <h3> Our Actual <br> yearly Statistics </h3>
                        <p> A law consultation is an initial meeting with
                            a lawyer that allows you to discuss your issue and their approach. </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="statC__row wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <div class="col-12 col-xl-6">
                            <div class="statsNum__CArd">
                                <h3 class="statNum_nPlus"> 325 </h3>
                                <p> Satisfied Clients </p>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="statsNum__CArd">
                                <h3 class="statNum_nPlus"> 730 </h3>
                                <p> Successful Cases </p>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="statsNum__CArd">
                                <h3 class="statNum_nPlus"> 945 </h3>
                                <p> Professional Lawyer </p>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="statsNum__CArd">
                                <h3 class="statNum_nPlus"> 286 </h3>
                                <p> Awards Winning </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start contact section-->
    <section class="contact_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="about_desWrap wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> what our mission </span>
                        <h3> We’ve 30 Years Of <span> Experienced & Provide </span> Professional Solutions </h3>
                        <p> Samaha  {{App\Models\LegalSetting::where('key',$mission)->first()->value}} </p>

                        <a href="{{route('front.show-legal-contact-us')}}"
                           class="main__btn search__btn hvr-bounce-to-right"> contact Us </a>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="aboutTH_wrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <img src="{{asset('Front/assets')}}/img/ct.png" alt="" class="aboutTH_img">
                        <img src="{{asset('Front/assets')}}/img/dots2.png" alt="" class="AbDotts_img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start testimonials section-->
    <section class="testimonials_section" dir="rtl">
        <div class="container pxLG-0">
            @if($reviews->count() > 0)
                <div class="testOne__slider">
                    @foreach($reviews as $review)

                        <div class="oneItem_Slide">
                            <div class="testmOne__CArd">
                                <div class="row">
                                    <div class="col-12 col-md-5">
                                        <div class="testLG_Thumb">
                                            <img src="{{ $review->image_path }}" alt="" class="testLG_Timg">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-7">
                                        <div class="about_desWrap pdTop_70 wow bounceIn" data-wow-duration="1.3s"
                                             data-wow-offset="100">
                                            <span class="smOffer myFlex__center"> Our Testimonials </span>
                                            <h3><span> +2356 </span> clients Say About Us </h3>
                                            <p>{{ isNullable($review->review) }} </p>
                                            <div class="usTStcard_Flex">
                                                <img src="{{ $review->client_image_path }}" alt="" class="uSTi_Img">
                                                <div class="usTStcard_cont">
                                                    <h5> {{ ucwords($review->client_name) }} </h5>
                                                    <p> {{ isNullable($review->client_job) }} </p>
                                                </div>
                                            </div>
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

    {{--<!--start contact section-->--}}
    {{--<section class="contact_section secPadding">--}}
    {{--    <div class="container pxLG-0">--}}
    {{--        <div class="row">--}}
    {{--            <div class="col-12 col-lg-6 col-xl-7">--}}
    {{--                <div class="about_desWrap">--}}
    {{--                    <span class="smOffer myFlex__center"> Free Consultations </span>--}}
    {{--                    <h3> Get in touch </h3>--}}
    {{--                    <form action="" class="contactUs__form">--}}
    {{--                        <div class="Cform__row">--}}
    {{--                            <div class="col-12 col-xl-6">--}}
    {{--                                <input type="text" class="contact__input" placeholder=" your name ">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-12 col-xl-6">--}}
    {{--                                <input type="text" class="contact__input" placeholder=" last name ">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-12 col-xl-6">--}}
    {{--                                <input type="email" class="contact__input" placeholder=" email address ">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-12 col-xl-6">--}}
    {{--                                <input type="text" class="contact__input" placeholder=" phone number ">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-12 col-xl-6">--}}
    {{--                                <input type="email" class="contact__input" placeholder=" address ">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-12 col-xl-6">--}}
    {{--                                <input type="text" class="contact__input" placeholder=" situation ">--}}
    {{--                            </div>--}}
    {{--                            <div class="col-12">--}}
    {{--                                <textarea class="contact__input" placeholder=" write message "></textarea>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <a href="about.html" class="main__btn search__btn hvr-bounce-to-right mST__auto mbTop_10"> send message </a>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-12 col-lg-6 col-xl-5">--}}
    {{--                <div class="aboutTH_wrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">--}}
    {{--                    <div class="blueBk_contWrap">--}}
    {{--                        <h3> Don't hesitate to contact us </h3>--}}
    {{--                        <div class="contBox_flex">--}}
    {{--                            <img src="{{asset('Front/assets')}}/img/call1.svg" alt="" class="contBox_Icon">--}}
    {{--                            <div class="contBx_fBody">--}}
    {{--                                <h5> call us </h5>--}}
    {{--                                <a href="#" class="contBx__num"> 0020502255112 </a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="contBox_flex">--}}
    {{--                            <img src="{{asset('Front/assets')}}/img/map1.svg" alt="" class="contBox_Icon">--}}
    {{--                            <div class="contBx_fBody">--}}
    {{--                                <h5> come to us </h5>--}}
    {{--                                <a href="#" class="contBx__num"> United Arab EmiratesSheikh </a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="contBox_flex">--}}
    {{--                            <img src="{{asset('Front/assets')}}/img/msg1.svg" alt="" class="contBox_Icon">--}}
    {{--                            <div class="contBx_fBody">--}}
    {{--                                <h5> write to us </h5>--}}
    {{--                                <a href="#" class="contBx__num"> mailto:info@samahalegal.com </a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}
@stop
@push('scripts')@endpush
