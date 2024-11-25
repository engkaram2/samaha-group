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
<section class="register_section register_bkOne">
    <div class="container pxLG-0">
        @include('Front.layouts.parts.alert')

        <div class="row">
            <div class="col-12 col-xl-9">
                <div class="about_desWrap whiteBK_RGstWrap">
                    <span class="smOffer myFlex__center"> register </span>
                    <h3> <span> welcome </span> to samaha services </h3>
                    <form  class="contactUs__form" action="{{route('front.services-register')}}" method="post" id="submitted-form"
                           enctype="multipart/form-data">
                        @csrf
                        <div class="Cform__row">
                            <div class="col-12 col-xl-6">
                                <input type="text" class="contact__input" name="full_name"  value="{{ old('full_name') }}" placeholder=" your full name">
                                @error('full_name')<span style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>

                            <div class="col-12 col-xl-6">
                                <input type="email" class="contact__input" name="email"  value="{{ old('email') }}" placeholder=" email address" required>
                                @error('email')<span style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-12 col-xl-6">
                                <input type="text" class="contact__input" maxlength="14" name="mobile"  value="{{ old('mobile') }}" placeholder=" phone number" required>
                                @error('mobile')<span style="color: #e81414;">{{ $message }}</span>@enderror
                            </div>
                            <div class="col-12 col-xl-6">
                                <select class="form-select form-control contact__input nice-select" name="nationality_id"
                                        aria-label="Default select example">
                                    <option selected disabled> {{ trans('back.nationality.nationalities')}}</option>
                                    @foreach ($nationalities as $nationality)
                                        <option
                                            value="{{ $nationality->id }}"> {{ $nationality->$name }} </option>
                                    @endforeach
                                    @error('nationality_id')<span style="color: #e81414;">{{ $message }}</span>@enderror
                                </select>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="form__group mbttom__20">
                                    <input type="password" class="contact__input form__password" name="password" placeholder=" password ">
                                    <i class="fa-regular fa-eye password__icon"></i>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6">
                                <div class="form__group mbttom__20">
                                    <input type="password" class="contact__input form__password" name="password_confirmation"  placeholder=" password ">
                                    <i class="fa-regular fa-eye password__icon"></i>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="file__group mbttom__20">
                                        <span class="remove__img return__photo" onclick="removeImg1()">
                                            <img src="{{asset('Front/assets')}}/img/close.png" alt="" class="img-fluid">
                                        </span>
                                    <div class="profileAvatarPreview">
                                        <img src="{{asset('Front/assets')}}/img/user2.png" alt="avatar"  class="icon__user" id="avatarOne">
                                        <span class="please__txt"> Upload passport </span>
                                    </div>
                                    <div class="uploadAvatar">
                                        <input type="file" class="lg__control" id="inputFileOne"  name="passport_image"  onchange="readUrlOne(this)">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" id="save-form-btn" class="main__btn search__btn hvr-bounce-to-right mxST_auto mbTop_10"> register </button>
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
<script src="{{asset('Front/assets')}}/js/popper.min.js"></script>
<script src="{{asset('Front/assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('Front/assets')}}/js/main.js"></script>
<script src="{{asset('Front/assets')}}/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script>
    var avatarOne = document.getElementById('avatarOne');
    function readUrlOne(input1) {
        if(input1.files) {
            var reader1 = new FileReader();
            reader1.readAsDataURL(input1.files[0]);
            reader1.onload= function(e1){
                avatarOne.src = e1.target.result;
            }
        }
    }
    var inputFileOne = document.getElementById("inputFileOne");
    function removeImg1() {
        avatarOne.src= "{{asset('Front/assets')}}/img/user2.png";
        inputFileOne.value= "";
    }


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





{{--<!doctype html>--}}
{{--<html lang="en" dir="ltr">--}}
{{--@include('Front.layouts.head')--}}
{{--<body>--}}
{{--<!--start loader section-->--}}
{{--<div class="loader-container" id="loader-container">--}}
{{--    <div class="loader">--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--        <span></span>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<!--start main section-->--}}
{{--<section class="register_section register_bkOne">--}}
{{--    <div class="container pxLG-0">--}}
{{--        @include('Front.layouts.parts.alert')--}}

