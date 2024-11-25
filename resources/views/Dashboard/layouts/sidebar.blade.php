<ul class="navigation navigation-main navigation-accordion">

    <!-- Main -->
    <li class="active">
        @if(auth()->guard('admin')->user()->type=='legal')
            <a href="{{route('admin.legal_home')}}">
                <i class="icon-home4"></i>
                <span>{{ trans('back.home') }}</span>
            </a>
        @elseif(auth()->guard('admin')->user()->type=='translation')
            <a href="{{route('admin.translation_home')}}">
                <i class="icon-home4"></i>
                <span>{{ trans('back.home') }}</span>
            </a>
        @elseif(auth()->guard('admin')->user()->type=='services')
            <a href="{{route('admin.services_home')}}">
                <i class="icon-home4"></i>
                <span>{{ trans('back.home') }}</span>
            </a>
        @elseif(auth()->guard('admin')->user()->type=='jasem')
            <a href="{{route('admin.jasem_home')}}">
                <i class="icon-home4"></i>
                <span>{{ trans('back.home') }}</span>
            </a>
        @else
            <a href="{{route('admin.shaaban_home')}}">
                <i class="icon-home4"></i>
                <span>{{ trans('back.home') }}</span>
            </a>
        @endif
    </li>


    <li class="navigation-header"><span style="color: white;font-size: large;">{{ trans('back.users_section') }}</span>
        <i class="icon-menu" title="Main pages"></i></li>

    @if((auth()->guard('admin')->user()->type ==='legal') || (auth()->guard('admin')->user()->type ==='translation') || (auth()->guard('admin')->user()->type ==='services'))

            <li class="nav-item">
                <a href="#"><i class="icon-users2"></i>
                    <span> {{ trans('back.team.teams') }} </span></a>
                <ul>
                    <li><a href="{{route('teams.index')}}">{{ trans('back.all') }}</a></li>
                    <li><a href="{{route('teams.create')}}">{{ trans('back.add') }}</a></li>
                </ul>
            </li>
    @endif





    @if(auth()->guard('admin')->user()->type=='legal')

        <li class="nav-item">
            <a href="#"><i class="icon-users2"></i>
                <span> {{ trans('back.user.users') }} </span></a>
            <ul>
                <li><a href="{{route('users.index')}}">{{ trans('back.all') }}</a></li>
                {{--            <li><a href="{{route('users.create')}}">{{ trans('back.add') }}</a></li>--}}
            </ul>
        </li>
    @endif
    <li class="nav-item">
        <a href="#"><i class="icon-people"></i>
            <span> {{ trans('back.review.reviews') }} </span></a>
        <ul>
            <li><a href="{{route('reviews.index')}}">{{ trans('back.all') }}</a></li>
            {{--                <li><a href="{{route('reviews.create')}}">{{ trans('back.add') }}</a></li>--}}
        </ul>
    </li>


    <li class="navigation-header"><span
            style="color: white;font-size: large;">{{ trans('back.service.section') }}</span> <i class="icon-menu"
                                                                                                 title="Main pages"></i>
    </li>
    <li>
        <a href="#"><i class="icon-archive"></i>
            <span> {{ trans('back.service.services') }} </span></a>
        <ul>
            <li><a href="{{route('services.index')}}">{{ trans('back.all') }}</a></li>
            <li><a href="{{route('services.create')}}"> {{ trans('back.add') }}</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#"><i class="icon-archive"></i>
            <span> {{ trans('back.slider.sliders') }} </span></a>
        <ul>
            <li><a href="{{route('sliders.index')}}">{{ trans('back.all') }}</a></li>
        </ul>
    </li>


    @if(auth()->guard('admin')->user()->type !='jasem')
    <li>
        <a href="#">
            <i class="icon-bookmark2"></i>
            <span>{{ trans('back.blog.blogs') }}</span></a>
        <ul>
            <li><a href="{{route('blogs.index')}}">{{ trans('back.all') }}</a></li>
            <li><a href="{{route('blogs.create')}}">{{ trans('back.add') }}</a></li>
        </ul>
    </li>
    @endif

    {{--        <li class="navigation-header"><span style="color: white;font-size: large;">{{ trans('back.course.section') }}</span> <i class="icon-menu" title="Main pages"></i></li>--}}
    @if((auth()->guard('admin')->user()->type ==='legal') || (auth()->guard('admin')->user()->type ==='translation'))

        <li class="navigation-header"><span
                style="color: white;font-size: large;">{{ trans('back.office.section') }}</span> <i class="icon-menu" title="Main pages"></i>
        </li>
        <li>
            <a href="#"><i class="icon-earth"></i>
                <span> {{ trans('back.office.offices') }} </span></a>
            <ul>
                <li><a href="{{route('countries.index')}}">{{ trans('back.country.countries') }}</a></li>
                <li><a href="{{route('cities.index')}}">{{ trans('back.city.cities') }}</a></li>

                <li><a href="{{route('offices.index')}}">{{ trans('back.office.offices') }} </a></li>
                {{--                <li><a href="{{route('offices.create')}}"> {{ trans('back.add') }}</a></li>--}}
            </ul>
        </li>
    @endif


