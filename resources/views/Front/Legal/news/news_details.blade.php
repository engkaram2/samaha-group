@extends('Front.layouts.legal.master')
@section('title', trans('back.news'))
@section('style')
@stop
@section('content')
    <!--start main section-->
    <section class="innerNEWs_section">
        <div class="welcome_section">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Intellectual Property Laws in the UAE </h3>
                <p> Samaha legal Company is at the forefront of sharing knowledge and insights from the Middle East & North Africa combining knowledge and experience to bring you up-to-date insights, thoughtful analysis,
                    and guidance that enables our clients to stay in touch with the latest developments in the legal industry. </p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">samaha legal > </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> low update </li>
                </ol>
            </div>
        </div>
    </section>

    <!--start newsCover section-->
    <section class="newsCover_section">
        <div class="container pxLG-0">
            <div class="newDS__Cover">
                <div class="sideSocial_list">
                    <a href="#" class="socSide_link"> <i class="fa-brands fa-twitter"></i> </a>
                    <a href="#" class="socSide_link"> <i class="fa-brands fa-facebook-f"></i> </a>
                    <a href="#" class="socSide_link"> <i class="fa-brands fa-instagram"></i> </a>
                </div>
                <img src="{{ $news_details->PageImagePath }}" alt="" class="newDS__CThumb">
                <div class="newsC_desPan">
                    <i class="icon-calendar"></i>
                    <span> {{$news_details->created_at->format('Y-m-d')}} </span>
                </div>
            </div>
            <div class="newDS__ContBody">
                <div class="newDS__Contcard">
                    <h3> Definition of Intellectual Property </h3>
                    <p> {!! $news_details->$description !!} </p>
                </div>
                <div class="newDS__Contcard">
{{--                    <h3> Ensure that your products and packaging </h3>--}}
                    <p> {{ $news_details->$quote }} </p>
                </div>
{{--                <div class="newDS__Contcard">--}}
{{--                    <h3> References and Resources </h3>--}}
{{--                    <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development.--}}
{{--                        If you have experience developing in C or Objective-C, many parts of Swift will be familiar to you. Swift provides its own versions of all fundamental C and Objective-C types, including Int for integers, Double and Float for floating-point values, Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types,--}}
{{--                        Array, Set, and Dictionary, as described in collection typs. </p>--}}
{{--                </div>--}}
{{--                <div class="newDS__Contcard">--}}
{{--                    <h3> Types of Intellectual Property Rights </h3>--}}
{{--                    <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development.--}}
{{--                        If you have experience developing in C or Objective-C, many parts of Swift will be familiar to you. Swift provides its own versions of all fundamental C and Objective-C types, including Int for integers, Double and Float for floating-point values, Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types,--}}
{{--                        Array, Set, and Dictionary, as described in collection typs. </p>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>

    <!--start news section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> Our News & Blog </span>
                <h3> <span> related </span> news </h3>
            </div>
            <div class="row">
                @if($related_news->count() > 0)
                    @foreach($related_news as $blog)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ourNews__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="0.2s">
                        <div class="news_thumb">
                            <img src="{{ $blog->ImagePath }}" alt="">
                        </div>
                        <div class="ourNews_content">
                            <div class="newsFlex-wrap">
                                <div class="newsC_desPan">
                                    <i class="icon-calendar"></i>
                                    <span> {{$blog->created_at->format('Y-m-d')}}  </span>
                                </div>
{{--                                <div class="newsC_desPan">--}}
{{--                                    <i class="icon-comments"></i>--}}
{{--                                    <span> 105 comments </span>--}}
{{--                                </div>--}}
                            </div>
                            <a href="{{route('front.legal-news-details',$blog->id)}}" class="newsCard_title"> Intellectual Property Laws in the UAE </a>
                            <p> {{ $blog->$quote }} </p>
                            <a href="{{route('front.legal-news-details',$blog->id)}}" class="read_more"> <span> read more</span> <i class="fa-solid fa-arrow-right"></i> </a>
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
@stop
@push('scripts')@endpush
