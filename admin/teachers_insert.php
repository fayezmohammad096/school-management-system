<?php
include 'database/connection.php';
    
if(isset($_POST['submit'])){
 
  $fullname = $_POST['fname'];
  $username = $_POST['username'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $specialise = $_POST['specialise'];
  $Qualipiqation = $_POST['Qualipiqation'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];


  $photo = explode('.',$_FILES['photo']['name']);
  // print_r($photo);
  $photo_ex = end($photo);
  // echo $photo_ex;
  $photo_name =$username.'.'.$photo_ex;
  // echo $photo_name;

$serial = time().uniqid();
$sql = "INSERT INTO `teachers`(`serial`, `fullname`, `username`, `mobile`, `email`, `specialise`, `Qulipiqation`, `dob`, `address`,`photo`) VALUES ('$serial','$fullname','$username','$mobile','$email','$specialise','$Qualipiqation','$dob','$address','$photo_name')";

  
if (mysqli_query($conn, $sql)) {
   
   move_uploaded_file($_FILES['photo']['tmp_name'],'teacher_img/'.$photo_name);
  ?>
  <script type="text/javascript">
            alert("Data Save Successfully");
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
        &nbsp &nbsp <i class="fa fa-dashboard"></i>Dashbord <small>TEACHER-INSERT</small></h1>
          <ol class="breadcrumb">
            &nbsp &nbsp <li><a href="#"><i class="fa fa-dashboard"></i> Dashbord</a></li>
            <li class="active"><i class="fa fa-user"></i> TEACHER-INSERT</li>
        </ol>
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">

<div class="jumbotron"> 
<h2 class="text-center text-success">Add new data</h2>
<hr>    
<form action='' method="POST" enctype="multipart/form-data">
  <div class="form-group">
<label data-error="wrong" data-success="right" for="fname">full name</label>
<input required type="text" class="form-control validate" id="fname" name="fname"/>
  </div>
  <div class="form-group">
<label data-error="wrong" data-success="right" for="username">User name</label>
<input required type="text" class="form-control validate" id="username" name="username"/>
  </div>
  
  <div class="form-group">
<label data-error="wrong" data-success="right" for="mobile">mobile</label>
<input type="text" class="form-control validate" id="mobile" name="mobile" required/>
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="email">Email</label>
    <input type="email" class="form-control validate" id="email" name="email" required/>
  </div>
  <div class="form-group">
<label data-error="wrong" data-success="right" for="specialise">specialise</label>
<input type="text" class="form-control validate" id="specialise" name="specialise" required/>
  </div>
  <div class="form-group">
<label data-error="wrong" data-success="right" for="Qualipiqation">Qualipiqation</label>
<input type="text" class="form-control validate" id="Qualipiqation" name="Qualipiqation"required>
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="dob">Birth</label>
<input type="date" class="form-control validate" id="dob" name="dob" required/>
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="address">Address</label>
<input type="text" class="form-control validate" id="address" name="address" required/>
  </div>
  <div class="form-group">
    <label data-error="wrong" data-success="right" for="photo">Photo</label>
<input type="file" class="" id="photo" name="photo" required/>
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
