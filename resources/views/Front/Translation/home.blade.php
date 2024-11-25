@extends('Front.layouts.translation.master')
@section('title', trans('back.home'))
@section('style')
@stop

{{--@include('front.layouts.splash')--}}

@section('content')
{{--    @include('Front.layouts.parts.alert')--}}


    <!--start main section-->
    <section class="mainTrans_Sec relBKcover_sec innerBK__color">
        <div class="welcome_section">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> order
                    Translations <br> in Few Clicks </h3>
                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Samaha
                    translation1 Company is at the forefront of sharing knowledge and insights from
                    the Middle East & North Africa combining knowledge and experience to bring you up-to-date insights,
                    thoughtful analysis.
{{--                    {{$description}}--}}
                </p>
                <a href="{{route('front.show-translation-contact-us')}}" class="main__btn transparent__btn" style="position: relative;z-index: 3;"> contact us </a>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/bfr.png" alt="" class="absTR_circle">
        <img src="{{asset('Front/assets')}}/img/bfr2.png" alt="" class="absTR_cirND">
    </section>

    <!--start about section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> about us </span>
                <h3> about samaha <span> translation </span></h3>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="trAbout__col wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <div class="trAbout__Thumb">
                            <img src="{{asset('Front/assets')}}/img/abts1.png" alt="" class="tSAbt__imgOne">
                        </div>
                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development.
                            If you have experience developing in C or Objective-C, many parts of Swift will be
                            familiar to you. Swift provides its own versions of
                            all fundamental C and Objective-C types, including Int for integers, </p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="trAbout__col wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development.
                            If you have experience developing in C or Objective-C, many parts of Swift will be
                            familiar to you. Swift provides its own versions of
                            all fundamental C and Objective-C types, including Int for integers, </p>
                        <div class="trAbout__Thumb">
                            <img src="{{asset('Front/assets')}}/img/abts2.png" alt="" class="tSAbt__imgOne">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="trAbout__col wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <div class="trAbout__Thumb">
                            <img src="{{asset('Front/assets')}}/img/abts3.png" alt="" class="tSAbt__imgOne">
                        </div>
                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development.
                            If you have experience developing in C or Objective-C, many parts of Swift will be
                            familiar to you. Swift provides its own versions of
                            all fundamental C and Objective-C types, including Int for integers, </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start video section-->
    <section class="video__Section">
        <div class="container">
            <div class="videoSec_wrap text-center">
                <a data-fancybox="" class="playVd_btn mx-auto mbttom__50" data-width="640" data-height="360"
                   href="https://innoplanet.net/wp-content/uploads/2023/06/Innovation-Planet-HQ.mp4" data-thumb=""> <img
                        src="{{asset('Front/assets')}}/img/play.png" alt=""> </a>
                <h3> order professional Translations in just Few Clicks </h3>
                <p> Samaha translation Company is at the forefront of sharing knowledge and insights from the Middle
                    East
                    & North Africa combining knowledge and experience to bring you up-to-date insights, thoughtful
                    analysis. </p>
            </div>
        </div>
    </section>

    <!--start team section-->
    <section class="secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> Our expert team </span>
                <h3> our awesome <span> team </span></h3>
                <p class="mx-auto"> Samaha Advocates and Legal Consultants offers comprehensive legal services to
                    clients in the aviation and maritime industries </p>
            </div>
            <div class="row">
                @if($our_teams->count() > 0)
                    @foreach($our_teams as $team)
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="teamTRns__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="0.3s">
                                <div class="teamTRns_content">
                                    <h5 class="teamOne_name">{{ $team->full_name }}</h5>
                                    <p> {{ $team->job }}</p>
                                </div>
                                <div class="teaMTrns_thumb">
                                    <img src="{{ $team->ImagePath }}" alt="" class="teaMTrns_photo">
                                    <button class="social_dropdown dropdown shareTM__link">
                                        <a class="dropdown-toggle" href="#" id="dropOne" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{asset('Front/assets')}}/img/share.png" alt="">
                                        </a>
                                        <div class=" dropdown-menu" aria-labelledby="dropOne">
                                            <div class="contScoial_wrap myFlex__column">
                                                <a href="{{ $team->fb_link }}" class="cSocial_link myFlex__center socFace_bk"> <i class="fa-brands fa-facebook-f"></i> </a>
                                                <a href="{{ $team->instagram_link }}" class="cSocial_link myFlex__center socInsta_bk"> <i class="fa-brands fa-instagram"></i> </a>
                                                <a href="{{ $team->twitter_link }}" class="cSocial_link myFlex__center socTwitter_bk"> <i class="fa-brands fa-twitter"></i> </a>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
                @endif
            </div>
        </div>
    </section>

    <!--start news section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> Our News & Blog </span>
                <h3> every single updates </h3>
            </div>
            <div class="row">
                @if($our_blogs->count() > 0)
                    @foreach($our_blogs as $blog)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="ourNews__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100"
                                 data-wow-delay="0.2s">
                                <div class="news_thumb">
                                    <img src="{{ $blog->ImagePath }}" alt="">
                                </div>
                                <div class="ourNews_content">
                                    <div class="newsFlex-wrap">
                                        <div class="newsC_desPan">
                                            <i class="icon-calendar"></i>
                                            <span> {{$blog->created_at->format('Y-m-d')}} </span>
                                        </div>
                                    </div>
                                    <a href="{{route('front.translation-news-details',$blog->id)}}" class="newsCard_title"> {{ $blog->$name }} </a>

                                    <p> {{ $blog->$quote }} </p>
                                    <a href="{{route('front.translation-news-details',$blog->id)}}" class="read_more"> <span> read more</span> <i class="fa-solid fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
                @endif
            </div>
            <a href="{{route('front.translation-news')}}" class="showBtn_all main__btn mxST_auto hvr-bounce-to-right"> show all </a>
        </div>
    </section>
@stop
@push('scripts')@endpush
