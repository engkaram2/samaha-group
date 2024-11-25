<!-- legal_login modal -->
<div id="legal_login" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive content-group">
                    <!-- Form with validation -->
                    <form method="Post" action="{{route('admin.legal_login')}}" class="form-validate">
                        @csrf
                        <div class="panel panel-body login-form">
                            <input type="hidden" name="type" value="legal">
                            <div class="text-center mb-3">
                                <div class="icon-object" style="background-color: #eee8d5;">
                                    <img src="{{ asset('logo/samaha') }}/legal.png"
                                         style="width: 90px; height: 90px"></div>
                                <h5 class="mb-0">{{ trans('back.login') }}</h5>
                                <span class="d-block text-muted">لوحة تحكم موقع Samaha Legal </span>
                            </div>
                            <br>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="email" class="form-control" value="{{ old('email') }}"
                                       placeholder="@lang('back.email')"
                                       name="email" autocomplete="email" required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                        	<strong style="color: red;">{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control"
                                       placeholder="@lang('back.password')" name="password" autocomplete="password"
                                       required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                            <strong style="color: red;">{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>

                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                    </div>
                                    <a href="" class="ml-auto">{{ trans('back.forgot_password') }}</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"
                                        style="background-color: #1a294a;">{{ trans('back.login') }}
                                    <i class="{{app()->getLocale() == 'ar' ? 'icon-circle-left2' : 'icon-circle-right2'}} ml-2"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                    <!-- /form with validation -->

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-link btn-xs text-uppercase text-semibold" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /legal_login modal -->


<!-- translation_login modal -->
<div id="translation_login" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive content-group">
                    <!-- Form with validation -->
                    <form method="Post" action="{{route('admin.translation_login')}}" class="form-validate">
                        @csrf
                        <div class="panel panel-body login-form">
                            <input type="hidden" name="type" value="translation">

                            <div class="text-center mb-3">
                                <div class="icon-object" style="background-color: #eee8d5;">
                                    <img src="{{ asset('logo/samaha') }}/translation.png" style="width: 90px; height: 90px">
                                </div>
                                <h5 class="mb-0">{{ trans('back.login') }}</h5>
                                <span class="d-block text-muted">لوحة تحكم موقع Samaha translation </span>
                            </div>
                            <br>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="email" class="form-control" value="{{ old('email') }}"
                                       placeholder="@lang('back.email')"
                                       name="email" autocomplete="email" required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                        	<strong style="color: red;">{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control"
                                       placeholder="@lang('back.password')" name="password" autocomplete="password"
                                       required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                 <strong style="color: red;">{{ $message }}</strong>
                               </span>
                                @enderror
                            </div>

                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                    </div>
                                    <a href="" class="ml-auto">{{ trans('back.forgot_password') }}</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"
                                        style="background-color: #1a294a;">{{ trans('back.login') }}
                                    <i class="{{app()->getLocale() == 'ar' ? 'icon-circle-left2' : 'icon-circle-right2'}} ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- /form with validation -->

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-link btn-xs text-uppercase text-semibold" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /translation_login modal -->




<!-- services_login modal -->
<div id="services_login" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive content-group">
                    <!-- Form with validation -->
                    <form method="Post" action="{{route('admin.services_login')}}" class="form-validate">
                        @csrf
                        <div class="panel panel-body login-form">
                            <input type="hidden" name="type" value="services">

                            <div class="text-center mb-3">
                                <div class="icon-object" style="background-color: #eee8d5;">
                                    <img src="{{ asset('logo/samaha') }}/services.png" style="width: 90px; height: 90px">
                                </div>
                                <h5 class="mb-0">{{ trans('back.login') }}</h5>
                                <span class="d-block text-muted">لوحة تحكم موقع Samaha services </span>
                            </div>
                            <br>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="email" class="form-control" value="{{ old('email') }}"
                                       placeholder="@lang('back.email')"
                                       name="email" autocomplete="email" required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                        	<strong style="color: red;">{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control"
                                       placeholder="@lang('back.password')" name="password" autocomplete="password"
                                       required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                 <strong style="color: red;">{{ $message }}</strong>
                               </span>
                                @enderror
                            </div>

                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                    </div>
                                    <a href="" class="ml-auto">{{ trans('back.forgot_password') }}</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"
                                        style="background-color: #1a294a;">{{ trans('back.login') }}
                                    <i class="{{app()->getLocale() == 'ar' ? 'icon-circle-left2' : 'icon-circle-right2'}} ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- /form with validation -->

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-link btn-xs text-uppercase text-semibold" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /services_login modal -->




<!-- shaaban_login modal -->
<div id="shaaban_login" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive content-group">
                    <!-- Form with validation -->
                    <form method="Post" action="{{route('admin.shaaban_login')}}" class="form-validate">
                        @csrf
                        <div class="panel panel-body login-form">
                            <input type="hidden" name="type" value="shaaban">

                            <div class="text-center mb-3">
                                <div class="icon-object" style="background-color: #eee8d5;">
                                    <img src="{{ asset('logo/samaha') }}/shaaban.png" style="width: 90px; height: 90px">
                                </div>
                                <h5 class="mb-0">{{ trans('back.login') }}</h5>
                                <span class="d-block text-muted">لوحة تحكم موقع Samaha shaaban </span>
                            </div>
                            <br>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="email" class="form-control" value="{{ old('email') }}"
                                       placeholder="@lang('back.email')"
                                       name="email" autocomplete="email" required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                        	<strong style="color: red;">{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control"
                                       placeholder="@lang('back.password')" name="password" autocomplete="password"
                                       required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                 <strong style="color: red;">{{ $message }}</strong>
                               </span>
                                @enderror
                            </div>

                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                    </div>
                                    <a href="" class="ml-auto">{{ trans('back.forgot_password') }}</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"
                                        style="background-color: #1a294a;">{{ trans('back.login') }}
                                    <i class="{{app()->getLocale() == 'ar' ? 'icon-circle-left2' : 'icon-circle-right2'}} ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- /form with validation -->

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-link btn-xs text-uppercase text-semibold" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /shaaban_login modal -->



<!-- jasem_login modal -->
<div id="jasem_login" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive content-group">
                    <!-- Form with validation -->
                    <form method="Post" action="{{route('admin.jasem_login')}}" class="form-validate">
                        @csrf
                        <div class="panel panel-body login-form">
                            <input type="hidden" name="type" value="jasem">

                            <div class="text-center mb-3">
                                <div class="icon-object" style="background-color: #eee8d5;">
                                    <img src="{{ asset('logo/samaha') }}/jasem.png" style="width: 90px; height: 90px">
                                </div>
                                <h5 class="mb-0">{{ trans('back.login') }}</h5>
                                <span class="d-block text-muted">لوحة تحكم موقع Samaha jasem </span>
                            </div>
                            <br>
                            <div class="form-group has-feedback has-feedback-left">
                                <input type="email" class="form-control" value="{{ old('email') }}"
                                       placeholder="@lang('back.email')"
                                       name="email" autocomplete="email" required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                        	<strong style="color: red;">{{ $message }}</strong>
                        </span>
                                @enderror
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control"
                                       placeholder="@lang('back.password')" name="password" autocomplete="password"
                                       required="required">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                 <strong style="color: red;">{{ $message }}</strong>
                               </span>
                                @enderror
                            </div>

                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                    </div>
                                    <a href="" class="ml-auto">{{ trans('back.forgot_password') }}</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block"
                                        style="background-color: #1a294a;">{{ trans('back.login') }}
                                    <i class="{{app()->getLocale() == 'ar' ? 'icon-circle-left2' : 'icon-circle-right2'}} ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- /form with validation -->

                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-link btn-xs text-uppercase text-semibold" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /jasem_login modal -->




