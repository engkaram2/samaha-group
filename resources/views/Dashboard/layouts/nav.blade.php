
<!-- Main navbar -->
<div class="navbar-header navbar-dark  navbar-{{ floating('left', 'right') }}">
    <a class="navbar-brand" href="">
        <h3 style="margin:auto; padding-right:40px; font-weight: bold;"> Samaha Dasboard</h3>
    </a>

    <ul class="nav navbar-nav visible-xs-block">
        <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
    </ul>
</div>

<div class="navbar-collapse collapse" id="navbar-mobile">
    <ul class="nav navbar-nav">
        <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
        </li>
    </ul>
    <div class="navbar-{{ floating('right','left') }}">
        <ul class="nav navbar-nav" style="float: {{ floating('right','left') }};">
            <li class="dropdown language-switch">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    @php
                        $lang = app()->isLocale('ar') ? 'sa' : 'gb';
                    @endphp
                    <img src="{{ asset('Dashboard/assets/images/flags/'.$lang.'.png') }}" alt="">
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ isLocalized("en") }}" class="english">
                            <img src="{{ asset('Dashboard/assets/images/flags/gb.png') }}" alt="">
                            English
                        </a>
                    </li>
                    <li>
                        <a href="{{ isLocalized("ar") }}" class="arabic">
                            <img src="{{ asset('Dashboard/assets/images/flags/sa.png') }}" alt="">
                            العربية
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

{{--        when authinticate--}}
        @if(auth()->guard('admin')->check())
            <p class="navbar-text" dir="{{ direction() }}">@lang('back.welcome') {{auth()->guard('admin')->user()->full_name}}!</p>
            <p class="navbar-text"><span class="label bg-success-400">@lang('back.online')</span></p>
            <p class="navbar-text">
                <a href="{{ route('admin.logout') }}"
                   onclick="event.preventDefault();document.getElementById('logout-form-1').submit();">
                    <i class="icon-switch2" style="color: rgba(255,255,255,.9);"></i>
                </a>

            <form id="logout-form-1" action="{{ route('admin.logout') }}" method="post"
                  style="display: none;">
                <form id="logout-form-1" action="" method="post" style="display: none;">
                    @csrf
                </form>
            </form>
            </p>
        @endif
    </div>
</div>
<!-- /main navbar -->




{{--<div class="navbar-right">--}}
{{--    <ul class="navbar-nav ml-md-auto">--}}
{{--        <li class="nav-item dropdown">--}}
{{--            <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">--}}
{{--                <i class="icon-make-group mr-2"></i>--}}
{{--                {{ trans('back.social_links') }}--}}
{{--            </a>--}}

{{--            <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">--}}
{{--                <div class="dropdown-content-body p-2">--}}
{{--                    <div class="row no-gutters">--}}
{{--                        <div class="col-12 col-sm-6">--}}
{{--                            <a href="{{ settings('facebook_url') }}" target="_blank" class="d-block text-default text-center ripple-dark rounded p-3">--}}
{{--                                <i class="icon-facebook text-blue-400 icon-2x"></i>--}}
{{--                                <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Facebook</div>--}}
{{--                            </a>--}}
{{--                            <a href="{{ settings('instagram_url') }}" target="_blank" class="d-block text-default text-center ripple-dark rounded p-3">--}}
{{--                                <i class="icon-instagram text-info-400 icon-2x"></i>--}}
{{--                                <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Instagram</div>--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div class="col-12 col-sm-6">--}}
{{--                            <a href="{{ settings('twitter_url') }}" target="_blank" class="d-block text-default text-center ripple-dark rounded p-3">--}}
{{--                                <i class="icon-twitter text-info-400 icon-2x"></i>--}}
{{--                                <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Twitter</div>--}}
{{--                            </a>--}}
{{--                            <a href="{{ settings('youtube_url') }}" target="_blank" class="d-block text-default text-center ripple-dark rounded p-3">--}}
{{--                                <i class="icon-youtube text-danger icon-2x"></i>--}}
{{--                                <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Youtube</div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}
