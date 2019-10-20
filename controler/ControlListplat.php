<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['nomplat'])){
    $nom= $_POST['nomplat'];
    var_dump( $nom);
   //3-Traitement => Connexion dans une BD
   include_once('./db.php');
   $query = $pdo->query("SELECT * FROM `Plat` ");
   $users= $query->fetchAll();
   $req =$pdo-> exec("INSERT INTO `Plat` (nomplat)  VALUES ('$nom')");
   if($req){
    header("Location: ../views/Listplat.php");
   }else{
    header("Location: ../views/Form_Menu.php?erreur=Ce référentiel existe déjà"); 
   } 

}else{
    header("Location: ../views/Form_Menu.php?erreur=Veuillez remplir le champs");  
}

?>