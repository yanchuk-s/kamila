$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



$('#orderCollBtn').on('click', function (e) {
    e.preventDefault();

    var name = $('#orderColl-name').val();
    var phone = $('#orderColl-phone').val();
    
    var loginError = false;
    
    if (name.length == 0) {
        $('#inc-orderColl-name').html('Введите Имя!').css('color','red');
        loginError = true;
    }

    if (phone.length == 0) {
        $('#inc-orderColl-phone').html('Введите номер телефона!').css('color','red');
        loginError = true;
    }
    

    if( loginError == false){
        $.ajax({
            url: '/orderColl',
            type: 'POST',
            data: {
                name:  name,
                phone:  phone
            },
            success: function(data){
                if (data.status == 'success')
                {

                    console.log(data.name, data.phone);
                    $('.close-contact-modal').click();
                    $('.okModal-open').click();
                    $('.okModal-messege').html('Заявку принято, мы свяжемся с вами!')
                }

            },
            error: function(error){
                console.log(error);
            }
        });
    }



});


