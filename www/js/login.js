$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



function clearInput(elem){
    elem.val('').addClass('incorectInput');
}

$('#admin-login').on('click', function (e) {
    e.preventDefault();

    var admin_email = $('#admin-email').val();
    var admin_password = $('#admin-password').val();

    var loginError = false;

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    if (admin_email.length < 5 || !validateEmail(admin_email)) {
        clearInput($("#admin-email"));
        $('#admin-email').attr('placeholder', 'Введите корректную электронный адрес');
        loginError = true;
    }

    if(admin_password.length < 6){
        clearInput($("#admin-password"));
        $('#admin-password').attr('placeholder', 'Не менее 6 символов');
        loginError = true;
    }
    
    if( loginError == false){
        $.ajax({
            url: '/login',
            type: 'POST',
            data: {
                admin_email: admin_email,
                admin_password: admin_password
            },
            success: function(data){
                if (data.status == 'success')
                {
                    location.href = '/admin';
                }

                if (data.status == 'error')
                {
                    clearInput($("#admin-password"));
                    $('#admin-password').attr('placeholder', 'неверный пароль');
                }
            },
            error: function(error){
                console.log(error);
            }
        });
    }

});


/* left slide bar */

function openNav(e) {
    $('body').css('overflow-x', 'hidden').animate(300);
    $('.nav-bg').fadeIn(300);


    $('#mySidenav').animate({
        marginLeft: '0px'
    }, 250, 'swing');

    // $('body').animate({
    //        marginLeft: "290px"
    //     }, 250, 'swing');

}

function closeNav(e) {
    $('body').css('overflow-x', 'auto');
    $('.nav-bg').fadeOut(300);
    ;
    $('#mySidenav').animate({
        marginLeft: '-290px'
    }, 250, 'swing');
    // $('body').animate({
    //         marginLeft: "0px"
    //      }, 250, 'swing');
}

$(document).ready(function () {
    var menuOpenLink = '[data-menu-open-link]',
        menuCloseLink = '[data-menu-close-link]',
        isMenuOpened = false;

    $('body').on('click', menuOpenLink, function (e) {
        e.stopPropagation();
        openNav(e);

        isMenuOpened = true;
    });

    $('body').on('click', menuCloseLink, function (e) {
        e.stopPropagation();
        closeNav(e);

        isMenuOpened = false;
    });

    $(document).on('click', 'body', function (e) {
        var $target = $(e.target);

        if (isMenuOpened &&
            ($target.attr('id') != 'mySidenav' &&
            $target.closest('#mySidenav').length === 0)) {

            closeNav(e);

            isMenuOpened = false;
        }
    });
});

/* left slide bar END */