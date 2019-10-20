<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['prenom']) and !empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['referentiel']) and !empty($_POST['cinpassport']) and !empty($_POST['telephone'])){
    if($_POST['matricule'] ){
        header("Location: ../views/listapp.php?erreur= le mot de passe est différent de la confirmation");
    }

    else{
        var_dump($_POST);
        $prenom= $_POST['prenom'];
        $nom= $_POST['nom'];
        $email= $_POST['email'];
        $referentiel= $_POST['referentiel'];
        $cinpassport=$_POST['cinpassport'];
        $telephone=$_POST['telephone'];
        $matricule=$_POST['matricule'];
        //3-Traitement => Connexion dans une BD
        include_once('./db.php');
        $req =$pdo-> exec("INSERT INTO `listapp`  VALUES (NULL, '$prenom', '$nom', '$email', '$referentiel', '$cinpassport', '$telephone', '$matricule')");
        header("Location: ../views/listapp.php");
    }
      
}else{
    header("Location: ../views/inscription.php?erreur= Remplissez tous champs");  
}




?>