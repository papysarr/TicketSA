<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['nomplat'])){
    $nomplat= $_POST['nomplat'];
   //3-Traitement => Connexion dans une BD
   include_once('./db.php');
   $query = $pdo->query("SELECT * FROM `Plat` ");
   $Plats= $query->fetchAll();
   $req =$pdo-> exec("INSERT INTO `Plat` (`id`, `nomplat`) VALUES (NULL, '$nomplat')");
   if($req){
    header("Location: ../views/Listplat.php");
   }else{
    header("Location: ../views/Form_Menu.php?erreur=Ce Plat existe déjà!"); 
   } 

}else{
    header("Location: ../views/Form_Menu.php?erreur=Veuillez remplir le champs");  
}

?>