@extends('Front.layouts.translation.master')
@section('title', trans('back.new_details'))
@section('style')
@stop
@section('content')
    <!--start main section-->
    <section class="transNews_sec2 relBKcover_sec innerBK__color">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> latest update </h3>
                <ol class="breadcrumb tanslate_breadCrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.translation-home')}}">samaha translation > </a></li>
                    <li class="breadcrumb-item"><a href="{{route('front.translation-news')}}"> new > </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> {{ $news_details->$name }} </li>
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
                    <h3> {{ $news_details->$name }} </h3>
                    <p> {{ $news_details->$quote }} </p>
                </div>
                <div class="newDS__Contcard">
                    <h3> Ensure that your products and packaging </h3>
                    <p> {!! $news_details->$description !!}</p>
                </div>
                <div class="newDS__Contcard">
                    {{--                    <h3> Ensure that your products and packaging </h3>--}}
                    <p> {{ $news_details->$quote }} </p>
                </div>
            </div>
        </div>
    </section>

    <!--start news section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> Our News & Blog </span>
                <h3> every single updates </h3>
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
                            <a href="{{route('front.translation-news-details',$blog->id)}}" class="newsCard_title"> Intellectual Property Laws in the UAE </a>
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
        </div>
    </section>
@stop
@push('scripts')@endpush