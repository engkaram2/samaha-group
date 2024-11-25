@extends('Front.layouts.legal.master')
@section('title', trans('back.legal.notification_details'))
@section('style')
@stop
{{--@include('front.layouts.splash')--}}
@section('content')
    {{--    @include('front.layouts.parts.alert')--}}

    <!--start main section-->
    <section class="LegalsrVices_section">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s">
                    notifications </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">samaha legal > </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> notifications</li>
                </ol>
            </div>
        </div>
    </section>

    <!--start midPadding section-->
    <section class="midPadding_section ">
        <div class="container pxLG-0">
            <div class="notiFic__Card">
                <div class="notiFic__Thumb">
                    <img src="{{asset('Front/assets')}}/img/profile.png" alt="" class="notiFic_img">
                    <img src="{{asset('Front/assets')}}/img/tickcircle.png" alt="" class="chick_noti">
                </div>
                <div class="notiFic__content">
                    <h5> {{$notification->title}}</h5>
                    @if($notification->is_link==1)
                        <p><a href="{{$notification->text}}" target="_blank">join now</a></p>
                    @else
                        <p> {{$notification->text}} </p>
                    @endif
                </div>
                <span class="notif_date">{{$notification->created_at->diffForHumans()}} </span>
            </div>

        </div>
    </section>
@stop
@push('scripts')@endpush