{{--    @if(auth()->guard('admin')->user()->type=='translation')--}}

{{--        <li class="navigation-header"><span--}}
{{--                style="color: white;font-size: large;">{{ trans('back.office.section') }}</span> <i class="icon-menu" title="Main pages"></i>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#"><i class="icon-earth"></i>--}}
{{--                <span> {{ trans('back.office.offices') }} </span></a>--}}
{{--            <ul>--}}
{{--                <li><a href="{{route('countries.index')}}">{{ trans('back.country.countries') }}</a></li>--}}
{{--                <li><a href="{{route('cities.index')}}">{{ trans('back.city.cities') }}</a></li>--}}

{{--                <li><a href="{{route('offices.index')}}">{{ trans('back.office.offices') }} </a></li>--}}
{{--                --}}{{--                <li><a href="{{route('offices.create')}}"> {{ trans('back.add') }}</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--    @endif--}}


    @if(auth()->guard('admin')->user()->type!='translation')
        <li>
            <a href="#">
                <i class="icon-bookmark2"></i>
                <span>{{ trans('back.issue.issues') }}</span></a>
            <ul>
                <li><a href="{{route('issues.index')}}">{{ trans('back.all') }}</a></li>
            </ul>
        </li>
    @endif

    @if(auth()->guard('admin')->user()->type=='translation')
        <li>
            <a href="#"><i class="icon-file-check2"></i>
                <span> {{ trans('back.translation.translations') }} </span></a>
            <ul>
                <li><a href="{{route('translations.index')}}">{{ trans('back.all') }}</a></li>
                {{--                <li><a href="{{route('translations.create')}}"> {{ trans('back.add') }}</a></li>--}}
            </ul>
        </li>
    @endif


    <li class="navigation-header"><span style="color: white;font-size: large;">{{ trans('back.chat.section') }}</span>
        <i class="icon-menu" title="Main pages"></i></li>
    {{--        <li class="nav-item">--}}
    {{--            <a href="#"><i class="icon-bell-check"></i>--}}
    {{--                <span> {{ trans('back.notification.notifications') }} </span></a>--}}
    {{--            <ul>--}}
    {{--                <li><a href="">{{ trans('back.notification.send_to_all_users') }}</a></li>--}}
    {{--                <li><a href=""> {{ trans('back.notification.send_to_single_user') }}</a></li>--}}

    {{--            </ul>--}}
    {{--        </li>--}}

    <li class="nav-item">
        <a href="{{ route('contacts.index') }}"
           class="nav-link {{ request()->route()->getName() == 'dashboard.contact.index' ? 'active' : '' }}">
            <i class="icon-comment-discussion"></i> <span>{{ trans('back.contact.contacts') }}</span></a>
    </li>
    <li>
        <a href="#"><i class="icon-bookmark2"></i>
            <span> {{ trans('back.appointment.appointment_orders') }} </span></a>
        <ul>
            <li><a href="{{route('appointments.index')}}">{{ trans('back.appointment.office_appointments') }}</a></li>
            <li><a href="{{route('online_appointments')}}">{{ trans('back.appointment.online_appointments') }}</a></li>
            {{--            <li><a href="{{route('meetings.index')}}">{{ trans('back.appointment.create_zoom_meeting') }}</a></li>--}}
            {{--            <li><a href="{{route('agora_meetings.index')}}"> agora_meetings</a></li>--}}

        </ul>
    </li>
    @if(auth()->guard('admin')->user()->type=='legal')

        <li>
            <a href="#"><i class="icon-comment-discussion"></i>
                <span> {{ trans('back.chat.chats') }} </span></a>
            <ul>
                <li><a href="{{route('chats.index')}}">{{ trans('back.chat.chat') }}</a></li>
            </ul>
        </li>
    @endif
    {{--    <li>--}}
    {{--        <a href="#"><i class="icon-comment-discussion"></i>--}}
    {{--            <span> {{ trans('back.zoom.zoom_meetings') }} </span></a>--}}
    {{--        <ul>--}}
    {{--            <li><a href="{{route('online_appointments')}}">{{ trans('back.zoom.ended_zoom_meetings') }}</a></li>--}}
    {{--            <li><a href="{{route('online_appointments')}}">{{ trans('back.zoom.create_zoom_meeting') }}</a></li>--}}
    {{--        </ul>--}}
    {{--    </li>--}}


    <li class="navigation-header"><span
            style="color: white;font-size: large;">{{ trans('back.settings.section') }}</span>
    @if(auth()->guard('admin')->user()->type=='legal')

        <li>
            <a href="#"><i class="icon-earth"></i>
                <span> {{ trans('back.nationality.nationalities') }} </span></a>
            <ul>
                <li><a href="{{route('nationalities.index')}}">{{ trans('back.all') }}</a></li>
                <li><a href="{{route('nationalities.create')}}"> {{ trans('back.add') }}</a></li>
            </ul>
        </li>
    @endif
    <li>
        <a href="#"><i class="icon-people"></i>
            <span>{{ trans('back.activity.activities') }}</span></a>
        <ul>
            <li><a href="{{route('activities.index')}}">{{ trans('back.all') }}</a></li>
        </ul>
    </li>

    {{--    <li>--}}
    {{--        @inject('questions', 'App\Models\CommonQuestion')--}}
    {{--        <a href="{{ route('questions.index') }}"><i class="icon-list-unordered"></i>--}}
    {{--            <span >{{trans('back.question.questions')}}--}}
    {{--                <span class="label bg-blue-400">{{$questions->count()}}</span>--}}
    {{--            </span></a>--}}
    {{--    </li>--}}

    <li class="nav-item">
        @if(auth()->guard('admin')->user()->type=='legal')
            <a href="{{ route('legal_settings.index') }}"
               class="nav-link {{ request()->route()->getName() == 'dashboard.legal_setting.index' ? 'active' : '' }}"><i
                    class="icon-gear"></i><span>{{ trans('back.settings.settings') }}</span></a>

        @elseif(auth()->guard('admin')->user()->type=='translation')
            <a href="{{ route('translation_settings.index') }}"
               class="nav-link {{ request()->route()->getName() == 'dashboard.translation_settings.index' ? 'active' : '' }}"><i
                    class="icon-gear"></i><span>{{ trans('back.settings.settings') }}</span></a>

        @elseif(auth()->guard('admin')->user()->type=='services')
            <a href="{{ route('services_settings.index') }}"
               class="nav-link {{ request()->route()->getName() == 'dashboard.services_settings.index' ? 'active' : '' }}"><i
                    class="icon-gear"></i><span>{{ trans('back.settings.settings') }}</span></a>

        @elseif(auth()->guard('admin')->user()->type=='shaaban')
            <a href="{{ route('shaaban_settings.index') }}"
               class="nav-link {{ request()->route()->getName() == 'dashboard.shaaban_settings.index' ? 'active' : '' }}"><i
                    class="icon-gear"></i><span>{{ trans('back.settings.settings') }}</span></a>

        @elseif(auth()->guard('admin')->user()->type=='jasem')
            <a href="{{ route('jasem_settings.index') }}"
               class="nav-link {{ request()->route()->getName() == 'dashboard.jasem_settings.index' ? 'active' : '' }}"><i
                    class="icon-gear"></i><span>{{ trans('back.settings.settings') }}</span></a>
        @endif
    </li>


    @if(auth()->guard('admin')->user()->type=='legal')
        <li class="nav-item">
            <a href="{{ route('show-about-app') }}">
                <i class="icon-comment-discussion"></i> <span>{{ trans('back.settings.show-about-app') }}</span></a>
        </li>
    @endif



    <li class="nav-item">
        <a href="#"><i class="icon-archive"></i>
            <span> {{ trans('back.section.sections') }}  In App</span></a>
        <ul>
            <li><a href="{{route('sections.index')}}">{{ trans('back.all') }}</a></li>
        </ul>
    </li>

</ul>
