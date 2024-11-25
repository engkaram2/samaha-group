<div class="row SearchNews_row">
    <div class="col-12 col-lg-7 col-xl-8 SearchNews_content">
        <div class="tab-content" id="allSearCH__tabs">
            <div class="curr__wrapper tab-pane fade in active show" role="tabpanel" id="search__tabeOne">
                @if($all_Services->count() > 0 )
                    <h3> all services</h3>
                    <div class="row">
                        @foreach($all_Services as  $service)
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <a href="#"
                                   class="practice__card hvr-rectangle-out wow bounceIn"
                                   data-wow-duration="1s" data-wow-offset="100">
                                    <div class="practice_thumb myFlex__center">
                                        <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                                    </div>
                                    <h3> {{ $service->$name }} </h3>
                                    <p> {{ $service->$quote }} </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
                <hr>
                @if($all_blogs->count() > 0 )
                    <h3> all blogs</h3>
                    <div class="row">
                        @foreach($all_blogs as  $blog)
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="ourNews__card">
                                    <div class="news_thumb">
                                        <img src="{{ $blog->ImagePath }}" alt="">
                                    </div>
                                    <div class="ourNews_content">
                                        <div class="newsFlex-wrap">
                                            <div class="newsC_desPan">
                                                <i class="icon-calendar"></i>
                                                <span> {{$blog->created_at->format('Y-m-d')}} </span>
                                            </div>
                                        </div>
                                        <a href="#" class="newsCard_title"> {{ $blog->$name }} </a>
                                        <p> {{ $blog->$quote }} </p>
                                        {{--                                                    <a href="#" class="read_more">--}}
                                        {{--                                                        <span> read more</span> <i class="fa-solid fa-arrow-right"></i> </a>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
            </div>
            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabetwo">
                <h3>legal services</h3>
                @if($legal_Services->count() > 0 )
                    <div class="row">
                        @foreach($legal_Services as  $service)
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <a href="#" class="practice__card hvr-rectangle-out wow bounceIn"
                                   data-wow-duration="1s" data-wow-offset="100">
                                    <div class="practice_thumb myFlex__center">
                                        <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                                    </div>
                                    <h3> {{ $service->$name }} </h3>
                                    <p> {{ $service->$quote }} </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
                <hr>
                <h3>legal blogs</h3>
                @if($legal_blogs->count() > 0 )
                    <div class="row">
                        @foreach($legal_blogs as  $blog)
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="ourNews__card">
                                    <div class="news_thumb">
                                        <img src="{{ $blog->ImagePath }}" alt="">
                                    </div>
                                    <div class="ourNews_content">
                                        <div class="newsFlex-wrap">
                                            <div class="newsC_desPan">
                                                <i class="icon-calendar"></i>
                                                <span> {{$blog->created_at->format('Y-m-d')}} </span>
                                            </div>
                                        </div>
                                        <a href="{{route('front.legal-news-details',$blog->id)}}"
                                           class="newsCard_title"> {{ $blog->$name }} </a>
                                        <p> {{ $blog->$quote }} </p>
                                        <a href="#" class="read_more">
                                            <span> read more</span> <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
            </div>
            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabethree">
                <h3>translation services</h3>
                @if($translation_Services->count() > 0 )
{{--                    <h3> all services</h3>--}}
                    <div class="row">
                        @foreach($translation_Services as  $service)
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <a href="#"
                                   class="practice__card hvr-rectangle-out wow bounceIn"
                                   data-wow-duration="1s" data-wow-offset="100">
                                    <div class="practice_thumb myFlex__center">
                                        <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                                    </div>
                                    <h3> {{ $service->$name }} </h3>
                                    <p> {{ $service->$quote }} </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
                <hr>
                <h3>translation blogs</h3>
                @if($translation_blogs->count() > 0 )
                    <div class="row">
                        @foreach($translation_blogs as  $blog)
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="ourNews__card">
                                    <div class="news_thumb">
                                        <img src="{{ $blog->ImagePath }}" alt="">
                                    </div>
                                    <div class="ourNews_content">
                                        <div class="newsFlex-wrap">
                                            <div class="newsC_desPan">
                                                <i class="icon-calendar"></i>
                                                <span> {{$blog->created_at->format('Y-m-d')}} </span>
                                            </div>
                                        </div>
                                        <a href="{{route('front.translation-news-details',$blog->id)}}"
                                           class="newsCard_title"> {{ $blog->$name }} </a>
                                        <p> {{ $blog->$quote }} </p>
                                        <a href="#" class="read_more">
                                            <span> read more</span> <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
            </div>
            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabefour">
                <h3>services services</h3>
                @if($services_Services->count() > 0 )
{{--                    <h3> all services</h3>--}}
                    <div class="row">
                        @foreach($services_Services as  $service)
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <a href="#"
                                   class="practice__card hvr-rectangle-out wow bounceIn"
                                   data-wow-duration="1s" data-wow-offset="100">
                                    <div class="practice_thumb myFlex__center">
                                        <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                                    </div>
                                    <h3> {{ $service->$name }} </h3>
                                    <p> {{ $service->$quote }} </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
                <hr>
                <h3>services blogs</h3>
                @if($services_blogs->count() > 0 )
                    <div class="row">
                        @foreach($services_blogs as  $blog)
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="ourNews__card">
                                    <div class="news_thumb">
                                        <img src="{{ $blog->ImagePath }}" alt="">
                                    </div>
                                    <div class="ourNews_content">
                                        <div class="newsFlex-wrap">
                                            <div class="newsC_desPan">
                                                <i class="icon-calendar"></i>
                                                <span> {{$blog->created_at->format('Y-m-d')}} </span>
                                            </div>
                                        </div>
                                        <a href="{{route('front.services-news-details',$blog->id)}}"
                                           class="newsCard_title"> {{ $blog->$name }} </a>
                                        <p> {{ $blog->$quote }} </p>
                                        <a href="#" class="read_more">
                                            <span> read more</span> <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
            </div>
            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabefive">
                <h3>shaaban services</h3>
                @if($shaaban_Services->count() > 0 )
{{--                    <h3> all services</h3>--}}
                    <div class="row">
                        @foreach($shaaban_Services as  $service)
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <a href="#"
                                   class="practice__card hvr-rectangle-out wow bounceIn"
                                   data-wow-duration="1s" data-wow-offset="100">
                                    <div class="practice_thumb myFlex__center">
                                        <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                                    </div>
                                    <h3> {{ $service->$name }} </h3>
                                    <p> {{ $service->$quote }} </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
                <hr>
                <h3>shaaban blogs</h3>
                @if($shaaban_blogs->count() > 0 )
                    <div class="row">
                        @foreach($shaaban_blogs as  $blog)
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <div class="ourNews__card">
                                    <div class="news_thumb">
                                        <img src="{{ $blog->ImagePath }}" alt="">
                                    </div>
                                    <div class="ourNews_content">
                                        <div class="newsFlex-wrap">
                                            <div class="newsC_desPan">
                                                <i class="icon-calendar"></i>
                                                <span> {{$blog->created_at->format('Y-m-d')}} </span>
                                            </div>
                                        </div>
                                        <a href="{{route('front.translation-news-details',$blog->id)}}"
                                           class="newsCard_title"> {{ $blog->$name }} </a>
                                        <p> {{ $blog->$quote }} </p>
                                        <a href="#" class="read_more">
                                            <span> read more</span> <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
            </div>
            <div class="curr__wrapper tab-pane fade" role="tabpanel" id="search__tabesixth">
                <h3>jasem services</h3>
                @if($jasem_Services->count() > 0 )
                    <h3> all services</h3>
                    <div class="row">
                        @foreach($jasem_Services as  $service)
                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                <a href="#"
                                   class="practice__card hvr-rectangle-out wow bounceIn"
                                   data-wow-duration="1s" data-wow-offset="100">
                                    <div class="practice_thumb myFlex__center">
                                        <img src="{{ $service->IconPath }}" alt="" class="prct_thImg">
                                    </div>
                                    <h3> {{ $service->$name }} </h3>
                                    <p> {{ $service->$quote }} </p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div style="text-align: center;"><p> Your search did not match any results</p></div>
                @endif
                <hr>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-5 col-xl-4 SearchNews_side">
        <div class="privacy_Sidebar">
            <h3 class="newsBar_title"> Categories </h3>
            <h5 class="privCol_subTitle"> Filter </h5>
            <ul class="searchbar__list nav nav-pills searchTab__pills">
                <li class="nav-item">
                    <a href="#search__tabeOne" class="searchbar_link nav-link active" data-toggle="tab">
                        <img src="{{asset('Front/assets')}}/img/news1.svg" alt="" class="searchbar_icon">
                        <span> All categories </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#search__tabetwo" class="searchbar_link nav-link" data-toggle="tab">
                        <img src="{{asset('Front/assets')}}/img/news2.svg" alt="" class="searchbar_icon">
                        <span> Samaha Legal </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#search__tabethree" class="searchbar_link nav-link" data-toggle="tab">
                        <img src="{{asset('Front/assets')}}/img/news6.svg" alt="" class="searchbar_icon">
                        <span> samaha  translation  </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#search__tabefour" class="searchbar_link nav-link" data-toggle="tab">
                        <img src="{{asset('Front/assets')}}/img/news4.svg" alt="" class="searchbar_icon">
                        <span>  samaha services</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#search__tabefive" class="searchbar_link nav-link" data-toggle="tab">
                        <img src="{{asset('Front/assets')}}/img/news3.svg" alt="" class="searchbar_icon">
                        <span>  shaaban samaha </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#search__tabesixth" class="searchbar_link nav-link" data-toggle="tab">
                        <img src="{{asset('Front/assets')}}/img/news5.svg" alt="" class="searchbar_icon">
                        <span>jassem Samaha </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
