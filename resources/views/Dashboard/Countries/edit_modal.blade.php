<!--  modal -->
<div id="edit_country_{{$country->id}}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive content-group">

                    <!-- Basic layout-->
                    <form action="{{ route('countries.update',$country->id) }}"
                          class="form-horizontal" method="post" id="edit-submitted-form"
                          enctype="multipart/form-data">
                        @method('PUT')

                        @csrf
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title"></b>@lang('back.edit-var',['var'=>trans('back.country.country')])
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
                                    <input type="hidden" name="image_id" value="{{$country->id}}"/>

                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               value="{{$country->name_ar}}" name="name_ar"
                                               placeholder="@lang('back.name_ar') ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               value="{{$country->name_en}}" name="name_en"
                                               placeholder="@lang('back.name_en') ">
                                    </div>
                                </div>
                            </div>

                            <div class="text-right"
                                 style="padding-bottom: 10px; padding-left: 10px;">
                                <input type="submit" class="btn btn-primary" id="edit-save-form-btn"
                                       value=" {{ trans('back.update_and_forward_to_list') }} "/>
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
