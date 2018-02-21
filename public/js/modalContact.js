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

$('#modalContactSend').on('click', function (e) {
    e.preventDefault();

    var name = $('#modalContactName').val();
    var email = $('#modalContactEmail').val();
    var phone = $('#modalContactPhone').val();


    var loginError = false;

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    if (email.length < 5 || !validateEmail(email)) {
        $('#inc-modal-email').html('Введите корректный электронный адрес!').css('color','red');
        loginError = true;
    }


    if (name.length == 0) {
        $('#inc-modal-name').html('Введите Имя!').css('color','red');
        loginError = true;
    }

    if (phone.length == 0) {
        $('#inc-modal-phone').html('Введите номер телефона!').css('color','red');
        loginError = true;
    }

    var lang = $('html').attr('lang');
    
    if( loginError == false){
        $.ajax({
            url: '/callback',
            type: 'POST',
            data: {
                name:  name,
                email: email,
                phone:  phone,
                lang: lang
            },
            success: function(data){
                if (data.status == 'success')
                {
                    $('.close-contact-modal').click();
                    $('.okModal-open').click();
                    $('.okModal-messege').html(data.msg);
                }
    
            },
            error: function(error){
                console.log(error);
            }
        });
    }



});


