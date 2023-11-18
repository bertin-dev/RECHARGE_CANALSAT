$(function () {

    //souscription users
    $('#singUp input').focus(function () {
        $('#rapport').fadeOut(800);
    });

    $('#singUp').submit(function () {
        var statut1 = $('#rapport');
        var nom = $('#last_name').val(),
            prenom = $('#first_name').val(),
            town = $('#town').val(),
            quartier = $('#quartier').val(),
            phone = $('#phone').val(),
            email = $('#email').val(),
            password = $('#password').val();


        if (nom == '' || prenom == '' || town == ''|| quartier == '' || phone == '' || email == '' || password == '') {
            statut1.html('Veuillez Remplir Tous les Champs').fadeIn(400);
        }
        else {
            var $form = $(this);
            var formdata = (window.FormData) ? new FormData($form[0]) : null;
            var donnee = (formdata !== null) ? formdata : $form.serialize();

            $.ajax({
                type: 'post',
                url: '../Controllers/submit.php?singUp=singUp',
                contentType: false, // obligatoire pour de l'upload
                processData: false, // obligatoire pour de l'upload
                dataType: 'json',
                data: donnee,
                beforeSend: function () {
                    $('#enreg').attr('value', 'En cours...');
                },
                success: function (data) {
                    if(data.resultat != 'success'){
                        statut1.html(data.resultat).fadeIn(400);
                        $('#enreg').attr('value', 'Envoyer');
                    }
                    else {
                        $('#enreg').attr('value', 'Envoyer');
                        $('#singUp').hide();

                        setTimeout(function () {
                            location.href='users.php';
                        }, 2000);
                    }
                }

            });

        }


    });



    //subcription users
    $('#subcription input').focus(function () {
        $('#rapport_abonnement').fadeOut(800);
    });

    $('#subcription').submit(function () {
        var statut1 = $('#rapport_abonnement');
        var titre = $('#titre').val(),
            description = $('#description').val(),
            montant = $('#montant').val(),
            distributeur = $('#distributeur').val();


        if (titre == '' || description == '' || montant == ''|| distributeur == '') {
            statut1.html('Veuillez Remplir Tous les Champs').fadeIn(400);
        }
        else {
            var $form = $(this);
            var formdata = (window.FormData) ? new FormData($form[0]) : null;
            var donnee = (formdata !== null) ? formdata : $form.serialize();

            $.ajax({
                type: 'post',
                url: '../Controllers/submit.php?subcription=subcription',
                contentType: false, // obligatoire pour de l'upload
                processData: false, // obligatoire pour de l'upload
                dataType: 'json',
                data: donnee,
                beforeSend: function () {
                    $('#subcrip').attr('value', 'En cours...');
                },
                success: function (data) {
                    if(data.resultat != 'success'){
                        statut1.html(data.resultat).fadeIn(400);
                        $('#subcrip').attr('value', 'Envoyer');
                    }
                    else {
                        $('#subcrip').attr('value', 'Envoyer');
                        $('#subcription').hide();

                        setTimeout(function () {
                            location.href='abonnements.php';
                        }, 6000);
                    }
                }

            });
        }
    });


    //recharge
    $('#recharge input').focus(function () {
        $('#rapport_recharge').fadeOut(800);
    });
    $('#recharge').submit(function () {
        var statut1 = $('#rapport_recharge');
        var nom = $('#nom').val(),
            telephone = $('#telephone').val(),
            num_abonne = $('#num_abonne').val(),
            bouquet = $('#bouquet').val();

        if (nom == '' || telephone == '' || num_abonne == ''|| bouquet == '') {
            statut1.html('Veuillez Remplir Tous les Champs').fadeIn(400);
        }
        else {
            var $form = $(this);
            var formdata = (window.FormData) ? new FormData($form[0]) : null;
            var donnee = (formdata !== null) ? formdata : $form.serialize();

            $.ajax({
                type: 'post',
                url: 'Controllers/submit.php?recharge=recharge',
                contentType: false, // obligatoire pour de l'upload
                processData: false, // obligatoire pour de l'upload
                dataType: 'json',
                data: donnee,
                beforeSend: function () {
                    $('#recharge_valid').attr('value', 'En cours...');
                },
                success: function (data) {
                    if(data.resultat != 'success'){
                        statut1.html(data.resultat).fadeIn(400);
                        $('#recharge_valid').attr('value', 'Envoyer');
                    }
                    else {
                        $('#recharge_valid').attr('value', 'Envoyer');
                        $('#recharge').hide();

                        /*setTimeout(function () {
                            location.href='abonnements.php';
                        }, 6000);*/

                        //Envoi du sms
                        apiSendSMS(data.numero, "bonjours chers tous", "Adsyst");
                    }
                }

            });

        }
    });

    function apiSendSMS(tel, message, sender){
        alert(message);

        $.ajax({
            url: 'Controllers/submit.php?recharge=recharge&apiSMS=apiSMS',
            method: 'POST',
            data: {
                tel: tel,
                message: message,
                sender: sender
            },
            dataType: 'text',
            success: function(data){
                console.log(data);
                alert(data);
            },
            error: function(data){
                console.log(data);
                alert(data);
            }
        });



    }


    //type d'opération,
    $('#typeOper input').focus(function () {
        $('#rapport_typeRecharge').fadeOut(800);
    });
    $('#typeOper').submit(function () {
        var statut1 = $('#rapport_typeRecharge');
        var titre = $('#libelle').val(),
            operateur = $('#operateur').val();


        if (titre == '' || operateur == '' ) {
            statut1.html('Veuillez Remplir Tous les Champs').fadeIn(400);
        }
        else {
            var $form = $(this);
            var formdata = (window.FormData) ? new FormData($form[0]) : null;
            var donnee = (formdata !== null) ? formdata : $form.serialize();

            $.ajax({
                type: 'post',
                url: '../Controllers/submit.php?typeOper=typeOper',
                contentType: false, // obligatoire pour de l'upload
                processData: false, // obligatoire pour de l'upload
                dataType: 'json',
                data: donnee,
                beforeSend: function () {
                    $('#typeOperation').attr('value', 'En cours...');
                },
                success: function (data) {
                    if(data.resultat != 'success'){
                        statut1.html(data.resultat).fadeIn(400);
                        $('#typeOperation').attr('value', 'Envoyer');
                    }
                    else {
                        $('#typeOperation').attr('value', 'Envoyer');
                        $('#typeOper').hide();
                        $('.message').html("Enregistrement effectué avec succès");
                        setTimeout(function () {
                            location.href='index.php';
                        }, 2000);
                    }
                }

            });

        }


    });

});