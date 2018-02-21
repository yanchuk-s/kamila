$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



$('[data-open-model-repsonse]').on('click', function (e) {
    e.preventDefault();

       var id = $(this).attr('data-response-id');

        // setTimeout(function () {
        //     $('.response-click').click();
        // },400);


    
        $.ajax({
            url: '/responses',
            type: 'POST',
            data: {
                id: id
            },
            success: function(data){
                if (data.status == 'success')
                {
                    $('#modal-user-img').attr("src", data.response.image_response);
                    $('#userName').html(data.response.user_name);
                    $('.modal-resp-text').html(data.response.response);
                    $('.response-click').click();
                }

            },
            error: function(error){
                console.log(error);
            }
        });
    

});


