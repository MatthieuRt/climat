<?php 
	session_start();
	require_once('../incs/connexion.php');
	require_once('../incs/chargerClasse.php');
	require_once('../incs/function.php');

	session_destroy();
	header('Location: ../index.php');

?>