<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <title>Connexion</title>
</head>
<body>
   <?php include_once('../includes/menu.php'); ?>
   <div class="logo">
     <img src="../public/img/sa logo.png" alt=""/>
     <h3 style="margin-left: 410px";>Création référentiel</h3>
   </div>
  <section>
      <form action="../controler/controlajoutref.php" method="post">
          <div>
              <?php 
                  if(isset($_GET['erreur'])){
                      echo $_GET['erreur'];
                  }    
              ?>
          </div>
          <div class="input-form-session-m-b">
            <label for="">Nom Référentiel</label>
            <input type style="padding-bottom: 0px;height: 18px; margin: 18px;" type="text" name="nomref" placeholder="">
          </div>
          <div class="input-form-session-m-b">
            <button type="submit">Créer</button>
          </div>
         
      </form>
  </section>
  <footer></footer>
</body>
</html>