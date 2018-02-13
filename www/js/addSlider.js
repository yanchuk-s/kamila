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

$('#addSlider').on('click', function (e) {
    e.preventDefault();

    var title_ru = $('#slider-title-ru').val();
    var title_uk = $('#slider-title-uk').val();
    var text_ru = $('#slider-text-ru').val();
    var text_uk = $('#slider-text-uk').val();
    var image_path = $('#slider-input-img').val();



    // var file_data = $('#blog-input-img').prop('files')[0];
    var form_data = new FormData(document.forms.adminAddSlider);

    // form_data.append('file', file_data);
    

    // console.log(file_data);

    var loginError = false;




    if (title_ru.length == 0) {
        $('.inc-title-ru').show();
        clearInput($("#blog-title-ru"));
        $('#blog-title-ru').attr('placeholder', 'Введите заголовок!');
        loginError = true;
    }
    
    
    if (title_uk.length == 0) {
        $('.inc-title-ru').show();
        clearInput($("#blog-title-uk"));
        $('#blog-title-uk').attr('placeholder', 'Введите заголовок!');
        loginError = true;
    }
    
    
    if (text_ru.length == 0) {
        $('.incorect-editor-ru').show();
        loginError = true;
    }
    
    if (text_uk.length == 0) {
        $('.incorect-editor-uk').show();
        loginError = true;
    }
    
    if (image_path.length == 0) {
        $('.incorect-image-path').show();
        loginError = true;
    }
    
    
    
    
    
    if( loginError == false){
        $.ajax({
            url: '/admin/add-slider/add',
            type: 'POST',
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            data: form_data,
            // data: {
            //     title_ru:  title_ru,
            //     title_uk: title_uk,
            //     description_ru:  description_ru,
            //     description_uk: description_uk,
            //     category_id:  category_id,
            //     image_path: image_path,
            //     img: file_data
            //
            //
            //
            // },
            success: function(data){
                if (data.status == 'success')
                {
                    $('.admin-modal-open').click();
                    $('.admin-modal-messege').html('Слайдер додан!');

                    $('.input-file-name').val('');
                    $('#slider-title-ru').val('');
                    $('#slider-title-uk').val('');
                    $('#slider-text-ru').val('');
                    $('#slider-text-uk').val('');
                    $('#slider-input-img').val('');
                    
                    
                }
    
            },
            error: function(error){
                console.log(error);
            }
        });
    }



});


