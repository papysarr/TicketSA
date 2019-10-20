<?php 
	
	include_once('../controler/db.php');


    if (isset($_GET['edit'])) {
		$edi = $_GET['edit'];
		$update = true;
		$query = $pdo->query("SELECT * FROM `referentiel` WHERE `referentiel`.`id` = '$edi'");
        $referentiel= $query->fetch();
        //$req=$pdo->exec("UPDATE `referentiel` SET `nomreferentiel` = 'dev web' WHERE `referentiel`.`nomreferentiel` = '$edi'");

			$nomref= $referentiel['nomreferentiel'];
		
			$id= $referentiel['id'];
	}

	
?>


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
     <h3 style="margin-left: 410px";>Modification référentiel</h3>
   </div>
  
  <section>
      <form action="../controler/controlmodif.php" method="post">
      <input type="hidden" name="id" placeholder="" value="<?php echo $id;?>">
          <div class="input-form-session-m-b">
            <label for="">Nom Référentiel</label>
            <input type="text" name="nomref" placeholder="" value="<?php echo $nomref;?>">
          </div>
          <div class="input-form-session-m-b">
            <button type="submit" >Modifier</button>
          </div>
         
      </form>
  </section>
  <footer></footer>
</body>
</html>