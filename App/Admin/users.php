<?php session_start(); ?>
<?php require '../Config/Config_Server.php';
$connexion = App::getDB();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adsyst Recharge Canal Sat | Utilisateurs Interne</title>
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
                <h1 class="page-header">Liste des utilisateurs</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row">




            <div class="col-lg-12">
                <div class="success_new_client"></div>
                <?php
                $nbre = $connexion->rowCount('SELECT id FROM users WHERE user_state="1"');
                if($nbre == 0){
                    echo '<div class="alert alert-warning text-center">Liste des Utilisateurs vide.</div>';
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
                                                                               WHERE user_state = "1"
                                                                               ORDER BY myId DESC') as $users):

                                     echo '<tr class="odd gradeX">
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

                                        <div class="btn-group pull-right ">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                            <ul class="dropdown-menu slidedown" wfd-invisible="true">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_update_client'.$users->myId.'">
                                                        <i class="fa fa-edit fa-fw"></i> Modifier
                                                    </a>
                                                </li>


                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_delete_client'.$users->myId.'">
                                                        <i class="fa fa-minus fa-fw"></i> Supprimer
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </td>

                                </tr>';
                                     echo '<div class="modal fade" id="modal_update_client'.$users->myId.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel"></h4>
                                        </div>

                                        <div class="modal-body">
                                            <div class="text-center text-info help">Vous pouvez aussi directement modifier ces informations</div>
                                            <div class="text-center message"></div>


                                            <form role="form" class="update_users'.$users->myId.'">
                                            <div class="form-group">
                                                <label>Nom *</label>
                                                <input class="form-control" type="text" value="'.$users->last_name.'" name="last_name">
                                                <input type="hidden" value="'.$users->myId.'" name="id_users">

                                            </div>
                                            
                                            

                    <div class="form-group">
                        <label for="first_name">Prénom </label>
                        <input id="first_name" class="form-control" type="text" name="first_name" value="'.$users->first_name.'">
                    </div>

                    <div class="form-group">
                        <label for="town">Ville </label>
                        <input id="town" class="form-control" type="text" name="town" value="'.$users->town.'">
                    </div>

                    <div class="form-group">
                        <label for="quartier">Quartier </label>
                        <input id="quartier" class="form-control" type="text" name="quartier" value="'.$users->quartier.'">
                    </div>

                    <div class="form-group">
                        <label for="phone">Telephone *</label>
                        <input id="phone" class="form-control" type="tel" name="phone" required value="'.$users->phone.'">

                    </div>

                    <div class="form-group">
                        <label for="email">Email </label>
                        <input id="email" class="form-control" type="email" name="email" value="'.$users->email.'">
                    </div>

                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input id="password" class="form-control" type="password" name="password" required value="'.$users->password.'">
                    </div>';
                                     ?>
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

                                <button class="btn btn-primary btn_update_client" onclick="update_users(<?=$users->myId;?>);return false;">Envoyer</button>
                                            </form>
                                            <?php
                                            echo '</div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>

                            </div>';

                                  echo '<div class="modal fade" id="modal_delete_client'.$users->myId.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Suppression de l\'utilisateur</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="message"></div>
                                            Voulez-vous vraiment supprimer l\'utilisateur <strong>'.$users->last_name.' '.$users->first_name.'</strong>
                                        </div> 
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>


                                            <button type="button" onclick="delete_users('.$users->myId.')" class="btn btn-primary">Oui</button>

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
