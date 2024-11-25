@extends('Front.layouts.services.master')
@section('title', trans('back.services.home'))
@section('style')
    {{--    <link href="{{asset('Front/assets')}}/css/style-ar.css" rel="stylesheet">--}}
@stop

@section('content')
    {{--    @include('Front.layouts.parts.alert')--}}
    <!--start main section-->
    <section class="mainThird__section inSVThird__color">
        <div class="container welcmInner_container pxLG-0 ">
            <div class="welThird_section">
                <div class="row welThird_row">
                    <div class="col-12 col-lg-7">
                        <div class="secPadding">
                            <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100"
                                data-wow-delay="1s"> samaha services </h3>
                            <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s">
                                Samaha translation Company is at the forefront of sharing knowledge and insights from
                                the Middle East & North Africa combining knowledge and experience to bring you
                                up-to-date insights, thoughtful analysis. </p>
                            <a href="{{route('front.show-services-contact-us')}}"
                               class="main__btn hvr-bounce-to-right transparent__btn"> contact
                                us </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="SRvmain_thumb">
                            <img src="{{asset('Front/assets')}}/img/srv1.png" alt="" class="SRvmain_img">
                            <img src="{{asset('Front/assets')}}/img/circ1.png" alt="" class="SRvmain_abs1 d__mob__none">
                            <img src="{{asset('Front/assets')}}/img/circ1.png" alt="" class="SRvmain_abs2 d__mob__none">
                        </div>
                    </div>
                </div>
            </div>
            @if($our_services->count() > 0)
                <div class="row">
                    @foreach($our_services as $service)
                        <div class="col-12 col-md-4">
                            <a href="{{route('front.services-service-details',$service->id)}}" class="welThirdsv_card">
                                <img src="{{ $service->IconPath }}" alt="" class="welThirdsv_thumb">
                                <h5>{{ $service->$name }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
            @endif
        </div>
    </section>

    <!--start about section-->
    <section class="about_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="aboutTH_wrap py-0 wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <img src="{{asset('Front/assets')}}/img/about3.png" alt="" class="aboutTH_img">
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="about_desWrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> about us </span>
                        <h3><span> About </span> samaha businessman services </h3>
                        <ul class="nav nav-pills allCatSrvs__pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#about__Onetab" data-toggle="tab"> about us </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mission__Onetab" data-toggle="tab"> our mission </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#vision__Onetab" data-toggle="tab"> our vision </a>
                            </li>
                        </ul>
                        <div class="tab-content mbttom__50" id="allServices__tabs">
                            <div class="curr__wrapper tab-pane fade in active show" role="tabpanel" id="about__Onetab">
                                <p> jasssem Advocates and Legal Consultants is one of the leading offices in the legal
                                    profession in the United Arab Emirates and the Arab Republic of Egypt. The team
                                    consists of a distinguished elite of professional cadres of lawyers and legal
                                    consultants
                                    all areas of the law. samaha Advocates and Legal Consultants is one of the leading
                                    offices. Samaha Advocates and Legal Consultants is one of the leading offices in the
                                    legal profession. </p>
                            </div>
                            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="mission__Onetab">
                                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, tempora
                                    quidem sint perspiciatis voluptate ipsum minima autem tempore omnis quasi. </p>
                            </div>
                            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="vision__Onetab">
                                <p> Lorem ipsum dolor sit, amminima autem tempore omnis quasi. </p>
                            </div>
                        </div>

                        <a href="{{route('front.services-about-app')}}"
                           class="main__btn search__btn hvr-bounce-to-right"> learn more </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--start video section-->
    <section class="videoTHree__Section">
        <div class="vidSTH_wrap text-center">
            <h3> order professional Translations in just Few Clicks </h3>
        </div>
        <div class="container pxLG-0">
            <div class="videoWrap_absW">
                <a data-fancybox="" class="playVdTH_btn" data-width="640" data-height="360"
                   href="https://innoplanet.net/wp-content/uploads/2023/06/Innovation-Planet-HQ.mp4" data-thumb=""> <img
                        src="{{asset('Front/assets')}}/img/play3.png" alt=""> </a>
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
            @if($our_teams->count() > 0)
                <div class="row">
                    @foreach($our_teams as $team)
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="teamTRns__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100"
                                 data-wow-delay="0.1s">
                                <div class="teamTRns_content">
                                    <h5 class="teamOne_name">  {{ $team->full_name }} </h5>
                                    <p> {{ $team->job }} </p>
                                </div>
                                <div class="teaMTrns_thumb">
                                    <img src="{{ $team->ImagePath }}" alt="" class="teaMTrns_photo">
                                    <a href="#" class="shareTM__link">
                                        <img src="{{asset('Front/assets')}}/img/share.png" alt="">
                                    </a>
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

    <!--start testimonials section-->
    <section class="greyBK_section secPadding" dir="rtl">
        <div class="container pxLG-0">
            <div class="about_desWrap testmon_center text-center">
                <span class="smOffer myFlex__center mx-auto"> Testimonials </span>
                <h3 class="mb-2"> What <span> Our Clients </span> Say about us </h3>
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

    <!--start news section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> Our News & Blog </span>
                <h3> every single updates </h3>
            </div>
            @if($our_blogs->count() > 0)
                <div class="row">
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
                                    <a href="{{route('front.services-news-details',$blog->id)}}" class="newsCard_title">
                                        {{ $blog->$name }}  </a>
                                    <p> {{ $blog->$quote }} </p>
                                    <a href="{{route('front.services-news-details',$blog->id)}}" class="read_more">
                                        <span> read more</span> <i class="fa-solid fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
            @endif
            <a href="{{route('front.services-news')}}" class="showBtn_all main__btn mxST_auto hvr-bounce-to-right"> show
                all </a>
        </div>
    </section>
@stop
@push('scripts')@endpush
