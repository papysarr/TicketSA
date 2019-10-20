<?php 
	
	include_once('./db.php');
	if (isset($_POST['nomref'])) {
        $nom = $_POST['nomref'];
        $id = $_POST['id'];
		$req=$pdo->exec("UPDATE `referentiel` SET `nomreferentiel` = '$nom' WHERE `referentiel`.`id` = $id");
         $_SESSION['message'] = "Address deleted!"; 
        header('location: ../views/listref.php');
    }

?>