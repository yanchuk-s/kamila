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

$('#add-rulers-save').on('click', function (e) {
    e.preventDefault();


    var text_ru = CKEDITOR.instances.editorru.getData();
    var text_uk = CKEDITOR.instances.editoruk.getData();
  

    
    var form_data = new FormData(document.forms.adminAddRulers);
    form_data.append('textRu', text_ru);
    form_data.append('textUk', text_uk);
    

    var loginError = false;


    
    if (text_ru.length == 0) {
        $('.incorect-editor-ru').show();
        loginError = true;
    }
    
    if (text_uk.length == 0) {
        $('.incorect-editor-uk').show();
        loginError = true;
    }
    
    
    if( loginError == false){
        $.ajax({
            url: '/admin/rulers/edit',
            type: 'POST',
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            data: form_data,
            success: function(data){
                if (data.status == 'success')
                {
                    $('.admin-modal-open').click();
    
                    $('.admin-modal-messege').html('Сохранено!');
                    
                }
    
            },
            error: function(error){
                console.log(error);
            }
        });
    }
    
    console.log(text_ru,text_uk, form_data);

});


