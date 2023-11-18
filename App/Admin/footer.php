<!-- ajout Utilisateur -->

<div class="modal fade" id="modal_add_client" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Nouvel Utilisateur</h4>
            </div>
            <div class="modal-body">
                <div id="rapport" class="alert alert-info text-center message">Veuillez Remplir Tous les Champs</div>


                <form role="form" class="add_client" id="singUp" method="post"
                      onsubmit="return false;" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="last_name">Nom *</label>
                        <input id="last_name" class="form-control" type="text" name="last_name">
                    </div>


                    <div class="form-group">
                        <label for="first_name">Prénom </label>
                        <input id="first_name" class="form-control" type="text" name="first_name">
                    </div>

                    <div class="form-group">
                        <label for="town">Ville </label>
                        <input id="town" class="form-control" type="text" name="town">
                    </div>

                    <div class="form-group">
                        <label for="quartier">Quartier </label>
                        <input id="quartier" class="form-control" type="text" name="quartier">
                    </div>

                    <div class="form-group">
                        <label for="phone">Telephone *</label>
                        <input id="phone" class="form-control" type="tel" name="phone" required>

                    </div>

                    <div class="form-group">
                        <label for="email">Email </label>
                        <input id="email" class="form-control" type="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input id="password" class="form-control" type="password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label for="role">Privilèges *</label>
                        <select id="role" name="role"
                                class="form-control">
                            <?php
                            foreach (App::getDB()->query('SELECT id, name FROM role ORDER BY id DESC') as $role):
                                echo '<option value="' . $role->id . '">' . $role->name . '</option>';
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="subcriptions">Abonnement *</label>
                        <select id="subcriptions" name="subcriptions"
                                class="form-control">
                            <?php
                            foreach (App::getDB()->query('SELECT id, name FROM subcriptions ORDER BY id DESC') as $subcriptions):
                                echo '<option title="'.$subcriptions->description.'" value="' . $subcriptions->id . '">' . $subcriptions->name . '</option>';
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <input id="enreg" title="Souscription" class="btn btn-primary btn_add_client" type="submit" value="Enoyer">
                    <button type="reset" class="btn btn-success">Effacer</button>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

            </div>
        </div>
    </div>
</div>



<!-- ajout Abonnements -->

<div class="modal fade" id="modal_add_abonnements" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Nouvel Abonnement</h4>
            </div>
            <div class="modal-body">
                <div id="rapport_abonnement" class="alert alert-info text-center message">Veuillez Remplir Tous les Champs</div>


                <form id="subcription" role="form" class="add_client" method="post"
                      onsubmit="return false;" accept-charset="UTF-8">
                    <div class="form-group">
                        <label for="titre">Titre *</label>
                        <input id="titre" class="form-control" type="text" name="titre" required>
                    </div>


                    <div class="form-group">
                        <label for="description">Description </label>
                        <input id="description" class="form-control" type="text" name="description">
                    </div>

                    <div class="form-group">
                        <label for="montant">Montant *</label>
                        <input id="montant" class="form-control" type="number" name="montant" required>

                    </div>

                    <div class="form-group">
                        <label for="distributeur">Distributeur </label>
                        <input id="distributeur" class="form-control" type="text" name="distributeur">

                    </div>

                    <input id="subcrip" class="btn btn-primary btn_add_client" type="submit" value="Enoyer">
                    <button type="reset" class="btn btn-success">Effacer</button>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

            </div>
        </div>
    </div>
</div>



<!-- ajout Recharge -->

