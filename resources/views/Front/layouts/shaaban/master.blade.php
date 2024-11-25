<!doctype html>
<html lang="ar" dir="rtl">
@include('Front.layouts.head')
@yield('style')
@include('Front.layouts.shaaban.nav')
<body class="index_four">
<!--==========================================================================-->
@yield('content')
<!--==========================================================================-->

@include('Front.layouts.shaaban.footer')

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
