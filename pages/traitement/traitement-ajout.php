<?php
require_once('../../incs/function.php');
require_once('../../incs/connexion.php');
require_once('../../incs/chargerClasse.php');

        $dbh=dbconnect();
		$sql="INSERT INTO articles VALUES('0','%s','%s','%s','%s','%s')";
		$sql=sprintf($sql,$_POST['titre'],$_POST['contenu'],$_POST['continent'],$_POST['date'],$_POST['image']);
        echo $sql;
		$dbh->exec($sql);
        header('Location: ../tables');
?>