<div class="modal fade" id="modal_add_recharge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Type d'opération</h4>
            </div>
            <div class="modal-body">
                <div class="text-center message"></div>
                <div id="rapport_typeRecharge" class="alert alert-info text-center message">Veuillez Remplir Tous les Champs</div>

                <form role="form" class="add_client" id="typeOper" method="post" onsubmit="return false;" accept-charset="UTF-8">
                    <div class="form-group">
                        <label for="libelle">Libelle *</label>
                        <input id="libelle" class="form-control" type="text" name="libelle" required>
                    </div>


                    <div class="form-group">
                        <label for="operateur">Opérateur de téléphonie</label>
                        <input id="operateur" class="form-control" type="text" name="operateur">
                    </div>


                    <input id="typeOperation" type="submit" class="btn btn-primary btn_add_client" value="Envoyer">
                    <button type="reset" class="btn btn-success">Effacer</button>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

            </div>
        </div>
    </div>
</div>


<!-- ajout RechargeInterne -->

<div class="modal fade" id="modal_add_InterneRecharge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Recharge</h4>
            </div>
            <div class="modal-body">
                <div class="text-center message"></div>

                <form role="form" class="add_client">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Nom" name="nom" type="text" autofocus
                                   value="<?php if (isset($_POST['nom'])) {
                                       echo $_POST['nom'];} ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Téléphone" name="telephone" type="number" required value="<?php if (isset($_POST['telephone'])) {
                                echo $_POST['telephone'];} ?>">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="N° Abonnement" name="num_abonne" type="number" required value="<?php if (isset($_POST['num_abonne'])) {
                                echo $_POST['num_abonne'];} ?>">
                        </div>

                        <div class="form-group">
                            <label for="bouquet">Bouquet</label>
                            <select id="bouquet" name="bouquet"
                                    class="form-control">
                                <?php
                                foreach (App::getDB()->query('SELECT id, name, description FROM subcriptions ORDER BY id DESC') as $subcriptions):
                                    echo '<option value="' . $subcriptions->id . '">' . $subcriptions->name . '</option>';
                                endforeach;
                                ?>
                            </select>
                        </div>

                        <!-- Change this to a button or input when using this as a form -->
                        <a href="Admin/index.php" class="btn btn-lg btn-success btn-block">Valider</a>
                    </fieldset>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

            </div>
        </div>
    </div>
</div>




