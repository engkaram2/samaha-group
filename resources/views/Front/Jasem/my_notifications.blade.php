@extends('Front.layouts.jasem.master')
@section('title', trans('back.notifications'))
@section('style')
@stop
{{--@include('front.layouts.splash')--}}
@section('content')
{{--    @include('front.layouts.parts.alert')--}}

<!--start main section-->
<section class="LegalsrVices_section">
    <div class="welcome_section bdBttm_md">
        <div class="container welcmInner_container pxLG-0">
            <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> notifications </h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('front.jasem-home')}}">Jasem samaha > </a></li>
                <li class="breadcrumb-item active" aria-current="page"> notifications </li>
            </ol>
        </div>
    </div>
</section>

<!--start midPadding section-->
<section class="midPadding_section ">
    <div class="container pxLG-0">

        @if($_notifications->count() > 0)
            @foreach($_notifications as $notification)
                <div class="notiFic__Card">
                    <div class="notiFic__Thumb">
                        <img src="{{asset('Front/assets')}}/img/profile.png" alt="" class="notiFic_img">
                        <img src="{{asset('Front/assets')}}/img/tickcircle.png" alt="" class="chick_noti">
                    </div>
                    <div class="notiFic__content">
                        <a href="{{route('front.jasem-notification-details',$notification->id)}}">
                            <h5> {{$notification->title}}</h5></a>

                        {{--                <p>  <a href="{{$notification->text}}" target="_blank">{{$notification->text}}</a> </p>--}}
                        {{--                <p> {{$notification->text}} </p>--}}
                    </div>
                    <span class="notif_date">{{$notification->created_at->diffForHumans()}} </span>
                </div>
            @endforeach
        @else
            <div style="text-align: center;"><p>{{trans('back.messages.you_dont_have_notifications_yet')}}</p></div>
        @endif
    </div>
</section>
@stop
@push('scripts')@endpush
