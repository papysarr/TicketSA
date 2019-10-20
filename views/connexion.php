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
  <header></header>
  <div class="logo">
        <img src="../public/img/sa logo.png" alt=""/>
        <h3 style="margin-left: 490px";>Connexion</h3>
  </div>
  </div>
  <section>
      <form action="../controler/controlconnexion.php" method="post">
          <div>
              <?php 
                  if(isset($_GET['erreur'])){
                      echo $_GET['erreur'];
                  }    
              ?>
          </div>
          <div class="input-form-session-m-b">
            <label for="">Login</label>
            <input type="text" name="email" placeholder="exemple@gmail.com">
          </div>
          <div class="input-form-session-m-b">
            <label for="">Mot de passe</label>
            <input type="password" name="motdepasse" placeholder="********">
          </div>
          <div class="input-form-session-m-b">
            <button type="submit">Connexion</button>
          </div>
         
      </form>
  </section>
  <footer></footer>
</body>
</html>