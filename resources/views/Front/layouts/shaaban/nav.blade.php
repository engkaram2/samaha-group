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
            <li class="nav-item">
                <a href="{{route('front.shaaban-knowledge')}}" class="nav-link"> knowledge </a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.show-shaaban-contact-us')}}" class="nav-link">{{trans('back.nav.contact_us')}} </a>
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
                        <a href="{{route('front.jasem-home')}}" class="nav-link">
                            @lang('front.footer.jassem_legal')
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#appointModal"> {{trans('back.nav.make_appointment')}} </a>
            </li>
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
        <a href="{{route('front.shaaban-show-search')}}" class="main__btn search__btn hvr-bounce-to-right mbTm_15"> <i
                class="icon-search"></i> search </a>
{{--        <a href="search.html" class="main__btn srchThird_btn hvr-bounce-to-right mbTm_15"> <i class="icon-search"></i> search </a>--}}
        <div class="links__wrapper">
{{--            <a href="notifications.html" class="lang_link"> <i class="icon-notification"></i> </a>--}}
{{--            <a href="#" class="lang_link" data-toggle="modal" data-target="#loginModal"> <i class="icon-user"></i> </a>--}}
{{--        --}}

            @if(auth()->check())
                <a href="{{route('front.shaaban-notifications')}}" class="lang_link"> <i class="icon-notification"></i>
                </a>
                <a href=" {{route('front.shaaban-profile')}}" class="lang_link"> <i class="icon-user"></i> </a>
                <a href=" {{route('front.shaaban-logout')}}" class="lang_link"> <i class="fas fa-unlock"></i> </a>
            @else
                <a href="#" class="lang_link" data-toggle="modal" data-target="#loginModal"> <i class="icon-user"></i>
                </a>
            @endif

        </div>
    </div>
</div>

<!--start header section-->
<header>
    <div class="container header__container pxLG-0">
        <a href="{{route('front.shaaban-home')}}" class="my_logo4">
            <img src="{{asset('Front/assets')}}/img/logo4.png" alt="">
        </a>
        <ul class="navigation desktop__nav d__mob__none">
            <li class="nav-item">
                <a href="{{route('front.shaaban-knowledge')}}" class="nav-link"> knowledge </a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.show-shaaban-contact-us')}}" class="nav-link">{{trans('back.nav.contact_us')}} </a>
            </li>
            <li class="nav-item item_has_child">
                <a href="#" class="nav-link dropdown-toggle">@lang('front.home.parteners')  </a>
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
            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#appointModal"> {{trans('back.nav.make_appointment')}} </a>
            </li>
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
        <a href="{{route('front.shaaban-show-search')}}" class="main__btn search__btn hvr-bounce-to-right mbTm_15"> <i
                class="icon-search"></i> search </a>
{{--        <a href="search.html" class="main__btn srchThird_btn hvr-bounce-to-right d__mob__none"> <i class="icon-search"></i> search </a>--}}
        <div class="links__wrapper d__mob__none">
{{--            <a href="notifications.html" class="lang_link"> <i class="icon-notification"></i> </a>--}}
{{--            <a href="#" class="lang_link" data-toggle="modal" data-target="#loginModal"> <i class="icon-user"></i> </a>--}}

            @if(auth()->check())
                <a href="{{route('front.shaaban-notifications')}}" class="lang_link"> <i class="icon-notification"></i>
                </a>
                <a href=" {{route('front.shaaban-profile')}}" class="lang_link"> <i class="icon-user"></i> </a>
                <a href=" {{route('front.shaaban-logout')}}" class="lang_link"> <i class="fas fa-unlock"></i> </a>
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
                <h3> welcome to shaaban samaha  </h3>
                <p> Now, you can log in or register in our website to enjoy our services </p>
                <div class="buttons_wrapper">
                    <a href="{{route('front.shaaban-show-login')}}" class="main__btn mydefault_btn whiteBK__btn mrEnd_SM">
                        login </a>
                    <a href="{{route('front.shaaban-show-register')}}"
                       class="main__btn mydefault_btn transpBK__btn hvr-bounce-to-right "> register </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- appointment modal-->
@include('Front.Shaaban.Auth_pages.make_appointment_modal')


<!-- appointment modal-->
{{--<div class="modal loginModal fade" id="appointModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"--}}
{{--     aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-body appointModal__body">--}}
{{--                <button type="button" class="close__modal" data-dismiss="modal" aria-label="Close">--}}
{{--                    <i class="fa-solid fa-xmark"></i>--}}
{{--                </button>--}}
{{--                <h3> make an appointment </h3>--}}
{{--                <p> When making an appointment you should give the person your name and the reason for wanting an appointment. You should also ask the amount of time the appointment will take and if you should expect a wait--}}
{{--                    time prior to the appointment. You should also ask the amount of time the appointment. </p>--}}
{{--                <div class="appointRad_wrap">--}}
{{--                    <span class="absAlert_red"> *You must be registered* </span>--}}
{{--                    <label class="workfrom_label">  <input type="radio" class="workfrom_radio" name="work1" checked> <span> from office </span> </label>--}}
{{--                    <label class="workfrom_label">  <input type="radio" class="workfrom_radio" name="work1"> <span> online </span> </label>--}}
{{--                </div>--}}
{{--                <div class="flexWr_End">--}}
{{--                    <a href="register4.html" class="main__btn myborderd_btn whiteBK__btn mrEnd_SM"> register </a>--}}
{{--                    <a href="appointment4.html" class="main__btn myborderd_btn blueBK__btn"> confirm </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



{{--@include('Front.layouts.Chat.open_ticket_modal')--}}
@include('Front.layouts.Chat.side_chat_modal')

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
