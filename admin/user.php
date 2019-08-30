<?php
    include ('database/connection.php');

   $sql = "SELECT * FROM reg_user";
   

   $query = mysqli_query($conn,$sql);



?>


<!DOCTYPE HTML>
<html>

<body>
   <div class="container">
      <div class="row">
         <div class="col">
         
<h1 class="text-primary">
        &nbsp &nbsp <i class="fa fa-dashboard"></i>Dashbord <small>ALL Users</small></h1>
          <ol class="breadcrumb">
            &nbsp &nbsp <li><a href="#"><i class="fa fa-dashboard"></i> Dashbord</a></li>
            <li class="active"><i class="fa fa-users"></i>ALL Users</li>
        </ol>
<div class="table-responsive">
   <table id="data_table" class="table table-bordered table-hover table-striped">
      <thead>

         <tr>
            <th>Action</th>
            <th>id</th>
            <th>full_name</th>
            <th>mobile</th>
            
            <th>email</th>
            <th>v_status</th>
            
      </tr>
      </thead>
      <tbody>
      <?php
         while ($result = mysqli_fetch_assoc($query)){?>
         
         <tr>
            <td>
               <a href="user_view.php?id=<?=$result['id'];?>" class="btn-primary btn-sm ">view</a>

            </td>
            <td><?=ucwords($result['id']);?></td>
            <td><?=$result['full_name'];?></td>
            <td><?=$result['mobile'];?></td>
            <td><?=$result['email'];?></td>
            <td><?=$result['v_status'];?></td>
           
          
           
           
           
         </tr>
         <?php  
         }
         ?>
      </tbody>

   </table>
</div>  
         </div>
      </div>
   </div>
   



 

<!-- ============================*=*================================ -->
									 
										 
</body>
</html>