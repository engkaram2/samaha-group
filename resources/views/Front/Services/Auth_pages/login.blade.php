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
                    <span class="smOffer myFlex__center"> log in </span>
                    <h3> <span> services-welcome back! </span> </h3>
                    <form   class="contactUs__form" action="{{route('front.services-login')}}" method="post" id="submitted-form" enctype="multipart/form-data">
                        @csrf
                        <div class="Cform__row">
                            <div class="col-12 px-0">
                                <input type="hidden" id="fcm_web_token" name="fcm_web_token" value="">

                                <input type="text" name="email" class="contact__input" placeholder=" email address or phone number ">
                            </div>
                            <div class="col-12 px-0">
                                <div class="form__group mbttom__20">
                                    <input type="password" class="contact__input form__password" name="password"   placeholder=" password ">
                                    <i class="fa-regular fa-eye password__icon"></i>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="forget_pass mbttom__20" data-toggle="modal"
                           data-target="#ForgetPassModal"> forget password ? </a>
                        <button type="submit" class="main__btn search__btn hvr-bounce-to-right w-100 mbTop_10"> log in </button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- forget password ? modal-->
<div class="modal loginModal fade" id="ForgetPassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body appointModal__body">
                <button type="button" class="close__modal" data-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
                <h3> forget password </h3>
                <p> Write Your Email To Send Confirm Code  </p>
                <form class="contactUs__form" action="{{route('front.services-forget-pass')}}" method="post"
                      id="submitted-form" enctype="multipart/form-data">
                    @csrf
                    <div class="Cform__row">
                        <div class="col-12 col-xl-12">
                            <input type="email" class="contact__input" name="email" placeholder=" email address " required>
                        </div>
                    </div>
                    <button type="submit" id="save-form-btn"
                            class="main__btn search__btn hvr-bounce-to-right mxST_auto mbTop_10"> Send
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>


@include('Front.layouts.legal.footer')
@include('Front.layouts.script')
{{--<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>--}}
{{--<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-analytics.js"></script>--}}
{{--<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-messaging.js"></script>--}}
{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        const messaging = firebase.messaging();--}}

{{--        messaging.getToken()--}}
{{--            .then(currentToken => {--}}
{{--                if (currentToken){--}}
{{--                    $('input#fcm_web_token').val(currentToken);--}}
{{--                } else {--}}
{{--                    console.log('No Instance ID token available. Request permission to generate one.');--}}
{{--                }--}}
{{--            })--}}
{{--            .catch(err => console.log('An error occurred while retrieving token. ', err));--}}
{{--    });--}}
{{--</script>--}}
</body>
</html>
