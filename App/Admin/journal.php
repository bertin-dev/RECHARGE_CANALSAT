<?php session_start(); ?>
<?php require '../Config/Config_Server.php';
$connexion = App::getDB();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adsyst Recharge Canal Sat | Journal</title>
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
                <h1 class="page-header">Journal de l'App</h1>
            </div>
            <!--End Page Header -->
        </div>

        <div class="row">

            <div class="col-lg-12">
                <div class="success_new_client"></div>

                <?php
                $nbre = $connexion->rowCount('SELECT id FROM journal');
                if($nbre == 0){
                    echo '<div class="alert alert-warning text-center">Votre journal est vide</div>';
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
                                        <th>utilisateur</th>
                                        <th>type d'opération</th>
                                        <th>IP</th>
                                        <th>Date de l'opération</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    foreach (App::getDB()->query('SELECT journal.id AS Myid, users_id, name, ip, journal.created_at AS creation,
                                                                                  last_name, first_name FROM journal
                                                                           INNER JOIN users
                                                                           ON users.id=journal.users_id
                                                                           ORDER BY Myid DESC') as $journal):

                                        echo '<tr class="odd gradeX">
                                    <td>'.$journal->Myid.'</td>
                                    <td>'.$journal->last_name.' '.$journal->first_name.'</td>
                                    <td>'.$journal->name.'</td>
                                    <td>'.$journal->ip.'</td>
                                    <td>'.date('d/m/Y H:m:s', $journal->creation). '</td>
                                </tr>';
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
