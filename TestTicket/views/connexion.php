
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <?php 
        if(isset($_GET['erreur'])){
             echo $_GET['erreur'];

         }
         
?>
    </div>
    
      <form action="../controller/connexion.php" method="post" style="margin: 200px 0px 0px 500px;">
         <div>
              <input type="text" name="login" id="">
         </div>
         <div>
              <input type="password" name="password" id="">
         </div>
         <div>
              <input type="reset" name="" id="">
              <input type="submit" name="" id="">
         </div>
      
      </form> 
    
</body>
</html>