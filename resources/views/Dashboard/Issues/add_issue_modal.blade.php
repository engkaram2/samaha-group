<!--  modal -->
<div id="add_issue" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive content-group">

                    <!-- Basic layout-->
                    <form action="{{ route('issues.store') }}" class="form-horizontal" method="post"
                          id="submitted-form"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title">
                                    <i class="icon-plus2"></i></b>@lang('back.create-var',['var'=>trans('back.issue.issue')])
                                </h5>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>
                                        <li><a data-action="reload"></a></li>
                                        <li><a data-action="close"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="box-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="" name="issue_name"
                                               placeholder="@lang('back.issue.issue_name') " required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="" name="issue_number"
                                               placeholder="@lang('back.issue.issue_number') " required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="" name="status"
                                               placeholder="@lang('back.issue.status') " required>
                                    </div>

                                    <div class="form-group">
                                        <label
                                            class="col-lg-3 control-label display-block">{{ trans('back.team.team')}}</label>
                                        <div class="col-lg-9">
                                            <select name="team_id" data-placeholder="{{trans('back.select')}}"
                                                    class="select-size-lg">
                                                <option selected disabled>{{trans('back.select')}}</option>

                                                @foreach($teams as $team)
                                                    <option value="{{ $team->id }}"> {{ $team->full_name }} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label
                                            class="col-lg-3 control-label display-block">{{ trans('back.user.user')}}</label>
                                        <div class="col-lg-9">
                                            <select name="user_id" data-placeholder="{{trans('back.select')}}"
                                                    class="select-size-lg">
                                                <option selected disabled>{{trans('back.select')}}</option>

                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}"> {{ $user->full_name }} </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="" name="file_name"
                                               placeholder="@lang('back.issue.file_name') " required>
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label class="col-lg-3 control-label"><i--}}
{{--                                                class="icon-file-pdf"></i>{{ trans('back.file') }}</label>--}}
{{--                                        <div class="col-lg-9">--}}
{{--                                            <input type="file" class="form-control" name="file" required>--}}
{{--                                            <span class="label-text"></span>--}}
{{--                                            @error('cv') <span class="label-text"--}}
{{--                                                               style="color: #e81414;">{{ $message }}</span>@enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="form-group">
                                        <input type="file" class="file-input" name="file" required
                                               data-show-caption="false" data-show-upload="false"
                                               data-browse-class="btn btn-primary btn-lg"
                                               data-remove-class="btn btn-default btn-lg">
{{--                                        <span class="help-block"> file input button</span>--}}
                                        @error('file')<span
                                            style="color: #e81414;">{{ $message }}</span>@enderror
                                    </div>



                                </div>
                            </div>

                            <div class="text-right" style="padding-bottom: 10px; padding-left: 10px;">
                                <input type="submit" class="btn btn-primary" id="save-form-btn"
                                       value=" {{ trans('back.add_and_forward_to_list') }} "/>

                            </div>
                        </div>
                    </form>
                    <!-- /basic layout -->
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-link btn-xs text-uppercase text-semibold"
                            data-dismiss="modal">Close
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- / modal -->