<!doctype html>
<html lang="en" dir="ltr">
@include('Front.layouts.head')
<link href="{{asset('Front/assets')}}/css/style-en.css" rel="stylesheet">

<body>
<!--start loader section-->
<div class="loader-container" id="loader-container">
    <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<!--start main section-->
<section class="loginWelcome_section">
    <div class="container pxLG-0">
        @include('Front.layouts.parts.alert')

        <div class="row">
            <div class="col-12 col-xl-6 mx-auto">
                <div class="about_desWrap whiteBK_RGstWrap mdLog_padding">
                    <span class="smOffer myFlex__center"> forget password </span>
                    <h3> Please Write The Code Sent To The E-Mail </h3>
                    <p class="text-blue mb-3">قم بادخال رمز مكون من اربع ارقام تم ارساله الي رقم بريدك الالكتروني حتي
                        يتم
                        تأكيد</p>
                    <form  class="contactUs__form" action="{{route('front.jasem-check-confirm-code')}}" method="post"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
{{--                        {{ method_field('PUT') }}--}}
                        <div class="code__flex mbttom__60">
                            <input type="number"  name="code1" min="0" max="9" class="code__input" required>
                            <input type="number"  name="code2" min="0" max="9" class="code__input" required>
                            <input type="number"  name="code3" min="0" max="9" class="code__input" required>
                            <input type="number"  name="code4" min="0" max="9" class="code__input" required>
                        </div>
                        <button type="submit" class="main__btn search__btn hvr-bounce-to-right w-100 mbTop_10"> send
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

</section>


@include('Front.layouts.jasem.footer')
@include('Front.layouts.script')


<script src="{{asset('Front/assets')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('Front/assets')}}/js/slick.min.js"></script>
<script src="{{asset('Front/assets')}}/js/jquery.fancybox.min.js"></script>
<script src="{{asset('Front/assets')}}/js/jquery.nice-select.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="{{asset('Front/assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('Front/assets')}}/js/main.js"></script>
<script src="{{asset('Front/assets')}}/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script>
    //show password
    $(document).on('click', '.password__icon', function () {
        let myInput = $(this).siblings('.form__password');
        $(this).toggleClass('fa-eye fa-eye-slash')
        if (myInput.attr("type") === "password") {
            myInput.attr("type", "text");
        } else {
            myInput.attr("type", "password");
        }
    });
</script>
</body>
</html>
