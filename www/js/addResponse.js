$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function clearInput(elem){
    elem.val('').addClass('incorectInput');
}

$('#add-response').on('click', function (e) {
    e.preventDefault();

    var user_name = $('#user_name').val();
    var response = $('#respons-descr').val();

    var image_path = $('#response-input-img').val();

    var loginError = false;

    var form_data = new FormData(document.forms.addResponse);


    if (image_path.length == 0) {
        $('.incorect-image-path').show();
        loginError = true;
    }
    
    if (user_name.length == 0) {
        clearInput($("#user_name"));
        $('#user_name').attr('placeholder', 'Введите Имя');
        loginError = true;
    }

    if(response.length == 0){
        clearInput($("#respons-descr"));
        $('#respons-descr').attr('placeholder', 'Введите отзыв');
        loginError = true;
    }

    console.log(form_data);
    
    if( loginError == false){
        $.ajax({
            url: '/admin/add-response/add',
            type: 'POST',
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            data: form_data,
            // data: {
            //     user_name: user_name,
            //     response: response
            // },
            success: function(data){
                if (data.status == 'success')
                {
                    $('.admin-modal-open').click();
    
                    $('.admin-modal-messege').html('Отзыв додан!');
    
                    $("#respons-descr").val('');
                    $("#user_name").val('');
                    $('#response-input-img').val('');

                    $('.input-file-name').val('');
                    
                }
    
            },
            error: function(error){
                console.log(error);
            }
        });
    }

});


