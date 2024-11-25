@extends('Front.layouts.jasem.master')
@section('title', trans('back.services'))
@section('style')
@stop
@section('content')
    <!--start main section-->
    <section class="innerFourth__section inBKmain__color">
        <div class="container welcmInner_container pxLG-0 ">
            <div class="shbTop__Start">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> our services </h3>
                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Samaha translation Company is at the forefront of sharing knowledge and insights from
                    the Middle East & North Africa combining knowledge and experience to bring you up-to-date insights, thoughtful analysis. </p>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/gs2.png" alt="" class="GSMImg_Scnd d__mob__none">
    </section>

    <!--start contact section-->
    <section class="contact_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="about_desWrap wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> about us </span>
                        <h3> <span> jassem </span> legal </h3>
                        <p> Samaha Advocates and Legal Consultants is one of the leading offices in the legal profession
                            in the United Arab Emirates and the Arab Republic of Egypt.</p>
                        <p> The team consists of a distinguished elite of professional cadres of lawyers and legal consultants in all areas of the law. </p>
                        <ul class="aboutDes_list">
                            <li> No matter what type of legal issue you are facing, our team can help. </li>
                            <li> Our number one priority is always the satisfaction of our clients. </li>
                            <li> We take the time to listen to our client's concerns. </li>
                        </ul>
                        <a href="{{route('front.show-jasem-contact-us')}}" class="main__btn search__btn hvr-bounce-to-right"> contact Us </a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="radius_defThumb">
                        <img src="{{asset('Front/assets')}}/img/dif9.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start services section-->
    <section class="secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> our services </span>
                <h3> our <span> services </span> </h3>
                <p class="mx-auto"> Samaha Advocates and Legal Consultants offers comprehensive legal
                    services to clients in the aviation and maritime industries </p>
            </div>

            @if($jasem_services->count() > 0)
                <div class="row">
                    @foreach($jasem_services as $service)
                        <div class="col-12 col-md-4">
                            <a href="{{route('front.jasem-service-details',$service->id)}}"
                               class="SHBserv__card practGRey_card wow bounceIn" data-wow-duration="1s"
                               data-wow-offset="100">
                                <div class="prSRV4_thumb myFlex__center">
                                    <img src="{{ $service->IconPath }}" alt="" class="prctSH_thImg4">
                                </div>
                                <div class="SHBserv4__cont">
                                    <h3> {{ $service->$name }} </h3>
                                    <p> {{ $service->$quote }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
            @endif
        </div>
    </section>
@stop
@push('scripts')@endpush
