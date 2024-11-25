@extends('Front.layouts.legal.master')
@section('title', trans('back.news'))
@section('style')
@stop
{{--@include('front.layouts.splash')--}}
@section('content')
    <!--start main section-->
    <section class="innerNEWs_section">
        <div class="welcome_section">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Low update </h3>
                <p> Samaha legal Company is at the forefront of sharing knowledge and insights from the Middle East & North Africa combining knowledge and experience to bring you up-to-date insights, thoughtful analysis,
                    and guidance that enables our clients to stay in touch with the latest developments in the legal industry. </p>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.home')}}">samaha legal > </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> low update </li>
                </ol>
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
            <div class="row innerNews_row">
                @if($news->count() > 0)
                    @foreach($news as $new)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="ourNews__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="0.2s">
                        <div class="news_thumb">
                            <img src="{{ $new->ImagePath }}" alt="">
                        </div>
                        <div class="ourNews_content">
                            <div class="newsFlex-wrap">
                                <div class="newsC_desPan">
                                    <i class="icon-calendar"></i>
                                    <span> {{$new->created_at->format('Y-m-d')}} </span>
                                </div>
{{--                                <div class="newsC_desPan">--}}
{{--                                    <i class="icon-comments"></i>--}}
{{--                                    <span> 105 comments </span>--}}
{{--                                </div>--}}
                            </div>
                            <a href="{{route('front.legal-news-details',$new->id)}}" class="newsCard_title"> {{ $new->$name }} </a>
                            <p> {{ $new->$quote }} </p>
                            <a href="{{route('front.legal-news-details',$new->id)}}" class="read_more"> <span> read more</span> <i class="fa-solid fa-arrow-right"></i> </a>
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

{{--            <nav aria-label="Page navigation example">--}}
{{--                <ul class="pagination">--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="#" aria-label="Previous">--}}
{{--                            <i class="fa-solid fa-angle-left"></i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                    <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="#" aria-label="Next">--}}
{{--                            <i class="fa-solid fa-angle-right"></i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
        </div>
    </section>
@stop
@push('scripts')@endpush
