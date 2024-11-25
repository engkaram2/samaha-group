@extends('Front.layouts.services.master')
@section('title', trans('back.team.teams'))
@section('style')
@stop
{{--@include('front.layouts.splash')--}}
@section('content')
    <!--start main section-->
    <section class="innAbouThird_section inSVThird__color">
        <div class="container welcmInner_container pxLG-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about_topWrap">
                        <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> our team </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('front.services-home')}}">samaha services > </a></li>
                            <li class="breadcrumb-item active" aria-current="page"> our team </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/sbs.png" alt="" class="sbsImg_grey d__mob__none">
    </section>

    <!--start team section-->
    <section class="secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> Our expert team </span>
                <h3> our awesome <span> team </span> </h3>
                <p class="mx-auto"> Samaha Advocates and Legal Consultants offers comprehensive legal services to clients in the aviation and maritime industries </p>
            </div>
            @if($teams->count() > 0)

            <div class="row">
                @foreach($teams as $team)

                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="teamTRns__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="0.3s">
                            <div class="teamTRns_content">
                                <h5 class="teamOne_name">{{ $team->full_name }}</h5>
                                <p> {{ $team->job }}</p>
                            </div>
                            <div class="teaMTrns_thumb">
                                <img src="{{ $team->ImagePath }}" alt="" class="teaMTrns_photo">
                                <button class="social_dropdown dropdown shareTM__link">
                                    <a class="dropdown-toggle" href="#" id="dropOne" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{asset('Front/assets')}}/img/share.png" alt="">
                                    </a>
                                    <div class=" dropdown-menu" aria-labelledby="dropOne">
                                        <div class="contScoial_wrap myFlex__column">
                                            <a href="{{ $team->fb_link }}" class="cSocial_link myFlex__center socFace_bk"> <i class="fa-brands fa-facebook-f"></i> </a>
                                            <a href="{{ $team->instagram_link }}" class="cSocial_link myFlex__center socInsta_bk"> <i class="fa-brands fa-instagram"></i> </a>
                                            <a href="{{ $team->twitter_link }}" class="cSocial_link myFlex__center socTwitter_bk"> <i class="fa-brands fa-twitter"></i> </a>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
{{--                <div class="col-12 col-md-6 col-lg-3">--}}
{{--                    <div class="teamTRns__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="0.1s">--}}
{{--                        <div class="teamTRns_content">--}}
{{--                            <h5 class="teamOne_name"> {{ $team->full_name }} </h5>--}}
{{--                            <p> {{ $team->job }} </p>--}}
{{--                        </div>--}}
{{--                        <div class="teaMTrns_thumb">--}}
{{--                            <img src="{{ $team->ImagePath }}" alt="" class="teaMTrns_photo">--}}
{{--                            <a href="#" class="shareTM__link"> <img src="{{asset('Front/assets')}}/img/share.png" alt=""> </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                @endforeach
            </div>
            @else
                <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
            @endif
        </div>
    </section>
@stop
@push('scripts')@endpush
