
<!-- Core JS files -->
<script type="text/javascript" src="{{asset('Dashboard/assets/js/plugins/loaders/pace.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Dashboard/assets/js/core/libraries/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Dashboard/assets/js/core/libraries/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Dashboard/assets/js/plugins/loaders/blockui.min.js')}}"></script>


<script src="{{ asset('Dashboard') }}/assets/js/plugins/loaders/pace.min.js"></script>
<script src="{{ asset('Dashboard') }}/assets/js/plugins/loaders/blockui.min.js"></script>
<script src="{{ asset('Dashboard') }}/assets/js/plugins/uploaders/fileinput.min.js"></script>
<script src="{{ asset('Dashboard') }}/assets/js/pages/uploader_bootstrap.js"></script>
<script src="{{ asset('Dashboard') }}/assets/js/plugins/ui/ripple.min.js"></script>


<!-- /core JS files -->


<!-- Theme JS files -->
{{--    <script type="text/javascript" src="{{asset('Dashboard/assets/js/plugins/uploaders/dropzone.min.js')}}"></script>--}}

<script type="text/javascript" src="{{asset('Dashboard/assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
<script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/plugins/forms/selects/select2.min.js"></script>


<script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/plugins/visualization/d3/d3.min.js"></script>
<script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/plugins/visualization/c3/c3.min.js"></script>

@yield('file_scripts')


<script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/plugins/forms/styling/uniform.min.js"></script>
<script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/plugins/forms/styling/switchery.min.js"></script>
<script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/plugins/forms/styling/switch.min.js"></script>



<script type="text/javascript" src="{{asset('Dashboard/assets/js/core/libraries/jquery_ui/interactions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Dashboard/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Dashboard/assets/js/core/app.js')}}"></script>
<script type="text/javascript" src="{{asset('Dashboard/assets/js/pages/form_select2.js')}}"></script>


@yield('file_scripts_2')

{{--    <script type="text/javascript" src="{{asset('Dashboard/assets/js/pages/uploader_dropzone.js')}}"></script>--}}

{{--<script type="text/javascript" src="{{asset('Dashboard/assets/js/pages/datatables_basic.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('Dashboard')}}/assets/js/pages/datatables_extension_buttons_init.js"></script>


<script type="text/javascript" src="{{asset('Dashboard/assets/js/plugins/ui/ripple.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Dashboard/assets/js/sweetalert.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Dashboard/assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Dashboard/assets/js/bootstrap-datetimepicker.min.js')}}"></script>


{{--<script type="text/javascript" src="{{ asset('Dashboard/assets/js/plugins/visualization/d3/d3.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('Dashboard/assets/js/plugins/visualization/d3/d3_tooltip.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('Dashboard/assets/js/plugins/forms/styling/switchery.min.js') }}"></script>--}}


<script type="text/javascript" src="{{ asset('Dashboard/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Dashboard/assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}"></script>
<script type="text/javascript" src="{{ asset('Dashboard/assets/js/plugins/pickers/daterangepicker.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ url('assets/js/bootstrap-datetimepicker.min.js') }}" charset="UTF-8"></script>--}}

<script type="text/javascript" src="{{asset('Dashboard/assets/js/plugins/forms/selects/select2.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/plugins/forms/selects/bootstrap_select.min.js') }}"></script>

<!-- /theme JS files -->
<script type="text/javascript" src="{{ asset('Dashboard/assets/js/bootbox.min.js') }}"></script>


{{--    ckeditor--}}
<script type="text/javascript" src="{{ asset('Dashboard/ckeditor/ckeditor.js') }}"></script>
{{--    ckeditor--}}

<script src="{{ asset('Dashboard/assets') }}/js/clock.js"></script>
<script>
    $(function(){
        clock({!! json_encode(trans('back.months')) !!}, {!! json_encode(trans('back.days')) !!});
    });
    $(window).on("load", function () {
        $(".loading").delay(600).fadeOut('slow',function(){
            $('.loading-page').css('opacity', '1');
        });
    });

</script>

<script type="text/javascript" src="{{asset('Dashboard/assets/js/pages/form_checkboxes_radios.js')}}"></script>

{{--@yield('files_scripts')--}}
