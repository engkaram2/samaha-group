@extends('Front.layouts.legal.master')
@section('title', trans('back.contact_us'))
@section('style')
@stop
@section('content')
{{--    @include('front.layouts.parts.alert')--}}
<!--start main section-->
<section class="innerAbout_section">
    <div class="welcome_section bdBttm_md">
        <div class="container welcmInner_container pxLG-0">
            <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Contact Us </h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('front.home')}}">samaha legal > </a></li>
                <li class="breadcrumb-item active" aria-current="page">contact Us</li>
            </ol>
        </div>
    </div>
</section>
{{--@include('Front.layouts.parts.alert')--}}
<!--start contact section-->
<section class="contact_section secPadding">
    <div class="container pxLG-0">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="about_desWrap">
                    <span class="smOffer myFlex__center"> Free Consultations </span>
                    <h3> Get in touch </h3>
                    <form action="{{route('front.legal-contact-us')}}" method="post" class="contactUs__form">
                        @csrf

                        <div class="Cform__row">
                            <div class="col-12 col-xl-6">
                                <input type="text" class="contact__input" name="first_name" required placeholder=" your first name">
                            </div>
                            <div class="col-12 col-xl-6">
                                <input type="text" class="contact__input" name="last_name" required placeholder=" last name">
                            </div>
                            <div class="col-12 col-xl-6">
                                <input type="email" class="contact__input" name="email" required placeholder=" email address">
                            </div>
                            <div class="col-12 col-xl-6">
                                <input type="text" class="contact__input" name="mobile" required placeholder=" phone number">
                            </div>
                            <div class="col-12 col-xl-6">
                                <input type="text" class="contact__input" name="address" required placeholder=" address ">
                            </div>
                            <div class="col-12 col-xl-6">
                                <input type="text" class="contact__input" name="situation" required placeholder=" situation">
                            </div>
                            <div class="col-12">
                                <textarea class="contact__input"name="message" required placeholder=" write message "></textarea>
                            </div>
                        </div>
                        <button type="submit" class="main__btn search__btn hvr-bounce-to-right mbTop_10"> send message </button>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="aboutTH_wrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">
                    <div class="blueBk_contWrap">
                        <h3> Don't hesitate to contact us </h3>
                        <div class="contBox_flex">
                            <img src="{{asset('Front/assets')}}/img/call1.svg" alt="" class="contBox_Icon">
                            <div class="contBx_fBody">
                                <h5> call us </h5>
                                <a href="#" class="contBx__num"> {{$mobile}} </a>
                            </div>
                        </div>
                        <div class="contBox_flex">
                            <img src="{{asset('Front/assets')}}/img/map1.svg" alt="" class="contBox_Icon">
                            <div class="contBx_fBody">
                                <h5> come to us </h5>
                                <a href="#" class="contBx__num"> {{ $address}}</a>
                            </div>
                        </div>
                        <div class="contBox_flex">
                            <img src="{{asset('Front/assets')}}/img/msg1.svg" alt="" class="contBox_Icon">
                            <div class="contBx_fBody">
                                <h5> write to us </h5>
                                <a href="#" class="contBx__num"> {{$email}} </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@push('scripts')@endpush
