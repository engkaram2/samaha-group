<div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <!-- Basic layout-->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">اعدادات من نحن تظهر في التطبيق فقط</h5>
                        {{--                            <h5 class="card-title">{{ trans('back.settings.about_app_settings') }}</h5>--}}
                    </div>
                    <br>
                    <div class="card-body">
                        <form action="{{ route('legal_settings.update') }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3"
                                       style="float: {{ floating('right','left') }}">{{ trans('back.about_app_ar') }}
                                    :</label>
                                <div class=" col-lg-9 ">
                                                <textarea rows="10" cols="10" name="about_app_ar" class="form-control"
                                                          placeholder="{{ trans('back.settings.about_app_ar') }}">{{legalsettings('about_app_ar') }}
                                                </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3"
                                       style="float: {{ floating('right','left') }}">{{ trans('back.about_app_en') }}
                                    :</label>
                                <div class=" col-lg-9">
{{--                                <div class=" col-lg-9 summernote">--}}
                                                <textarea rows="5" cols="5" name="about_app_en" class="form-control"
                                                          placeholder="{{ trans('back.settings.about_app_en') }}">{{legalsettings('about_app_en') }}
                                                </textarea>
                                </div>
                            </div>


                            <legend class="font-weight-semibold text-uppercase font-size-sm"></legend>
                            <div class="text-right">
                                <button type="submit" class="btn btn-success"><i
                                        class="icon-paperplane mr-2"></i>{{ trans('back.buttons.submit_back_to_list') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /basic layout -->
            </div>
        </div>
    </div>
</div>


{{--    <div class="row">--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">--}}
{{--                <div class="panel-heading">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <!-- Basic layout-->--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-header header-elements-inline">--}}
{{--                                    <h5 class="card-title">{{ trans('back.settings.short_description') }}</h5>--}}
{{--                                </div>--}}
{{--                                <br>--}}
{{--                                <div class="card-body">--}}
{{--                                    <form action="{{ route('legal_settings.update') }}" method="POST">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                        {{ method_field('PUT') }}--}}
{{--                                        <div class="form-group row">--}}
{{--                                            <label class="col-form-label col-lg-3"--}}
{{--                                                   style="float: {{ floating('right','left') }}">{{ trans('back.description_ar') }}--}}
{{--                                                :</label>--}}
{{--                                            <div class="col-lg-9">--}}
{{--                                                <textarea rows="5" cols="5" name="app_description_ar" class="form-control"--}}
{{--                                                          placeholder="{{ trans('back.settings.app_description_ar') }}">{{legalsettings('app_description_ar') }}--}}
{{--                                                </textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group row">--}}
{{--                                            <label class="col-form-label col-lg-3"--}}
{{--                                                   style="float: {{ floating('right','left') }}">{{ trans('back.description_en') }}--}}
{{--                                                :</label>--}}
{{--                                            <div class="col-lg-9">--}}
{{--                                                <textarea rows="5" cols="5" name="app_description_en" class="form-control"--}}
{{--                                                          placeholder="{{ trans('back.settings.app_description_en') }}">{{legalsettings('app_description_en') }}--}}
{{--                                                </textarea>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <legend class="font-weight-semibold text-uppercase font-size-sm"></legend>--}}
{{--                                        <div class="text-right">--}}
{{--                                            <button type="submit" class="btn btn-success"><i--}}
{{--                                                    class="icon-paperplane mr-2"></i>{{ trans('back.buttons.submit_back_to_list') }}--}}
{{--                                            </button>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <!-- /basic layout -->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
