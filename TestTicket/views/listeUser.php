       <?php
           include_once('../controller/db_connect.php');
           $query = $pdo->query("SELECT * FROM `user` ");
           $users= $query->fetchAll();
          // var_dump($users) ;

        ?>


         <table border="1">
                <thead>
                <tr>
                     <th>Nom</th>
                     <th>Prenom</th>
                     <th>Login</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($users as $key => $user) {
                   
                ?>
                    <tr>
                       <td><?php echo $user['nom'];?></td>
                       <td><?php echo $user['prenom'];?></td>
                       <td><?php echo $user['login'];?></td>
                    </tr>
                <?php
                     
                    }
                 ?>
                </tbody>
         </table>