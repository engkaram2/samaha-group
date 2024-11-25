@extends('Front.layouts.legal.master')
@section('title', trans('back.legal.offices'))
@section('style')
    <style>header { background-color: rgba(45, 107, 169, 1);}
    </style>
@stop
@section('content')
    <!--start news section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <form action="{{route('front.legal-search')}}" method="get" class="search__form">
                <div class="SForm__group mbTm_26">
                    <input type="search" class="SForm__input" placeholder="search" name="search_by_word">
                    <button type="submit" class="SForm__submit myFlex__center"> <img src="{{asset('Front/assets')}}/img/searsh2.svg" alt=""> </button>
                </div>
            </form>
            @include('Front.layouts.Search.show')
        </div>
    </section>
@stop
@push('scripts')@endpush





{{--<div class="row SearchNews_row">--}}
{{--    <div class="col-12 col-lg-7 col-xl-8 SearchNews_content">--}}
{{--        <div class="tab-content"  id="allSearCH__tabs">--}}
{{--            <div class="curr__wrapper tab-pane fade in active show" role="tabpanel" id="search__tabeOne">--}}

{{--            </div>--}}
{{--            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabetwo">--}}

{{--            </div>--}}
{{--            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabethree">--}}

{{--            </div>--}}
{{--            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabefour">--}}

{{--            </div>--}}
{{--            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabefive">--}}

{{--            </div>--}}
{{--            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabesixth">--}}

{{--            </div>--}}
{{--            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabesvn">--}}

{{--            </div>--}}
{{--            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabeight">--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="col-12 col-lg-5 col-xl-4 SearchNews_side">--}}
{{--        <div class="privacy_Sidebar">--}}
{{--            <h3 class="newsBar_title"> Categories </h3>--}}
{{--            <h5 class="privCol_subTitle"> Filter </h5>--}}
{{--            <ul class="searchbar__list nav nav-pills searchTab__pills">--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#search__tabeOne" class="searchbar_link nav-link active" data-toggle="tab">--}}
{{--                        <img src="{{asset('Front/assets')}}/img/news1.svg" alt="" class="searchbar_icon"> <span> All categories </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#search__tabetwo" class="searchbar_link nav-link" data-toggle="tab">--}}
{{--                        <img src="{{asset('Front/assets')}}/img/news2.svg" alt="" class="searchbar_icon"> <span> samaha translation </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#search__tabethree" class="searchbar_link nav-link" data-toggle="tab">--}}
{{--                        <img src="{{asset('Front/assets')}}/img/news3.svg" alt="" class="searchbar_icon"> <span> shaaban samaha </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#search__tabefour" class="searchbar_link nav-link" data-toggle="tab">--}}
{{--                        <img src="{{asset('Front/assets')}}/img/news4.svg" alt="" class="searchbar_icon"> <span> samaha services </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#search__tabefive" class="searchbar_link nav-link" data-toggle="tab">--}}
{{--                        <img src="{{asset('Front/assets')}}/img/news5.svg" alt="" class="searchbar_icon"> <span> jassem legal </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                --}}{{--                            <li class="nav-item">--}}
{{--                --}}{{--                                <a href="#search__tabesixth" class="searchbar_link nav-link" data-toggle="tab">--}}
{{--                --}}{{--                                    <img src="{{asset('Front/assets')}}/img/news6.svg" alt="" class="searchbar_icon"> <span> latest update </span>--}}
{{--                --}}{{--                                </a>--}}
{{--                --}}{{--                            </li>--}}
{{--                --}}{{--                            <li class="nav-item">--}}
{{--                --}}{{--                                <a href="#search__tabesvn" class="searchbar_link nav-link" data-toggle="tab">--}}
{{--                --}}{{--                                    <img src="{{asset('Front/assets')}}/img/news7.svg" alt="" class="searchbar_icon"> <span> low update </span>--}}
{{--                --}}{{--                                </a>--}}
{{--                --}}{{--                            </li>--}}
{{--                --}}{{--                            <li class="nav-item">--}}
{{--                --}}{{--                                <a href="#search__tabeight" class="searchbar_link nav-link" data-toggle="tab">--}}
{{--                --}}{{--                                    <img src="{{asset('Front/assets')}}/img/news8.svg" alt="" class="searchbar_icon"> <span> publications </span>--}}
{{--                --}}{{--                                </a>--}}
{{--                --}}{{--                            </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
