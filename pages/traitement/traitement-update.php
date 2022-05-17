<?php
require_once('../../incs/function.php');
require_once('../../incs/connexion.php');
require_once('../../incs/chargerClasse.php');

        $dbh=dbconnect();
		$sql="UPDATE articles set titre = '%s', contenu = '%s', continent='%s', date='%s', image='%s' where id = '%s'";
		$sql=sprintf($sql,$_POST['titre'],$_POST['contenu'],$_POST['continent'],$_POST['date'],$_POST['image'],$_GET['id']);
        echo $sql;
		$dbh->exec($sql);
        header('Location: ../tables');
?>