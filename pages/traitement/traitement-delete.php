<?php
require_once('../../incs/function.php');
require_once('../../incs/connexion.php');
require_once('../../incs/chargerClasse.php');

        $dbh=dbconnect();
		$sql="delete from articles where id ='%s'";
		$sql=sprintf($sql,$_GET['id']);
        echo $sql;
		$dbh->exec($sql);
        header('Location: ../tables');
?>