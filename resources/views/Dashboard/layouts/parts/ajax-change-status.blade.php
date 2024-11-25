<script>
    //==================== change-status ==================

    function isChecked(value, id) {
        if (value === 'checked') {
            $('#active-id-' + id).attr('onclick', 'isChecked("null", "' + id + '")');
        } else {
            $('#active-id-' + id).attr('onclick', 'isChecked("checked", "' + id + '")');
        }
        $.ajax({
            type: 'POST',
            url: '{{ route('ajax-change-status-'.$model) }}',
            data: {
                "_token": "{{ csrf_token() }}", "id": id, "value": value
            },
            success: function (response) {
                var dialog = bootbox.dialog({
                    message: '<p class="text-center">' + response.message + '</p>',
                    closeButton: false
                });
                setTimeout(function () {
                    dialog.modal('hide');
                }, 1000);
            },
            error: (e) => console.error(e),
        });
    }


</script>
