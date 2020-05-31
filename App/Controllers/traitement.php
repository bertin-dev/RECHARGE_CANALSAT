<?php
session_start();

if(isset($_SESSION['ID_USER'])) {
    $compte = intval($_SESSION['ID_USER']);
}
else if(isset($_COOKIE['ID_USER'])) {
    $compte = intval($_COOKIE['ID_USER']);
}
else {
    $compte = 0;
}

require '../Config/Config_Server.php';
$connexion = App::getDB();


//recuperation de la veritable adresse ip du visiteur
function get_ip(){

    //IP si internet partagé
    if(isset($_SERVER['HTTP_CLIENT_IP'])){
        return $_SERVER['HTTP_CLIENT_IP'];
    }


    //IP derriere un proxy
    elseif(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    //IP normal
    else{
        return isset($_SERVER['REMOTE_ADDR'])? $_SERVER['REMOTE_ADDR'] : '';
    }
}

//mise à jour abonnement
if (isset($_GET['update_abonne'])) {


	if (!isset($_POST['titre']) || empty($_POST['titre'])) {

        echo "<div class='alert alert-danger'>Le type d'abonnement est obligatoire</div>";

    }elseif(!isset($_POST['id_titre']) || empty($_POST['id_titre'])){

        echo "<div class='alert alert-danger'>Ne truquez pas les infos SVP</div>";

    }elseif(!isset($_POST['amount']) || empty($_POST['amount'])){

        echo "<div class='alert alert-danger'>Veuillez inserez le montant</div>";

    }elseif(!isset($_POST['distributor']) || empty($_POST['distributor'])){

        echo "<div class='alert alert-danger'>Veuillez inserer un distributeur</div>";

    }else{

        $id_titre=htmlspecialchars(trim($_POST['id_titre']));
        $titre=htmlspecialchars(trim($_POST['titre']));
        $desc=htmlspecialchars(trim($_POST['description']));
        $montant=htmlspecialchars(trim($_POST['amount']));
        $distributeur=htmlspecialchars(trim($_POST['distributor']));

        App::getDB()->update('UPDATE subcriptions SET name=:name, description=:description, amount=:amount,
                                              distributor=:distributor, updated_at=:updated_at 
                                       WHERE id=:id',
                                       array('name' => $titre, 'description' => $desc, 'amount' => $montant,
                                              'distributor' => $distributeur, 'updated_at' => time(),
                                              'id' => $id_titre));

        $connexion->insert('INSERT INTO journal(users_id, name, ip, created_at)
                                               VALUES(?, ?, ?, ?)', array($compte, 'Modification de l\'Abonnement', get_ip(), time()));


        echo "success";
    }


}


//suppression abonnement
if (isset($_GET['deleteAbon'])) {

    if(!isset($_GET['deleteAbon']) || empty($_GET['deleteAbon'])){

        echo "<div class='alert alert-danger'>Ne truquez pas les infos SVP</div>";

    }else{

        $id=htmlspecialchars(trim($_GET['deleteAbon']));

        App::getDB()->update('UPDATE subcriptions SET subcription_state=:state, deleted_at=:deleted_at  
                                       WHERE id=:id',
            array('state' => '0', 'deleted_at' => time(), 'id' => $id));

        $connexion->insert('INSERT INTO journal(users_id, name, ip, created_at)
                                               VALUES(?, ?, ?, ?)', array($compte, 'Supression de l\'Abonnement', get_ip(), time()));


        echo "success";

    }


}

//restauration abonnement
if (isset($_GET['restaure_abonne'])) {

    if(!isset($_GET['restaure_abonne']) || empty($_GET['restaure_abonne'])){

        echo "<div class='alert alert-danger'>Ne truquez pas les infos SVP</div>";

    }else{

        $id=htmlspecialchars(trim($_GET['restaure_abonne']));



        App::getDB()->update('UPDATE subcriptions SET subcription_state=:state, restaured_at=:restaured_at  
                                       WHERE id=:id',
            array('state' => '1', 'restaured_at' => time(), 'id' => $id));

        $connexion->insert('INSERT INTO journal(users_id, name, ip, created_at)
                                               VALUES(?, ?, ?, ?)', array($compte, 'Restauration de l\'Abonnement', get_ip(), time()));


        echo "success";

    }

}

