<!--start footer section-->
<footer class="footer">
    <div class="footerCo__wrapper">
        <div class="container pxLG-0">
            <div class="row fLinks__row">
                <div class="col-12 col-md-6 col-xl-2 cMDCenter">
                    <div class="footer__col ptSM__30">
                        <a href="{{route('front.home')}}" class="footer__logo">
                            <img src="{{asset('Front/assets')}}/img/logo2.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-2">
                    <div class="footer__col">
                        <h3 class="footer__title"> @lang('front.footer.links') </h3>
                        <ul class="ftUL_list">
                            <li>
                                <a href="{{route('front.home')}}" class="footer_link">
                                    @lang('front.footer.samaha_legal')
                                </a>
                            </li>
                            <li>
                                <a href="{{route('front.translation-home')}}" class="footer_link">
                                    @lang('front.footer.samaha_translation')
                                 </a>
                                </li>
                            <li>
                                <a href="{{route('front.shaaban-home')}}" class="footer_link">
                                    @lang('front.footer.shaaban_samaha')
                                </a>
                            </li>
                            <li>
                                <a href="{{route('front.jasem-home')}}" class="footer_link">
                                    @lang('front.footer.jassem_legal')
                                 </a>
                                </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-2">
                    <div class="footer__col">
                        <h3 class="footer__title"> @lang('front.footer.links') </h3>
                        <ul class="ftUL_list">
                            <li>
                                <a href="{{route('front.services-home')}}" class="footer_link">
                                    @lang('front.footer.samaha_buisenessmen_services')
                                </a>
                            </li>
                            <li>
                                <a href="{{route('front.legal-terms')}}" class="footer_link">
                                    @lang('front.footer.terms_and_conditions')
                                 </a>
                                </li>
{{--                            <li><a href="privacy.html" class="footer_link"> privacy policy </a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer__col">
                        <h3 class="footer__title"> @lang('front.footer.contact') </h3>
                        <ul class="ftUL_list">
                            <li>
                                <a href="{{route('front.home')}}" class="footer_link">
                                    <i class="icon-phone_call"></i>
                                    <span> {{App\Models\LegalSetting::where('key','mobile')->first()->value}} </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('front.home')}}" class="footer_link">
                                    <i class="icon-email_mail"></i>
                                    <u> {{ App\Models\LegalSetting:: where('key','email')->first()->value}} </u>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('front.home')}}" class="footer_link">
                                    <i class="icon-location_map"></i>
                                    <span> {{ App\Models\LegalSetting:: where('key','address')->first()->value}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer__col pdTop_40">
                        <h3 class="footer__title mbTm_15">@lang('front.footer.social_media')  </h3>
                        <div class="social__links">
                            <a href="{{ App\Models\LegalSetting:: where('key','twitter_url')->first()->value}}" class="soc_link">
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="{{ App\Models\LegalSetting:: where('key','linked_in_url')->first()->value}}" class="soc_link">
                                 <i class="fa-brands fa-linkedin-in"></i>
                                 </a>
                            <a href="{{App\Models\LegalSetting::where('key','facebook_url')->first()->value}}" class="soc_link">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="{{ App\Models\LegalSetting:: where('key','youtube_url')->first()->value}}" class="soc_link">
                                 <i class="fa-brands fa-youtube"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="all__rights">@lang('front.footer.copyright')</div>
    </div>
</footer>


<!-- home button-->
<a href="{{route('front.home')}}" class="indexHome_btn"> <img src="{{asset('Front/assets')}}/img/h.png" alt=""> </a>


<a href="#" class="cahtHome_btn" data-toggle="modal" data-target="#helpModal"> <img src="{{asset('Front/assets')}}/img/comment.png" alt=""> </a>

{{--@yield('chat')--}}



{{--<a href="{{route('front.show-chat')}}" class="cahtHome_btn"> <img src="{{asset('Front/assets')}}/img/comment.png" alt=""> </a>--}}
<a href="#" class="meetHome_btn" data-toggle="modal" data-target="#appointModal">
    <img src="{{asset('Front/assets')}}/img/cam.png" alt="">
 </a>

<a href="https://wa.me/+20{{App\Models\LegalSetting::where('key','whatsapp_phone')->first()->value}}"
    class="whats_Btn" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>
</a>
{{--<a href="" target="_blank">{{App\Models\Setting::where('key','whatsapp_phone')->first()->value}}</a>--}}
