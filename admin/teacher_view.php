<?php
include ('database/connection.php');
   $id = $_GET['id'];
   $sql = " SELECT * FROM teachers WHERE id = $id ";
   $query = mysqli_query($conn,$sql);

   $teacher = mysqli_fetch_assoc($query);

   
   
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
<!--============== header End -->
<!-- ================ -->
<div class="container">
    <div class="row clearfix">
       
        <div class="col-md-10">
<div class="jumbotron">
<H3 class="text-center text-success"> Teacher Full Information</H3>
<hr> 
        <table class="table table-striped  table-dark table-hover">
        <tr>
            <th width="100px" class="text-right">Full name : </th>
            <td><?=$teacher['fullname'];?></td>
         </tr>
         
         <tr>
            <th width="100px" class="text-right">Mobile : </th>
            <td><?=$teacher['mobile'];?></td>
         </tr>
         <tr>
            <th width="100px" class="text-right">Email : </th>
            <td><?=$teacher['email'];?></td>
         </tr>
         
         <tr>
            <th width="100px" class="text-right">specialise: </th>
            <td><?=$teacher['specialise'];?></td>
         </tr>
         <tr>
            <th width="100px" class="text-right">Qualification: </th>
            <td><?=$teacher['Qulipiqation'];?></td>
         </tr> 
         <tr>
            <th width="100px" class="text-right">Date of birth: </th>
            <td><?=$teacher['dob'];?></td>
         </tr> 
         <tr>
            <th width="100px" class="text-right">Address : </th>
            <td><?=$teacher['address'];?></td>
         </tr>  


            
       

        
        </table>
</div>
        </div>
        <div class="col-md-2">
        <br><br><br>
            <a href="index.php?page=teachers" class="btn btn-primary btn-block ">All Teachers</a>
            <a href="teacher_edit.php?id=<?=$teacher['id'];?>" class="btn btn-warning btn-block">Edit</a>
            <a onclick="return confirm ('Are you want to delete data?')" href="teacher_delete.php?id=<?=$teacher['id'];?>" class="btn btn-danger btn-block ">Delete</a>
            

        </div>
    </div>
    </div>

<!-- ============ -->

													
<?php include ('includes/left_sidebar.php'); ?>										 
										 
</body>
</html>