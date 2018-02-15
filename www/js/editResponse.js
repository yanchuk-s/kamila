$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function clearInput(elem){
    elem.val('').addClass('incorectInput');
}

$('#edit-response').on('click', function (e) {
    e.preventDefault();

    var user_name = $('#user_name').val();
    var response = $('#respons-descr').val();

    var image_path = $('#response-input-img').val();

    var loginError = false;

    var form_data = new FormData(document.forms.editResponse);

    
    
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
            url: '/admin/edit-response/edit',
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
    
                    $('.admin-modal-messege').html('Отзыв изменено!');

                    setTimeout(function () {
                        location.href = '/admin/response';
                    }, 2000);
                    
                }
    
            },
            error: function(error){
                console.log(error);
            }
        });
    }

});


