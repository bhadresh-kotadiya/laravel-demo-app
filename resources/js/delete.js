$(document).ready(function () {
    $('.deleteRecord').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: $(this).data('route'),
            data: {
                '_method': 'delete'
            },
            success: function (response) {
                alert(response)
                window.location = '/index'
            }
        });
    })
});
