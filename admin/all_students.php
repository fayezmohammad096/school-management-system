<?php
    include ('database/connection.php');

   $sql = "SELECT * FROM students";
   

   $query = mysqli_query($conn,$sql);



?>


<!DOCTYPE HTML>
<html>

<body>
   <div class="container">
      <div class="row">
         <div class="col">
         
<h1 class="text-primary">
        &nbsp &nbsp <i class="fa fa-dashboard"></i>Dashbord <small>ALL STUDENTS</small></h1>
          <ol class="breadcrumb">
            &nbsp &nbsp <li><a href="#"><i class="fa fa-dashboard"></i> Dashbord</a></li>
            <li class="active"><i class="fa fa-users"></i>ALL STUDENTS</li>
        </ol>
<div class="table-responsive">
   <table id="data_table" class="table table-bordered table-hover table-striped">
      <thead>
         <tr>
            <th>Action</th>
            <th>st_fullname</th>
            <th>Mobile</th>
            <th>Email</th>
            
            <th>st_class</th>
            <th>roll_no</th>
            <th>Birth</th>
            <th>Address</th>
      </tr>
      </thead>
      <tbody>
      <?php
         while ($result = mysqli_fetch_assoc($query)){?>
         
         <tr>
            <td>
               <a href="std_view.php?id=<?=$result['id'];?>" class="btn-primary btn-sm ">view</a>

            </td>
            <td><?=ucwords($result['fullname']);?></td>
            <td><?=$result['mobile'];?></td>
            <td><?=$result['email'];?></td>
            <td><?=$result['class'];?></td>
            <td><?=$result['roll'];?></td>
            <td><?=$result['birth'];?></td>
            <td><?=$result['address'];?></td>
          
           
           
           
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