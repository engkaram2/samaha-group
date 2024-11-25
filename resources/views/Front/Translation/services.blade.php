@extends('Front.layouts.translation.master')
@section('title', trans('back.translation.services'))
@section('style')
@stop
{{--@include('front.layouts.splash')--}}
@section('content')
    <!--start main section-->
    <section class="transTeam_section relBKcover_sec inBKmain__color">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> our
                    services </h3>
                <ol class="breadcrumb tanslate_breadCrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.translation-home')}}">samaha translation > </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> our services</li>
                </ol>
            </div>
        </div>
    </section>

    <!--start services section-->
    <section class="secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60 aboutmx-auto">
                <span class="smOffer myFlex__center mx-auto"> how it works </span>
                <h3> how it <span> works </span></h3>
                <p> Samaha Advocates and Legal Consultants offers
                    comprehensive legal services to clients in the aviation and maritime industries </p>
            </div>

            @if($translation_services->count() > 0)
                <div class="row">
                    @foreach($translation_services as $service)
                        <div class="col-12 col-md-4">
                            <a href="{{route('front.translation-service-details',$service->id)}}"
                               class="practice__card greyBK_seCard hvr-rectangle-out wow bounceIn"
                               data-wow-duration="1s" data-wow-offset="100">
                                <div class="practice_thumb myFlex__center">
                                    <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                                </div>
                                <h3> {{ $service->$name }}  </h3>
                                <p>{{ $service->$quote }}  </p>
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
