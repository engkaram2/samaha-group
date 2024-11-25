<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="google-site-verification" content="ifY-pTbeQOWwxQIhB_qtaeZoPuDENlut2qfNl05Ca6Y" />
    <title>{{trans('back.site_name')}}/@yield('title')</title>

    <link href="{{asset('Front/assets')}}/img/logo.png" rel="icon" type="image/png" sizes="16x16">
    <link href="{{asset('Front/assets')}}/css/animate.min.css" rel="stylesheet" />
    <link href="{{asset('Front/assets')}}/css/hover.css" rel="stylesheet">
    <link href="{{asset('Front/assets')}}/css/slick.css" rel="stylesheet">
    <link href="{{asset('Front/assets')}}/css/slick-theme.css" rel="stylesheet">
    <link href="{{asset('Front/assets')}}/css/jquery.fancybox.min.css" rel="stylesheet">

    <link href="{{asset('Front/assets')}}/css/nice-select.css" rel="stylesheet">

    <link href="{{asset('Front/assets')}}/css/icofont.min.css" rel="stylesheet">
    <link href="{{asset('Front/assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('Front/assets')}}/css/main.css" rel="stylesheet">
    <link href="{{asset('Front/assets')}}/css/media.css" rel="stylesheet">
    @if(app()->isLocale('ar') )
    <link href="{{asset('Front/assets')}}/css/style-ar.css" rel="stylesheet">
    @else
        <link href="{{asset('Front/assets')}}/css/style-en.css" rel="stylesheet">
    @endif
{{--    <link href="{{ asset('Dashboard/assets') }}/css/clock.css" rel="stylesheet" type="text/css">--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


{{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"--}}
{{--          rel="stylesheet">--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>
