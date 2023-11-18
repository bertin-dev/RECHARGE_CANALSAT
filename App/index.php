<?php session_start(); ?>
<?php require 'Config/Config_Server.php';
$connexion = App::getDB();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adsyst Recharge CanalSat | Recharge</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <h4 class="col-md-4 col-md-offset-4 text-center logo-margin" style="font-size: 30px; color:white;">
                Adsyst Recharge CanalSat
                </h4>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div id="rapport_recharge" class="alert alert-info text-center message">Veuillez Remplir Tous les Champs</div>

                    <div class="panel-heading">
                        <h3 class="panel-title">Recharge</h3>
                    </div>
                    <div class="panel-body">
                         <form role="form" id="recharge" method="post"
                              onsubmit="return false;" accept-charset="UTF-8">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nom et Prénom" name="nom" type="text" autofocus
                                           value="<?php if (isset($_POST['nom'])) {
                                                                   echo $_POST['nom'];} ?>">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Téléphone" name="telephone" type="number" required value="<?php if (isset($_POST['telephone'])) {
                                        echo $_POST['telephone'];} ?>">
                                </div>

                                <div class="form-group">
                                    <label for="depot">Canal de paiement</label>
                                    <select id="depot" name="depot"
                                            class="form-control">
                                        <?php
                                        foreach (App::getDB()->query('SELECT id, name, mobile_operator FROM recharge ORDER BY id DESC') as $subcriptions):
                                            echo '<option title="'.$subcriptions->mobile_operator .'" value="' . $subcriptions->id . '">' . $subcriptions->name . '</option>';
                                        endforeach;
                                        ?>
                                    </select>
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
                                        foreach (App::getDB()->query('SELECT id, name FROM subcriptions ORDER BY id DESC') as $subcriptions):
                                            echo '<option value="' . $subcriptions->id . '">' . $subcriptions->name . '</option>';
                                        endforeach;
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>
                                        <a href="login.php" title="login"> se Connecter</a>
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input id="recharge_valid" type="submit" class="btn btn-lg btn-success btn-block" value="Effectuer"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'footer.php';?>

</body>

</html>
