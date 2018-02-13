$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



$('[data-open-model-repsonse]').on('click', function (e) {
    e.preventDefault();

       var id = $(this).attr('data-response-id');

    console.log(id);

        $.ajax({
            url: '',
            type: 'POST',
            data: {
                id: id
            },
            success: function(data){
                if (data.status == 'success')
                {

                }
        
            },
            error: function(error){
                console.log(error);
            }
        });
    

});


