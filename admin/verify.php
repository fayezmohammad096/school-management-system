<?php
    include 'database/connection.php';  
    if(isset($_GET['vkey'])){
     /* Get the verification key and match with database verification key  */
         $vkey = $_GET['vkey'];
         $sql = "SELECT v_key,v_status FROM reg_user WHERE v_status = 0 AND v_key='$vkey' LIMIT 1";
         $query = mysqli_query($conn,$sql);
         if(mysqli_num_rows($query)>0){
             $sql = "UPDATE reg_user SET v_status = 1 WHERE v_key='$vkey' LIMIT 1";
             $query = mysqli_query($conn,$sql);
             if($query){
                 echo '<div class="alert alert-success" role="alert">
  <strong>Well done!</strong> You successfully complite your account.
  <a href="login.php" class="btn btn-success">login </a> 
</div>';
                     
            }
        }
    }
?>