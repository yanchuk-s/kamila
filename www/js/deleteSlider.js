$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function clearInput(elem){
    elem.val('').addClass('incorectInput');
}

$('[data-delete-slide]').on('click', function (e) {
    e.preventDefault();

       var id = $(this).attr('data-slide-id');
    

        $.ajax({
            url: '/admin/sliders/delete',
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


