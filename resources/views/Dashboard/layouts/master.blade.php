<!DOCTYPE html>
{{--<html lang="en" dir="rtl">--}}

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ direction() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="ifY-pTbeQOWwxQIhB_qtaeZoPuDENlut2qfNl05Ca6Y" />
    <title>@lang('back.Dashboard') || @yield('title')</title>

    @include('Dashboard.layouts.core.css')
    @include('Dashboard.layouts.core.core_Js_files')
</head>
<body>

<!-- Main navbar -->
{{--<div class="navbar navbar-inverse bg-indigo" style="background: linear-gradient(90deg, #0f255e 50%, #374caa 100%);">--}}
<div class="navbar navbar-inverse bg-indigo" style="background: linear-gradient(90deg, #1a294a 50%, #0f255e 100%);">
    @include('Dashboard.layouts.nav')
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">
    <!-- Page content -->
    <div class="page-content">
    @if (!Request::is(app()->getLocale().'/dashboard/show_login'))

        <!-- Main sidebar -->
            <div class="sidebar sidebar-main sidebar-default">
                <div class="sidebar-content">
                    <!-- User menu -->
                    <div class="sidebar-user-material">
                        @include('Dashboard.layouts.sidebar_my_account')
                    </div>
                    <!-- /user menu -->

                    <!-- Main navigation Sidebar -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            @include('Dashboard.layouts.sidebar')
                        </div>
                    </div>
                    <!-- /main navigation -->
                </div>
            </div>
            <!-- /main sidebar -->

            <!-- Main content -->
            <div class="content-wrapper">
                <!-- Page header -->
            @include('Dashboard.layouts.header')
            <!-- /page header -->
                @endif
                @yield('content')
            </div>
            <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->


<!-- scripts -->
@yield('scripts')
@stack('js')
@include('Dashboard.layouts.parts.custom_scripts')
</body>
</html>
