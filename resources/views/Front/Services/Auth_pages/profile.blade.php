<!doctype html>
<html lang="en" dir="ltr">
@include('Front.layouts.head')
{{--    <style>--}}
{{--        header { background-color: rgba(45, 107, 169, 1);}--}}
{{--    </style>--}}

<body>
@include('Front.layouts.services.nav')

<!--start main section-->
<section class="LegalsrVices_section">
    <div class="welcome_section bdBttm_md">
        <div class="container welcmInner_container pxLG-0">
            <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> my
                profile </h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('front.services-home')}}">samaha services > </a></li>
                <li class="breadcrumb-item active" aria-current="page"> profile</li>
            </ol>
        </div>
    </div>
</section>

<div class="editPro_wrap">
    <div class="container pxLG-0">
        <div class="editPro_ulist">
            <a href="" class="editLink activeLink"> edit profile </a>
            <a href="{{route('front.services-issues')}}" class="editLink "> issues </a>
        </div>
    </div>
</div>

<!--start contact section-->
<section class="contact_section secPadding">
    <div class="container pxLG-0">
        <div class="about_desWrap">
            <span class="smOffer myFlex__center"> profile </span>
            <h3><span> edit </span> profile </h3>
        </div>
        <form action="{{ route('front.services-edit-profile', $user->id) }}" method="POST" class="profile__form"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="Cform__row">
                <div class="col-12 col-xl-6">
                    <input type="text" class="contact__input"   value="{{ $user->full_name }}" name="full_name" value=" {{$user->full_name}} ">
                </div>
                {{--                <div class="col-12 col-xl-6">--}}
                {{--                    <input type="text" class="contact__input"   value="{{ $user->name_ar }}" name="" placeholder=" ahmed ">--}}
                {{--                </div>--}}
                <div class="col-12 col-xl-6">
                    <input type="email" class="contact__input"   value="{{ $user->email }}" name="email" placeholder="{{$user->email}}">
                </div>
                <div class="col-12 col-xl-6">
                    <input type="text" class="contact__input"   value="{{ $user->mobile }}" name="mobile" placeholder=" {{$user->mobile}} ">
                </div>
                <div class="col-12 col-xl-6">
                    password    <input type="password" class="contact__input"   name="password" placeholder=" ......... ">
                </div>
                <div class="col-12 col-xl-6">
                    password_confirmation  <input type="password" class="contact__input"   value="{{ $user->password_confirmation }}" name="password_confirmation" placeholder=" ........ ">
                </div>
                {{--                <div class="col-12">--}}
                {{--                    <textarea class="contact__input" placeholder=" address "></textarea>--}}
                {{--                </div>--}}
            </div>
            <button type="submit" class="main__btn search__btn hvr-bounce-to-right mbTop_10"> confirm</button>
        </form>
    </div>
</section>
@include('Front.layouts.services.footer')
@include('Front.layouts.script')
</body>
</html>
