<!DOCTYPE html>
<html lang="en">
<head>
      <title>Menu</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="../public/css/style.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php include_once('../includes/menu.php'); ?>
<?php  include_once('../controler/db.php'); ?>
        <form action="../controler/ControlajoutMenu.php" method="post">
          <div>
              <?php 
                  if(isset($_GET['erreur'])){
                      echo $_GET['erreur'];
                  }    
              ?>
          </div>
          <div class="input-form-session-m-b">
            <label for="">Plat</label>
            <input type style="padding-bottom: 0px;height: 18px; margin: 18px;" type="text" name="nomplat" placeholder="">
          </div>
          <div class="input-form-session-m-b">
            <button type="submit">Créer</button>
          </div>
         
        </form>
</body>
</html>
