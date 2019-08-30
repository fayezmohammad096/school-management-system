<?php
    include ('database/connection.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id = '$id'";
    $query = mysqli_query($conn,$sql);

    $edit_std = mysqli_fetch_assoc($query);
    
?>

<!DOCTYPE HTML>
<html>
<body>

		<!-- header-starts -->
<!--============== header End -->
<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
<div class="jumbotron"> 
<h2 class="text-center text-success">Edit data</h2>
<hr>       
<form action='std_update.php?id=<?=$id?>;' method="post"enctype="multipart/form-data">
  <div class="form-group">
<label data-error="wrong" data-success="right" for="fname">full name</label>
<input required type="text" class="form-control validate" value="<?=$edit_std['fullname'];?>"name="fname"/>
  </div>
  
  <div class="form-group">
<label data-error="wrong" data-success="right" for="mobile">mobile</label>
<input type="text" class="form-control validate" value="<?=$edit_std['mobile'];?>" name="mobile" required/>
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="email">Email</label>
    <input type="email" class="form-control validate" value="<?=$edit_std['email'];?>" name="email" required/>
  </div>
  <div class="form-group">
<label data-error="wrong" data-success="right" for="class">class</label>
<input type="text" class="form-control validate" value="<?=$edit_std['class'];?>" name="class" required/>
  </div>
  <div class="form-group">
<label data-error="wrong" data-success="right" for="roll">roll</label>
<input type="text" class="form-control validate" value="<?=$edit_std['roll'];?>" name="roll" required/>
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="birth">Birth</label>
<input type="date" class="form-control validate" value="<?=$edit_std['birth'];?>" name="birth" required/>
  </div>
  
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="address">Address</label>
<input type="text" class="form-control validate" value="<?=$edit_std['address'];?>" name="address" required/>
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="photo ">photo </label>
    <input type="file" class="form-control validate"  name="photo " required/>
  </div>
 







  
  
  <a href="index.php?page=std_update&id=<?=$edit_std['id'];?>" name="Save" class="btn btn-success">Save</a>
  <a href="index.php?page=all_students"  class="btn btn-primary">Back</a>
</form>
</div>
    </div>
    <div class="col-md-2">
        </div>
</div>
</div>

                

  
<!-- =============================================================== -->
									 
</body>
</html>