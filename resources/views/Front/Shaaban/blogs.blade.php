@extends('Front.layouts.shaaban.master')
@section('title', trans('back.blogs'))
@section('style')
@stop
@section('content')
    <!--start main section-->
    <section class="innerFourth__section inShFourth__color">
        <div class="container welcmInner_container pxLG-0 ">
            <div class="shbTop__center">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> our
                    knowledge</h3>
                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Samaha
                    translation Company is at the forefront of sharing knowledge and insights from
                    the Middle East & North Africa combining knowledge and experience to bring you up-to-date insights,
                    thoughtful analysis. </p>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/sh3b.png" alt="" class="sbsSH3BN_grey">
    </section>

    <!--start news section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> Our News & Blog </span>
                <h3> every single updates </h3>
            </div>
            <div class="row">
                @if($news->count() > 0)
                    @foreach($news as $blog)
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
                                        {{--                                <div class="newsC_desPan">--}}
                                        {{--                                    <i class="icon-comments"></i>--}}
                                        {{--                                    <span> 105 comments </span>--}}
                                        {{--                                </div>--}}
                                    </div>
                                    <a href="{{route('front.shaaban-blog-details',$blog->id)}}" class="newsCard_title">
                                        Intellectual Property Laws in the UAE </a>
                                    <p> {{ $blog->$quote }} </p>
                                    <a href="{{route('front.shaaban-blog-details',$blog->id)}}" class="read_more">
                                        <span> read more</span> <i class="fa-solid fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    {!! $news->links() !!}
                </ul>
            </nav>
        </div>
    </section>
@stop
@push('scripts')@endpush
