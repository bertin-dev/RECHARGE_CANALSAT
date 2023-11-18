<?php session_start(); ?>
<?php require '../Config/Config_Server.php';
$connexion = App::getDB();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adsyst Recharge Canal Sat | List des abonnements</title>
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
                <h1 class="page-header">Liste des abonnements</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row">




            <div class="col-lg-12">
                <div class="success_new_client"></div>

                <?php
                $nbre = $connexion->rowCount('SELECT id FROM subcriptions WHERE subcription_state="1"');
                if($nbre == 0){
                    echo '<div class="alert alert-warning text-center">Liste des Abonnements vide.</div>';
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
                                    <th>Type d'Abonnement</th>
                                    <th>Description</th>
                                    <th>Montant</th>
                                    <th>Distributeur</th>
                                    <th>Enrégistré le</th>
                                    <th>Modifié le</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                        foreach (App::getDB()->query('SELECT * FROM subcriptions
                                                                               WHERE subcription_state = "1"
                                                                               ORDER BY id DESC') as $subcriptions):

                              echo '<tr class="odd gradeX">
                                    <td>'.$subcriptions->id.'</td>
                                    <td>'.$subcriptions->name.'</td>
                                    <td>'.$subcriptions->description.'</td>
                                    <td>'.$subcriptions->amount.'</td>
                                    <td>'.$subcriptions->distributor.'</td>
                                    <td>'.date('d/m/Y H:m:s', $subcriptions->created_at). '</td>
                                    <td>'.date('d/m/Y H:m:s', $subcriptions->updated_at). '</td>
                                    <td>
                                        <div class="btn-group pull-right ">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                            <ul class="dropdown-menu slidedown" wfd-invisible="true">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_update_client'.$subcriptions->id.'">
                                                        <i class="fa fa-edit fa-fw"></i> Modifier
                                                    </a>
                                                </li>


                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_delete_client'.$subcriptions->id.'">
                                                        <i class="fa fa-minus fa-fw"></i> Supprimer
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </td>

                                </tr>';

                                        echo '<div class="modal fade" id="modal_update_client'.$subcriptions->id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Infos de l\'abonnement</h4>
                                        </div>


                                        <div class="modal-body">
                                            <div class="text-center text-info help">Vous pouvez aussi directement modifier ces informations</div>
                                            <div class="text-center message"></div>


                                            <form role="form" class="update_client'.$subcriptions->id.'">
                                            <div class="form-group">
                                                <label>Type Abonnement</label>
                                                <input class="form-control" type="text" value="'.$subcriptions->name.'" name="titre">
                                                <input type="hidden" value="'.$subcriptions->id.'" name="id_titre">
                                            </div>


                                            <div class="form-group">
                                                <label>Description</label>
                                                <input class="form-control" type="text" value="'.$subcriptions->description.'" name="description">
                                            </div>

                                            <div class="form-group">
                                                <label>Montant</label>
                                                <input class="form-control" type="number" value="'.$subcriptions->amount.'" name="amount">
                                            </div>

                                            <div class="form-group">
                                                <label>Distributeur </label>
                                                <input class="form-control" type="text" value="'.$subcriptions->distributor.'" name="distributor">
                                            </div>';
                                        ?>
                                            
                                            <button class="btn btn-primary btn_update_client" onclick="update_abonnement(<?=$subcriptions->id;?>);return false;">Envoyer</button>
                                          <?php
                                            echo '</form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>';

                                        echo '<div class="modal fade" id="modal_delete_client'.$subcriptions->id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Suppression Abonnement</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="message"></div>
                                            Voulez-vous vraiment supprimer abonnement  <strong>'.$subcriptions->name.'</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>


                                            <button type="button" onclick="delete_abonnement('.$subcriptions->id.')" class="btn btn-primary">Oui</button>

                                        </div>
                                    </div>
                                </div>
                            </div>';
                                        endforeach;
                                        ?>


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
