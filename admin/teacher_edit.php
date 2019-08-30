<?php
    include ('database/connection.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM teachers WHERE id = '$id'";
    $query = mysqli_query($conn,$sql);

    $edit_teacher = mysqli_fetch_assoc($query);
    
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
<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
<div class="jumbotron"> 
<h2 class="text-center text-success">Edit data</h2>
<hr>       
<form action='teacher_updt.php?id=<?=$id?>;' method="post">
  <div class="form-group">
<label data-error="wrong" data-success="right" for="fname">full name</label>
<input required type="text" class="form-control validate" value="<?=$edit_teacher['fullname'];?>"name="fname"/>
  </div>
  
  <div class="form-group">
<label data-error="wrong" data-success="right" for="mobile">mobile</label>
<input type="text" class="form-control validate" value="<?=$edit_teacher['mobile'];?>" name="mobile" required/>
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="email">Email</label>
    <input type="email" class="form-control validate" value="<?=$edit_teacher['email']; ?>" name="email" required/>
  </div>
  <div class="form-group">
<label data-error="wrong" data-success="right" for="specialise">specialise</label>
<input type="text" class="form-control validate" value="<?=$edit_teacher['specialise']; ?>" name="specialise" required/>
  </div>
  <div class="form-group">
<label data-error="wrong" data-success="right" for="Qulipiqation">Qulipiqation</label>
<input type="text" class="form-control validate" value="<?=$edit_teacher['Qulipiqation']; ?>" name="Qulipiqation" required/>
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="dob">Birth</label>
<input type="date" class="form-control validate" value="<?=$edit_teacher['dob']; ?>" name="dob" required/>
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="address">Address</label>
<input type="text" class="form-control validate" value="<?=$edit_teacher['address']; ?>" name="address" required/>
  </div>
  

  
  
  <a href="teacher_updt.php?id=<?=$edit_teacher['id'];?>" name="Save" class="btn btn-success">Save</a>
  <a href="index.php?page=teachers"  class="btn btn-primary">Back</a>
</form>
</div>
    </div>
    <div class="col-md-2">
        </div>
</div>
</div>

                

  
<!-- =============================================================== -->
									 
<?php include ('includes/left_sidebar.php'); ?>											 
</body>
</html>