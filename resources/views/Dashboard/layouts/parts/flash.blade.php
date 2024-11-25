<?php
	$messagesCount = 0;
	foreach (Session::all() as $key => $value) {
		if(strpos($key, 'message') !== false) $messagesCount ++;
	}
?>

@if(Session::has('message'))

    <div class="alert  alert alert-success alert-styled-left alert-arrow-left alert-bordered " style="margin: 0 50px;">
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
        <span class="text-semibold">Well done!</span>{{ Session::get('message') }}
    </div>

@endif

@if ($errors->first() || Session::has('custErrors'))

	<div class="alert alert-danger  alert-bordered alert-styled-left alert-bordered">
			<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">{{ __('titles.close')}}</span></button>
			<p>{{ trans('back.validation-error')}}.</p>
    </div>
@endif
{{--<div id="ajax-messages"></div>--}}
