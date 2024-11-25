@extends('Front.layouts.legal.master')
@section('title', trans('back.legal.offices'))
@section('style')
@stop
{{--@include('front.layouts.splash')--}}
@section('content')
    @include('Front.layouts.parts.alert')


    <!--start main section-->
    <section class="innerOffice_section">
        <div class="centerTop__wrapper">
            <div class="reltveTitle_wrap">
                <h1 class="innerMain__title"> {{ $country->$name }}  </h1>
                <h2 class="innerSecnd__title"> {{ $country->$name }}  </h2>
            </div>
            <ol class="breadcrumb offices__breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">samaha legal > </a></li>
                <li class="breadcrumb-item"><a href="offices.html">our offices > </a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $country->$name }} </li>
            </ol>
{{--            <a href="#" class="main__btn locate__btn"> view our office location </a>--}}
        </div>
    </section>

    @if($country->cities()->count() > 0)
    <!--start contact section-->
    <ul class="nav nav-pills officesLoc__pills">
        <li class="nav-item">
            <a class="nav-link active" href="#office__Onetab" data-toggle="tab"> jeddah </a>
        </li>
        @foreach($country->cities()->get() as $city)

        <li class="nav-item">
            <a class="nav-link" href="#office__secondtab-{{$city->id}}" data-toggle="tab"> {{$city->$name}} </a>
        </li>
{{--        <li class="nav-item">--}}
{{--            <a class="nav-link" href="#office__thirdtab" data-toggle="tab"> kwait </a>--}}
{{--        </li>--}}
        @endforeach
    </ul>
    <section class="contact_section secPadding">
        <div class="container pxLG-0">
            <div class="tab-content mbttom__50"  id="allServices__tabs">
                <div class="curr__wrapper tab-pane fade in active show" role="tabpanel" id="office__Onetab">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            {{-- <div class="mapSite__wrap">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.650859370141!2d46.64176368475698!3d24.738863956212338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee36823527cdb%3A0x67b0574b6b8f0d27!2sMCIT!5e0!3m2!1sar!2seg!4v1632406153544!5m2!1sar!2seg" width="100%" height="769" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div> --}}
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="about_desWrap pdTop_70">
                                <span class="smOffer myFlex__center"> jeddah </span>
                                <h3> location and data of <span> jeddah </span> </h3>
                                <p> Recognizing the importance of the Saudi Arabian market, Al Tamimi & Company opened its first office in Saudi Arabia, We service clients
                                    locally in all practice areas in the three largest markets in Saudi Arabia. </p>
                                <div class="officeCont__wrap">
                                    <div class="offceBox_flex">
                                        <img src="{{asset('Front/assets')}}/img/map1.svg" alt="" class="offcBox_Icon">
                                        <a href="#" class="offctBx__num"> United Arab EmiratesSheikh </a>
                                    </div>
                                    <div class="offceBox_flex">
                                        <img src="{{asset('Front/assets')}}/img/msg1.svg" alt="" class="offcBox_Icon">
                                        <a href="#" class="offctBx__num"> <u> mailto:info@samahalegal.com </u> </a>
                                    </div>
                                    <div class="offceBox_flex">
                                        <img src="{{asset('Front/assets')}}/img/call1.svg" alt="" class="offcBox_Icon">
                                        <a href="#" class="offctBx__num"> 0020502255112 </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach($country->cities()->get() as $city)
                <div class="curr__wrapper tab-pane fade" role="tabpanel" id="office__secondtab-{{$city->id}}">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="mapSite__wrap">
                                <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.650859370141!2d{{ $city->office->longitude }}!3d{{ $city->office->latitude }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee36823527cdb%3A0x67b0574b6b8f0d27!2sMCIT!5e0!3m2!1sar!2seg!4v1632406153544!5m2!1sar!2seg"
                                        width="100%" height="769" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.650859370141!2d46.64176368475698!3d24.738863956212338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee36823527cdb%3A0x67b0574b6b8f0d27!2sMCIT!5e0!3m2!1sar!2seg!4v1632406153544!5m2!1sar!2seg" width="100%" height="769" style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="about_desWrap pdTop_70">
                                <span class="smOffer myFlex__center"> {{$city->$name}} </span>
                                <h3> location and data of <span> {{$city->$name}} </span> </h3>
                                <p>
                                    {{app()->getLocale() == 'ar'
                                                    ? $city->office->description_ar
                                                    : $city->office->description_en }}
                                </p>
                                <div class="officeCont__wrap">
                                    <div class="offceBox_flex">
                                        <img src="{{asset('Front/assets')}}/img/map1.svg" alt="" class="offcBox_Icon">
                                        <a href="#" class="offctBx__num"> {{app()->getLocale() == 'ar'
                                                                                    ? $city->office->address_ar
                                                                                    : $city->office->address_en}} </a>
                                    </div>
                                    <div class="offceBox_flex">
                                        <img src="{{asset('Front/assets')}}/img/msg1.svg" alt="" class="offcBox_Icon">
                                        <a href="#" class="offctBx__num"> <u> {{$city->office->email}} </u> </a>
                                    </div>
                                    <div class="offceBox_flex">
                                        <img src="{{asset('Front/assets')}}/img/call1.svg" alt="" class="offcBox_Icon">
                                        <a href="#" class="offctBx__num"> {{$city->office->mobile}} </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @else
        <div style="text-align: center;"><h2> @lang('back.no_data_yet') </h2></div>
    @endif
@stop
@push('scripts')@endpush











