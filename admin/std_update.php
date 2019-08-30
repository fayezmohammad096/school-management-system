<?php
        include ('database/connection.php');
        $id=$_GET['id'];
        
        $fullname = $_POST['fname'];
        
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $class = $_POST['class'];
        $roll =$_POST['roll'];

        $dob = $_POST['birth'];
        $address = $_POST['address'];

       
       
      

   $sql = "UPDATE students SET fullname = '$fullname', mobile = '$mobile', email = '$email', class = '$class',roll = '$roll', birth = '$dob', address = '$address' WHERE id = '$id'";

		$query = mysqli_query($conn,$sql);

		if($query){
               header('index.php?page=all_students');
            }else{
				echo mysqli_error($conn);
	        }

             

?>