{{--        <div class="row">--}}
{{--            <div class="col-12 col-xl-9">--}}
{{--                <div class="about_desWrap whiteBK_RGstWrap">--}}
{{--                    <span class="smOffer myFlex__center"> register </span>--}}
{{--                    <h3> <span> welcome </span> to samaha services </h3>--}}
{{--                        <form  class="contactUs__form" action="{{route('front.services-register')}}" method="post" id="submitted-form"--}}
{{--                              enctype="multipart/form-data">--}}
{{--                            @csrf--}}
{{--                        <div class="Cform__row">--}}
{{--                            <div class="col-12 col-xl-6">--}}
{{--                                <input type="text" class="contact__input" name="full_name"  value="{{ old('full_name') }}" placeholder=" your full name">--}}
{{--                                @error('full_name')<span style="color: #e81414;">{{ $message }}</span>@enderror--}}
{{--                            </div>--}}

{{--                            <div class="col-12 col-xl-6">--}}
{{--                                <input type="email" class="contact__input" name="email"  value="{{ old('email') }}" placeholder=" email address" required>--}}
{{--                                @error('email')<span style="color: #e81414;">{{ $message }}</span>@enderror--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-xl-6">--}}
{{--                                <input type="text" class="contact__input" maxlength="14" name="mobile"  value="{{ old('mobile') }}" placeholder=" phone number" required>--}}
{{--                                @error('mobile')<span style="color: #e81414;">{{ $message }}</span>@enderror--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-xl-6">--}}
{{--                                <select class="form-select form-control contact__input nice-select" name="nationality_id"--}}
{{--                                        aria-label="Default select example">--}}
{{--                                    <option selected disabled> {{ trans('back.nationality.nationalities')}}</option>--}}
{{--                                    @foreach ($nationalities as $nationality)--}}
{{--                                        <option--}}
{{--                                            value="{{ $nationality->id }}"> {{ $nationality->$name }} </option>--}}
{{--                                    @endforeach--}}
{{--                                    @error('nationality_id')<span style="color: #e81414;">{{ $message }}</span>@enderror--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-lg-6">--}}
{{--                                <div class="upload__group">--}}
{{--                                        <span class="remove__img remove__cvFile">--}}
{{--                                            <img src="img/close.png" alt="" class="img-fluid">--}}
{{--                                        </span>--}}
{{--                                    <div class="custom-file">--}}
{{--                                        <input type="file" class="custom-file-input" id="inptGrp1" name="passport_image">--}}
{{--                                        <label class="custom-file-label" for="inptGrp1" aria-describedby="inputGFileAdd1"> Upload passport </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-xl-6">--}}
{{--                                <input type="password" class="contact__input" name="password" placeholder=" password" required>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-xl-6">--}}
{{--                                <input type="password" class="contact__input" name="password_confirmation" placeholder=" password" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button type="submit" id="save-form-btn" class="main__btn search__btn hvr-bounce-to-right mxST_auto mbTop_10"> register </button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--@include('Front.layouts.legal.footer')--}}
{{--@include('Front.layouts.script')--}}

{{--<script src="{{asset('Front/assets')}}/js/jquery-3.2.1.min.js"></script>--}}
{{--<script src="{{asset('Front/assets')}}/js/slick.min.js"></script>--}}
{{--<script src="{{asset('Front/assets')}}/js/jquery.fancybox.min.js"></script>--}}
{{--<script src="{{asset('Front/assets')}}/js/popper.min.js"></script>--}}
{{--<script src="{{asset('Front/assets')}}/js/bootstrap.min.js"></script>--}}
{{--<script src="{{asset('Front/assets')}}/js/main.js"></script>--}}
{{--<script src="{{asset('Front/assets')}}/js/wow.min.js"></script>--}}
{{--<script>--}}
{{--    new WOW().init();--}}
{{--</script>--}}

{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>--}}
{{--    <script>--}}
{{--        $(".custom-file-input").on("change", function() {--}}
{{--            $(this).parents('.upload__group').find('.input-group-append').fadeOut();--}}
{{--            $(this).parents('.upload__group').find('.remove__img').fadeIn();--}}
{{--            var fileName = $(this).val().split("\\").pop();--}}
{{--            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);--}}
{{--            if ($(this).val() == '') {--}}
{{--                $(this).siblings(".custom-file-label").removeClass("selected").html('Upload files here');--}}
{{--                $(".custom-file-input").parents('.upload__group').find('.remove__img').fadeOut();--}}
{{--            }--}}
{{--        });--}}

{{--        $(".remove__cvFile").on('click', function() {--}}
{{--            $(this).fadeOut();--}}
{{--            $(this).siblings(".custom-file").find(".custom-file-label").html('Upload files here');--}}

{{--        });--}}
{{--    </script>--}}
{{--</body>--}}
{{--</html>--}}
