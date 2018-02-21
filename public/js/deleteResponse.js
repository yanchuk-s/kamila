$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function clearInput(elem){
    elem.val('').addClass('incorectInput');
}

$('.delete-response').on('click', function (e) {
    e.preventDefault();

    // var id = $('#response_id').val();

    var _this = $(this).parents('.admin-response-item');

    var id = $(this).next('.response_id').val();

    
        $.ajax({
            url: '/admin/response/delete',
            type: 'POST',
            data: {
                id: id
            },
            success: function(data){
                if (data.status == 'success')
                {
                    // _this.slideUp(300);
                    location.reload();

                }

            },
            error: function(error){
                console.log(error);
            }
        });
    

});


