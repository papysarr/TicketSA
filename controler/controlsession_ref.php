<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['session']) and !empty($_POST['referentiel'])){
    $ids= $_POST['session'];
    $idr=  $_POST['referentiel'];
    $eff=  $_POST['effectif'];
    //3-Traitement => Connexion dans une BD
    include_once('./db.php');
    $req =$pdo-> exec("INSERT INTO `existe` (`id_ref`, `id_se`, `Effectif`) VALUES ('$idr', '$ids', '$eff');");
    header("Location: ../views/liste_session_ref.php");
}else{
    header("Location: ../views/session_ref.php?erreur= Remplissez tous champs");  
}

?>