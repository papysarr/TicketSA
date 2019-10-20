<?php
//print_r($_POST);
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['login']) and !empty($_POST['password'])){
    $login= $_POST['login'];
    $password=$_POST['password'];
   //3-Traitement => Connexion dans une BD
         include_once('./db_connect.php');
         $query = $pdo->query("SELECT * FROM `user` WHERE login='$login' and password='$password'");
         //d) Recuperer resultat
         $resultat = $query->fetch();
         if(isset($resultat['id'])){
            header("Location: ../views/listeUser.php");  
         }else{
            header("Location: ../views/connexion.php?erreur=Login ou Mot de passe Incorrect"); 
         }

}else{
    header("Location: ../views/connexion.php?erreur=Login ou Mot de passe Obligatoire");  
}

?>