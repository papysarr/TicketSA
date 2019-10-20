<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <title>Formulaire Session</title>
</head>
<body>
 <?php include_once('../includes/menu.php'); ?>
 <div class="logo">
     <img src="../public/img/sa logo.png" alt=""/>
     <h3 style="margin-left: 410px";>Création session</h3>
   </div>

     <div class="container">
      <form action="../controler/controlsession.php" method="post">
           <div>
              <?php 
                  if(isset($_GET['erreur'])){
                      echo $_GET['erreur'];
                  }    
              ?>
           </div>
           <div class="input-form-session-m-s">
                <label for="">Nom</label>
                <input style="margin-left: 85px;" type="text" name="nom" placeholder="Nom">
           </div>

          <div class="input-form-session-m-s">
              <label for="">Année</label>
              <input style="margin-left: 75px;" type="text" name="annee" placeholder="Année">
          </div>

          <div class="input-form-session-m-s">
               <label for="">date de début</label>
               <input style="margin-left: 10px"; type="text" name="datedebut" placeholder="2000-02-02">
          </div>

          <div class="input-form-session-m-s">
              <label for="">date de fin</label>
              <input style="margin-left: 37px"; type="text" name="datefin" placeholder="2000-02-02">
          </div>

          <div class="input-form-session-m-s">
              <label for="">Effectif total</label>
              <input style="margin-left: 20px";type="text" name="effectif" placeholder="Effectif Total">
          </div>

          <div class="input-form-session-m-s">
                <button type="reset" style="margin-left: 200px";>Annuler</button>
                <button type="submit">Créer</button>
         </div>
              
          </div>
    
        </form>  

      </div>
        
    </section>
    <footer></footer>
</body>
</html>