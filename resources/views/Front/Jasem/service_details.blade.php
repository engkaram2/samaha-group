@extends('Front.layouts.jasem.master')
@section('title', trans('back.service_details'))
@section('style')
@stop
@section('content')
    <!--start main section-->
    <section class="innerFourth__section inBKmain__color">
        <div class="container welcmInner_container pxLG-0 ">
            <div class="shbTop__Start">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Jasem services </h3>
                <p class="wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Samaha translation Company is at the forefront of sharing knowledge and insights from
                    the Middle East & North Africa combining knowledge and experience to bring you up-to-date insights, thoughtful analysis. </p>
            </div>
        </div>
        <img src="{{asset('Front/assets')}}/img/gs2.png" alt="" class="GSMImg_Scnd d__mob__none">
    </section>

    <!--start definition section-->
    <section class="secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> our services </span>
                <h3> <span> Jasem </span> services </h3>
                <p> {{$jasem_service_details->$quote}}</p>
            </div>
            <div class="row abThrd_definCArd">
                <div class="col-12">
                    <div class="abThrd_defThumb radius_SM10 mbTm_60">
                        <img src="{{ $jasem_service_details->image1_path }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12">
                    <div class="abThrd_defCont">
                        <h3> {{$jasem_service_details->$title1}}</h3>
                        <p> {{ $jasem_service_details->$description1 }}</p>
                    </div>
                </div>
            </div>
            <div class="row abThrd_definCArd">
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defCont">
                        <h3> {{$jasem_service_details->$title2}}</h3>
                        <p> {{ $jasem_service_details->$description2 }}</p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defThumb radius_SM10">
                        <img src="{{ $jasem_service_details->image2_path }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row abThrd_definCArd">
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defThumb radius_SM10">
                        <img src="{{asset('Front/assets')}}/img/dif17.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="abThrd_defCont">
                        <h3> Definition  of {{$jasem_service_details->$name}} </h3>
                        <p> {{$jasem_service_details->$quote}} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start services section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 text-center">
                <span class="smOffer myFlex__center mx-auto"> our services </span>
                <h3> other <span> services </span> </h3>
                <p class="mx-auto"> Samaha Advocates and Legal Consultants offers comprehensive legal
                    services to clients in the aviation and maritime industries </p>
            </div>
            @if($jasem_services->count() > 0)
                <div class="row">
                    @foreach($jasem_services as $service)
                <div class="col-12 col-md-4">
                    <a href="{{route('front.jasem-service-details',$service->id)}}" class="SHBserv__card practGRey_card wow bounceIn" data-wow-duration="1s" data-wow-offset="100">
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

    <!--start definition section-->
{{--    <section class="secPadding">--}}
{{--        <div class="container pxLG-0">--}}
{{--            <div class="about_desWrap mbttom__60">--}}
{{--                <span class="smOffer myFlex__center"> our services </span>--}}
{{--                <h3> <span> legal </span> services </h3>--}}
{{--                <p> Samaha Advocates and Legal Consultants offers comprehensive legal--}}
{{--                    services to clients in the aviation and maritime industries </p>--}}
{{--            </div>--}}
{{--            <div class="row abThrd_definCArd">--}}
{{--                <div class="col-12 col-lg-6">--}}
{{--                    <div class="abThrd_defThumb radius_SM10">--}}
{{--                        <img src="{{asset('Front/assets')}}/img/dif18.png" alt="" class="img-fluid">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-lg-6">--}}
{{--                    <div class="abThrd_defCont">--}}
{{--                        <h3> Definition  of Intellectual Property </h3>--}}
{{--                        <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. If you have experience developing in C or Objective-C, many parts of Swift will be familiar to you. Swift provides its own versions of all fundamental C and Objective-C types, including Int for integers, Double and Float for floating-point values, Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types.--}}
{{--                            Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types.Bool for Boolean values, and String for textual data. Swift also provides powerful versions of the three primary collection types. </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
@stop
@push('scripts')@endpush
