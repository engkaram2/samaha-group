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
                <a href="{{route('front.legal-services')}}" class="nav-link  dropdown-toggle">
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
                <a href="{{route('front.legal-offices')}}" class="nav-link dropdown-toggle">
                    @lang('back.nav.our_offices')
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
                        <a href="{{route('front.home')}}" class="nav-link ">
                             <i class="homeS_icon"></i>@lang('front.footer.samaha_legal')
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
            <li class="nav-item item_has_child">
                <a href="#" class="nav-link dropdown-toggle"> news <i class="fa-solid fa-plus"></i> </a>
                <ul class="dropdown__Firstmenu">
                    <li class="nav-item">
                        <a href="{{route('front.legal-low-update-news')}}" class="nav-link "> Low update </a></li>
                    <li class="nav-item">
                        <a href="{{route('front.legal-latest-update-news')}}" class="nav-link"> Latest news </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.legal-publication-news')}}" class="nav-link"> Puplications </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('front.legal-about-app')}}" class="nav-link"> {{trans('back.nav.about_us')}} </a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.show-legal-contact-us')}}"
                   class="nav-link">{{trans('back.nav.contact_us')}} </a>
            </li>
            <li class="nav-item">
                {{--                <a href="appointment.html" class="nav-link"> {{trans('back.nav.make_appointment')}} </a>--}}
                <a href="#" class="nav-link" data-toggle="modal"
                   data-target="#appointModal"> {{trans('back.nav.make_appointment')}} </a>
            </li>

{{--            <li class="nav-item item_has_child">--}}
{{--                <a href="#" class="nav-link dropdown-toggle"> <i class="fa fa-globe" aria-hidden="true"></i> <i--}}
{{--                        class="fa-solid fa-plus"></i> </a>--}}
{{--                <ul class="dropdown__Firstmenu">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ isLocalized("ar") }}"--}}
{{--                           class="arabic {{ app()->isLocale('ar') ? 'active-lang' : '' }}">--}}
{{--                            @lang('back.ar.ar')--}}
{{--                        </a></li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ isLocalized("en") }}"--}}
{{--                           class="arabic {{ app()->isLocale('en') ? 'active-lang' : '' }}">--}}
{{--                            @lang('back.en.en')--}}
{{--                        </a>--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </li>--}}

            <li class="nav_item">
                @if(app()->isLocale('en'))
                    <a href="{{ isLocalized("ar") }}" class="nav_link text-white"> <i class="fa fa-globe" aria-hidden="true"></i> AR </a>
                @elseif(app()->isLocale('ar'))
                    <a href="{{ isLocalized("en") }}" class="nav_link text-white"> <i class="fa fa-globe" aria-hidden="true"></i> EN </a>
                @endif
            </li>


        </ul>
        <a href="{{route('front.legal-search')}}" class="main__btn search__btn hvr-bounce-to-right mbTm_15"> <i
                class="icon-search"></i> search </a>
        <div class="links__wrapper">
            <a href="{{route('front.home')}}" class="lang_link"> <i class="icon-notification"></i> </a>
            {{--            <a href="profile.html" class="lang_link"> <i class="icon-user"></i> </a>--}}
            <a href="#" class="lang_link" data-toggle="modal" data-target="#loginModal"> <i class="icon-user"></i> </a>
        </div>
    </div>
</div>

