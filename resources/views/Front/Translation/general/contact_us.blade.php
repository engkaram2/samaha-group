@extends('Front.layouts.translation.master')
@section('title', trans('back.contact_us'))
@section('style')
@stop
@section('content')

    <!--start main section-->
    <section class="transCont_section relBKcover_sec innerBK__color">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> contact Us </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">samaha translation > </a></li>
                    <li class="breadcrumb-item active" aria-current="page">contact Us</li>
                </ol>
            </div>
        </div>
    </section>
    @include('Front.layouts.parts.alert')

    <!--start contact section-->
    <section class="contact_section secPadding">
        <div class="container pxLG-0">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="about_desWrap">
                        <span class="smOffer myFlex__center"> Free Consultations </span>
                        <h3> feel free to call us </h3>
                        <form action="{{route('front.translation-contact-us')}}" method="post" class="contactUs__form">
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
                    <div class="contINfo_col">
                        <div class="contINfo_Cwrap">
                            <h5> Information </h5>
                            <p> Samaha translation and Legal Consultants is one of the leading offices in the legal profession in the United Arab Emirates and the Arab Republic  of Egypt. </p>
                            <div class="contINFo_line">
                                <i class="fa-solid fa-phone"></i>
                                <span> phone: </span>
                                <a href="#"> {{ App\Models\TranslationSetting:: where('key','mobile')->first()->value}} </a>
                            </div>
                            <div class="contINFo_line">
                                <i class="fa-solid fa-location-dot"></i>
                                <span> address: </span>
                                <a href="#"> {{ App\Models\TranslationSetting:: where('key','address')->first()->value}} </a>
                            </div>
                            <div class="contINFo_line">
                                <i class="fa-solid fa-envelope"></i>
                                <span> email: </span>
                                <a href="#">  {{ App\Models\TranslationSetting:: where('key','email')->first()->value}} </a>
                            </div>
                        </div>
                        <div class="contINfo_Cwrap">
                            <h5> working hours </h5>
                            <p> Samaha translation and Legal Consultants is one of the leading offices in the legal profession in the United Arab Emirates and the Arab Republic  of Egypt. </p>
                            <div class="contINFo_line">
                                <span> Monday - Friday </span>
                                <a href="#"> -9 am to 5 pm </a>
                            </div>
                            <div class="contINFo_line">
                                <span> Saturday </span>
                                <a href="#"> -9 am to 5 pm </a>
                            </div>
                            <div class="contINFo_line">
                                <span> Sunday </span>
                                <a href="#"> -closed </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start map section -->
    <section class="mapCT_section">
        <div class="container pxLG-0">
            <div class="mapSite__wrap">
                <iframe  src="https://maps.google.com/maps?q={{ $latitude }},{{ $longitude }}&hl=es&z=14&output=embed"
                         width="100%" height="718" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                {{--                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.650859370141!2d46.64176368475698!3d24.738863956212338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee36823527cdb%3A0x67b0574b6b8f0d27!2sMCIT!5e0!3m2!1sar!2seg!4v1632406153544!5m2!1sar!2seg" width="100%" height="718" style="border:0;" allowfullscreen="" loading="lazy"></iframe>--}}
            </div>
        </div>
    </section>
@stop
@push('scripts')@endpush
