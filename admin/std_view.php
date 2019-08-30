<?php
    include ('database/connection.php');
    $id = $_GET['id'];
    $sql = "SELECT*FROM students WHERE id='$id'";
    $query = mysqli_query($conn,$sql);
    $std = mysqli_fetch_assoc($query);
   

?>


<!DOCTYPE HTML>
<html>
<?php include ('includes/layout_page.php'); ?>	

<body>
  <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
<?php include ('includes/top_menu.php'); ?>
<?php include ('includes/left_sidebar.php'); ?>	
<!--============== header End -->
<!-- ================ -->
<div class="container">
    <div class="row clearfix">
       
        <div class="col-md-10">
        
<div class="jumbotron">

        
<H3 class="text-center text-success"> Student Full Information</H3>
<hr> 








        <table class="table table-striped  table-dark table-hover">
        <tr>
            <th width="100px" class="text-right">Full name : </th>
            <td><?=$std['fullname'];?></td>
         </tr>
         <tr>
            <th width="100px" class="text-right">Mobile : </th>
            <td><?=$std['mobile'];?></td>
         </tr>
         <tr>
            <th width="100px" class="text-right">Email : </th>
            <td><?=$std['email'];?></td>
         </tr>
         
         <tr>
            <th width="100px" class="text-right">Class : </th>
            <td><?=$std['class'];?></td>
         </tr>
         <tr>
            <th width="100px" class="text-right">Roll : </th>
            <td><?=$std['roll'];?></td>
         </tr> 
         <tr>
            <th width="100px" class="text-right">Date of birth : </th>
            <td><?=$std['birth'];?></td>
         </tr> 
         <tr>
            <th width="100px" class="text-right">Address : </th>
            <td><?=$std['address'];?></td>
         </tr>  
      <tr>
            <th width="100px" class="text-right">Photo : </th>
            
            <!-- <td><img style="width:100px;" src="std_img/"></td> -->
            <td><img style="width:100px;" src="std_img/'.<?=$std['photo'];?>.'"/></td>
         </tr> 
           

             
       

        
        </table>
</div>
        </div>
        <div class="col-md-2">
            <a href="index.php?page=all_students" class="btn btn-primary btn-block ">All students</a>
            <a href="index.php?page=std_edit&id=<?=$std['id'];?>" class="btn btn-warning btn-block">Edit</a>
            <a href="std_delete.php?id=<?=$std['id'];?>"class="btn btn-danger btn-block ">Delete</a>
        </div>
    </div>
    </div>

<!-- ============ -->

													
										 
</body>
</html>