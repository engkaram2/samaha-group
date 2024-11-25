
<script>
    // ======== image preview ====== //
    $(".image").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.image-preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });


    // ======================== saveBtn disabled ============
            let saveBtn = $('#save-form-btn');
            let registerForm = $('#submitted-form');

            registerForm.on('submit', function(e){
                saveBtn.attr('disabled', 'true');
            });
    // ====================================
</script>

<script>
    // ======== image preview ====== //
    $(".image2").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.image-preview2').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
<script>
    // ======== image preview ====== //
    $(".image1").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.image-preview1').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>


{{--<script>--}}
{{--    $(document).ready(function(e){--}}
{{--// ======================== saveBtn disabled ============--}}
{{--        let saveBtn = $('#save-form-btn');--}}
{{--        let registerForm = $('#submitted-form');--}}

{{--        registerForm.on('submit', function(e){--}}
{{--            saveBtn.attr('disabled', 'true');--}}
{{--        });--}}
{{--// ====================================--}}

{{--    });--}}
{{--</script>--}}




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


