@extends('Front.layouts.jasem.master')
@section('title', trans('back.search'))
@section('style')
    <style> header { background-color: rgba(45, 107, 169, 1);} </style>
@stop
@section('content')
    <br><br>
    <br><br>
    <!--start news section-->
    <section class="news_section secPadding">

        <div class="container pxLG-0">
            <form action="{{route('front.jasem-search')}}" method="get" class="search__form">
                <div class="SForm__group mbTm_26">
                    <input type="search" class="SForm__input" placeholder="search" name="search_by_word" value="{{ old('search_by_word') }}" required>
                    <button type="submit" class="SForm__submit myFlex__center"><img
                            src="{{asset('Front/assets')}}/img/searsh2.svg" alt=""></button>
                </div>
            </form>
         @include('Front.layouts.Search.search')
        </div>
    </section>
@stop
@push('scripts')@endpush


{{--                        <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabesvn">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">--}}
{{--                                    <div class="ourNews__card">--}}
{{--                                        <div class="news_thumb">--}}
{{--                                            <img src="{{asset('Front/assets')}}/img/n8.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="ourNews_content">--}}
{{--                                            <div class="newsFlex-wrap">--}}
{{--                                                <div class="newsC_desPan">--}}
{{--                                                    <i class="icon-calendar"></i>--}}
{{--                                                    <span> April 11, 2021 </span>--}}
{{--                                                </div>--}}
{{--                                                <div class="newsC_desPan">--}}
{{--                                                    <i class="icon-comments"></i>--}}
{{--                                                    <span> 105 comments </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <a href="#" class="newsCard_title"> Intellectual Property--}}
{{--                                                Laws in the UAE </a>--}}
{{--                                            <p> The maritime laws of the Arabic Republic of--}}
{{--                                                Egypt Corporate laws are the rules and regulations. </p>--}}
{{--                                            <a href="#" class="read_more"> <span> read more</span> <i--}}
{{--                                                    class="fa-solid fa-arrow-right"></i> </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabeight">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">--}}
{{--                                    <div class="ourNews__card">--}}
{{--                                        <div class="news_thumb">--}}
{{--                                            <img src="{{asset('Front/assets')}}/img/n1.png" alt="">--}}
{{--                                        </div>--}}
{{--                                        <div class="ourNews_content">--}}
{{--                                            <div class="newsFlex-wrap">--}}
{{--                                                <div class="newsC_desPan">--}}
{{--                                                    <i class="icon-calendar"></i>--}}
{{--                                                    <span> April 11, 2021 </span>--}}
{{--                                                </div>--}}
{{--                                                <div class="newsC_desPan">--}}
{{--                                                    <i class="icon-comments"></i>--}}
{{--                                                    <span> 105 comments </span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <a href="#" class="newsCard_title"> Intellectual Property--}}
{{--                                                Laws in the UAE </a>--}}
{{--                                            <p> The maritime laws of the Arabic Republic of--}}
{{--                                                Egypt Corporate laws are the rules and regulations. </p>--}}
{{--                                            <a href="#" class="read_more"> <span> read more</span> <i--}}
{{--                                                    class="fa-solid fa-arrow-right"></i> </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}


{{--                            <li class="nav-item">--}}
{{--                                <a href="#search__tabesvn" class="searchbar_link nav-link" data-toggle="tab">--}}
{{--                                    <img src="{{asset('Front/assets')}}/img/news7.svg" alt="" class="searchbar_icon"> <span> low update </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#search__tabeight" class="searchbar_link nav-link" data-toggle="tab">--}}
{{--                                    <img src="{{asset('Front/assets')}}/img/news8.svg" alt="" class="searchbar_icon"> <span> publications </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
