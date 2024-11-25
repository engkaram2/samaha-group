
    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-12">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">{{ trans('back.settings.conditions_app_settings') }}</h5>
                        </div>
                        <br>
                        <div class="card-body">
                            <form action="{{ route('translation_settings.update') }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-3"
                                           style="float: {{ floating('right','left') }}">{{ trans('back.settings.conditions_terms_ar') }}
                                        :</label>
                                    <div class="col-lg-9">
                                        <textarea rows="5" cols="5" name="conditions_terms_ar" class="  form-control "
                                                  placeholder="{{ trans('back.settings.conditions_terms_ar') }}">{{translationsettings('conditions_terms_ar') }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label
                                        class="col-form-label col-lg-3"
                                        style="float: {{ floating('right','left') }}">{{ trans('back.settings.conditions_terms_en') }}
                                        :</label>
                                    <div class="col-lg-9">
                                                <textarea rows="5" cols="5" name="conditions_terms_en"
                                                          class="form-control"
                                                          placeholder="{{ trans('back.settings.conditions_terms_en') }}">{{translationsettings('conditions_terms_en') }}
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


{{--    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">--}}
{{--        <div class="panel-heading">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <!-- Basic layout-->--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header header-elements-inline">--}}
{{--                            <h5 class="card-title">{{ trans('back.settings.privacy') }}</h5>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <div class="card-body">--}}
{{--                            <form action="{{ route('translation_settings.update') }}" method="POST">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                {{ method_field('PUT') }}--}}
{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-form-label col-lg-3"--}}
{{--                                           style="float: {{ floating('right','left') }}">{{ trans('back.settings.privacy_ar') }}--}}
{{--                                        :</label>--}}
{{--                                    <div class="col-lg-9">--}}
{{--                                        <textarea rows="5" cols="5" name="privacy_ar" class="  form-control "--}}
{{--                                                  placeholder="{{ trans('back.settings.privacy_ar') }}">{{translationsettings('privacy_ar') }}--}}
{{--                                        </textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <label--}}
{{--                                        class="col-form-label col-lg-3"--}}
{{--                                        style="float: {{ floating('right','left') }}">{{ trans('back.settings.privacy_en') }}--}}
{{--                                        :</label>--}}
{{--                                    <div class="col-lg-9">--}}
{{--                                                <textarea rows="5" cols="5" name="privacy_en"--}}
{{--                                                          class="form-control"--}}
{{--                                                          placeholder="{{ trans('back.settings.privacy_en') }}">{{translationsettings('privacy_en') }}--}}
{{--                                                </textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <legend class="font-weight-semibold text-uppercase font-size-sm"></legend>--}}
{{--                                <div class="text-right">--}}
{{--                                    <button type="submit" class="btn btn-success"><i--}}
{{--                                            class="icon-paperplane mr-2"></i>{{ trans('back.buttons.submit_back_to_list') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /basic layout -->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
