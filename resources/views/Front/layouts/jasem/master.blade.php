<!doctype html>
<html lang="ar" dir="rtl">
@include('Front.layouts.head')
@yield('style')
@include('Front.layouts.jasem.nav')

{{--@include('front.layouts.splash')--}}

<body class="index_five">
<!--==========================================================================-->
@yield('content')
<!--==========================================================================-->

@include('Front.layouts.jasem.footer')
@include('Front.layouts.script')
@yield('js')
<script>
    @if(Session::has('message'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.success("{{ session('message') }}");
    @endif

        @if(Session::has('error'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.error("{{ session('error') }}");
    @endif

        @if(Session::has('info'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.info("{{ session('info') }}");
    @endif

        @if(Session::has('warning'))
        toastr.options =
        {
            "closeButton": true,
            "progressBar": true
        }
    toastr.warning("{{ session('warning') }}");
    @endif
</script>
{{--==========================================firebase======================================--}}
@include('Front.layouts.Chat.chat_script')

@stack('scripts')
</body>
</html>
