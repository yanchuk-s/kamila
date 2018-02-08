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

    var name = $('#category').val();

    var loginError = false;



    if (name.length == 0) {
        clearInput($("#category"));
        $('#category').attr('placeholder', 'Введите категорию');
        loginError = true;
    }

    console.log(name);
    
    
    if( loginError == false){
        $.ajax({
            url: '/admin/add-category/add',
            type: 'POST',
            data: {
                name: name
            },
            success: function(data){
                if (data.status == 'success')
                {
                    $('.admin-modal-open').click();

                    $('.admin-modal-messege').html('Категория добавлена!');

                    $("#category").val('');
                }

            },
            error: function(error){
                console.log(error);
            }
        });
    }

});


