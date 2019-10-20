<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['email']) and !empty($_POST['motdepasse'])){
      $login= $_POST['email'];
      $password=$_POST['motdepasse'];
   //3-Traitement => Connexion dans une BD
         include_once('./db.php');
         $query = $pdo->query("SELECT * FROM `user` WHERE login='$login' and motpasse='$password'");
         //d) Recuperer resultat
         $resultat = $query->fetch();
         if(isset($resultat['id'])){
            header("Location: ../views/liste_utilisateur.php");  
         }else{
            header("Location: ../views/connexion.php?erreur=Login ou Mot de passe Incorrect"); 
         }

}else{
    header("Location: ../views/connexion.php?erreur=Login ou Mot de passe Obligatoire");  
}


?>