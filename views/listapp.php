<!DOCTYPE html>
<html lang="en">
<head>
      <title>listapp</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
          <link rel="stylesheet" type="text/css" href="../public/css/style.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      </head>
  <body>
    <header>
    
        <nav style="float:right" position="relative">
            <ul class="nav navbar-nav">
                
                <li><a href="#">Référentiels</a></li>
                <li><a href="#">Utilisateurs</a></li>
                <li><a href="#">Session</a></li>
            </ul>
        </nav>
    </header>
  <div class="container">
  <img src="../public/img/sa logo.png">
    <h1 style="margin-left:200px; margin-top:5px; color:#068689;">Liste des apprenants de la Sonatel Academy</h1>
          
      <table class="table table-striped" style= margin:10px;>
       <thead>
          <tr>
              <th>Prénom</th>
              <th>Nom</th>
              <th>Email</th>
              <th>Référentiel</th>
              <th>CIN/PASSEPORT</th>
              <th>Téléphone</th>
              <th>Matricule</th>

          </tr>
      </thead>
          <tr>
               <td><?php echo $user['prenom'];?></td>
               <td><?php echo $user['nom'];?></td>
               <td><?php echo $user['email'];?></td>
               <td><?php echo $user['referentiel'];?></td>
               <td><?php echo $user['cinpassport'];?></td>
               <td><?php echo $user['telephone'];?></td>
               <td><?php echo $user['matricule'];?></td>
          </tr>
    
    </div>

   </body>
</html>
