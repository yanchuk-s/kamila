$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function clearInput(elem){
    elem.val('').addClass('incorectInput');
}

$('#edit-category').on('click', function (e) {
    e.preventDefault();

    var name_ru = $('#category_ru').val();
    var name_uk = $('#category_uk').val();
    var id = $('#categoryId').val();

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
    
    console.log(id,name_ru , name_uk);
    
    
    if( loginError == false){
        $.ajax({
            url: '/admin/edit-category/edit',
            type: 'POST',
            data: {
                name_ru:  name_ru,
                name_uk: name_uk,
                id: id
                
            },
            success: function(data){
                if (data.status == 'success')
                {
                    $('.admin-modal-open').click();

                    $('.admin-modal-messege').html('Категория изменена!');

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


