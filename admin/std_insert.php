<?php
include 'database/connection.php';
    
if(isset($_POST['submit'])){
  // echo '<pre>';
  // print_r ($_POST);
  // print_r ($_FILES);
  $fullname = $_POST['fname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $class = $_POST['class'];
  $roll = $_POST['roll'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];

// $photo = $_FILES['photo']['name'];
// echo $photo;
  $photo = explode('.',$_FILES['photo']['name']);
  // print_r($photo);
  $photo_ex = end($photo);
  // echo $photo_ex;
  $photo_name = $roll.'.'.$photo_ex;
  // echo $photo_name;


$sql = "INSERT INTO `students`(`fullname`, `mobile`, `email`,`class`,`roll`, `birth`, `address`, `photo`) VALUES ('$fullname','$mobile','$email','$class','$roll','$dob',' $address',' $photo_name')";

  
	

	


if (mysqli_query($conn, $sql)) {
    
   move_uploaded_file($_FILES['photo']['tmp_name'],'std_img/'.$photo_name);
?>
  <script type="text/javascript">
            alert("Data insert Successfully");
            </script>
  <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

   <title>insert</title>
</head>
<body>
   <div class="container">
           <h1 class="text-primary">
        &nbsp &nbsp <i class="fa fa-dashboard"></i>Dashbord <small>STUDENT-INSERT</small></h1>
          <ol class="breadcrumb">
            &nbsp &nbsp <li><a href="#"><i class="fa fa-dashboard"></i> Dashbord</a></li>
            <li class="active"><i class="fa fa-user"></i> STUDENT-INSERT</li>
        </ol>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

<div class="jumbotron">
<?php if(isset($success)){echo '<P class="alert alert-success">' .$success.'</p> ';} ?>
<?php if(isset($error)){echo '<P class="alert alert-danger">' .$error.'</p> ';} ?>


<h2 class="text-center text-success">Add new data</h2>

<hr>   

<form action='' method="POST" enctype="multipart/form-data">
  <div class="form-group">
<label data-error="wrong" data-success="right" for="fname">full name</label>
<input  type="text" class="form-control validate" id="fname" name="fname"/>
  </div>
  
  <div class="form-group">
<label data-error="wrong" data-success="right" for="mobile">mobile</label>
<input type="text" class="form-control validate" id="mobile" name="mobile" />
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="email">Email</label>
    <input type="email" class="form-control validate" id="email" name="email" />
  </div>
<div class="form-group">
      <label for="class">class:</label>
      <select id="class" class="form-control" name="class">
        <option value="">Select</option>
        <option value="1st">class-1</option>
        <option value="2nd">class-2</option>
        <option value="3rd">class-3</option>
        <option value="4th">class-4</option>
        <option value="5th">class-5</option>
      </select>
  <div class="form-group">
<label data-error="wrong" data-success="right" for="roll">Roll</label>
<input type="text" class="form-control validate" id="roll" name="roll">
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="dob">Birth</label>
<input type="date" class="form-control validate" id="dob" name="dob" />
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="address">Address</label>
<input type="text" class="form-control validate" id="address" name="address" />
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="photo">Photo</label>
<input type="file" class="" id="photo" name="photo" />
  </div>
  

  
  <button type="submit"  name="submit"  class="btn btn-success">Submit</button>
  <a href="#"  class="btn btn-primary">Back</a>
</form>
</div>
    </div>
    <div class="col-md-2">
        </div>
</div>
</div>
</body>
</html>



