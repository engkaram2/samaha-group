<script>
    function sweet_delete(url, id)
    {
        $( "#row-"+ id ).css('background-color','#000000').css('color','white');
        swal({
            title: "{{ trans('back.confirm-delete-message-var', ['var' => trans('back.'.$model.'.'.$model)]) }}",

            {{--title: "{{ trans('dash.messages.deleted_msg_confirm') }}",--}}
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: url,
                        type: 'post',
                        data: {_method: 'delete', _token : '{{ csrf_token() }}' },
                        success: function (data) {
                            if(data['status'] == 'true'){
                                swal({
                                    {{--title: "{{ trans('back.confirm-delete-message-var', ['var' => trans('back.'.$model.'.'.$model)]) }}",--}}

                                    {{--title: "{{ trans('back.messages.deleted_successfully_title') }}",--}}
                                    text: data['message'],
                                    icon: "success",
                                });
                                $( "#row-" + id ).hide(1000);
                            }else{
                                swal({
                                    title: "{{ trans('back.messages.sorry') }}",
                                    text: data['message'],
                                    icon: "warning",
                                });
                                $("#row-" + id ).removeAttr('style');
                            }
                        }
                    });
                }else{
                    $( "#row-"+id ).removeAttr('style');
                }
            });
    }

</script>


{{--<script>--}}
{{--    let modelTable = '{{ str()->plural($model) }}';--}}
{{--    let currentModel = '{{ $model }}';--}}

{{--    $('a.delete-action').on('click', function (e) {--}}
{{--        var id = $(this).data('id');--}}
{{--        var tbody = $('table#'+modelTable+' tbody');--}}
{{--        var count = tbody.data('count');--}}

{{--        e.preventDefault();--}}
{{--        swal({--}}
{{--            title: "{{ trans('back.confirm-delete-message-var', ['var' => trans('back.'.$model.'.'.$model)]) }}",--}}
{{--            icon: "warning",--}}
{{--            buttons: true,--}}
{{--            dangerMode: true,--}}
{{--        })--}}
{{--            .then((willDelete) => {--}}
{{--                if (willDelete) {--}}
{{--                    var tbody = $('table#'+modelTable+' tbody');--}}
{{--                    var count = tbody.data('count');--}}

{{--                    $.ajax({--}}
{{--                        type: 'POST',--}}
{{--                        --}}{{--url: '{{ Url('dashboard/ajax-delete-' . $model) }}',--}}
{{--                        url: '{{ route('ajax-delete-' . $model) }}',--}}
{{--                        --}}{{--url: '{{ Url('/'.$model.'/'.$model.'/'.$model->id) }}',--}}
{{--                        --}}{{--url: '{{ route('categories.destroy',$category->id) }}',--}}
{{--                        data: {id: id},--}}
{{--                        success: function (response) {--}}
{{--                            if (response.deleteStatus) {--}}
{{--                                // $('#city-row-'+id).fadeOut(); count = count - 1;tbody.attr('data-count', count);--}}
{{--                                $('#'+currentModel+'-row-' + id).remove();--}}
{{--                                count = count - 1;--}}
{{--                                tbody.attr('data-count', count);--}}
{{--                                swal(response.message, {icon: "success"});--}}
{{--                            }--}}
{{--                            else {--}}
{{--                                swal(response.error);--}}
{{--                            }--}}
{{--                        },--}}
{{--                        error: function (x) {--}}
{{--                            crud_handle_server_errors(x);--}}
{{--                        },--}}
{{--                        complete: function () {--}}
{{--                            if (count === 1) tbody.append(`<tr><td colspan="5"><strong>No data available in table</strong></td></tr>`);--}}
{{--                        }--}}
{{--                    });--}}
{{--                }--}}
{{--                else {--}}
{{--                    swal("تم الغاء الحذف");--}}
{{--                }--}}
{{--            });--}}
{{--    });--}}

{{--</script>--}}
