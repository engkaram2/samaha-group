@extends('Front.layouts.translation.master')
@section('title', trans('back.news'))
@section('style')
@stop
@section('content')
    <!--start main section-->
    <section class="transNews_section relBKcover_sec innerBK__color">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> latest
                    update </h3>
                <ol class="breadcrumb tanslate_breadCrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.translation-home')}}">samaha translation > </a>
                    </li>
                    <li class="breadcrumb-item"><a href="news.html"> new > </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> latest update</li>
                </ol>
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
            @if($news->count() > 0)
                <div class="row innerNews_row">

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
                                    <a href="{{route('front.translation-news-details',$blog->id)}}"
                                       class="newsCard_title"> {{ $blog->$name }} </a>
                                    <p> {{ $blog->$quote }} </p>
                                    <a href="{{route('front.translation-news-details',$blog->id)}}" class="read_more"> <span> read more</span>
                                        <i class="fa-solid fa-arrow-right"></i> </a>
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
