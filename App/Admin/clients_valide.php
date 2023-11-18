<?php session_start(); ?>
<?php require '../Config/Config_Server.php';
$connexion = App::getDB();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adsyst Recharge Canal Sat | Clients validés</title>
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
                <h1 class="page-header">Clients validés</h1>
            </div>
            <!--End Page Header -->
        </div>


        <div class="row">

            <div class="col-lg-12">

                <div class="success_new_client"></div>
                <?php
                $nbre = $connexion->rowCount('SELECT transaction.id AS myId, ref_num_transaction, transaction_state, 
                                                                               last_name, phone, transaction.created_at AS created,
                                                                               recharge.name AS myRecharge, numero_abonnement,
                                                                               subcriptions.name AS abonnement
                                                                               FROM users
                                                                               INNER JOIN transaction 
                                                                               ON transaction.users_id=users.id
                                                                               INNER JOIN recharge
                                                                               ON transaction.recharge_id=recharge.id
                                                                               INNER JOIN subcriptions
                                                                               ON subcriptions.id=users.subcriptions_id
                                                                               WHERE transaction_state="1"
                                                                               ORDER BY myId DESC');
                if($nbre == 0){
                    echo '<div class="alert alert-warning text-center">Liste des clients validés vide.</div>';
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
                                        <!--   <th>#Id</th> -->
                                        <th>#ID </th>
                                        <th>N°Transaction</th>
                                        <th>Type Opération</th>
                                        <th>Abonnement</th>
                                        <th>Client</th>
                                        <th>Téléphone</th>
                                        <th>Etat</th>
                                        <th>Validée par</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach (App::getDB()->query('SELECT transaction.id AS myId, ref_num_transaction, transaction_state, 
                                                                               last_name, phone, transaction.created_at AS created,
                                                                               recharge.name AS myRecharge, numero_abonnement,
                                                                               subcriptions.name AS abonnement
                                                                               FROM users
                                                                               INNER JOIN transaction 
                                                                               ON transaction.users_id=users.id
                                                                               INNER JOIN recharge
                                                                               ON transaction.recharge_id=recharge.id
                                                                               INNER JOIN subcriptions
                                                                               ON subcriptions.id=users.subcriptions_id
                                                                               WHERE transaction_state="1"
                                                                               ORDER BY myId DESC') as $users):

                                        echo '<tr class="odd gradeX">

                                        <td>'.$users->myId.'</td>
                                        <td>'.$users->ref_num_transaction.'</td>
                                        <td>'.$users->myRecharge.'</td>
                                        <td>'.$users->abonnement.'</td>
                                         <td>'.$users->last_name.'</td>
                                         <td>'.$users->phone.'</td>
                                        <td>';

                                        if($users->transaction_state == '0'){
                                            echo '<btn class="btn-danger btn-xs">En attente</btn>
                                                  <td>???</td>';
                                        } else{
                                            echo '<btn class="btn-success btn-xs">Validée</btn>
                                                  <td>Bertin</td>';
                                        }
                                        echo '</td>
                                   
                                        <td>
                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-chevron-down"></i>
                                                </button>
                                                <ul class="dropdown-menu slidedown" wfd-invisible="true">
                                                    <!--<li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_update_client'.$users->myId.'">
                                                            <i class="fa fa-edit"></i> modifier
                                                        </a>
                                                    </li>-->
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_validate'.$users->myId.'">
                                                            <i class="fa fa-check"></i> Valider
                                                        </a>
                                                    </li>


                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="#" data-toggle="modal" data-target="#modal_invalider'.$users->myId.'">
                                                            <i class="fa fa-minus fa-fw"></i> Invalider
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


                                            <form role="form" class="update_client'.$users->myId.'">
                                            <div class="form-group">
                                                <label>Nom *</label>
                                                <input class="form-control" type="text" value="'.$users->last_name.'" name="last_name">
                                                <input type="hidden" value="'.$users->myId.'" name="id_trans">
                                            </div>
             

                    <div class="form-group">
                        <label for="phone">Telephone *</label>
                        <input id="phone" class="form-control" type="tel" name="phone" required value="'.$users->phone.'">
                    </div>
                    
                          <div class="form-group">
                                    <label for="depot">Canal de paiement</label>
                                    <select id="depot" name="depot"
                                            class="form-control">';

                                        foreach (App::getDB()->query('SELECT id, name, mobile_operator FROM recharge ORDER BY id DESC') as $subcriptions):
                                            echo '<option title="'.$subcriptions->mobile_operator .'" value="' . $subcriptions->id . '">' . $subcriptions->name .'</option>';
                                        endforeach;

                                        echo '</select>
                                </div>

                    <div class="form-group">
                        <label for="abonnement">Numéro Abonnement </label>
                        <input id="abonnement" class="form-control" type="text" name="abonnement" value="'.$users->numero_abonnement.'">
                    </div>';
                                        ?>
                                        <div class="form-group">
                                            <label for="bouquet">Bouquet *</label>
                                            <select id="bouquet" name="bouquet"
                                                    class="form-control">
                                                <?php
                                                foreach (App::getDB()->query('SELECT id, name FROM subcriptions ORDER BY id DESC') as $subcriptions):
                                                    echo '<option title="'.$subcriptions->description.'" value="' . $subcriptions->id . '">' . $subcriptions->name . '</option>';
                                                endforeach;
                                                ?>
                                            </select>
                                        </div>

                                        <button class="btn btn-primary btn_update_client" onclick="update_clients(<?=$users->myId;?>);return false;">Envoyer</button>
                                        </form>
                                        <?php
                                        echo '</div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>

                            </div>';

                                        echo '<div class="modal fade" id="modal_validate'.$users->myId.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Validation des transaction</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="message"></div>
                                            Voulez-vous vraiment Valider la transaction de référence  <strong>'.$users->ref_num_transaction.'</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>


                                            <button type="button" onclick="validate_transaction_valide('.$users->myId.')" class="btn btn-primary">Oui</button>

                                        </div>
                                    </div>
                                </div>
                            </div>';

                                        echo '<div class="modal fade" id="modal_invalider'.$users->myId.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Validation des transaction</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="message"></div>
                                            Voulez-vous vraiment invalider la transaction de référence  <strong>'.$users->ref_num_transaction.'</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>


                                            <button type="button" onclick="invalidate_transaction_valide('.$users->myId.')" class="btn btn-primary">Oui</button>

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

<?php require 'footer.php'; ?>

</body>

</html>
