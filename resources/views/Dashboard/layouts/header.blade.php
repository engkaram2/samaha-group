<!-- Page header -->
<div class="page-header page-header-default">
    <div class="page-header-content" style="background: #b0b0b0;">
        <div class="page-title"dir="{{ direction() }}">
            <div class="row"  style="height:60px;">
                <div class="col-6">
                    <h3 style="display: inline;"style="color: black;">
                        <i class="icon-arrow-right6 position-left"></i>
                        <span class="text-bold">@lang('back.Dashboard')</span>
                    </h3>
                    <div class="image_head " style="display: inline">
                        @yield('logo')
                    </div>
                </div>
                <br>
                <div class="col-6"style="float: {{ floating('left', 'right') }}; margin-top: -90px;">
                    <div class="clock">
                        <div id="Date"></div>
                        <ul>
                            <li id="hours"></li>
                            <li id="point">:</li>
                            <li id="min"></li>
                            <li id="point">:</li>
                            <li id="sec"></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="page-header page-header-default">
        @yield('breadcrumb')
    </div>

</div>
<!-- /page header -->
