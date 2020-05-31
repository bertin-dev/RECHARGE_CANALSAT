<?php session_start(); ?>
<?php require '../Config/Config_Server.php';
$connexion = App::getDB();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adsyst Recharge Canal Sat | Utilisateurs Supprimés</title>
    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="../assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
</head>
<body>
<!--  wrapper -->
<div id="wrapper">
    <!-- navbar top -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
        <!-- navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <h1 class="navbar-brand" href="index.php" style="color: white!important;">Adsyst Recharge CanalSat</h1>
        </div>
        <!-- end navbar-header -->
        <!-- navbar-top-links -->
        <?php require 'notifications.php';?>
        <!-- end navbar-top-links -->

    </nav>
    <!-- end navbar top -->

    <!-- navbar side -->
    <?php require 'sidebar.php'; ?>
    <!-- end navbar side -->
    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Liste des utilisateurs supprimés</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row">




            <div class="col-lg-12">
                <div class="success_new_client"></div>
                <?php
                $nbre = $connexion->rowCount('SELECT id FROM users WHERE user_state="0"');
                if($nbre == 0){
                    echo '<div class="alert alert-warning text-center">Liste des Utilisateurs supprimés vide.</div>';
                }

                else {
                ?>

                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">

                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr class="bg-info">
                                    <th>#Id</th>
                                    <th>Nom</th>
                                    <th>Ville</th>
                                    <th>Quartier</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                    <th>Privilèges</th>
                                    <th>Enregistré</th>
                                    <th>Modifier</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                        foreach (App::getDB()->query('SELECT users.id AS myId, last_name, first_name, town, quartier, phone, email, password, users.updated_at AS updates, users.created_at AS created,
                                                                               role.name AS myRole, subcriptions.name As myAbonnement FROM users
                                                                               INNER JOIN role
                                                                               ON role.id=users.role_id
                                                                               INNER JOIN subcriptions
                                                                               ON users.subcriptions_id=subcriptions.id
                                                                               WHERE user_state = "0"
                                                                               ORDER BY myId DESC') as $users):

                                        echo ' <tr class="odd gradeX">
                                        <td>'.$users->myId.'</td>
                                    <td>'.$users->first_name.' '.$users->last_name.'</td>
                                    <td>'.$users->town.'</td>
                                    <td>'.$users->quartier.'</td>
                                    <td>'.$users->phone.'</td>
                                    <td>'.$users->email.'</td>
                                    <td>'.$users->myRole.'</td>
                                    <td>'.date('d/m/Y H:m:s', $users->created). '</td>
                                    <td>'.date('d/m/Y H:m:s', $users->updates). '</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                            <ul class="dropdown-menu slidedown">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_update_client'.$users->myId.'">
                                                        <i class="fa fa-search fa-fw"></i> Détails
                                                    </a>
                                                </li>


                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_delete_client'.$users->myId.'">
                                                        <i class="fa fa-minus fa-fw"></i> Restaurer
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </td>

                                </tr>';

                                        echo '<div class="modal fade" id="modal_update_client'.$users->myId.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Infos de l\'Utilisateur</h4>
                                        </div>


                                        <div class="modal-body">


                                            <div class="form-group">
                                                <label>Nom: <span class="text-success">'.$users->last_name.'</span></label>
                                            </div>

                                            <div class="form-group">
                                                <label>Prenom : <span class="text-success">'.$users->first_name.'</span></label>
                                            </div>


                                            <div class="form-group">
                                                <label class="">Ville : <span class="text-success">'.$users->town.'</span></label>
                                            </div>

                                            <div class="form-group">
                                                <label>Quartier : <span class="text-success">'.$users->quartier.'</span> </label>
                                            </div>

                                            <div class="form-group">
                                                <label>Phone : <span class="text-success">'.$users->phone.'</span></label>
                                            </div>

                                            <div class="form-group">
                                                <label>Email : <span class="text-success">'.$users->email.'</span></label>
                                            </div>

                                            <div class="form-group">
                                                <label>Password : <span class="text-success">'.$users->password.'</span></label>
                                            </div>
                                            
                                               <div class="form-group">
                                                <label>Role : <span class="text-success">'.$users->myRole.'</span></label>
                                            </div>
                                            
                                               <div class="form-group">
                                                <label>Abonnement : <span class="text-success">'.$users->myAbonnement.'</span></label>
                                            </div>
                                            
                                             <div class="form-group">
                                                <label>Etat : <span class="text-success">Inactif</span></label>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            ';

                                        echo '<div class="modal fade" id="modal_delete_client'.$users->myId.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Restauration de l\'Utilisateur</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="message"></div>
                                            Voulez-vous vraiment restaurer l\'Utilisateur de  <strong>'.$users->last_name.' '.$users->first_name.'</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>


                                            <button type="button" onclick="restaurer_users('.$users->myId.')" class="btn btn-primary">Oui</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                           ';
                                endforeach;
                                        ?>
                                <!-- Form mofif client -->


                                <!-- End Form mofif client  -->

                                <!-- Form suppr client -->


                                <!-- End Form suppr client  -->


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
                    <?php
                }
                ?>
            </div>


        </div>






    </div>
    <!-- end page-wrapper -->

</div>
<!-- end wrapper -->


<?php require 'footer.php';?>

</body>

</html>
