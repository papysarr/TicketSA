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
<?php include_once('../includes/menu.php'); ?>
<?php  include_once('../controler/db.php'); ?>
   <div class="logo">
     <img src="../public/img/sa logo.png" alt=""/>
     <h3 style="margin-left: 410px";>Création utilisateur</h3>
   </div>
     <div class="container">
      <form action="../controler/controlsession_ref.php" method="post">
           <div>
              <?php 
                  if(isset($_GET['erreur'])){
                      echo $_GET['erreur'];
                  }    
              ?>
           </div>

          <div class="input-form-session-m-t">
            <?php 
              $query = $pdo->query("SELECT * FROM `session` ");
              $sessions= $query->fetchAll(); 
            ?>  
               <label for="">Session</label>
               <select name="session" id="" style="margin-left: 63px"; >
               <option value="">  </option>
                <?php foreach ($sessions as $key => $session) { ?>
                 <option value="<?php echo $session['id'];?>"><?php echo $session['annee'];?></option>
                <?php } ?>
               </select>
          </div>

          <div class="input-form-session-m-t">
            <?php 
             $query = $pdo->query("SELECT * FROM `referentiel` ");
             $refs= $query->fetchAll();
            ?>  
               <label for="">Référentiel</label>
               <select name="referentiel" id="" style="margin-left: 32px"; >
               <option value="">  </option>
                <?php foreach ($refs as $key => $ref) { ?>
                 <option value="<?php echo $ref['id'];?>"><?php echo $ref['nomreferentiel'];?></option>
                <?php } ?>
               </select>
          </div>
            
          <div class="input-form-session-m-s">
              <label for="">Effectif total</label>
              <input style="margin-left: 20px";type="text" name="effectif" placeholder="Effectif Total" required>
          </div>
          <div class="input-form-session-m-t">
             <button type="reset" style="margin-left: 200px";>Annuler</button>
             <button type="submit">Ajouter</button>
          </div>
        </form>  
      </div>
        
    <footer></footer>   
</body>
</html>