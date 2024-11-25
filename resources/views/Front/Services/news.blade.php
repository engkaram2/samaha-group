@extends('Front.layouts.services.master')
@section('title', trans('back.news'))
@section('style')
@stop
@section('content')
    <!--start main section-->
    <section class="innAbouThird_section inSVThird__color">
        <div class="container welcmInner_container pxLG-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about_topWrap">
                        <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s">
                            latest update </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('front.services-home')}}">samaha services > </a></li>
                            <li class="breadcrumb-item active" aria-current="page"> latest update</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/sbs.png" alt="" class="sbsImg_grey d__mob__none">
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
                    @foreach($news as $new)
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="ourNews__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100"
                                 data-wow-delay="0.2s">
                                <div class="news_thumb">
                                    <img src="{{ $new->ImagePath }}" alt="">
                                </div>
                                <div class="ourNews_content">
                                    <div class="newsFlex-wrap">
                                        <div class="newsC_desPan">
                                            <i class="icon-calendar"></i>
                                            <span>{{$new->created_at->format('Y-m-d')}}</span>
                                        </div>

                                    </div>
                                    <a href="{{route('front.services-news-details',$new->id)}}"
                                       class="newsCard_title"> {{ $new->$name }}</a>
                                    <p> {{ $new->$quote }} </p>
                                    <a href="{{route('front.services-news-details',$new->id)}}" class="read_more"> <span> read more</span>
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
