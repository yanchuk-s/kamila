$( document ).ready(function() {

    function getBase64(file, onLoadCallback) {
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function () {
            if (onLoadCallback) {
                onLoadCallback(reader.result);
            }
        };
        reader.onerror = function (error) {
            console.log('Error: ', error);
        };
    }


    $('#adduk').summernote({
        placeholder: 'Текст на Украинском',
        tabsize: 2,
        height: 100,

        callbacks:{
            onImageUpload: function (files) {

                getBase64(files[0], function (result) {

                    console.log(result);

                    $.ajax({
                        url: '/upload/images',
                        type: 'POST',
                        data: {
                            'image': result
                        },
                        cache: false,
                        success: function (data) {
                           
                            if (data && data.status && data.url) {
                                if (data.status === 'success') {
                                    $('#adduk').summernote('insertImage', data.url);
                                }
                            }
                        },
                        error: function (error) {
                            alert(error.status);
                        }
                    });
                });
            }
        }
    });

    $('#addru').summernote({
        placeholder: 'Текст на Русском',
        tabsize: 2,
        height: 100,

        callbacks:{
            onImageUpload: function (files) {

                getBase64(files[0], function (result) {

                    console.log(result);

                    $.ajax({
                        url: '/upload/images',
                        type: 'POST',
                        data: {
                            'image': result
                        },
                        cache: false,
                        success: function (data) {

                            if (data && data.status && data.url) {
                                if (data.status === 'success') {
                                    $('#addru').summernote('insertImage', data.url);
                                }
                            }
                        },
                        error: function (error) {
                            alert(error.status);
                        }
                    });
                });
            }
        }
    });


    $('#editblogsummUk').summernote({
        placeholder: 'Текст на Украинском',
        tabsize: 2,
        height: 100,

        callbacks:{
            onImageUpload: function (files) {

                getBase64(files[0], function (result) {

                    console.log(result);

                    $.ajax({
                        url: '/upload/images',
                        type: 'POST',
                        data: {
                            'image': result
                        },
                        cache: false,
                        success: function (data) {

                            if (data && data.status && data.url) {
                                if (data.status === 'success') {
                                    $('#editblogsummUk').summernote('insertImage', data.url);
                                }
                            }
                        },
                        error: function (error) {
                            alert(error.status);
                        }
                    });
                });
            }
        }
    });

    $('#editblogsummRu').summernote({
        placeholder: 'Текст на Украинском',
        tabsize: 2,
        height: 100,

        callbacks:{
            onImageUpload: function (files) {

                getBase64(files[0], function (result) {

                    console.log(result);

                    $.ajax({
                        url: '/upload/images',
                        type: 'POST',
                        data: {
                            'image': result
                        },
                        cache: false,
                        success: function (data) {

                            if (data && data.status && data.url) {
                                if (data.status === 'success') {
                                    $('#editblogsummRu').summernote('insertImage', data.url);
                                }
                            }
                        },
                        error: function (error) {
                            alert(error.status);
                        }
                    });
                });
            }
        }
    });




    $('#add-client-comment').summernote({
        placeholder: 'Расскажите о себе, Вашем характере, интересах, мечтах, каких отношений Вы ищете, как вы представляете себе свою будущую семейную жизнь. Додайте дополнительные фото',
        tabsize: 2,
        height: 100,

        callbacks:{
            onImageUpload: function (files) {

                getBase64(files[0], function (result) {

                    console.log(result);

                    $.ajax({
                        url: '/upload/images',
                        type: 'POST',
                        data: {
                            'image': result
                        },
                        cache: false,
                        success: function (data) {

                            if (data && data.status && data.url) {
                                if (data.status === 'success') {
                                    $('#add-client-comment').summernote('insertImage', data.url);
                                }
                            }
                        },
                        error: function (error) {
                            alert(error.status);
                        }
                    });
                });
            }
        }
    });

    $('#add-client-comment-partner').summernote({
        placeholder: 'Расскажите о своем желаемом партнере (его характер, интересы, какими качествами он должен обладать)',
        tabsize: 2,
        height: 100,

        callbacks:{
            onImageUpload: function (files) {

                getBase64(files[0], function (result) {

                    console.log(result);

                    $.ajax({
                        url: '/upload/images',
                        type: 'POST',
                        data: {
                            'image': result
                        },
                        cache: false,
                        success: function (data) {

                            if (data && data.status && data.url) {
                                if (data.status === 'success') {
                                    $('#add-client-comment-partner').summernote('insertImage', data.url);
                                }
                            }
                        },
                        error: function (error) {
                            alert(error.status);
                        }
                    });
                });
            }
        }
    });
});



