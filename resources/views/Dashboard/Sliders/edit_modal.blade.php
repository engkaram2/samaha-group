<!--  modal -->
<div id="edit_slider_{{$slider->id}}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="table-responsive content-group">

                    <!-- Basic layout-->
                    <form action="{{ route('sliders.update',$slider->id) }}"
                          class="form-horizontal" method="post" id="edit-submitted-form"
                          enctype="multipart/form-data">
                        @method('PUT')

                        @csrf
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title"></b>@lang('back.edit-var',['var'=>trans('back.slider.slider')])
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
                                    <input type="hidden" name="image_id" value="{{$slider->id}}"/>

                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               value="{{$slider->name_ar}}" name="name_ar"
                                               placeholder="@lang('back.name_ar') ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               value="{{$slider->name_en}}" name="name_en"
                                               placeholder="@lang('back.name_en') ">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               value="{{$slider->quote_ar}}" name="quote_ar"
                                               placeholder="@lang('back.quote_ar') ">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                               value="{{$slider->quote_en}}" name="quote_en"
                                               placeholder="@lang('back.quote_en') ">
                                    </div>

                                    <div class="form-group">
                                        <label>@lang('back.slider.image')</label>
                                        <input type="file" class="form-control image " name="image">
                                    </div>
                                    <div class="form-group">
                                        <img src=" {{$slider->image_path}} " width=" 100px " value="{{$slider->image_path}}"
                                             class="thumbnail image-preview">
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
