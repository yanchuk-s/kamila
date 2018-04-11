$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function clearInput(elem){
    elem.val('').addClass('incorectInput');
}

$('#add-category').on('click', function (e) {
    e.preventDefault();

    var name_ru = $('#category_ru').val();
    var name_uk = $('#category_uk').val();

    var loginError = false;



    if (name_ru.length == 0) {
        clearInput($("#category_ru"));
        $('#category_ru').attr('placeholder', 'Введите категорию');
        loginError = true;
    }


    if (name_uk.length == 0) {
        clearInput($("#category_uk"));
        $('#category_uk').attr('placeholder', 'Введите категорию');
        loginError = true;
    }
    
    
    
    if( loginError == false){

        $('#add-category span').hide();
        $('#add-category .spinner').show();
        
        $.ajax({
            url: '/admin/add-category/add',
            type: 'POST',
            data: {
                name_ru:  name_ru,
                name_uk: name_uk
                
            },
            success: function(data){
                if (data.status == 'success')
                {
                    $('.admin-modal-open').click();

                    $('.admin-modal-messege').html('Категория добавлена!');

                    $("#category_ru").val('');
                    $("#category_uk").val('');

                    $('#add-category span').show();
                    $('#add-category .spinner').hide();

                    setTimeout(function () {
                        location.href = '/admin/category';
                    }, 2000);
                }

            },
            error: function(error){
                console.log(error);
            }
        });
    }

});


