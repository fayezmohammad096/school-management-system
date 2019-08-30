
<?php
include ('database/connection.php');
   $id = $_GET['id'];
   $sql = " SELECT * FROM reg_user WHERE id = $id ";
   $query = mysqli_query($conn,$sql);

   $user = mysqli_fetch_assoc($query);

   
   
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
<H3 class="text-center text-success"> User Full Information</H3>
<hr> 
        <table class="table table-striped  table-dark table-hover">
        <tr>
            <th width="100px" class="text-right">Full name : </th>
            <td><?=$user['full_name'];?></td>

         </tr>
         <tr>
            <th width="100px" class="text-right">Mobile : </th>
            <td><?=$user['mobile'];?></td>
         </tr>
         <tr>
            <th width="100px" class="text-right">Email : </th>
            <td><?=$user['email'];?></td>
         </tr>
        <tr>
            <th width="100px" class="text-right">v_status : </th>
            <td><?=$user['v_status'];?></td>
         </tr> 
         
     

            
       

        
        </table>
</div>
        </div>
        <div class="col-md-2">
            <a href="index.php?page=user" class="btn btn-primary btn-block ">All Users</a>
            <a href="" class="btn btn-warning btn-block">Edit</a>
            <a href="user_delete.php?id=<?=$user['id'];?>" class="btn btn-danger btn-block ">Delete</a>
        </div>
    </div>
    </div>

<!-- ============ -->

<?php include ('includes/left_sidebar.php'); ?>										 
													
										 
</body>
</html>