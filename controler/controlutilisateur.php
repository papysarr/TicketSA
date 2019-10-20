<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['nom']) and !empty($_POST['prenom']) and !empty($_POST['profil']) and !empty($_POST['email']) and !empty($_POST['motdepasse']) and !empty($_POST['confirmer'])){
    if($_POST['motdepasse'] != $_POST['confirmer']){
        header("Location: ../views/formutilisateur.php?erreur= le mot de passe est différent de la confirmation");
    }

    else{
        var_dump($_POST);
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $profil= $_POST['profil'];
        $login= $_POST['email'];
        $password=$_POST['motdepasse'];
        $statut=$_POST['statut'];
        //3-Traitement => Connexion dans une BD
        include_once('./db.php');
        $req =$pdo-> exec("INSERT INTO `user`  VALUES (NULL, '$nom', '$prenom', '$profil', '$login', '$password', '$statut')");
        header("Location: ../views/liste_utilisateur.php");
    }
      
}else{
    header("Location: ../views/formutilisateur.php?erreur= Remplissez tous champs");  
}




?>