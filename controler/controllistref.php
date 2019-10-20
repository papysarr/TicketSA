<?php 
	include_once('./db.php');
	if (isset($_GET['del'])) {
		$nom = $_GET['del'];
		$req=$pdo->exec("DELETE FROM `referentiel` WHERE `referentiel`.`id` = '$nom'");
         $_SESSION['message'] = "Address deleted!"; 
        header('location: ../views/listref.php');
    }

?>