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

});