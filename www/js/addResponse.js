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

    var loginError = false;



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
    
    if( loginError == false){
        $.ajax({
            url: '/admin/add-response/add',
            type: 'POST',
            data: {
                user_name: user_name,
                response: response
            },
            success: function(data){
                if (data.status == 'success')
                {
                    $('.admin-modal-open').click();

                    $('.admin-modal-messege').html('Отзыв додан!');

                    $("#respons-descr").val('');
                    $("#user_name").val('');
                }

            },
            error: function(error){
                console.log(error);
            }
        });
    }

});


