<!DOCTYPE html>
{{--<html lang="en" dir="rtl">--}}

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ direction() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@lang('back.Dashboard') || Login</title>
    @include('Dashboard.layouts.core.css')
    @include('Dashboard.layouts.core.core_Js_files')
    <style>
        .wrapper {
            background: linear-gradient(110deg, white 10%, #000000);
            min-height: 100vh;
            width: 100%;
            display: flex;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 30px;
            display: flex;
            gap: 40px;
            flex-flow: column nowrap;
            align-items: center;
            justify-content: center;
        }
        .row1 {
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            gap: 40px;
        }
        .card {
            display: flex;
            align-items: center;
            gap: 28px;
            color: #fcfcfc;
            padding: 32px;
            border-radius: 30%;
            position: relative;
            z-index: 1;
            box-shadow: 6px 28px 46px -6px #000;
        }

        .card .info .btn {
            margin-top: 28px;
            color: #fff;
            background: transparent;
            border: unset;
            border-radius: 16px;
            overflow: hidden;
            padding: 12px 24px;
            font-weight: 600;
            font-size: 16px;
            margin-right: auto;
            cursor: pointer;
            position: relative;
            z-index: 0;
            transition: background 0.3s ease;
        }

        .card .info .btn::before,
        .card .info .btn::after {
            content: '';
            position: absolute;
        }

        .card .info .btn::before {
            left: 50%;
            top: 50%;
            background: linear-gradient(90deg, #ff7a00 0%, transparent 45%, transparent 55%, #ff7a00 100%);
            transform: translate(-50%, -50%) rotate(55deg);
            width: 100%;
            height: 240%;
            border-radius: 16px;
            z-index: -2;
            opacity: 0.4;
            transition: all 0.3s ease;
        }

        .card .info .btn::after {
            left: 2px;
            top: 2px;
            background: #171721;
            width: calc(100% - 4px);
            height: calc(100% - 4px);
            border-radius: 16px;
            z-index: -1;
        }

        .card .info .btn:hover::before {
            animation: 5s move infinite linear;
            opacity: 1;
        }

        .card .image {
            width: 160px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            box-shadow: 8px 12px 16px #000;
            position: relative;
            z-index: 0;
            background-color: white;
        }
        .card .sub > i  {
            font-size: 20px;
            color: #ff7a00;
        }
        .btn a{
          color: white;
        }

        @keyframes move {
            0% {transform: translate(-50%, -50%)  rotate(55deg);}
            100% {transform: translate(-50%, -50%)  rotate(415deg);}
        }
    </style>
</head>

<body class="login">
<div class="wrapper">
    <div class="container">
        <h1 class="text-center"> SAMAHA Dashboard</h1>
        @include('Dashboard.layouts.parts.validation_errors')
        <div class="row row1">
            <div class="card" style="background-color: #1a294a; box-shadow: 4px 2px 5px #aaa; border-radius:  20px;">
                <div class="info">
                    <div class="sub">
                        <i class="fa fa-pen-nib"></i> Services
                    </div>
                    <button class="btn">
                        <a  href="javascript:void(0);" data-toggle="modal" data-target="#services_login">Login</a>
                    </button>
                </div>
                <div class="image">
                    <img src="{{ asset('logo/samaha') }}/services.png" style="width: 100px; height: 80px"/>
                </div>
            </div>
            <div class="card" style="background-color: #1a294a; box-shadow: 4px 2px 5px #aaa; border-radius:  20px;">
                <div class="info">
                    <div class="sub">
                        <i class="fa-solid fa-pen-nib"></i> Samaha Legal
                    </div>
                    <button class="btn">
                        <a  href="javascript:void(0);" data-toggle="modal" data-target="#legal_login">Login</a>
                    </button>
                </div>
                <div class="image">
                    <img src="{{ asset('logo/samaha') }}/legal.png" style="width: 100px; height: 80px"/>
                </div>
            </div>
            <div class="card" style="background-color: #1a294a; box-shadow: 4px 2px 5px #aaa; border-radius:  20px;">
                <div class="info">
                    <div class="sub">
                        <i class="fa  fa-bolt"></i> Translation
                    </div>
                    <button class="btn">
                        <a  href="javascript:void(0);" data-toggle="modal" data-target="#translation_login">Login</a>
                    </button>
                </div>
                <div class="image">
                    <img src="{{ asset('logo/samaha') }}/translation.png" style="width: 100px; height: 80px"/>
                </div>
            </div>
        </div>
        <div class="row row1">
            <div class="card" style="background-color: #1a294a; box-shadow: 4px 2px 5px #aaa; border-radius:  20px;">
                <div class="info">
                    <div class="sub">
                        <i class="fa fa-layer-group"></i> Jasem
                    </div>
                    <button class="btn">
                        <a  href="javascript:void(0);" data-toggle="modal" data-target="#jasem_login">Login</a>
                    </button>
                </div>
                <div class="image">
                    <img src="{{ asset('logo/samaha') }}/jasem.png" style="width: 100px; height: 80px"/>
                </div>
            </div>
            <div class="card" style="background-color: #1a294a; box-shadow: 4px 2px 5px #aaa; border-radius:  20px;">
                <div class="info">
                    <div class="sub">
                        <i class="fa fa-layer-group"></i> Shaaban
                    </div>
                    <button class="btn">
                        <a  href="javascript:void(0);" data-toggle="modal" data-target="#shaaban_login">Login</a>
                    </button>
                </div>
                <div class="image">
                    <img src="{{ asset('logo/samaha') }}/shaaban.png" style="width: 100px; height: 80px"/>
                </div>
            </div>

        </div>
    </div>
</div>
@include('Dashboard.auth.modals.login_modal')

<!-- scripts -->
@yield('scripts')
@stack('js')
@include('Dashboard.layouts.parts.custom_scripts')
</body>
</html>
