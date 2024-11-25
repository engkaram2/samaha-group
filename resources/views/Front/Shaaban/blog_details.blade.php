@extends('Front.layouts.shaaban.master')
@section('title', trans('back.blog_details'))
@section('style')
@stop
@section('content')

    <!--start main section-->
    <section class="innerFourth__section inShFourth__color">
        <div class="container welcmInner_container pxLG-0 ">
            <div class="shbTop__center">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> knowledge</h3>
                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> {{ $news_details->$quote }}</p>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/sh3b.png" alt="" class="sbsSH3BN_grey">
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
                    <h3> Definition of {{ $news_details->$name }}" </h3>
                    <p> {!! $news_details->$description !!} </p>

                </div>
            </div>
        </div>
    </section>

    <!--start news section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> Our News & Blog </span>
                <h3> <span> related </span> updated </h3>
            </div>
            @if($related_news->count() > 0)

            <div class="row">
                @foreach($related_news as $new)

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ourNews__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="0.2s">
                        <div class="news_thumb">
                            <img src="{{ $new->ImagePath }}" alt="">
                        </div>
                        <div class="ourNews_content">
                            <div class="newsFlex-wrap">
                                <div class="newsC_desPan">
                                    <i class="icon-calendar"></i>
                                    <span> {{$new->created_at->format('Y-m-d')}}</span>
                                </div>
{{--                                <div class="newsC_desPan">--}}
{{--                                    <i class="icon-comments"></i>--}}
{{--                                    <span> 105 comments </span>--}}
{{--                                </div>--}}
                            </div>
                            <a href="{{route('front.shaaban-blog-details',$new->id)}}" class="newsCard_title"> {{ $new->$name }} </a>
                            <p> {{ $new->$quote }} </p>
                            <a href="{{route('front.shaaban-blog-details',$new->id)}}" class="read_more"> <span> read more</span> <i class="fa-solid fa-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            @else
                <div style="text-align: center;"><p> Your search did not match any results</p></div>
            @endif
            <a href="{{route('front.shaaban-blogs')}}" class="showBtn_all showBtn_wide  main__btn mx-auto  hvr-bounce-to-right"> show all </a>
        </div>
    </section>

@stop
@push('scripts')@endpush
