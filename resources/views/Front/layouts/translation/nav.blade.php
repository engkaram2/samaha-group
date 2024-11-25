
<!--start loader section-->
<div class="loader-container" id="loader-container">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<!--sidebar-->
<div class="mob-overlay"></div>
<div class="sidebar-wrapper">
    <div class="container">
        <div id="burgerBtn"></div>
        <ul class="navigation desktop__nav">
            <li class="nav-item item_has_child">
                <a href="{{route('front.translation-services')}}" class="nav-link dropdown-toggle">
                     {{trans('back.nav.our_services')}}
                </a>
                <ul class="dropdown__Firstmenu">
                    @foreach ($our_services as $service )
                        <li class="nav-item">
                            <a href="{{route('front.home')}}" class="nav-link ">
                                <i class="homeS_icon"></i>
                                {{ app()->getLocale() == 'ar' ? $service->name_ar : $service->name_en}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item item_has_child">
                <a href="{{route('front.translation-offices')}}" class="nav-link dropdown-toggle">
                     {{trans('back.nav.our_offices')}}
                </a>
                <ul class="dropdown__Firstmenu">
                    @foreach ($offices as $country )
                            <li class="nav-item">
                                <a href="{{route('front.legal-location-offices',$country->id)}}" class="nav-link ">
                                    <i class="homeS_icon"></i>
                                    {{ app()->getLocale() == 'ar' ? $country->name_ar : $country->name_en}}
                                </a>
                            </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item item_has_child">
                <a href="#" class="nav-link dropdown-toggle"> @lang('front.home.parteners') <i class="fa-solid fa-plus"></i> </a>
                <ul class="dropdown__Firstmenu">
                    <li class="nav-item">
                        <a href="{{route('front.home')}}" class="nav-link "> <i class="homeS_icon"></i>
                            @lang('front.footer.samaha_legal')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.translation-home')}}" class="nav-link">
                            @lang('front.footer.samaha_translation')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.services-home')}}" class="nav-link">
                            @lang('front.footer.samaha_buisenessmen_services')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.shaaban-home')}}" class="nav-link">
                            @lang('front.footer.shaaban_samaha')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.jasem-home')}}" class="nav-link"> @lang('front.footer.jassem_legal') </a>
                    </li>
                </ul>
            </li>
{{--            <li class="nav-item item_has_child">--}}
{{--                <a href="#" class="nav-link dropdown-toggle"> {{trans('back.nav.news')}} <i class="fa-solid fa-plus"></i> </a>--}}
{{--                <ul class="dropdown__Firstmenu">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="news_2.html" class="nav-link "> Low update </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="news_details_2.html" class="nav-link"> Latest news </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="services.html" class="nav-link"> Puplications </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li class="nav-item">
                <a href="{{route('front.translation-news')}}" class="nav-link"> {{trans('back.nav.news')}} </a>
            </li>

            <li class="nav-item">
                <a href="{{route('front.translation-about-app')}}" class="nav-link"> {{trans('back.nav.about_us')}} </a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.show-translation-contact-us')}}" class="nav-link">{{trans('back.nav.contact_us')}} </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#appointModal"> {{trans('back.nav.make_appointment')}}  </a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a href="about_translate_ar.html" class="nav-link"> ar </a>--}}
{{--            </li>--}}
            <li class="nav-item item_has_child">
                <a href="#" class="nav-link dropdown-toggle"> <i class="fa fa-globe" aria-hidden="true"></i> <i class="fa-solid fa-plus"></i> </a>
                <ul class="dropdown__Firstmenu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ isLocalized("ar") }}"
                           class="arabic {{ app()->isLocale('ar') ? 'active-lang' : '' }}">
                            @lang('back.ar.ar')
                        </a>                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ isLocalized("en") }}"
                           class="arabic {{ app()->isLocale('en') ? 'active-lang' : '' }}">
                            @lang('back.en.en')
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
{{--        <a href="search.html" class="main__btn search__btn hvr-bounce-to-right mbTm_15"> <i class="icon-search"></i> search </a>--}}

        <a href="{{route('front.translation-show-search')}}" class="main__btn search__btn hvr-bounce-to-right mbTm_15"> <i
                class="icon-search"></i> search </a>

        <div class="links__wrapper">

            @if(auth()->check())
                <a href="{{route('front.translation-notifications')}}" class="lang_link"> <i class="icon-notification"></i>
                </a>
                <a href=" {{route('front.translation-profile')}}" class="lang_link"> <i class="icon-user"></i> </a>
                <a href=" {{route('front.translation-logout')}}" class="lang_link">

{{--                    <i class="fas fa-unlock"></i>--}}
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>


                </a>
            @else
                <a href="#" class="lang_link" data-toggle="modal" data-target="#loginModal"> <i class="icon-user"></i>
                </a>
            @endif

{{--            <a href="notifications.html" class="lang_link"> <i class="icon-notification"></i> </a>--}}
{{--            <a href="#" class="lang_link" data-toggle="modal" data-target="#loginModal"> <i class="icon-user"></i> </a>--}}
        </div>
    </div>
</div>

<!--start header section-->
<header>
    <div class="container header__container pxLG-0">
        <a href="{{route('front.translation-home')}}" class="my_logo2">
            <img src="{{asset('Front/assets')}}/img/logo-t.png" alt="">
        </a>
        <ul class="navigation desktop__nav d__mob__none">
            <li class="nav-item item_has_child">
                <a href="{{route('front.translation-services')}}" class="nav-link dropdown-toggle">
                     {{trans('back.nav.our_services')}}
                </a>
                <ul class="dropdown__Firstmenu">
                    @foreach ($our_services as $service )
                        <li class="nav-item">
                            <a href="{{route('front.home')}}" class="nav-link ">
                                <i class="homeS_icon"></i>
                                {{ app()->getLocale() == 'ar' ? $service->name_ar : $service->name_en}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item item_has_child">
                <a href="{{route('front.translation-offices')}}" class="nav-link dropdown-toggle">
                     {{trans('back.nav.our_offices')}}
                </a>
                <ul class="dropdown__Firstmenu">
                    @foreach ($offices as $country )
                            <li class="nav-item">
                                <a href="{{route('front.legal-location-offices',$country->id)}}" class="nav-link ">
                                    <i class="homeS_icon"></i>
                                    {{ app()->getLocale() == 'ar' ? $country->name_ar : $country->name_en}}
                                </a>
                            </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item item_has_child">
                <a href="#" class="nav-link dropdown-toggle"> @lang('front.home.parteners') </a>
                <ul class="dropdown__Firstmenu">
                    <li class="nav-item">
                        <a href="{{route('front.home')}}" class="nav-link "><i class="homeS_icon"></i>
                            @lang('front.footer.samaha_legal')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.translation-home')}}" class="nav-link">
                            @lang('front.footer.samaha_translation')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.services-home')}}" class="nav-link">
                            @lang('front.footer.samaha_buisenessmen_services')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.shaaban-home')}}" class="nav-link">
                            @lang('front.footer.shaaban_samaha')
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.jasem-home')}}" class="nav-link"> @lang('front.footer.jassem_legal') </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{route('front.translation-news')}}" class="nav-link"> {{trans('back.nav.news')}} </a>
            </li>
{{--            <li class="nav-item item_has_child">--}}
{{--                <a href="#" class="nav-link dropdown-toggle"> {{trans('back.nav.news')}} </a>--}}
{{--                <ul class="dropdown__Firstmenu">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="index_samaha.html" class="nav-link "> Low update </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="news_translate.html" class="nav-link"> Latest news </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="services.html" class="nav-link"> Puplications </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}
            <li class="nav-item">
                <a href="{{route('front.translation-about-app')}}" class="nav-link"> {{trans('back.nav.about_us')}} </a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.show-translation-contact-us')}}" class="nav-link">{{trans('back.nav.contact_us')}} </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#appointModal"> {{trans('back.nav.make_appointment')}}  </a>
            </li>
{{--            <li class="nav-item">--}}
{{--                <a href="index_translate_ar.html" class="nav-link"> ar </a>--}}
{{--            </li>--}}
            <li class="nav-item item_has_child">
                <a href="#" class="nav-link dropdown-toggle"> <i class="fa fa-globe" aria-hidden="true"></i> </a>
                <ul class="dropdown__Firstmenu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ isLocalized("ar") }}"
                           class="arabic {{ app()->isLocale('ar') ? 'active-lang' : '' }}">
                            @lang('back.ar.ar')
                        </a>                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ isLocalized("en") }}"
                           class="arabic {{ app()->isLocale('en') ? 'active-lang' : '' }}">
                            @lang('back.en.en')
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
{{--        <a href="search.html" class="main__btn search__btn hvr-bounce-to-right d__mob__none"> <i class="icon-search"></i> search </a>--}}
        <a href="{{route('front.translation-show-search')}}" class="main__btn search__btn hvr-bounce-to-right mbTm_15"> <i
                class="icon-search"></i> search </a>
        <div class="links__wrapper d__mob__none">

            @if(auth()->check())
                <a href="{{route('front.translation-notifications')}}" class="lang_link"> <i class="icon-notification"></i>
                </a>
                <a href=" {{route('front.translation-profile')}}" class="lang_link"> <i class="icon-user"></i> </a>
                <a href=" {{route('front.translation-logout')}}" class="lang_link">
{{--                    <i class="fas fa-unlock"></i>--}}
                    <i class="fa-solid fa-arrow-right-to-bracket"></i>


                </a>
            @else
                <a href="#" class="lang_link" data-toggle="modal" data-target="#loginModal"> <i class="icon-user"></i>
                </a>
            @endif


        </div>
        <button class="navbar_toggler" type="button" id="sidebar_toggler">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>

<!-- login modal-->
<div class="modal loginModal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body loginModal__body">
                <button type="button" class="close__modal" data-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <h3> welcome to samaha translation </h3>
                <p> Now, you can log in or register in our website to enjoy our services </p>

                <div class="buttons_wrapper">
                    <a href="{{route('front.translation-show-login')}}" class="main__btn mydefault_btn whiteBK__btn mrEnd_SM">
                        login </a>
                    <a href="{{route('front.translation-show-register')}}"
                       class="main__btn mydefault_btn transpBK__btn hvr-bounce-to-right "> register </a>
                </div>


{{--                <div class="buttons_wrapper">--}}
{{--                    <a href="login.html" class="main__btn mydefault_btn whiteBK__btn mrEnd_SM"> login </a>--}}
{{--                    <a href="register.html" class="main__btn mydefault_btn transpBK__btn hvr-bounce-to-right "> register </a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</div>

<!-- appointment modal-->
<div class="modal loginModal fade" id="appointModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body appointModal__body">
                <button type="button" class="close__modal" data-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <h3> make an appointment </h3>
                <p> When making an appointment you should give the person your name and the reason for wanting an appointment. You should also ask the amount of time the appointment will take and if you should expect a wait
                    time prior to the appointment. You should also ask the amount of time the appointment. </p>



                <form class="contactUs__form" action="{{route('front.translation-make-appointment')}}" method="post"
                      id="submitted-form" enctype="multipart/form-data">
                    @csrf
                    <div class="appointRad_wrap">
                        <span class="absAlert_red"> *You must be registered* </span>
                        <label class="workfrom_label"> <input type="radio" class="workfrom_radio"
                                                              name="appointment_type" value="office" checked> <span> from office </span>
                        </label>
                        <label class="workfrom_label"> <input type="radio" class="workfrom_radio"
                                                              name="appointment_type" value="online">
                            <span> online </span> </label>
                    </div>
                    <div class="Cform__row">
                        <div class="col-12 col-xl-6">
                            <input type="text" class="contact__input" name="client_name" placeholder=" your name ">
                        </div>

                        <div class="col-12 col-xl-6">
                            <input type="email" class="contact__input" name="email_address"
                                   placeholder=" email address ">
                        </div>

                        <div class="col-12 col-xl-6">
                            <input type="datetime-local" class="contact__input" name="date">
                        </div>
                        <div class="col-12 col-xl-6">
                            <input type="text" class="contact__input" name="client_mobile" placeholder=" phone number ">
                        </div>
                        <div class="col-12">
                            <textarea class="contact__input" name="problem"
                                      placeholder=" Tell us about your problem.. "></textarea>
                        </div>
                    </div>
                    <button type="submit" id="save-form-btn"
                            class="main__btn search__btn hvr-bounce-to-right mxST_auto mbTop_10"> confirm
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('Front.layouts.Chat.side_chat_modal')

{{--@include('Front.layouts.Chat.open_ticket_modal')--}}


{{--<!-- help modal-->--}}
{{--<div class="modal loginModal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
{{--     aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-body appointModal__body">--}}
{{--                <button type="button" class="close__modal" data-dismiss="modal" aria-label="Close">--}}
{{--                    <i class="fa-solid fa-xmark"></i>--}}
{{--                </button>--}}
{{--                <div class="about_desWrap">--}}
{{--                    <span class="smOffer myFlex__center"> Chat with us </span>--}}
{{--                    <h3> how we can <span> help you? </span> </h3>--}}
{{--                    <form action="">--}}
{{--                        <div class="Cform__row">--}}
{{--                            <div class="col-12 col-xl-6">--}}
{{--                                <div class="chatCard_one">--}}
{{--                                    <p> Hello! <br> how can we help you? </p>--}}
{{--                                    <span class="msgAbs_span"> 08:13 pm </span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <a href="#" class="askHelp_one main__btn"> not responding to requests? </a>--}}
{{--                        <a href="#" class="askHelp_one main__btn"> don't know how to use the website </a>--}}
{{--                        <div class="Cform__row">--}}
{{--                            <input type="text" class="helpU__input" placeholder="type a message ">--}}
{{--                            <button type="submit" class="send__btn main__btn"> <img src="{{asset('Front/assets')}}/img/directup.svg" alt=""> </button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
