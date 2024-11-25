@extends('Front.layouts.shaaban.master')
@section('title', trans('back.terms'))
@section('style')
@stop
{{--@include('front.layouts.splash')--}}
@section('content')

    <!--start main section-->
    <section class="LegalsrVices_section">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> terms & conditions </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.shaaban-home')}}">shaaban samaha > </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> terms & conditions</li>
                </ol>
            </div>
        </div>
    </section>

    <!--start terms section-->
    <section class="terms_section mitPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="legalTH_wrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <img src="{{asset('Front/assets')}}/img/trms.png" alt="" class="legalTH_thumb mST__auto">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about_desWrap pdTop_70 wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> Our services </span>
                        <h3> Terms <br> And Conditions </h3>
                        <ul class="aboutDes_list">
                            <li> Terms </li>
                            <li> Limitations </li>
                            <li> Revisions and Errata </li>
                            <li> Site Terms of Use Modifications </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tremS__ContBody">
                {!! $terms !!}

            </div>
        </div>
    </section>

@stop
@push('scripts')@endpush
