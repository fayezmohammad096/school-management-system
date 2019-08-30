<?php
    include ('database/connection.php');

    $sql = "SELECT * FROM teachers";
    $query = mysqli_query($conn,$sql)
?>
<!DOCTYPE HTML>
<html>
	
<body>
  

<!-- -------------------- -->
<div class="container">
      <div class="row">
         <div class="col">
         
<h1 class="text-primary">
        &nbsp &nbsp <i class="fa fa-dashboard"></i>Dashbord <small>ALL Teachers</small></h1>
          <ol class="breadcrumb">
            &nbsp &nbsp <li><a href="#"><i class="fa fa-dashboard"></i> Dashbord</a></li>
            <li class="active"><i class="fa fa-users"></i>ALL Teachers</li>
        </ol>
        <div class="table-responsive">
   <table id="data_table" class="table table-bordered table-hover table-striped">
                <thead>
                <tr>
                    
                    <th>Action</th>
					<th>Serial</th>
                    <th>Full name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>specialise</th>
                    <th>Qulipiqation</th>
                    <th>Address</th>
                    
                    
					
                    
                    
                </tr>
            </thead>
            <tbody>
           <?php
            if(mysqli_num_rows($query)>0){
            while($row = mysqli_fetch_assoc($query)){
           ?>     
              
        <tr>
            
            <td>
             <a href="teacher_view.php?id=<?=$row['id'];?>" class="btn-primary btn-sm ">view</a>
                
            </td>
            
			<td><?=$row['serial'];?></td>
            <td><?=$row['fullname'];?></td>
            
            
            <td><?=$row['mobile'];?></td>
            
            <td><?=$row['email'];?></td>
            <td><?=$row['specialise'];?></td>
            <td><?=$row['Qulipiqation'];?></td>
            
            <td><?=$row['address'];?></td>
            
            
        </tr>           
<?php
            }
            }
?>
                    
                    

</tbody>
        </table>
        </div>
        </div>
    </div>
<!-- =============================================================== -->
									 
										 
</body>
</html>