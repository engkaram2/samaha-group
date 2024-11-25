
<!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
      type="text/css">
<link href="{{asset('Dashboard/assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/solid.min.css"
      integrity="sha256-pIAzc/BIIo/hSvtNEDIiMTBtR9EfK3COmnH2pt8cPDY=" crossorigin="anonymous"/>


<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/2.3.1/css/flag-icon.min.css" rel="stylesheet"/>

<link href="{{asset('Dashboard/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('Dashboard/assets/css/core.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('Dashboard/assets/css/components.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('Dashboard/assets/css/colors.css')}}" rel="stylesheet" type="text/css">

<link href="{{ asset('Dashboard/assets') }}/css/clock.css" rel="stylesheet" type="text/css">

<!-- /global stylesheets -->


{{--    toastr --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{--    /toastr --}}


<style>
    .form-group input[required] + .label-text:after,
    .form-group select[required] {
        color: #c00;
        content: " *";
        font-family: serif;
    }
</style>

@yield('style')
