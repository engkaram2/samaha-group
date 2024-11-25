@extends('Front.layouts.shaaban.master')
@section('title', trans('back.shaaban.knowledge'))
@section('style')
@stop
@section('content')
    <!--start main section-->
    <section class="innerFourth__section inShFourth__color">
        <div class="container welcmInner_container pxLG-0 ">
            <div class="shbTop__center">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> knowledge</h3>
                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Samaha translation Company is at the forefront of sharing knowledge and insights from
                    the Middle East & North Africa combining knowledge and experience to bring you up-to-date insights, thoughtful analysis. </p>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/sh3b.png" alt="" class="sbsSH3BN_grey">
    </section>

    <!--start news section-->
    <section class="news_section secPadding greyBK_section">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> our knowledge </span>
                <h3> <span> latest </span> update news </h3>
            </div>
            <div class="row">
                @if($latest_news->count() > 0)
                    @foreach($latest_news as $blog)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ourNews__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="0.2s">
                        <div class="news_thumb">
                            <img src="{{ $blog->ImagePath }}" alt="">
                        </div>
                        <div class="ourNews_content">
                            <div class="newsFlex-wrap">
                                <div class="newsC_desPan">
                                    <i class="icon-calendar"></i>
                                    <span> {{$blog->created_at->format('Y-m-d')}} </span>
                                </div>
{{--                                <div class="newsC_desPan">--}}
{{--                                    <i class="icon-comments"></i>--}}
{{--                                    <span> 105 comments </span>--}}
{{--                                </div>--}}
                            </div>
                            <a href="{{route('front.shaaban-blog-details',$blog->id)}}" class="newsCard_title"> Intellectual Property Laws in the UAE </a>
                            <p> {{ $blog->$quote }} </p>
                            <a href="{{route('front.shaaban-blog-details',$blog->id)}}" class="read_more"> <span> read more</span> <i class="fa-solid fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                    @endforeach
                @else
                    <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
                @endif
            </div>
            <a href="{{route('front.shaaban-blogs')}}" class="showBtn_all showBtn_wide  main__btn mx-auto  hvr-bounce-to-right"> show all </a>
        </div>
    </section>

    <!--start contact section-->
    <section class="contact_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="about_desWrap pdTop_40 wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> about us </span>
                        <h3> <span> shaaban samaha </span> </h3>
                        <p> Samaha Advocates and Legal Consultants is one of the leading offices in the legal profession
                            in the United Arab Emirates and the Arab Republic of Egypt.</p>
                        <p> The team consists of a distinguished elite of professional cadres of lawyers and legal consultants in all areas of the law. </p>
                        <ul class="aboutDes_list">
                            <li> No matter what type of legal issue you are facing, our team can help. </li>
                            <li> Our number one priority is always the satisfaction of our clients. </li>
                            <li> We take the time to listen to our client's concerns. </li>
                        </ul>
                        <a href="{{route('front.show-shaaban-contact-us')}}" class="main__btn search__btn hvr-bounce-to-right"> contact Us </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="legalTH_wrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <div class="srVPic_flexWrap">
                            <div class="col-12">
                                <div class="srVPic_Fluid">
                                    <img src="{{asset('Front/assets')}}/img/svv5.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="srVPic_Fluid">
                                    <img src="{{asset('Front/assets')}}/img/svv6.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="srVPic_Fluid">
                                    <img src="{{asset('Front/assets')}}/img/svv7.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start news section-->
    <section class="news_section secPadding greyBK_section">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> our knowledge </span>
                <h3> <span> low </span> update news </h3>
            </div>
            <div class="row">
                @if($latest_news->count() > 0)
                    @foreach($latest_news as $blog)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="ourNews__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="0.2s">
                                <div class="news_thumb">
                                    <img src="{{ $blog->ImagePath }}" alt="">
                                </div>
                                <div class="ourNews_content">
                                    <div class="newsFlex-wrap">
                                        <div class="newsC_desPan">
                                            <i class="icon-calendar"></i>
                                            <span> {{$blog->created_at->format('Y-m-d')}} </span>
                                        </div>
                                        {{--                                <div class="newsC_desPan">--}}
                                        {{--                                    <i class="icon-comments"></i>--}}
                                        {{--                                    <span> 105 comments </span>--}}
                                        {{--                                </div>--}}
                                    </div>
                                    <a href="{{route('front.shaaban-blog-details',$blog->id)}}" class="newsCard_title"> Intellectual Property Laws in the UAE </a>
                                    <p> {{ $blog->$quote }} </p>
                                    <a href="{{route('front.shaaban-blog-details',$blog->id)}}" class="read_more"> <span> read more</span> <i class="fa-solid fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
                @endif
            </div>
            <a href="{{route('front.shaaban-blogs')}}" class="showBtn_all showBtn_wide  main__btn mx-auto  hvr-bounce-to-right"> show all </a>
        </div>
    </section>

    <!--start videos section-->
    <section class="SHvideos_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> whtach now </span>
                <h3> <span> watch </span> our videos </h3>
            </div>
            <div class="row SHvideos_row">
                <div class="col-12 col-md-7">
                    <div class="SHvid__Wide">
                        <a data-fancybox="" class="playVd_SHbtn " data-width="640" data-height="360" href="https://innoplanet.net/wp-content/uploads/2023/06/Innovation-Planet-HQ.mp4" data-thumb=""> <img src="{{asset('Front/assets')}}/img/play5.png" alt=""> </a>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="SHvideo_SMwrapper">
                        <h5> recent videos </h5>
                        <div class="SHvideo_Scard">
                            <div class="SHvid__SMall">
                                <a data-fancybox="" class="playVd_smallbtn " data-width="640" data-height="360" href="https://innoplanet.net/wp-content/uploads/2023/06/Innovation-Planet-HQ.mp4" data-thumb=""> <img src="{{asset('Front/assets')}}/img/play5.png" alt=""> </a>
                            </div>
                            <div class="SHvideo_Scontent">
                                <a href="#" class="SHvideo_SLink"> Unlicensed Fundraising could mean Fines or Imrpisonment in the UAE </a>
                            </div>
                        </div>
                        <div class="SHvideo_Scard">
                            <div class="SHvid__SMall">
                                <a data-fancybox="" class="playVd_smallbtn " data-width="640" data-height="360" href="https://innoplanet.net/wp-content/uploads/2023/06/Innovation-Planet-HQ.mp4" data-thumb=""> <img src="{{asset('Front/assets')}}/img/play5.png" alt=""> </a>
                            </div>
                            <div class="SHvideo_Scontent">
                                <a href="#" class="SHvideo_SLink"> Unlicensed Fundraising could mean Fines or Imrpisonment in the UAE </a>
                            </div>
                        </div>
                        <div class="SHvideo_Scard">
                            <div class="SHvid__SMall">
                                <a data-fancybox="" class="playVd_smallbtn " data-width="640" data-height="360" href="https://innoplanet.net/wp-content/uploads/2023/06/Innovation-Planet-HQ.mp4" data-thumb=""> <img src="{{asset('Front/assets')}}/img/play5.png" alt=""> </a>
                            </div>
                            <div class="SHvideo_Scontent">
                                <a href="#" class="SHvideo_SLink"> Unlicensed Fundraising could mean Fines or Imrpisonment in the UAE </a>
                            </div>
                        </div>
                        <div class="SHvideo_Scard">
                            <div class="SHvid__SMall">
                                <a data-fancybox="" class="playVd_smallbtn " data-width="640" data-height="360" href="https://innoplanet.net/wp-content/uploads/2023/06/Innovation-Planet-HQ.mp4" data-thumb=""> <img src="{{asset('Front/assets')}}/img/play5.png" alt=""> </a>
                            </div>
                            <div class="SHvideo_Scontent">
                                <a href="#" class="SHvideo_SLink"> Unlicensed Fundraising could mean Fines or Imrpisonment in the UAE </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start definition section-->
    <section class="secPadding greyBK_section">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__90 text-center">
                <span class="smOffer myFlex__center mx-auto"> shaaban samaha </span>
                <h3> <span> about </span> shaaban samaha</h3>
                <p class="mx-auto"> Samaha Advocates and Legal Consultants offers comprehensive legal
                    services to clients in the aviation and maritime industries </p>
            </div>
            <div class="row abThrd_definCArd">
                <div class="col-12 col-lg-4">
                    <div class="radius_defThumb">
                        <img src="{{asset('Front/assets')}}/img/dif7.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="abThrd_defCont pdTop_40">
                        <h3> Definition of Intellectual Property </h3>
                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts
                            of Swift will be familiar to you. Swift provides its own versions of all fundamental C and Objective-C types, including Int for integers, Double and Float for floating-point values, Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types. </p>
                    </div>
                </div>
            </div>
            <div class="row abThrd_definCArd">
                <div class="col-12 col-lg-8">
                    <div class="abThrd_defCont pdTop_40">
                        <h3> Definition of Intellectual Property </h3>
                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts
                            of Swift will be familiar to you. Swift provides its own versions of all fundamental C and Objective-C types, including Int for integers, Double and Float for floating-point values, Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types. </p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="radius_defThumb">
                        <img src="{{asset('Front/assets')}}/img/dif8.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start news section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> our knowledge </span>
                <h3> Publications </h3>
            </div>
            <div class="row">
                @if($latest_news->count() > 0)
                    @foreach($latest_news as $blog)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="ourNews__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="0.2s">
                                <div class="news_thumb">
                                    <img src="{{ $blog->ImagePath }}" alt="">
                                </div>
                                <div class="ourNews_content">
                                    <div class="newsFlex-wrap">
                                        <div class="newsC_desPan">
                                            <i class="icon-calendar"></i>
                                            <span> {{$blog->created_at->format('Y-m-d')}} </span>
                                        </div>
                                        {{--                                <div class="newsC_desPan">--}}
                                        {{--                                    <i class="icon-comments"></i>--}}
                                        {{--                                    <span> 105 comments </span>--}}
                                        {{--                                </div>--}}
                                    </div>
                                    <a href="{{route('front.shaaban-blog-details',$blog->id)}}" class="newsCard_title"> Intellectual Property Laws in the UAE </a>
                                    <p> {{ $blog->$quote }} </p>
                                    <a href="{{route('front.shaaban-blog-details',$blog->id)}}" class="read_more"> <span> read more</span> <i class="fa-solid fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
                @endif
            </div>
            <a href="{{route('front.shaaban-blogs')}}" class="showBtn_all showBtn_wide  main__btn mx-auto  hvr-bounce-to-right"> show all </a>
        </div>
    </section>

@stop
@push('scripts')@endpush
