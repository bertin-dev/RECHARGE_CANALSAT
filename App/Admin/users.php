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
                <h1 class="page-header">Liste des utilisateurs</h1>
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
                            <div class="modal fade" id="modal_update_client49" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Infos du compte</h4>
                                        </div>


                                        <div class="modal-body">
                                            <div class="text-center text-info help">Vous pouvez aussi directement modifier ces informations</div>
                                            <div class="text-center message"></div>


                                            <form role="form" class="update_client49"></form>
                                            <div class="form-group">
                                                <label>Nom du compte</label>
                                                <input class="form-control" type="text" value=" papou" name="nom">
                                                <input type="hidden" value="49" name="id_client">

                                            </div>

                                            <div class="form-group">
                                                <label class="text-success">Type de compte actuel (

                                                    Résidentiel


                                                    )</label>
                                                <select class="form-control" name="type_compte">
                                                    <option value="1" selected="">Changer...</option>
                                                    <option value="1">Résidentiel</option>
                                                    <option value="2">Entreprise</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label class="text-success">Pays actuel (Angola)</label>
                                                <select class="form-control" name="pays">

                                                    <option value="AGO" selected="">Changer...</option>


                                                    <option value="AGO">Angola</option>


                                                    <option value="BDI">Burundi</option>


                                                    <option value="BEN">Bénin</option>


                                                    <option value="BFA">Burkina Faso</option>


                                                    <option value="BWA">Botswana</option>


                                                    <option value="CAF">République Centrafricaine</option>


                                                    <option value="CIV">Côte d'Ivoire</option>


                                                    <option value="CMR">Cameroun</option>


                                                    <option value="COD">République Démocratique du Congo</option>


                                                    <option value="COG">République du Congo</option>


                                                    <option value="COM">Comores</option>


                                                    <option value="CPV">Cap-vert</option>


                                                    <option value="DJI">Djibouti</option>


                                                    <option value="ERI">Érythrée</option>


                                                    <option value="ETH">Éthiopie</option>


                                                    <option value="GAB">Gabon</option>


                                                    <option value="GHA">Ghana</option>


                                                    <option value="GIN">Guinée</option>


                                                    <option value="GMB">Gambie</option>


                                                    <option value="GNB">Guinée-Bissau</option>


                                                    <option value="GNQ">Guinée Équatoriale</option>


                                                    <option value="KEN">Kenya</option>


                                                    <option value="LBR">Libéria</option>


                                                    <option value="LSO">Lesotho</option>


                                                    <option value="MDG">Madagascar</option>


                                                    <option value="MLI">Mali</option>


                                                    <option value="MOZ">Mozambique</option>


                                                    <option value="NAM">Namibie</option>


                                                    <option value="NER">Niger</option>


                                                    <option value="NGA">Nigéria</option>


                                                    <option value="RWA">Rwanda</option>


                                                    <option value="SDN">Soudan</option>


                                                    <option value="SEN">Sénégal</option>


                                                    <option value="SLE">Sierra Leone</option>


                                                    <option value="SOM">Somalie</option>


                                                    <option value="STP">Sao Tomé-et-Principe</option>


                                                    <option value="SYC">Seychelles</option>


                                                    <option value="TCD">Tchad</option>


                                                    <option value="TGO">Togo</option>


                                                    <option value="TZA">République-Unie de Tanzanie</option>


                                                    <option value="UGA">Ouganda</option>


                                                    <option value="ZAF">Afrique du Sud</option>


                                                    <option value="ZMB">Zambie</option>


                                                    <option value="ZWE">Zimbabwe</option>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Ville / village</label>
                                                <input class="form-control" type="text" value=" vbnvbn" name="ville">

                                            </div>

                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="email" value=" vbnvbn" name="email">

                                            </div>

                                            <div class="form-group">
                                                <label>Tel 1 </label>
                                                <input class="form-control" type="text" value=" 65555555" name="tel1">

                                            </div>

                                            <div class="form-group">
                                                <label>Tel 2 </label>
                                                <input class="form-control" type="text" value=" " name="tel2">

                                            </div>


                                            <button class="btn btn-primary btn_update_client" onclick="update_client(49);return false;">Envoyer</button>




                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                                        </div>
                                    </div>
                                </div>

                            </div><div class="modal fade" id="modal_delete_client49" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Suppression du compte</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="message"></div>
                                            Voulez-vous vraiment supprimer le compte de  <strong>PAPOU</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>


                                            <button type="button" onclick="delete_client(49)" class="btn btn-primary">Oui</button>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="modal fade" id="modal_update_client48" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Infos du compte</h4>
                                        </div>


                                        <div class="modal-body">
                                            <div class="text-center text-info help">Vous pouvez aussi directement modifier ces informations</div>
                                            <div class="text-center message"></div>


                                            <form role="form" class="update_client48"></form>
                                            <div class="form-group">
                                                <label>Nom du compte</label>
                                                <input class="form-control" type="text" value=" sfggf" name="nom">
                                                <input type="hidden" value="48" name="id_client">

                                            </div>

                                            <div class="form-group">
                                                <label class="text-success">Type de compte actuel (

                                                    Entreprise


                                                    )</label>
                                                <select class="form-control" name="type_compte">
                                                    <option value="2" selected="">Changer...</option>
                                                    <option value="1">Résidentiel</option>
                                                    <option value="2">Entreprise</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label class="text-success">Pays actuel (Angola)</label>
                                                <select class="form-control" name="pays">

                                                    <option value="AGO" selected="">Changer...</option>


                                                    <option value="AGO">Angola</option>


                                                    <option value="BDI">Burundi</option>


                                                    <option value="BEN">Bénin</option>


                                                    <option value="BFA">Burkina Faso</option>


                                                    <option value="BWA">Botswana</option>


                                                    <option value="CAF">République Centrafricaine</option>


                                                    <option value="CIV">Côte d'Ivoire</option>


                                                    <option value="CMR">Cameroun</option>


                                                    <option value="COD">République Démocratique du Congo</option>


                                                    <option value="COG">République du Congo</option>


                                                    <option value="COM">Comores</option>


                                                    <option value="CPV">Cap-vert</option>


                                                    <option value="DJI">Djibouti</option>


                                                    <option value="ERI">Érythrée</option>


                                                    <option value="ETH">Éthiopie</option>


                                                    <option value="GAB">Gabon</option>


                                                    <option value="GHA">Ghana</option>


                                                    <option value="GIN">Guinée</option>


                                                    <option value="GMB">Gambie</option>


                                                    <option value="GNB">Guinée-Bissau</option>


                                                    <option value="GNQ">Guinée Équatoriale</option>


                                                    <option value="KEN">Kenya</option>


                                                    <option value="LBR">Libéria</option>


                                                    <option value="LSO">Lesotho</option>


                                                    <option value="MDG">Madagascar</option>


                                                    <option value="MLI">Mali</option>


                                                    <option value="MOZ">Mozambique</option>


                                                    <option value="NAM">Namibie</option>


                                                    <option value="NER">Niger</option>


                                                    <option value="NGA">Nigéria</option>


                                                    <option value="RWA">Rwanda</option>


                                                    <option value="SDN">Soudan</option>


                                                    <option value="SEN">Sénégal</option>


                                                    <option value="SLE">Sierra Leone</option>


                                                    <option value="SOM">Somalie</option>


                                                    <option value="STP">Sao Tomé-et-Principe</option>


                                                    <option value="SYC">Seychelles</option>


                                                    <option value="TCD">Tchad</option>


                                                    <option value="TGO">Togo</option>


                                                    <option value="TZA">République-Unie de Tanzanie</option>


                                                    <option value="UGA">Ouganda</option>


                                                    <option value="ZAF">Afrique du Sud</option>


                                                    <option value="ZMB">Zambie</option>


                                                    <option value="ZWE">Zimbabwe</option>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Ville / village</label>
                                                <input class="form-control" type="text" value=" dfgd" name="ville">

                                            </div>

                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="email" value=" dgdfg" name="email">

                                            </div>

                                            <div class="form-group">
                                                <label>Tel 1 </label>
                                                <input class="form-control" type="text" value=" dgdfg" name="tel1">

                                            </div>

                                            <div class="form-group">
                                                <label>Tel 2 </label>
                                                <input class="form-control" type="text" value=" dgdfg" name="tel2">

                                            </div>


                                            <button class="btn btn-primary btn_update_client" onclick="update_client(48);return false;">Envoyer</button>




                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                                        </div>
                                    </div>
                                </div>

                            </div><div class="modal fade" id="modal_delete_client48" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Suppression du compte</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="message"></div>
                                            Voulez-vous vraiment supprimer le compte de  <strong>SFGGF</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>


                                            <button type="button" onclick="delete_client(48)" class="btn btn-primary">Oui</button>

                                        </div>
                                    </div>
                                </div>
                            </div><div class="modal fade" id="modal_update_client47" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">

                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Infos du compte</h4>
                                        </div>


                                        <div class="modal-body">
                                            <div class="text-center text-info help">Vous pouvez aussi directement modifier ces informations</div>
                                            <div class="text-center message"></div>


                                            <form role="form" class="update_client47"></form>
                                            <div class="form-group">
                                                <label>Nom du compte</label>
                                                <input class="form-control" type="text" value=" kirikou kmlfsdg,mkfdk,gnm" name="nom">
                                                <input type="hidden" value="47" name="id_client">

                                            </div>

                                            <div class="form-group">
                                                <label class="text-success">Type de compte actuel (

                                                    Résidentiel


                                                    )</label>
                                                <select class="form-control" name="type_compte">
                                                    <option value="1" selected="">Changer...</option>
                                                    <option value="1">Résidentiel</option>
                                                    <option value="2">Entreprise</option>
                                                </select>
                                            </div>


                                            <div class="form-group">
                                                <label class="text-success">Pays actuel (Angola)</label>
                                                <select class="form-control" name="pays">

                                                    <option value="AGO" selected="">Changer...</option>


                                                    <option value="AGO">Angola</option>


                                                    <option value="BDI">Burundi</option>


                                                    <option value="BEN">Bénin</option>


                                                    <option value="BFA">Burkina Faso</option>


                                                    <option value="BWA">Botswana</option>


                                                    <option value="CAF">République Centrafricaine</option>


                                                    <option value="CIV">Côte d'Ivoire</option>


                                                    <option value="CMR">Cameroun</option>


                                                    <option value="COD">République Démocratique du Congo</option>


                                                    <option value="COG">République du Congo</option>


                                                    <option value="COM">Comores</option>


                                                    <option value="CPV">Cap-vert</option>


                                                    <option value="DJI">Djibouti</option>


                                                    <option value="ERI">Érythrée</option>


                                                    <option value="ETH">Éthiopie</option>


                                                    <option value="GAB">Gabon</option>


                                                    <option value="GHA">Ghana</option>


                                                    <option value="GIN">Guinée</option>


                                                    <option value="GMB">Gambie</option>


                                                    <option value="GNB">Guinée-Bissau</option>


                                                    <option value="GNQ">Guinée Équatoriale</option>


                                                    <option value="KEN">Kenya</option>


                                                    <option value="LBR">Libéria</option>


                                                    <option value="LSO">Lesotho</option>


                                                    <option value="MDG">Madagascar</option>


                                                    <option value="MLI">Mali</option>


                                                    <option value="MOZ">Mozambique</option>


                                                    <option value="NAM">Namibie</option>


                                                    <option value="NER">Niger</option>


                                                    <option value="NGA">Nigéria</option>


                                                    <option value="RWA">Rwanda</option>


                                                    <option value="SDN">Soudan</option>


                                                    <option value="SEN">Sénégal</option>


                                                    <option value="SLE">Sierra Leone</option>


                                                    <option value="SOM">Somalie</option>


                                                    <option value="STP">Sao Tomé-et-Principe</option>


                                                    <option value="SYC">Seychelles</option>


                                                    <option value="TCD">Tchad</option>


                                                    <option value="TGO">Togo</option>


                                                    <option value="TZA">République-Unie de Tanzanie</option>


                                                    <option value="UGA">Ouganda</option>


                                                    <option value="ZAF">Afrique du Sud</option>


                                                    <option value="ZMB">Zambie</option>


                                                    <option value="ZWE">Zimbabwe</option>

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Ville / village</label>
                                                <input class="form-control" type="text" value=" fgggf" name="ville">

                                            </div>

                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="email" value=" 8ssdi2+ctjq120acn524@sharklasers.com" name="email">

                                            </div>

                                            <div class="form-group">
                                                <label>Tel 1 </label>
                                                <input class="form-control" type="text" value=" 677777777" name="tel1">

                                            </div>

                                            <div class="form-group">
                                                <label>Tel 2 </label>
                                                <input class="form-control" type="text" value=" " name="tel2">

                                            </div>


                                            <button class="btn btn-primary btn_update_client" onclick="update_client(47);return false;">Envoyer</button>




                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                                        </div>
                                    </div>
                                </div>

                            </div><div class="modal fade" id="modal_delete_client47" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" wfd-invisible="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Suppression du compte</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="message"></div>
                                            Voulez-vous vraiment supprimer le compte de  <strong>KIRIKOU KMLFSDG,MKFDK,GNM</strong>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>


                                            <button type="button" onclick="delete_client(47)" class="btn btn-primary">Oui</button>

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
                                    <td> 49</td>
                                    <td> papou</td>
                                    <td> Angola  (vbnvbn)</td>
                                    <td> 65555555 </td>


                                    <td>Résidentiel</td>





                                    <td>Prospect</td>


                                    <td> vbnvbn</td>

                                    <td> 2017-12-26 12:09:15</td>

                                    <td>

                                        <div class="btn-group pull-right ">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                            <ul class="dropdown-menu slidedown" wfd-invisible="true">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_update_client49">
                                                        <i class="fa fa-search fa-fw"></i> Détails
                                                    </a>
                                                </li>


                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_delete_client49">
                                                        <i class="fa fa-minus fa-fw"></i> Supprimer
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

                                <tr class="odd gradeX">
                                    <td> 48</td>
                                    <td> sfggf</td>
                                    <td> Angola  (dfgd)</td>
                                    <td> dgdfg dgdfg</td>


                                    <td>Entreprise</td>





                                    <td>Client</td>


                                    <td> dgdfg</td>

                                    <td> 2017-12-18 16:19:15</td>

                                    <td>

                                        <div class="btn-group pull-right ">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                            <ul class="dropdown-menu slidedown" wfd-invisible="true">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_update_client48">
                                                        <i class="fa fa-search fa-fw"></i> Détails
                                                    </a>
                                                </li>


                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_delete_client48">
                                                        <i class="fa fa-minus fa-fw"></i> Supprimer
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

                                <tr class="odd gradeX">
                                    <td> 47</td>
                                    <td> kirikou kmlfsdg,mkfdk,gnm</td>
                                    <td> Angola  (fgggf)</td>
                                    <td> 677777777 </td>


                                    <td>Résidentiel</td>





                                    <td>Prospect</td>


                                    <td> 8ssdi2+ctjq120acn524@sharklasers.com</td>

                                    <td> 2017-12-01 11:57:05</td>

                                    <td>

                                        <div class="btn-group pull-right ">
                                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                            <ul class="dropdown-menu slidedown" wfd-invisible="true">
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_update_client47">
                                                        <i class="fa fa-search fa-fw"></i> Détails
                                                    </a>
                                                </li>


                                                <li class="divider"></li>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#modal_delete_client47">
                                                        <i class="fa fa-minus fa-fw"></i> Supprimer
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
