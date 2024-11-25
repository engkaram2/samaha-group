@extends('Front.layouts.translation.master')
@section('title', trans('back.offices'))
@section('style')
@stop
{{--@include('front.layouts.splash')--}}
@section('content')
    @include('Front.layouts.parts.alert')
    <!--start main section-->
    <section class="mainOffice_section" dir="rtl">
        <div class="text-center">
            <div class="office__Slider">

                @forelse ($translation_offices as $country)
                    <div class="oneItmOffice">
                        <span class="Location_num"> {{ $loop->iteration }}/3 </span>
                        <h5 class="dragloc_title"> Drag to change location </h5>
                        <div class="reltveTitle_wrap">
                            <h1 class="innerMain__title"> {{ $country->$name }} </h1>
                            <h2 class="innerSecnd__title"> {{ $country->$name }} </h2>
                        </div>
                        <img src="{{ $country->ImagePath }}" alt="" class="absOFF__cover">
                        <a href="{{route('front.translation-location-offices',$country->id)}}" class="main__btn locate__btn">
                            view our
                            office location </a>
                    </div>
                @empty
                    <div class="oneItmOffice">
                        <h5 class="dragloc_title"> @lang('back.no_data_yet')</h5>
                        <img src="{{asset('Front/assets')}}/img/ofc.png" alt="" class="absOFF__cover">
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!--start contact section-->
    <section class="contact_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="aboutTH_wrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                        <img src="{{asset('Front/assets')}}/img/ct3.png" alt="" class="aboutTH_img">
                        <img src="{{asset('Front/assets')}}/img/dots2.png" alt="" class="AbDotts_img">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about_desWrap wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100">
                        <span class="smOffer myFlex__center"> Our offices </span>
                        <h3><span> view </span> our <br> office location(S) </h3>
                        <p> The office has received a commendation from our elite group of clients that applaud the
                            quality of
                            contracting and services provided in accordance with international standards. </p>
                        <ul class="aboutDes_list">
                            <li> Banking, investment and finance, and financial markets</li>
                            <li> Intellectual property and technology laws.</li>
                            <li> Insurance claims and services, among others.</li>
                        </ul>
                        <a href="contact.html" class="main__btn search__btn hvr-bounce-to-right"> contact Us </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
@push('scripts')@endpush











