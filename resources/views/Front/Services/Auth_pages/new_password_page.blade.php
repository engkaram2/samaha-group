<!doctype html>
<html lang="en" dir="ltr">
@include('Front.layouts.head')
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
                    <span class="smOffer myFlex__center"> welcome back in legal!</span>
                    <h3> <span> {{trans('back.reset_pass')}}</span> </h3>
                     <form  class="contactUs__form" action="{{route('front.services-resetPassword')}}" method="post" id="submitted-form" enctype="multipart/form-data">
                            @csrf
                        <div class="Cform__row">

                            <div class="col-12 px-0">
                                <div class="form__group mbttom__20">
                                    <input type="password" class="contact__input form__password" name="password" placeholder=" password ">
                                    <i class="fa-regular fa-eye password__icon"></i>
                                </div>
                            </div>


                            <div class="col-12 px-0">
                                <div class="form__group mbttom__20">
                                    <input type="password" class="contact__input form__password" name="password_confirmation" placeholder=" confirm password ">
                                    <i class="fa-regular fa-eye password__icon"></i>
                                </div>
                            </div>

                        </div>
                         <button type="submit" class="main__btn search__btn hvr-bounce-to-right w-100 mbTop_10"> Reset </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@include('Front.layouts.services.footer')
@include('Front.layouts.script')


<script src="{{asset('Front/assets')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('Front/assets')}}/js/slick.min.js"></script>
<script src="{{asset('Front/assets')}}/js/jquery.fancybox.min.js"></script>
<script src="{{asset('Front/assets')}}/js/jquery.nice-select.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="{{asset('Front/assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('Front/assets')}}/js/main.js"></script>
<script src="{{asset('Front/assets')}}/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script>
    //show password
    $(document).on('click', '.password__icon', function() {
        let myInput = $(this).siblings('.form__password');
        $(this).toggleClass('fa-eye fa-eye-slash')
        if(myInput.attr("type") === "password") {
            myInput.attr("type", "text");
        }else {
            myInput.attr("type", "password");
        }
    });
</script>
</body>
</html>
