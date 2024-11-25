<!--start footer section-->
<footer class="footer">
    <div class="footerCo__wrapper">
        <div class="container pxLG-0">
            <div class="row fLinks__row">
                <div class="col-12 col-md-6 col-xl-2 cMDCenter">
                    <div class="footer__col ptSM__30">
                        <a href="{{route('front.shaaban-home')}}" class="footer__logo">
                            <img src="{{asset('Front/assets')}}/img/logo4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-2">
                    <div class="footer__col">
                        <h3 class="footer__title"> links </h3>
                        <ul class="ftUL_list">
                            <li><a href="{{route('front.home')}}" class="footer_link"> Samaha legal </a></li>
                            <li><a href="{{route('front.translation-home')}}" class="footer_link"> samaha translation </a></li>
                            <li><a href="{{route('front.shaaban-home')}}" class="footer_link"> shaaban samaha</a></li>
                            <li><a href="{{route('front.jasem-home')}}" class="footer_link"> jassem legal </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-2">
                    <div class="footer__col">
                        <h3 class="footer__title"> links </h3>
                        <ul class="ftUL_list">
                            <li><a href="{{route('front.services-home')}}" class="footer_link"> samaha buisenessmen services </a></li>
                            <li><a href="{{route('front.shaaban-terms')}}" class="footer_link"> terms and conditions </a></li>
{{--                            <li><a href="privacy.html" class="footer_link"> privacy policy </a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer__col">
                        <h3 class="footer__title"> contact </h3>
                        <ul class="ftUL_list">
                            <li>
                                <a href="#" class="footer_link">
                                    <i class="icon-phone_call"></i> <span> {{App\Models\ShabaanSetting::where('key','mobile')->first()->value}} </span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer_link">
                                    <i class="icon-email_mail"></i> <u> {{App\Models\ShabaanSetting::where('key','email')->first()->value}} </u>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="footer_link">
                                    <i class="icon-location_map"></i> <span> {{App\Models\ShabaanSetting::where('key','address')->first()->value}} </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer__col pdTop_40">
                        <h3 class="footer__title mbTm_15"> Social media </h3>
                        <div class="social__links">
                            <a href="{{ App\Models\ShabaanSetting:: where('key','twitter_url')->first()->value}}" class="soc_link"> <i class="fa-brands fa-twitter"></i> </a>
                            <a href="{{ App\Models\ShabaanSetting:: where('key','linked_in_url')->first()->value}}" class="soc_link"> <i class="fa-brands fa-linkedin-in"></i> </a>
                            <a href="{{App\Models\ShabaanSetting::where('key','facebook_url')->first()->value}}" class="soc_link"> <i class="fa-brands fa-facebook-f"></i> </a>
                            <a href="{{ App\Models\ShabaanSetting:: where('key','youtube_url')->first()->value}}" class="soc_link"> <i class="fa-brands fa-youtube"></i> </a>

                        </div>
{{--                        <form action="" class="contEmail_form">--}}
{{--                            <div class="form__group">--}}
{{--                                <input type="email" class="email__input" placeholder="Enter your email">--}}
{{--                                <i class="fa-regular fa-paper-plane email__icon"></i>--}}
{{--                            </div>--}}
{{--                        </form>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="all__rights"> Copyright Ⓒ Samaha Translations Consutants 2022. </div>
    </div>
</footer>
<!-- home button-->
<a href="{{route('front.home')}}" class="indexHome_btn"> <img src="{{asset('Front/assets')}}/img/h.png" alt=""> </a>
<a href="#" class="cahtHome_btn" data-toggle="modal" data-target="#helpModal"> <img src="{{asset('Front/assets')}}/img/comment2.png" alt=""> </a>
<a href="#" class="meetHome_btn" data-toggle="modal" data-target="#appointModal"> <img src="{{asset('Front/assets')}}/img/cam2.png" alt=""> </a>
