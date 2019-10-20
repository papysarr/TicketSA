<?php
//1-Recupération des Infos provenant du formulaire
 //2-validation des données
if(!empty($_POST['nom']) and !empty($_POST['annee']) and !empty($_POST['datedebut']) and !empty($_POST['datefin']) and !empty($_POST['effectif'])){
        $nom= $_POST['nom'];
        $annee= $_POST['annee'];
        $datedebut= $_POST['datedebut'];
        $datefin= $_POST['datefin'];
        $effectif=$_POST['effectif'];
        var_dump($_POST);
        //3-Traitement => Connexion dans une BD
        include_once('./db.php');
        $req =$pdo-> exec("INSERT INTO `session`  VALUES (NULL, '$nom', '$annee', '$datedebut', '$datefin', '$effectif')");
        if($req){
            header("Location: ../views/liste_session.php");
           }else{
            header("Location: ../views/ajoutref.php?erreur=Cette année existe déjà"); 
           } 
      
}else{
    header("Location: ../views/formsession.php?erreur= Remplissez tous champs");  
}

?>