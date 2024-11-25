@extends('Front.layouts.legal.master')
@section('title', trans('back.legal.services'))
@section('style')
@stop
@section('content')

    <!--start main section-->
    <section class="LegalsrVices_section">
        <div class="welcome_section bdBttm_md">
            <div class="container welcmInner_container pxLG-0">
                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> my profile </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('front.home')}}">samaha legal > </a></li>
                    <li class="breadcrumb-item active" aria-current="page"> profile </li>
                </ol>
            </div>
        </div>
    </section>

    <div class="editPro_wrap">
        <div class="container pxLG-0">
            <div class="editPro_ulist">
                <a href="{{route('front.legal-profile')}}" class="editLink"> edit profile </a>
                <a href="{{route('front.legal-issues')}}" class="editLink activeLink"> issues </a>
            </div>
        </div>
    </div>

    <!--start issues section-->
    <section class="greyBK_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap">
                <span class="smOffer myFlex__center"> my issues </span>
                <h4> issue data </h4>
            </div>
            <div class="row issData_row">
                @foreach($user->issues()->get() as $issue)
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="#" data-toggle="modal" data-target="#issueModal-{{$issue->id}}" class="issuDt__card">
                        <h3> {{$issue->issue_name}} </h3>
                        <p>{{$issue->status}} </p>
                    </a>
                </div>

                    <!-- help modal-->
                    <div class="modal loginModal fade" id="issueModal-{{$issue->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body appointModal__body">
                                    <button type="button" class="close__modal" data-dismiss="modal" aria-label="Close">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                    <div class="about_desWrap">
                                        <form action="">
                                            <span class="smOffer myFlex__center"> issue </span>
                                            <h3> issue data </h3>
                                            <div class="Cform__row">
                                                <div class="col-12 col-xl-6">
                                                    <input type="text" class="contact__input" placeholder=" {{$issue->issue_name}} ">
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <input type="text" class="contact__input" placeholder=" {{$issue->issue_number}}">
                                                </div>
                                                <div class="col-12 col-xl-6">
                                                    <input type="text" class="contact__input" placeholder=" {{$issue->status}}">
                                                </div>
                                            </div>
                                            <h3> issue files </h3>
                                            <div class="Cform__row">
                                                @foreach($issue->files as $file)
                                                <div class="col-12 col-lg-6">
                                                    <a href="{{route('legal-view',$file->id)}}" target="_blank">

                                                    <div class="upload__group">
{{--                                                        <div class="custom-file">--}}
{{--                                                            <input type="file" class="custom-file-input" id="inptGrp1">--}}
{{--                                                            <label class="custom-file-label" for="inptGrp1" aria-describedby="inputGFileAdd1"> Upload pdf </label>--}}
{{--                                                        </div>--}}
                                                            <img src="{{asset('Front/assets')}}/img/pdf.svg" alt="" class="pdf_abs">
                                                    </div>
                                                    </a>
                                                </div>
                                                @endforeach
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
{{--            <div class="about_desWrap">--}}
{{--                <span class="smOffer myFlex__center"> my translation </span>--}}
{{--                <h4> issue services </h4>--}}
{{--            </div>--}}
{{--            <form action="" class="search__form">--}}
{{--                <div class="SForm__group mbTm_26">--}}
{{--                    <input type="search" class="SForm__input" placeholder="search">--}}
{{--                    <button type="submit" class="SForm__submit myFlex__center"> <img src="{{asset('Front/assets')}}/img/searsh2.svg" alt=""> </button>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            <div class="issData_Services">--}}
{{--                <div class="issuDt__card">--}}
{{--                    <h3> translate file<sub class="colorOne">(samaha translation) </sub> </h3>--}}
{{--                    <p> Swift is a programming language for iOS, macOS, watchOS, and tvOS app development. </p>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </section>

    <!--start meetings section-->
    <section class="news_section secPadding">
        <div class="container pxLG-0">
            <div class="about_desWrap mbttom__60">
                <span class="smOffer myFlex__center"> appointments </span>
                <h3> <span> my </span> meetings </h3>
            </div>
            <div class="row">
                @foreach($user->meetings()->get() as $meeting)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="meetingS__card wow zoomInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="0.2s">
                        <div class="meetingS_thumb">
                            <div class="mtngS__Stuts  {{ $meeting->appointment_type =='online'? ' mtOnline__Stuts':'' }} myFlex__center "> {{ $meeting->appointment_type }} </div>

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
                            <a href="profile.html" class="newsCard_title mb-0"> {{ $meeting->problem }} </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>



@stop
@push('scripts')@endpush
