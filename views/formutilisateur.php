<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <title>Formulaire Utilisateur</title>
</head>
<body>
<?php include_once('../includes/menu.php');?>
   <div class="logo">
     <img src="../public/img/sa logo.png" alt=""/>
     <h3 style="margin-left: 410px";>Création utilisateur</h3>
   </div>
     <div class="container">
      <form action="../controler/controlutilisateur.php" method="post">
           <div>
              <?php 
                  if(isset($_GET['erreur'])){
                      echo $_GET['erreur'];
                  }    
              ?>
           </div>
           <div class="input-form-session-m-t">
                <label for="">Nom</label>
                <input style="margin-left: 80px;" type="text" name="nom" placeholder="Nom">
           </div>

          <div class="input-form-session-m-t">
              <label for="">Prenom</label>
              <input style="margin-left: 53px;" type="text" name="prenom" placeholder="Prénom">
          </div>

          <div class="input-form-session-m-t">
               <label for="">Profil</label>
               <select name="profil" id="" style="margin-left: 75px"; >
                 <option value="">  </option>
                 <option value="admin">Admin</option>
                 <option value="simpleUser">Utilisateur simple</option>
               </select>
          </div>

          <div class="input-form-session-m-t">
              <label for="">login</label>
              <input style="margin-left: 80px"; type="text" name="email" placeholder="exemple@exemple.com">
          </div>
          <div class="input-form-session-m-t">
            <label for="">Mot De passe</label>
            <input style="margin-left: 6px"; type="password" name="motdepasse" placeholder="**************">
        </div>

          <div class="input-form-session-m-t">
              <label for="">Confirmer </label>
              <input style="margin-left: 35px"; type="password" name="confirmer" placeholder="**************">
          </div>

          <div class="input-form-session-m-t">
             <button type="reset" style="margin-left: 200px";>Annuler</button>
             <button type="submit">Créer</button>
          </div>
        </form>  
      </div>
        
    <footer></footer>   
</body>
</html>