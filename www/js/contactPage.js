$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function clearInput(elem){
    elem.val('').addClass('incorectInput');
}

function incorectBorder(elem){
    elem.addClass('incorectInput');
}

$('#form-send').on('click', function (e) {
    e.preventDefault();

    var name = $('#form-name').val();
    var email = $('#form-email').val();
    var text = $('#form-text').val();


    var loginError = false;

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    if (email.length < 5 || !validateEmail(email)) {
        $('#inc-form-email').html('Введите корректный электронный адрес!').css('color','red');
        loginError = true;
    }


    if (name.length == 0) {
        $('#inc-form-name').html('Введите Имя!').css('color','red');
        loginError = true;
    }

    if (text.length == 0) {
        $('#inc-form-text').html('Введите текст!').css('color','red');
        loginError = true;
    }

    // if( loginError == false){
    //     console.log(text, name, email);
    // }

    if( loginError == false){
        $.ajax({
            url: '/contact/send',
            type: 'POST',
            data: {
                name:  name,
                email: email,
                text:  text
            },
            success: function(data){
                if (data.status == 'success')
                {
                    $('.close-contact-modal').click();
                    $('.okModal-open').click();
                    $('.okModal-messege').html('Принято, мы свяжемся с вами!');

                    // console.log(data.name, data.email, data.text);
                }

            },
            error: function(error){
                console.log(error);
            }
        });
    }



});


