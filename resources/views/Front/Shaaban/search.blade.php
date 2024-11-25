@extends('Front.layouts.shaaban.master')
@section('title', trans('back.search'))
@section('style')
    <style> header { background-color: rgba(45, 107, 169, 1);} </style>
@stop
@section('content')
    <br><br>
    <br><br>
    <!--start news section-->
    <section class="news_section secPadding">

        <div class="container pxLG-0">
            <form action="{{route('front.shaaban-search')}}" method="get" class="search__form">
                <div class="SForm__group mbTm_26">
                    <input type="search" class="SForm__input" placeholder="search" name="search_by_word" value="{{ old('search_by_word') }}" required>
                    <button type="submit" class="SForm__submit myFlex__center"><img
                            src="{{asset('Front/assets')}}/img/searsh2.svg" alt=""></button>
                </div>
            </form>
            @include('Front.layouts.Search.search')
        </div>
    </section>
@stop
@push('scripts')@endpush
