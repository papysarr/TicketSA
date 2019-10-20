<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['nomref'])){
    $nom= $_POST['nomref'];
    var_dump( $nom);
   //3-Traitement => Connexion dans une BD
   include_once('./db.php');
   $query = $pdo->query("SELECT * FROM `referentiel` ");
   $users= $query->fetchAll();
   $req =$pdo-> exec("INSERT INTO `referentiel` (nomreferentiel)  VALUES ('$nom')");
   if($req){
    header("Location: ../views/listref.php");
   }else{
    header("Location: ../views/ajoutref.php?erreur=Ce référentiel existe déjà"); 
   } 

}else{
    header("Location: ../views/ajoutref.php?erreur=Veuillez remplir le champs");  
}

?>