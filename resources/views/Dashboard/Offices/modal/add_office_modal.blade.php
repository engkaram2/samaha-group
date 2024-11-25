{{--<!--  modal -->--}}
{{--<div id="add_office" class="modal fade">--}}
{{--    <div class="modal-dialog">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <div class="table-responsive content-group">--}}

{{--                    <!-- Basic layout-->--}}
{{--                    <form action="{{ route('offices.store') }}" class="form-horizontal" method="post" id="submitted-form"--}}
{{--                          enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        <div class="panel panel-flat">--}}
{{--                            <div class="panel-heading">--}}
{{--                                <h5 class="panel-title">--}}
{{--                                    <i class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.office.office')])--}}
{{--                                </h5>--}}
{{--                                <div class="heading-elements">--}}
{{--                                    <ul class="icons-list">--}}
{{--                                        <li><a data-action="collapse"></a></li>--}}
{{--                                        <li><a data-action="reload"></a></li>--}}
{{--                                        <li><a data-action="close"></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="panel-body">--}}
{{--                                <div class="box-body">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" class="form-control" value="" name="name_ar"--}}
{{--                                               placeholder="@lang('back.name_ar') "required>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="text" class="form-control" value="" name="name_en"--}}
{{--                                               placeholder="@lang('back.name_en') "required>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label--}}
{{--                                            class="col-lg-3 control-label display-block">{{ trans('back.country.name')}}</label>--}}
{{--                                        <div class="col-lg-9">--}}
{{--                                            <select name="country_id" data-placeholder="{{trans('back.select')}}"--}}
{{--                                                    class="select-size-lg">--}}
{{--                                                <option selected disabled>{{trans('back.select')}}</option>--}}

{{--                                                @foreach($countries as $country)--}}
{{--                                                    <option value="{{ $country->id }}"> {{ $country->$name }} </option>--}}
{{--                                                @endforeach--}}

{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="text-right" style="padding-bottom: 10px; padding-left: 10px;">--}}
{{--                                <input type="submit" class="btn btn-primary" id="save-form-btn"--}}
{{--                                       value=" {{ trans('back.add_and_forward_to_list') }} "/>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                    <!-- /basic layout -->--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}

{{--                    <button type="button" class="btn btn-link btn-xs text-uppercase text-semibold"--}}
{{--                            data-dismiss="modal">Close--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- / modal -->--}}
