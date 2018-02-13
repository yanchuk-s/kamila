$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function clearInput(elem){
    elem.val('').addClass('incorectInput');
}

$('[data-delete-blog]').on('click', function (e) {
    e.preventDefault();

       var id = $(this).attr('data-blog-id');
    

        $.ajax({
            url: '/admin/add-blog/delete',
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