//mise à jour utilisateurs
if (isset($_GET['update_users'])) {

    if (!isset($_POST['last_name']) || empty($_POST['last_name'])) {

        echo "<div class='alert alert-danger'>Le Nom est obligatoire</div>";

    }elseif(!isset($_POST['id_users']) || empty($_POST['id_users'])){

        echo "<div class='alert alert-danger'>Ne truquez pas les infos SVP</div>";

    }elseif(!isset($_POST['phone']) || empty($_POST['phone'])){

        echo "<div class='alert alert-danger'>Veuillez inserez votre numéro de téléphone</div>";

    }elseif(!isset($_POST['password']) || empty($_POST['password'])){

        echo "<div class='alert alert-danger'>Veuillez inserer un mot de passe</div>";

    }else{

        $id_users=htmlspecialchars(trim($_POST['id_users']));
        $nom=htmlspecialchars(trim($_POST['last_name']));
        $prenom=htmlspecialchars(trim($_POST['first_name']));
        $town=htmlspecialchars(trim($_POST['town']));
        $quartier=htmlspecialchars(trim($_POST['quartier']));
        $phone=htmlspecialchars(trim($_POST['phone']));
        $email=htmlspecialchars(trim($_POST['email']));
        $_POST['password'] = stripslashes(htmlspecialchars($_POST['password']));
        $password= sha1($_POST['password']);
        $role=htmlspecialchars(trim($_POST['role']));
        $subcriptions=htmlspecialchars(trim($_POST['subcriptions']));

        App::getDB()->update('UPDATE users SET last_name=:last_name, first_name=:first_name, town=:town,
                                              quartier=:quartier, phone=:phone, email=:email, password=:password,
                                              role_id=:role_id, subcriptions_id=:subcriptions_id, updated_at=:updated_at 
                                       WHERE id=:id',
            array('last_name' => $nom, 'first_name' => $prenom, 'town' => $town,
                'quartier' => $quartier, 'phone' => $phone, 'email' => $email, 'password' => $password,
                'role_id' => $role, 'subcriptions_id' => $subcriptions, 'updated_at' => time(),
                'id' => $id_users));

        $connexion->insert('INSERT INTO journal(users_id, name, ip, created_at)
                                               VALUES(?, ?, ?, ?)', array($compte, 'Modification de l\'utilisateur', get_ip(), time()));


        echo "success";
    }


}

//suppression utilisateur
if (isset($_GET['deleteUsers'])) {

    if(!isset($_GET['deleteUsers']) || empty($_GET['deleteUsers'])){

        echo "<div class='alert alert-danger'>Ne truquez pas les infos SVP</div>";

    }else{

        $id=htmlspecialchars(trim($_GET['deleteUsers']));

        App::getDB()->update('UPDATE users SET user_state=:state, deleted_at=:deleted_at  
                                       WHERE id=:id',
            array('state' => '0', 'deleted_at' => time(), 'id' => $id));

        $connexion->insert('INSERT INTO journal(users_id, name, ip, created_at)
                                               VALUES(?, ?, ?, ?)', array($compte, 'Supression de l\'Utilisateur', get_ip(), time()));


        echo "success";

    }


}


    //restauration utilisateurs
if (isset($_GET['restaure_users'])) {

    if(!isset($_GET['restaure_users']) || empty($_GET['restaure_users'])){

        echo "<div class='alert alert-danger'>Ne truquez pas les infos SVP</div>";

    }else{

        $id=htmlspecialchars(trim($_GET['restaure_users']));


        App::getDB()->update('UPDATE users SET user_state=:state, restaured_at=:restaured_at  
                                       WHERE id=:id',
            array('state' => '1', 'restaured_at' => time(), 'id' => $id));

        $connexion->insert('INSERT INTO journal(users_id, name, ip, created_at)
                                               VALUES(?, ?, ?, ?)', array($compte, 'Restauration de l\'Utilisateur', get_ip(), time()));


        echo "success";

    }

}