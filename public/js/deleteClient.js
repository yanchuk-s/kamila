$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function clearInput(elem){
    elem.val('').addClass('incorectInput');
}

$('[data-delete-client]').on('click', function (e) {
    e.preventDefault();

       var id = $(this).attr('data-client-id');
    

        $.ajax({
            url: '/admin/client/delete',
            type: 'POST',
            data: {
                id: id
            },
            success: function(data){
                if (data.status == 'success')
                {

                    location.reload();
        
                }
        
            },
            error: function(error){
                console.log(error);
            }
        });
    

});


