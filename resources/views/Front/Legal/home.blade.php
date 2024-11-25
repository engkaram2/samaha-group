@extends('Front.layouts.legal.master')

@section('title', trans('back.legal.home'))

{{--@section('chat_modal')--}}
{{--    @include('Front.layouts.Chat.side_chat_modal')--}}
{{--@stop--}}

@section('content')



    <!--start main section-->
    <section class="main_section">
        <div class="samahLgal_slider" dir="rtl">
            @if($our_sliders->count() > 0)

                @foreach($our_sliders as $slider)

                    <div class="oneSM_Item">
                        <img src="{{ $slider->ImagePath }}" alt="" class="wide_absIMG">
                        <div class="wide_abOverlay"></div>
                        <div class="welcome_section">
                            <div class="container welcmInner_container pxLG-0">
                                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100"
                                    data-wow-delay="1s"> <br> {{$slider->$name}} </h3>
{{--                                    data-wow-delay="1s"> samaha lawyers <br> {{$slider->$name}} </h3>--}}
                                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100"
                                   data-wow-delay="1s" style="">
                                    {{$slider->$quote}}
                                </p>
{{--                                <img src="{{ $slider->ImagePath }}" alt="" class="absOFF__cover">--}}

                                <a href="{{route('front.show-register')}}" class="main__btn login__btn"> @lang('front.home.register') </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
            @endif
        </div>
    </section>











    {{--    <!--start main section-->--}}
    {{--    <section class="main_section" >--}}
    {{--        <div class="welcome_section">--}}
    {{--            @include('Front.layouts.parts.alert')--}}

    {{--            <div class="container welcmInner_container pxLG-0">--}}
    {{--                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> samaha lawyers <br> and legal consultants </h3>--}}
    {{--                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s">--}}

    {{--                    Samaha Advocates and Legal Consultants puts its clients first. We recommitted to providing--}}
    {{--                    our clients with the highest quality legal services. We work hard to understand our client's objectives and tailor our--}}
    {{--                    legal services to meet their specific needs. We will get you the justice that you deserve!--}}
    {{--                {{$description}}--}}
    {{--                </p>--}}
    {{--                @if(!auth()->check())--}}
    {{--                <a href="{{route('front.show-register')}}" class="main__btn login__btn"> Register </a>--}}
    {{--                @endif--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}



    <!--start about section-->
    <section class="about_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="aboutTH_wrap wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <img src="{{asset('Front/assets')}}/img/about.png" alt="" class="aboutTH_img">
                        <img src="{{asset('Front/assets')}}/img/dots.png" alt="" class="AbDotts_img">
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="about_desWrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> @lang('front.home.whate_we_offer') </span>
                        <h3> <span>@lang('front.home.whate_we_offer_title')</span></h3>
                        <p> @lang('front.home.whate_we_offer_description') </p>
                        <ul class="aboutDes_list">
                            <li> @lang('front.home.whate_we_offer_li_1')</li>
                            <li> @lang('front.home.whate_we_offer_li_2')</li>
                            <li> @lang('front.home.whate_we_offer_li_3')</li>
                        </ul>
                        <a href="{{route('front.legal-about-app')}}" class="main__btn search__btn hvr-bounce-to-right">
                            @lang('front.home.about_us') </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start services section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> @lang('front.home.what_we_do') </span>
                <h3>@lang('front.home.what_we_do_tite')</h3>
                <p> @lang('front.home.what_we_do_description') </p>
            </div>
            <div class="row">
                @if($our_services->count() > 0)
                    @foreach($our_services as $service)
                        <div class="col-12 col-md-4">
                            <a href="{{route('front.legal-service-details',$service->id)}}" style="height: 480px !important;"
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

    <!--start contact section-->
    <section class="contact_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="about_desWrap wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> @lang('front.home.what_we_are') </span>
                        <h3> <span>@lang('front.home.what_we_are_title') </span>  </h3>
                        <p> @lang('front.home.what_we_are_description1') </p>
                        <p>@lang('front.home.what_we_are_description2')</p>
                        <a href="{{route('front.legal-contact-us')}}" class="main__btn search__btn hvr-bounce-to-right">
                            @lang('front.home.contact_us') </a>
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

    <!--start team section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center">{{trans('back.team.Our expert team')}}  </span>
                <h3> Meet our <span> team </span></h3>
            </div>
            <div class="row">
                @if($our_teams->count() > 0)
                    @foreach($our_teams as $team)
                        <div class="col-12 col-md-6 col-lg-3 pt-5">
                            <div class="team__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100"
                                 data-wow-delay="0.2s">
                                <div class="teaM_thumb">
                                    <img src="{{ $team->ImagePath }}" alt="">
                                </div>
                                <div class="teamCard_content">
                                    <h5 class="teamOne_name">
                                        {{app()->getLocale() == 'ar' ? $team->full_name_ar : $team->full_name_en }}
                                     </h5>
                                    <p> {{ $team->job }} </p>
                                    <div class="contScoial_wrap myFlex__center">
                                        <a href="{{ $team->fb_link }}" class="cSocial_link myFlex__center"> <i
                                                class="fa-brands fa-facebook-f"></i> </a>
                                        <a href="{{ $team->twitter_link }}" class="cSocial_link myFlex__center"> <i
                                                class="fa-brands fa-twitter"></i> </a>
                                        <a href="{{ $team->instagram_link }}" class="cSocial_link myFlex__center"> <i
                                                class="fa-brands fa-instagram"></i> </a>
                                    </div>
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

    <!--start blogs section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> {{trans('back.blog.Our News & Blog')}}  </span>
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
                                    <a href="{{route('front.legal-news-details',$blog->id)}}"
                                       class="newsCard_title"> {{ $blog->$name }} </a>
                                    <p> {{ $blog->$quote }} </p>
                                    <a href="{{route('front.legal-news-details',$blog->id)}}" class="read_more"> <span> read more</span>
                                        <i class="fa-solid fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
                @endif
            </div>

            <a href="{{route('front.legal-news')}}" class="showBtn_all main__btn mxST_auto hvr-bounce-to-right"> show
                all </a>
        </div>
    </section>


    {{--    @section('chat')--}}
    {{--        <a href="#" class="cahtHome_btn" data-toggle="modal" data-target="#helpModal"> <img src="{{asset('Front/assets')}}/img/comment.png" alt=""> </a>--}}
    {{--    @stop--}}
























@stop



{{--@push('scripts')--}}
{{--    --}}{{--==========================================firebase======================================--}}
{{--    @include('Front.layouts.Chat.chat_script')--}}
{{--@endpush--}}
