<ul class="nav navbar-top-links navbar-right">
    <!-- main dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <span class="top-label label label-danger">
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
                                                                               WHERE transaction_state="0"
                                                                               ORDER BY myId DESC');
                    echo $nbre;
                    ?> </span><i class="fa fa-bell fa-3x"></i>
        </a>
        <!-- dropdown-messages -->
        <ul class="dropdown-menu dropdown-messages">
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
                                                                               WHERE transaction_state="0"
                                                                               ORDER BY myId DESC
                                                                               LIMIT 3') as $users):

    echo '<li>
                <a href="#">
                    <div>
                        <strong><span class=" label label-danger">'.$users->last_name.'</span></strong>
                        <span class="pull-right text-muted">
                                        <em>'.date('d/m/Y H:m:s', $users->created). '</em>
                                    </span>
                    </div>
                    <div>'.$users->myRecharge.'</div>
                </a>
            </li>
            <li class="divider"></li>';
endforeach;
     ?>
        </ul>
        <!-- end dropdown-messages -->
    </li>
</ul>