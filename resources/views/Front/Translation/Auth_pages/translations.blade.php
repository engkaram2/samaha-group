@extends('Front.layouts.translation.master')
@section('title', trans('back.translations'))

@section('content')
    <!--start main section-->
    <section class="LegalsrVices_section">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> my
                    profile </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.translation-home')}}">samaha translation > </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> profile</li>
                </ol>
            </div>
        </div>
    </section>
    <div class="editPro_wrap">
        <div class="container pxLG-0">
            <div class="editPro_ulist">
                <a href="{{route('front.translation-profile')}}" class="editLink"> edit profile </a>
                <a href="{{route('front.translation-translations')}}" class="editLink activeLink"> my_translations </a>
            </div>
        </div>
    </div>
    <!--start issues section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap">
                <span class="smOffer myFlex__center"> my issues </span>
                <h4> translation data </h4>
            </div>
            @if($my_translations->count() > 0)
                <div class="row issData_row">
                    @foreach($my_translations as $translation)
                        <div class="col-12 col-md-6 col-lg-4">
                            <a href="{{$translation->id}}" data-toggle="modal"
                               data-target="#issueModal-{{$translation->id}}" class="issuDt__card">
                                {{--                        status:   <p>{{$translation->status}} </p>--}}
                                @if($translation->file_translation == 'NULL')
                                    <p class="badge badge-warning">{{ trans('back.translation.not_translate') }}</p>
                                @else
                                    <p class="badge badge-primary">{{ trans('back.translation.translate') }}</p>
                                @endif
                                {{$translation->$name}}
                            </a>
                        </div>
                        <!-- help modal-->
                        <div class="modal loginModal fade" id="issueModal-{{$translation->id}}" tabindex="-1"
                             role="dialog" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body appointModal__body">
                                        <button type="button" class="close__modal" data-dismiss="modal"
                                                aria-label="Close">
                                            <i class="fa-solid fa-xmark"></i>
                                        </button>
                                        <div class="about_desWrap">
                                            <form action="">
                                                <span class="smOffer myFlex__center"> translation file </span>
                                                <h3> file data </h3>
                                                <div class="Cform__row">
                                                    <div class="col-12 col-lg-6">
                                                        <a href="{{route('translation-view-file',$translation->id)}}" target="_blank">

                                                            <div class="upload__group">
                                                                <img src="{{asset('Front/assets')}}/img/pdf.svg" alt="" class="pdf_abs">
                                                            </div>
                                                        </a>
                                                    </div>

                                                </div>
                                                <h3> file translation </h3>
                                                <div class="Cform__row">
                                                    <div class="col-12 col-lg-6">
                                                        <a href="{{route('translation-view-file-translation',$translation->id)}}" target="_blank">

                                                            <div class="upload__group">
                                                                <img src="{{asset('Front/assets')}}/img/pdf.svg" alt=""
                                                                     class="pdf_abs">
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div style="text-align: center;"><p> @lang('back.no_data_yet') </p></div>
            @endif
        </div>
    </section>
    <!--start meetings section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> appointments </span>
                <h3><span> my </span> meetings </h3>
            </div>
            <div class="row">
                @foreach($my_appointments as $meeting)
                    {{--                @foreach($user->meetings()->get() as $meeting)--}}
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="meetingS__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100"
                             data-wow-delay="0.2s">
                            <div class="meetingS_thumb">
                                <div
                                    class="mtngS__Stuts  {{ $meeting->appointment_type =='online'? ' mtOnline__Stuts':'' }} myFlex__center "> {{ $meeting->appointment_type }} </div>

                                {{--                            <div class="mtngS__Stuts myFlex__center"> {{ $meeting->appointment_type }} </div>--}}

                                @if($meeting->appointment_type =='online')
                                    <img src="{{asset('Front/assets')}}/img/mt1.png" alt="">
                                @else
                                    <img src="{{asset('Front/assets')}}/img/mt2.png" alt="">
                                @endif
                            </div>
                            <div class="meetingS_content">
                                <div class="meetingS-wrap mbTm_26">
                                    <div class="newsC_desPan mbTm_15">
                                        <i class="icon-calendar"></i>
                                        <span> {{ $meeting->date }} </span>
                                    </div>
                                    <div class="newsC_desPan">
                                        <i class="fa-solid fa-user"></i>
                                        <span> {{ $meeting->type }} </span>
                                    </div>
                                </div>
                                <a href="#" class="newsCard_title mb-0"> {{ $meeting->problem }} </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@stop
@push('scripts')@endpush