<!--start header section-->
<header>
    <div class="container header__container pxLG-0">
        <a href="{{route('front.home')}}" class="my_logo">
            <img src="{{asset('Front/assets')}}/img/logo.png" alt="">
        </a>
        <ul class="navigation desktop__nav d__mob__none">
            <li class="nav-item item_has_child">
                <a href="{{route('front.legal-services')}}" class="nav-link dropdown-toggle"> {{trans('back.nav.our_services')}} </a>
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
                <a href="{{route('front.legal-offices')}}" class="nav-link dropdown-toggle">
                    @lang('back.nav.our_offices')
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
                <a href="#" class="nav-link dropdown-toggle">{{trans('front.home.parteners')}}  </a>
                <ul class="dropdown__Firstmenu">
                    <li class="nav-item">
                        <a href="{{route('front.home')}}" class="nav-link ">
                             <i class="homeS_icon"></i>@lang('front.footer.samaha_legal')
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
            <li class="nav-item item_has_child">
                <a href="#" class="nav-link dropdown-toggle"> {{trans('back.nav.news')}} </a>
                <ul class="dropdown__Firstmenu">
                    <li class="nav-item">
                        <a href="{{route('front.legal-low-update-news')}}" class="nav-link "> Low update </a></li>
                    <li class="nav-item">
                        <a href="{{route('front.legal-latest-update-news')}}" class="nav-link"> Latest news </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('front.legal-publication-news')}}" class="nav-link"> Puplications </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{route('front.legal-about-app')}}" class="nav-link"> {{trans('back.nav.about_us')}} </a>
            </li>
            <li class="nav-item">
                <a href="{{route('front.show-legal-contact-us')}}"
                   class="nav-link">{{trans('back.nav.contact_us')}} </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" data-toggle="modal"
                   data-target="#appointModal"> {{trans('back.nav.make_appointment')}} </a>
            </li>

{{--            <li class="nav-item item_has_child">--}}
{{--                <a href="#" class="nav-link dropdown-toggle"> <i class="fa fa-globe" aria-hidden="true"></i> </a>--}}
{{--                <ul class="dropdown__Firstmenu">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ isLocalized("ar") }}"--}}
{{--                           class="arabic {{ app()->isLocale('ar') ? 'active-lang' : '' }}">--}}
{{--                            @lang('back.ar.ar')--}}
{{--                        </a></li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ isLocalized("en") }}"--}}
{{--                           class="arabic {{ app()->isLocale('en') ? 'active-lang' : '' }}">--}}
{{--                            @lang('back.en.en')--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li class="nav_item">
                @if(app()->isLocale('en'))
                    <a href="{{ isLocalized("ar") }}" class="nav_link text-white"> <i class="fa fa-globe" aria-hidden="true"></i> AR </a>
                @elseif(app()->isLocale('ar'))
                    <a href="{{ isLocalized("en") }}" class="nav_link text-white"> <i class="fa fa-globe" aria-hidden="true"></i> EN </a>
                @endif
            </li>
        </ul>
        <a href="{{route('front.legal-show-search')}}" class="main__btn search__btn hvr-bounce-to-right d__mob__none">
            <i class="icon-search"></i> search </a>
        <div class="links__wrapper d__mob__none">
            @if(auth()->check())
                <a href="{{route('front.legal-notifications')}}" class="lang_link"> <i class="icon-notification"></i>
                </a>
                {{--            <a href="profile.html" class="lang_link"> <i class="icon-user"></i> </a>--}}
                <a href=" {{route('front.legal-profile')}}" class="lang_link"> <i class="icon-user"></i> </a>
                <a href=" {{route('front.logout')}}" class="lang_link"> <i class="fas fa-unlock"></i> </a>
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
                <h3> welcome to samaha legal </h3>
                <p> Now, you can log in or register in our website to enjoy our services </p>
                <div class="buttons_wrapper">
                    <a href="{{route('front.show-login')}}" class="main__btn mydefault_btn whiteBK__btn mrEnd_SM">
                        login </a>
                    <a href="{{route('front.show-register')}}"
                       class="main__btn mydefault_btn transpBK__btn hvr-bounce-to-right "> register </a>
                </div>
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
                <p> When making an appointment you should give the person your name and the reason for wanting an
                    appointment. You should also ask the amount of time the appointment will take and if you should
                    expect a wait
                    time prior to the appointment. You should also ask the amount of time the appointment. </p>

                <form class="contactUs__form" action="{{route('front.legal-make-appointment')}}" method="post"
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
                {{--                <div class="flexWr_End">--}}
                {{--                    <a href="register.html" class="main__btn myborderd_btn whiteBK__btn mrEnd_SM"> register </a>--}}
                {{--                    <a href="appointment.html"  class="main__btn myborderd_btn blueBK__btn"> confirm </a>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
</div>
{{--@dd( \http\Env\Request::route()->getName())--}}
{{--@include('Front.layouts.Chat.open_ticket_modal')--}}
{{--@if(currentRouteName() == 'front.home')--}}


{{--@yield('chat_modal')--}}


@include('Front.layouts.Chat.side_chat_modal')
