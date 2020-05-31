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


function nettoieProtect(){

    foreach($_POST as $k => $v){
        $v=strip_tags(trim($v));
        $_POST[$k]=$v;
    }

    foreach($_GET as $k => $v){
        $v=strip_tags(trim($v));
        $_GET[$k]=$v;
    }

    foreach($_REQUEST as $k => $v){
        $v=strip_tags(trim($v));
        $_REQUEST[$k]=$v;
    }

}

// Connexion à la base de données
require '../Config/Config_Server.php';
$connexion = App::getDB();
nettoieProtect();
extract($_POST);

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


// souscription
if(isset($_GET['singUp'])) {
    $msg = "";

    if(is_numeric($_POST['last_name'][0])){
        $msg = 'Le Nom doit commencer par une lettre';
        //exit;
    }
    // Vérification de la validité des champs
    if (!preg_match('/^[A-Za-z0-9-_ ]{3,50}$/', $_POST['last_name'])) {
        $msg = "Le Nom est Invalid";
        //exit();
    }

    /*-------------------------------*/
    if(is_numeric($_POST['first_name'][0])){
        $msg = 'Le Prenom doit commencer par une lettre';
        //exit;
    }

    if (!preg_match('/^[A-Za-z0-9-_ ]{3,50}$/', $_POST['first_name'])) {
        $msg = "Le Prenom est Invalid";
        //exit();
    }


    if (!preg_match('/^[0-9-_ ]{9}$/', $_POST['phone'])) {
        $msg = "Le numéro est Invalid";
        //exit();
    }


    /*-------------------------------*/
    if(is_numeric($_POST['email'][0])){
        $msg = 'L\'email doit commencer par une lettre';
        //exit;
    }
    if (!preg_match('/^[A-Z\d\._-]+@[A-Z\d\.-]{2,}\.[A-Z]{2,4}$/i', $_POST['email'])) {
        $msg = "Email Invalid";
        //exit();
    }

    /*---------------------------------------------------*/

    if (!preg_match('/^[A-Za-z0-9_ ]{4,50}$/', $_POST['password'])) {
        $msg = "password Invalid";
        //exit();
    }

    $_POST['last_name'] = strtolower(stripslashes(htmlspecialchars($_POST['last_name'])));
    $_POST['first_name'] = strtolower(stripslashes(htmlspecialchars($_POST['first_name'])));
    $_POST['town'] = strtolower(stripslashes(htmlspecialchars($_POST['town'])));
    $_POST['quartier'] = strtolower(stripslashes(htmlspecialchars($_POST['quartier'])));
    $_POST['phone'] = strtolower(stripslashes(htmlspecialchars($_POST['phone'])));
    $_POST['email'] = strtolower(stripslashes(htmlspecialchars($_POST['email'])));
    $_POST['password'] = stripslashes(htmlspecialchars($_POST['password']));
    $_POST['password'] = sha1($_POST['password']);

    // Connexion à la base de données

    $nbre = $connexion->rowCount('SELECT id FROM users WHERE phone="'.$_POST['phone'].'" 
     OR email="'.$_POST['email'].'"');

    if($nbre > 0){
        $msg = 'numéro ou email déjà utilisé';
        //exit;
    }

    else {

        nettoieProtect();
        extract($_POST);

            //$id_forum = $connexion->prepare_request('SELECT id_blog FROM blog', array());
            $connexion->insert('INSERT INTO users(last_name, first_name, town, quartier, phone, email, password, role_id, subcriptions_id, user_state, created_at) 
                                      VALUES(?,?,?,?,?,?,?,?,?,?,?)', [$_POST['last_name'], $_POST['first_name'], $_POST['town'], $_POST['quartier'], $_POST['phone'],
                $_POST['email'], $_POST['password'], $_POST['role'], $_POST['subcriptions'], '1',  time()]);

            $max = $connexion->prepare_request('SELECT Max(id) AS max_id FROM users ORDER BY id DESC LIMIT 1 ', array());

            $_SESSION['ID_USER'] = $max['max_id'];
            $_SESSION['EMAIL_USER'] = $_POST['email'];


        $connexion->insert('INSERT INTO journal(users_id, name, ip, created_at)
                                               VALUES(?, ?, ?, ?)', array($max['max_id'], 'Enregistrement Utilisateur', get_ip(), time()));

            $msg = 'success';


    }

    $data = array(
        'resultat' => $msg
    );
    echo json_encode($data);

}

//abonnements
if(isset($_GET['subcription'])) {
    $msg = "";

    if(is_numeric($_POST['titre'][0])){
        $msg = "Le Nom de l'abonnement doit commencer par une lettre";
        //exit;
    }
    // Vérification de la validité des champs
    if (!preg_match('/^[A-Za-z0-9-_ ]{3,50}$/', $_POST['titre'])) {
        $msg = "Le Nom de l'abonnement est Invalid";
        //exit();
    }

    $_POST['titre'] = strtolower(stripslashes(htmlspecialchars($_POST['titre'])));
    $_POST['description'] = strtolower(stripslashes(htmlspecialchars($_POST['description'])));
    $_POST['montant'] = strtolower(stripslashes(htmlspecialchars($_POST['montant'])));
    $_POST['distributeur'] = strtolower(stripslashes(htmlspecialchars($_POST['distributeur'])));

    // Connexion à la base de données

    $nbre = $connexion->rowCount('SELECT id FROM subcriptions WHERE name="'.$_POST['titre'].'"');

    if($nbre > 0){
        $msg = 'cet abonnement existe déjà';
        //exit;
    }

    else {

        nettoieProtect();

        //$id_forum = $connexion->prepare_request('SELECT id_blog FROM blog', array());
        $connexion->insert('INSERT INTO subcriptions(name, description, amount, distributor, subcription_state, created_at) 
                                      VALUES(?,?,?,?,?,?)', [$_POST['titre'], $_POST['description'], intval($_POST['montant']), $_POST['distributeur'], '1', time()]);

        $max = $connexion->prepare_request('SELECT Max(id) AS max_id FROM users ORDER BY id DESC LIMIT 1 ', array());



        $connexion->insert('INSERT INTO journal(users_id, name, ip, created_at)
                                               VALUES(?, ?, ?, ?)', array($compte, 'Enregistrement Abonnement', get_ip(), time()));

        $msg = 'success';


    }

    $data = array(
        'resultat' => $msg
    );
    echo json_encode($data);

}