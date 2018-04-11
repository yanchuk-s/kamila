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

function borderRed(elem){
    elem.addClass('border-red');
}



$('#add-client').on('click', function (e) {
    e.preventDefault();

    var image_path = $('#general-photo').val();

    console.log(image_path);
    
    var name = $('#name').val();
    var atherAgency = $('#atherAgency').val();
    var dateOfBirth = $('#dateOfBirth').val();
    var age = $('#age').val();
    var HomeAddress = $('#HomeAddress').val();
    var phoneNumber = $('#phoneNumber').val();
    var mail = $('#mail').val();
    var socialNetworks = $('#socialNetworks').val();
    var hight = $('#hight').val();
    var weight = $('#weight').val();
    var hairColor = $('#hairColor option:selected').val();
    var eyeColor = $('#eyeColor option:selected').val();
    var bodyType = $('#bodyType').val();
    var familyStatus = $('#familyStatus option:selected').val();
    var children = $('#children').val();
    var smoking = $('#smoking option:selected').val();
    var alcohol = $('#alcohol option:selected').val();
    var religion = $('#religion').val();
    var educationSpeciality = $('#educationSpeciality').val();
    var occupation = $('#occupation').val();
    var languages = $('#languages').val();
    var levelLanguages = $('#levelLanguages').val();
    var internationalPassport = $('#internationalPassport option:selected').val();
    var countriesVisited = $('#countriesVisited').val();
    var wantVisit = $('#wantVisit').val();
    var animals = $('#animals').val();
    var favoriteSport = $('#favoriteSport').val();
    var favoriteColor = $('#favoriteColor').val();
    var favoriteFlowers = $('#favoriteFlowers').val();
    var favoriteFilms = $('#favoriteFilms').val();
    var favoriteMusic = $('#favoriteMusic').val();
    var cooking = $('#cooking').val();
    var freeTime = $('#freeTime').val();
    var inchildhood = $('#inchildhood').val();
    var threeThings = $('#threeThings').val();
    var qualitiesLike = $('#qualitiesLike').val();
    var qualitiesYour = $('#qualitiesYour').val();
    var anotherCountry = $('#anotherCountry').val();
    var aloneTime = $('#aloneTime').val();
    var yourDescr = $('#add-client-comment').summernote('code');

    
    var partnerOld = $('#partnerOld').val();
    var partnerHight = $('#partnerHight').val();
    var partnerBodyType = $('#partnerBodyType').val();
    var partnerChildren = $('#partnerChildren').val();
    var partnerRace = $('#partnerRace').val();
    var partnerReligion = $('#partnerReligion').val();
    var partnerEducation = $('#partnerEducation').val();
    var partnerHome = $('#partnerHome').val();
    var partnerDescr = $('#add-client-comment-partner').summernote('code');



    var form_data = new FormData(document.forms.addClient);
    form_data.append('partnerDescr', partnerDescr);
    form_data.append('yourDescr', yourDescr);



    var ClientError = false;

    if (image_path.length == 0) {
        $('.incorect-image-path').show();
        ClientError = true;
    }

    if (name.length == 0) {
        borderRed($("#name"));
        clearInput($("#name"));
        $('#name').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (atherAgency.length == 0) {
        borderRed($("#atherAgency"));
        clearInput($("#atherAgency"));
        $('#atherAgency').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (dateOfBirth.length == 0) {
        borderRed($("#dateOfBirth"));
        clearInput($("#dateOfBirth"));
        $('#dateOfBirth').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (age.length == 0) {
        borderRed($("#age"));
        clearInput($("#age"));
        $('#age').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (HomeAddress .length == 0) {
        borderRed($("#HomeAddress"));
        clearInput($("#HomeAddress"));
        $('#HomeAddress').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (phoneNumber.length == 0) {
        borderRed($("#phoneNumber"));
        clearInput($("#phoneNumber"));
        $('#phoneNumber').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (mail.length == 0) {
        borderRed($("#mail"));
        clearInput($("#mail"));
        $('#mail').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (socialNetworks.length == 0) {
        borderRed($("#socialNetworks"));
        clearInput($("#socialNetworks"));
        $('#socialNetworks').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (hight.length == 0) {
        borderRed($("#hight"));
        clearInput($("#hight"));
        $('#hight').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (weight.length == 0) {
        borderRed($("#weight"));
        clearInput($("#weight"));
        $('#weight').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (bodyType.length == 0) {
        borderRed($("#bodyType"));
        clearInput($("#bodyType"));
        $('#bodyType').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (children.length == 0) {
        borderRed($("#children"));
        clearInput($("#children"));
        $('#children').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (religion.length == 0) {
        borderRed($("#religion"));
        clearInput($("#religion"));
        $('#religion').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (occupation.length == 0) {
        borderRed($("#occupation"));
        clearInput($("#occupation"));
        $('#occupation').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (languages.length == 0) {
        borderRed($("#languages"));
        clearInput($("#languages"));
        $('#languages').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (levelLanguages.length == 0) {
        borderRed($("#levelLanguages"));
        clearInput($("#levelLanguages"));
        $('#levelLanguages').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (countriesVisited.length == 0) {
        borderRed($("#countriesVisited"));
        clearInput($("#countriesVisited"));
        $('#countriesVisited').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (wantVisit.length == 0) {
        borderRed($("#wantVisit"));
        clearInput($("#wantVisit"));
        $('#wantVisit').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (animals.length == 0) {
        borderRed($("#animals"));
        clearInput($("#animals"));
        $('#animals').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (favoriteSport.length == 0) {
        borderRed($("#favoriteSport"));
        clearInput($("#favoriteSport"));
        $('#favoriteSport').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (favoriteColor.length == 0) {
        borderRed($("#favoriteColor"));
        clearInput($("#favoriteColor"));
        $('#favoriteColor').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (favoriteFlowers.length == 0) {
        borderRed($("#favoriteFlowers"));
        clearInput($("#favoriteFlowers"));
        $('#favoriteFlowers').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (favoriteFilms.length == 0) {
        borderRed($("#favoriteFilms"));
        clearInput($("#favoriteFilms"));
        $('#favoriteFilms').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (favoriteMusic.length == 0) {
        borderRed($("#favoriteMusic"));
        clearInput($("#favoriteMusic"));
        $('#favoriteMusic').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (cooking.length == 0) {
        borderRed($("#cooking"));
        clearInput($("#cooking"));
        $('#cooking').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (freeTime.length == 0) {
        borderRed($("#freeTime"));
        clearInput($("#freeTime"));
        $('#freeTime').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (inchildhood.length == 0) {
        borderRed($("#inchildhood"));
        clearInput($("#inchildhood"));
        $('#inchildhood').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (threeThings.length == 0) {
        borderRed($("#threeThings"));
        clearInput($("#threeThings"));
        $('#threeThings').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (qualitiesLike.length == 0) {
        borderRed($("#qualitiesLike"));
        clearInput($("#qualitiesLike"));
        $('#qualitiesLike').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (qualitiesYour.length == 0) {
        borderRed($("#qualitiesYour"));
        clearInput($("#qualitiesYour"));
        $('#qualitiesYour').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (anotherCountry.length == 0) {
        borderRed($("#anotherCountry"));
        clearInput($("#anotherCountry"));
        $('#anotherCountry').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (aloneTime.length == 0) {
        borderRed($("#aloneTime"));
        clearInput($("#aloneTime"));
        $('#aloneTime').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (partnerOld.length == 0) {
        borderRed($("#partnerHight"));
        clearInput($("#partnerHight"));
        $('#partnerHight').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (partnerHight.length == 0) {
        borderRed($("#partnerHight"));
        clearInput($("#partnerHight"));
        $('#partnerHight').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (partnerBodyType.length == 0) {
        borderRed($("#partnerBodyType"));
        clearInput($("#partnerBodyType"));
        $('#partnerBodyType').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (partnerChildren.length == 0) {
        borderRed($("#partnerChildren"));
        clearInput($("#partnerChildren"));
        $('#partnerChildren').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (partnerRace.length == 0) {
        borderRed($("#partnerRace"));
        clearInput($("#partnerRace"));
        $('#partnerRace').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (partnerReligion.length == 0) {
        borderRed($("#partnerReligion"));
        clearInput($("#partnerReligion"));
        $('#partnerReligion').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (partnerEducation.length == 0) {
        borderRed($("#partnerEducation"));
        clearInput($("#partnerEducation"));
        $('#partnerEducation').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }

    if (partnerHome.length == 0) {
        borderRed($("#partnerHome"));
        clearInput($("#partnerHome"));
        $('#partnerHome').attr('placeholder', 'Заполните поле!');
        ClientError = true;
    }




    
    if( ClientError == false){
        $('#add-client span').hide();
        $('#add-client .spinner').show();

        $.ajax({
            url: '/admin/add-clients/add',
            type: 'POST',
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData: false,
            data: form_data,
            success: function(data){
                if (data.status == 'success')
                {
                    $('.admin-modal-open').click();

                    $('.admin-modal-messege').html('Клиент додан!');

                    $('#add-client span').show();
                    $('#add-client .spinner').hide();

                    setTimeout(function () {
                        location.href = '/admin/clients';
                    }, 2000);

                }

            },
            error: function(error){
                console.log(error);
            }
        });
    }


});


