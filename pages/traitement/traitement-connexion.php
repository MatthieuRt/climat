<?php 
require_once('../../incs/function.php');
require_once('../../incs/connexion.php');
require_once('../../incs/chargerClasse.php');

$username = $_POST['username'];
$password = $_POST['password'];

if(test_login($username,$password)){
    header('Location: ../tables');
}else{
    header('Location: ../connection');
}
?>