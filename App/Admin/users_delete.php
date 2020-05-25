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
                <h1 class="page-header">Liste des utilisateurs supprimés</h1>
            </div>
            <!--End Page Header -->
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
                            <div class="modal fade" id="modal_update_client46" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Infos du compte</h4>
                                        </div>


                                        <div class="modal-body">


                                            <div class="form-group">
                                                <label>Nom du compte : <span class="text-success"> bibi</span></label>

                                            </div>

                                            <div class="form-group">
                                                <label>Type de compte : <span class="text-success">
                                            Résidentiel

                                            </span></label>
                                            </div>


                                            <div class="form-group">
                                                <label class="">Pays actuel : <span class="text-success">Burundi</span></label>

                                            </div>

                                            <div class="form-group">
                                                <label>Ville / village : <span class="text-success">ertert</span> </label>

                                            </div>

                                            <div class="form-group">
                                                <label>Email : <span class="text-success">8ssdi2+ctjq120acn524@sharklasers.com</span></label>

                                            </div>

                                            <div class="form-group">
                                                <label>Tel 1 : <span class="text-success">122222222</span></label>

                                            </div>

                                            <div class="form-group">
                                                <label>Tel 2 : <span class="text-success"></span></label>

                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                                        </div>
                                    </div>
                                </div>

                            </div><div class="modal fade" id="modal_delete_client46" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Restauration du compte</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="message"></div>
                                            Voulez-vous vraiment restaurer le compte de  <strong>BIBI</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>


                                            <button type="button" onclick="restaurer_client(46)" class="btn btn-primary">Oui</button>

                                        </div>
                                    </div>
                                </div>
                            </div><table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr class="bg-info">
                                    <th>#Id</th>
                                    <th>Nom compte</th>
                                    <th>Localisation</th>
                                    <th>Contacts</th>
                                    <th>Catégorie</th>
                                    <th>Type</th>
                                    <th>E-mail</th>
                                    <th>Enrégistré le</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd gradeX">
                                    <td> 46</td>
                                    <td> bibi</td>
                                    <td> Burundi  (ertert)</td>
                                    <td> 122222222 </td>


                                    <td>Résidentiel</td>





                                    <td>Prospect</td>


                                    <td> 8ssdi2+ctjq120acn524@sharklasers.com</td>

                                    <td> 2017-12-01 11:35:02</td>

                                    <td>

                                        <div class="btn-group pull-right">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                            <ul class="dropdown-menu slidedown">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_update_client46">
                                                        <i class="fa fa-search fa-fw"></i> Détails
                                                    </a>
                                                </li>


                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_delete_client46">
                                                        <i class="fa fa-minus fa-fw"></i> Restaurer
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </td>

                                </tr>
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