<!-- Core Scripts - Include with every page -->
<script src="../assets/plugins/jquery-1.10.2.js"></script>
<script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
<script>
    //Abonnement
    function update_abonnement(id){
        $.ajax({
            url : '../Controllers/traitement.php?update_abonne=1',
            type : 'POST',
            data: $('.update_client'+id).serialize(),

            success : function(data){
                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Abonnement modifié avec succcès !!!</div>");
                    setTimeout(function(){
                        window.location.href = "abonnements.php";
                    }, 2000);

                }else{
                    $('.message').html(data);
                }
            }
        });
    }
    function delete_abonnement(id){

        $.ajax({
            url : '../Controllers/traitement.php?deleteAbon='+id,
            type : 'GET',

            success : function(data){

                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Abonnement supprimé avec succcès !!!</div>");
                    setTimeout(function(){
                        window.location.href = "abonnements.php";
                    }, 2000);
                } else{
                    $('.message').html(data);
                }

            }

        });



    }
    function restaure_abonnement(id){

        $.ajax({
            url : '../Controllers/traitement.php?restaure_abonne='+id,
            type : 'GET',
            success : function(data){
                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Abonnement restauré avec succcès !!!</div>");
                    setTimeout(function(){
                        window.location.href = "abonnements_delete.php";
                    }, 2000);
                } else{
                    $('.message').html(data);
                }

            }
        });
    }

    //Utilisateur
    function update_users(id){
        $.ajax({
            url : '../Controllers/traitement.php?update_users=1',
            type : 'POST',
            data: $('.update_users'+id).serialize(),

            success : function(data){
                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Utilisateur modifié avec succcès !!!</div>");
                    setTimeout(function(){
                        window.location.href = "users.php";
                    }, 2000);

                }else{
                    $('.message').html(data);
                }
            }
        });
    }
    function delete_users(id) {
        $.ajax({
            url : '../Controllers/traitement.php?deleteUsers='+id,
            type : 'GET',

            success : function(data){

                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Utilisateur supprimé avec succcès !!!</div>");
                    setTimeout(function(){
                        window.location.href = "users.php";
                    }, 2000);
                } else{
                    $('.message').html(data);
                }

            }

        });
    }
    function restaurer_users(id) {
        $.ajax({
            url : '../Controllers/traitement.php?restaure_users='+id,
            type : 'GET',
            success : function(data){
                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Utilisateur restauré avec succcès !!!</div>");
                    setTimeout(function(){
                        window.location.href = "users_delete.php";
                    }, 2000);
                } else{
                    $('.message').html(data);
                }

            }
        });
    }

    //Transaction
    function update_clients(id) {
        $.ajax({
            url : '../Controllers/traitement.php?update_client=1',
            type : 'POST',
            data: $('.update_client'+id).serialize(),

            success : function(data){
                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Transaction modifié avec succcès !!!</div>");
                    setTimeout(function(){
                        window.location.href = "index.php";
                    }, 2000);

                }else{
                    $('.message').html(data);
                }
            }
        });
    }
    function validate_transaction(id) {
        $.ajax({
            url : '../Controllers/traitement.php?validate_transaction='+id,
            type : 'GET',

            success : function(data){

                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Transaction validé avec succcès !!!</div>");
                    setTimeout(function(){
                        window.location.href = "index.php";
                    }, 2000);
                } else{
                    $('.message').html(data);
                }

            }

        });
    }
    function invalidate_transaction(id) {
        $.ajax({
            url : '../Controllers/traitement.php?invalidateTrans='+id,
            type : 'GET',
            success : function(data){
                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Invalidation de la transaction réussie !!!</div>");
                    setTimeout(function(){
                        window.location.href = "index.php";
                    }, 2000);
                } else{
                    $('.message').html(data);
                }

            }
        });
    }

    //Transaction en attente
    function validate_transaction_attente(id) {
        $.ajax({
            url : '../Controllers/traitement.php?validate_transaction='+id,
            type : 'GET',

            success : function(data){

                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Transaction validé avec succcès !!!</div>");
                    setTimeout(function(){
                        window.location.href = "clients_attente.php";
                    }, 2000);
                } else{
                    $('.message').html(data);
                }

            }

        });
    }
    function invalidate_transaction_attente(id) {
        $.ajax({
            url : '../Controllers/traitement.php?invalidateTrans='+id,
            type : 'GET',
            success : function(data){
                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Invalidation de la transaction réussie !!!</div>");
                    setTimeout(function(){
                        window.location.href = "clients_attente.php";
                    }, 2000);
                } else{
                    $('.message').html(data);
                }

            }
        });
    }

    //Transaction validé
    function validate_transaction_valide(id) {
        $.ajax({
            url : '../Controllers/traitement.php?validate_transaction='+id,
            type : 'GET',

            success : function(data){

                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Transaction validé avec succcès !!!</div>");
                    setTimeout(function(){
                        window.location.href = "clients_valide.php";
                    }, 2000);
                } else{
                    $('.message').html(data);
                }

            }

        });
    }
    function invalidate_transaction_valide(id) {
        $.ajax({
            url : '../Controllers/traitement.php?invalidateTrans='+id,
            type : 'GET',
            success : function(data){
                if (data=='success') {
                    $('.message').html("<div class='alert alert-success text-center'>Invalidation de la transaction réussie !!!</div>");
                    setTimeout(function(){
                        window.location.href = "clients_valide.php";
                    }, 2000);
                } else{
                    $('.message').html(data);
                }

            }
        });
    }
</script>


<script src="../Controllers/fonctions.js"></script>

<script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="../assets/plugins/pace/pace.js"></script>
<script src="../assets/scripts/siminta.js"></script>
<!-- Page-Level Plugin Scripts-->
<script src="../assets/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="../assets/plugins/morris/morris.js"></script>
<script src="../assets/scripts/dashboard-demo.js"></script>
