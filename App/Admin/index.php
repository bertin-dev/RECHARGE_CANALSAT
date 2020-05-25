<?php session_start(); ?>
<?php require '../Config/Config_Server.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adsyst Recharge Canal Sat | Tableau de bord Administrateur</title>
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
                    <h1 class="page-header">Tableau de Bord</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                        <i class="fa fa-folder-open"></i><b>&nbsp;Hello ! </b>Welcome Back <b>Jonny Deen </b>
 <i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Support Tickets Pending to Answere. nbsp;
                    </div>
                </div>
                <!--end  Welcome -->
            </div>


            <div class="row">
                <!--quick info section -->
                <div class="col-lg-3">
                    <div class="alert alert-danger text-center">
                        <i class="fa fa-calendar fa-3x"></i>&nbsp;<b>20 </b>Meetings Sheduled This Month

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-success text-center">
                        <i class="fa  fa-beer fa-3x"></i>&nbsp;<b>27 % </b>Profit Recorded in This Month  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-info text-center">
                        <i class="fa fa-rss fa-3x"></i>&nbsp;<b>1,900</b> New Subscribers This Year

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="alert alert-warning text-center">
                        <i class="fa  fa-pencil fa-3x"></i>&nbsp;<b>2,000 $ </b>Payment Dues For Rejected Items
                    </div>
                </div>
                <!--end quick info section -->
            </div>

            <div class="row">




                <div class="col-lg-12">

                    <div class="success_new_client"></div>






                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr class="bg-info">
                                        <!--   <th>#Id</th> -->

                                        <th>Equipement (Numéro de série) </th>
                                        <th>Date d'entrée</th>
                                        <th>Qté entrée</th>
                                        <th>Enrégistrée par</th>
                                        <th>Etat</th>
                                        <th>Validée par</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="odd gradeX">

                                        <td> Routeur MIKROTIK (k-500)</td>
                                        <td> 2018-01-08 13:02:16</td>
                                        <td> 1</td>
                                        <td> super admin</td>
                                        <td>
                                            <btn class="btn-danger btn-xs">En attente</btn>

                                        </td>
                                        <td> super admin</td>

                                        <td>
                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu slidedown" wfd-invisible="true">
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_update_client">
                                                            <i class="fa fa-edit"></i> modifier
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_update_client">
                                                            <i class="fa fa-check"></i> Valider
                                                        </a>
                                                    </li>


                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_delete_client">
                                                            <i class="fa fa-minus fa-fw"></i> Supprimer
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                        </td>

                                    </tr>


                                    <tr class="odd gradeX">

                                        <td> PARABOLE  (32)</td>
                                        <td> 2018-01-08 13:03:14</td>
                                        <td> 10</td>
                                        <td> super admin</td>
                                        <td>

                                            <btn class="btn-success btn-xs">Validée</btn>

                                        </td>
                                        <td> super admin</td>

                                        <td>
                                            <div class="btn-group pull-right ">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu slidedown" wfd-invisible="true">
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_update_client">
                                                            <i class="fa fa-edit"></i> modifier
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_update_client">
                                                            <i class="fa fa-check"></i> Valider
                                                        </a>
                                                    </li>


                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_delete_client">
                                                            <i class="fa fa-minus fa-fw"></i> Supprimer
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                        </td>

                                    </tr>


                                    <tr class="odd gradeX">

                                        <td> PARABOLE  (32)</td>
                                        <td> 2018-01-08 13:04:14</td>
                                        <td> 10</td>
                                        <td> super admin</td>
                                        <td>
                                            <btn class="btn-danger btn-xs">En attente</btn>

                                        </td>
                                        <td> super admin</td>

                                        <td>
                                            <div class="btn-group pull-right ">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu slidedown" wfd-invisible="true">
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_update_client">
                                                            <i class="fa fa-edit"></i> modifier
                                                        </a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_update_client">
                                                            <i class="fa fa-check"></i> Valider
                                                        </a>
                                                    </li>


                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_delete_client">
                                                            <i class="fa fa-minus fa-fw"></i> Supprimer
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                        </td>

                                    </tr>



                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->

                </div>


            </div>


         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->






    <!-- ajout Utilisateur -->

    <div class="modal fade" id="modal_add_client" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Nouvel Utilisateur</h4>
                </div>
                <div class="modal-body">
                    <div class="text-center message"></div>


                    <form role="form" class="add_client">
                        <div class="form-group">
                            <label for="nom">Nom *</label>
                            <input class="form-control" type="text" name="nom">
                        </div>


                        <div class="form-group">
                            <label for="prenom">Prénom </label>
                            <input class="form-control" type="text" name="prenom">
                        </div>

                        <div class="form-group">
                            <label>Email *</label>
                            <input class="form-control" type="email" name="email">

                        </div>

                        <div class="form-group">
                            <label>Telephone *</label>
                            <input class="form-control" type="tel" name="tel1">

                        </div>

                        <div class="form-group">
                            <label for="role">Role *</label>
                            <select id="role" name="role"
                                    class="form-control">
                                <?php
                                foreach (App::getDB()->query('SELECT id, name FROM role ORDER BY id DESC') as $role):
                                    echo '<option value="' . $role->id . '">' . $role->name . '</option>';
                                endforeach;
                                ?>
                            </select>
                        </div>


                        <button  class="btn btn-primary btn_add_client">Envoyer</button>
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
                    <h4 class="modal-title" id="myModalLabel">Nouvel Abonnements</h4>
                </div>
                <div class="modal-body">
                    <div class="text-center message"></div>


                    <form role="form" class="add_client">
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


                        <button  class="btn btn-primary btn_add_client">Envoyer</button>
                        <button type="reset" class="btn btn-success">Effacer</button>
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
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="../assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="../assets/plugins/morris/morris.js"></script>
    <script src="../assets/scripts/dashboard-demo.js"></script>

</body>

</html>
