<!--sidebar-->
<div class="mob-overlay"></div>
<div class="sidebar-wrapper">
    <div class="container">
        <div id="burgerBtn"></div>
        <ul class="navigation desktop__nav">
            <li class="nav-item item_has_child">
                <a href="{{route('front.services-services')}}" class="nav-link dropdown-toggle">
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
            {{--            <li class="nav-item">--}}
            {{--                <a href="offices.html" class="nav-link"> our offices </a>--}}
            {{--            </li>--}}
            <li class="nav-item item_has_child">
                <a href="#" class="nav-link dropdown-toggle"> @lang('front.home.parteners') <i class="fa-solid fa-plus"></i> </a>
                <ul class="dropdown__Firstmenu">
                    <li class="nav-item">
                        <a href="{{route('front.home')}}" class="nav-link "> <i class="homeS_icon"></i>
                            @lang('front.footer.samaha_legal') </a>
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
                <a href="{{route('front.services-news')}}" class="nav-link"> our news</a>
            </li>

            <li class="nav-item">
                <a href="{{route('front.services-teams')}}" class="nav-link"> {{trans('back.nav.our_teams')}} </a>
            </li>

            {{--            <li class="nav-item item_has_child">--}}
            {{--                <a href="#" class="nav-link dropdown-toggle"> news <i class="fa-solid fa-plus"></i> </a>--}}
            {{--                <ul class="dropdown__Firstmenu">--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a href="news_3.html" class="nav-link "> Low update </a>--}}
            {{--                    </li>--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a href="news_details_3.html" class="nav-link"> Latest news </a>--}}
            {{--                    </li>--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a href="services.html" class="nav-link"> Puplications </a>--}}
            {{--                    </li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            <li class="nav-item">
                <a href="{{route('front.services-about-app')}}" class="nav-link"> {{trans('back.nav.about_us')}} </a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.show-services-contact-us')}}" class="nav-link">{{trans('back.nav.contact_us')}} </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#appointModal"> make appointment </a>
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
        <a href="{{route('front.services-show-search')}}" class="main__btn search__btn hvr-bounce-to-right mbTm_15"> <i
                class="icon-search"></i> search </a>
{{--        <a href="search.html" class="main__btn srchThird_btn hvr-bounce-to-right mbTm_15"> <i class="icon-search"></i>search </a>--}}
        <div class="links__wrapper">
{{--            <a href="notifications.html" class="lang_link"> <i class="icon-notification"></i> </a>--}}
{{--            <a href="#" class="lang_link" data-toggle="modal" data-target="#loginModal"> <i class="icon-user"></i> </a>--}}

            @if(auth()->check())
                <a href="{{route('front.services-notifications')}}" class="lang_link"> <i class="icon-notification"></i>
                </a>
                {{--            <a href="profile.html" class="lang_link"> <i class="icon-user"></i> </a>--}}
                <a href=" {{route('front.services-profile')}}" class="lang_link"> <i class="icon-user"></i> </a>
                <a href=" {{route('front.services-logout')}}" class="lang_link"> <i class="fas fa-unlock"></i> </a>
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
        <a href="{{route('front.services-home')}}" class="my_logo3">
            <img src="{{asset('Front/assets')}}/img/logo3.png" alt="">
        </a>
        <ul class="navigation desktop__nav d__mob__none">
            <li class="nav-item item_has_child">
                <a href="{{route('front.services-services')}}" class="nav-link dropdown-toggle">
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
            {{--            <li class="nav-item">--}}
            {{--                <a href="offices.html" class="nav-link"> our offices </a>--}}
            {{--            </li>--}}
            <li class="nav-item item_has_child">
                <a href="#" class="nav-link dropdown-toggle"> @lang('front.home.parteners') </a>
                <ul class="dropdown__Firstmenu">
                    <li class="nav-item">
                        <a href="{{route('front.home')}}" class="nav-link "><i class="homeS_icon"></i>
                            @lang('front.footer.samaha_legal')</a>
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
                <a href="{{route('front.services-news')}}" class="nav-link"> our news</a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.services-teams')}}" class="nav-link"> {{trans('back.nav.our_teams')}} </a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.services-about-app')}}" class="nav-link"> {{trans('back.nav.about_us')}} </a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.show-services-contact-us')}}" class="nav-link">{{trans('back.nav.contact_us')}} </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal" data-target="#appointModal"> make appointment </a>
            </li>
            <li class="nav-item item_has_child">
                <a href="#" class="nav-link dropdown-toggle"> <i class="fa fa-globe" aria-hidden="true"></i> </a>
                <ul class="dropdown__Firstmenu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ isLocalized("ar") }}"
                           class="arabic {{ app()->isLocale('ar') ? 'active-lang' : '' }}">
                            @lang('back.ar.ar')
                        </a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ isLocalized("en") }}"
                           class="arabic {{ app()->isLocale('en') ? 'active-lang' : '' }}">
                            @lang('back.en.en')
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
        <a href="{{route('front.services-show-search')}}" class="main__btn search__btn hvr-bounce-to-right mbTm_15"> <i
                class="icon-search"></i> search </a>
{{--        <a href="search.html" class="main__btn srchThird_btn hvr-bounce-to-right d__mob__none"> <i class="icon-search"></i> search </a>--}}
        <div class="links__wrapper d__mob__none">
{{--            <a href="notifications.html" class="lang_link"> <i class="icon-notification"></i> </a>--}}
{{--            <a href="#" class="lang_link" data-toggle="modal" data-target="#loginModal"> <i class="icon-user"></i> </a>--}}

            @if(auth()->check())
                <a href="{{route('front.services-notifications')}}" class="lang_link"> <i class="icon-notification"></i>
                </a>
                <a href=" {{route('front.services-profile')}}" class="lang_link"> <i class="icon-user"></i> </a>
                <a href=" {{route('front.services-logout')}}" class="lang_link"> <i class="fas fa-unlock"></i> </a>
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
                <h3> welcome to samaha services </h3>
                <p> Now, you can log in or register in our website to enjoy our services </p>
                <div class="buttons_wrapper">
                    <a href="{{route('front.services-show-login')}}" class="main__btn mydefault_btn whiteBK__btn mrEnd_SM">
                        login </a>
                    <a href="{{route('front.services-show-register')}}"
                       class="main__btn mydefault_btn transpBK__btn hvr-bounce-to-right "> register </a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Front.Services.Auth_pages.make_appointment_modal')
{{--@include('Front.layouts.Chat.open_ticket_modal')--}}
@include('Front.layouts.Chat.side_chat_modal')
