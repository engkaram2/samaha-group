@extends('Front.layouts.legal.master')
@section('title', trans('back.service_details'))
@section('style')
@stop
{{--@include('front.layouts.splash')--}}
@section('content')

    <!--start main section-->
    <section class="LegalsrVices_section">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> legal services </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.home')}}">samaha legal > </a></li>
                    <li class="breadcrumb-item"><a href="{{route('front.legal-services')}}"> our services > </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> {{$legal_service_details->$name}}</li>
                </ol>
            </div>
        </div>
    </section>

    <!--start contact section-->
    <section class="contact_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="legalTH_wrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <img src="{{asset('Front/assets')}}/img/ab7.png" alt="" class="legalTH_thumb">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about_desWrap wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> Our services </span>
                        <h3> <span> About </span> {{$legal_service_details->$name}} </h3>
                        <p> {{$legal_service_details->$quote}}</p>
                        <ul class="aboutDes_list">
                            <li> No matter what type of legal issue you are facing, our team can help. </li>
                            <li> Our number one priority is always the satisfaction of our clients. </li>
                            <li> We take the time to listen to our client’s concerns. </li>
                        </ul>
                        <a href="{{route('front.legal-contact-us')}}" class="main__btn search__btn hvr-bounce-to-right"> contact Us </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--start definition section-->
    <section class="definition_section">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="definition__card">
                        <div class="definition__content Difbttm__50 order__two">
                            <h3> {{$legal_service_details->$title1}}</h3>
                            <p>{{ $legal_service_details->$description1}} </p>
                        </div>
                        <div class="definition_thumb order__one">
                            <img src="{{ $legal_service_details->image1_path }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="definition__card">
                        <div class="definition_thumb Difbttm__50">
                            <img src="{{ $legal_service_details->image2_path }}" alt="" class="img-fluid">
                        </div>
                        <div class="definition__content">
                            <h3> {{$legal_service_details->$title2}}</h3>
                            <p> {{$legal_service_details->$description2}} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start services section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> Our services </span>
                <h3> Other <span> services </span> </h3>
                <p> Samaha Advocates and Legal Consultants offers comprehensive legal
                    services to clients in the aviation and maritime industries </p>
            </div>
            <div class="row">
                @if($latest_service->count() > 0)
                    @foreach($latest_service as $service)
                <div class="col-12 col-md-4">
                    <a href="{{route('front.legal-service-details',$service)}}" class="practice__card hvr-rectangle-out wow bounceIn" data-wow-duration="1s" data-wow-offset="100">
                        <div class="practice_thumb myFlex__center">
                            <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                        </div>
                        <h3> {{ $service->$name }} </h3>
                        <p> {{ $service->$quote }} </p>
                    </a>
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
