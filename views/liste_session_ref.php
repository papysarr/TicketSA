<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Liste referentiel</title>
</head>
<body>
  <?php include_once('../includes/menu.php'); ?>
  <div class="logo">
     <img src="../public/img/sa logo.png" alt=""/>
     <h3 style="margin-left: 410px";>Liste session_référentiel</h3>
  </div>
      <div class="container1">
        <?php
           include_once('../controler/db.php');
           $query = $pdo->query("SELECT `referentiel`.`nomreferentiel` as nomref, 
           `session`.`nom` as senom, `session`.`annee` as seann, `existe`.`Effectif` as ef
           FROM `referentiel`, `session`, `existe` 
           WHERE `existe`.`id_ref`=`referentiel`.`id` AND 
           `existe`.`id_se`=`session`.`id` 
           ");
           $users= $query->fetchAll();
          // var_dump($users) ;

        ?>
  <table style="width: 1000px;height:45px;">
          <thead>
               <tr>
                <th>Référentiel</th>
                <th>Nom session</th>
                <th>Année</th>
                <th>Effectif</th>
                </tr>
          </thead> 
          <tbody>
             <?php foreach ($users as $key => $user) { ?>
                    <tr>
                       <td><?php echo $user['nomref'];?></td>
                       <td><?php echo $user['senom'];?></td>
                       <td><?php echo $user['seann'];?></td>
                       <td><?php echo $user['ef'];?></td>
                       
                    </tr>
             <?php } ?>
         <tbody>
        </table>
     </div >
    <footer></footer>
</body>
</html>