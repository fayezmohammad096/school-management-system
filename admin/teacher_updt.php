<?php
        include ('database/connection.php');
        $id=$_GET['id'];
        $fullname = mysqli_escape_string($conn,$_POST['fname']);
        
        $mobile = mysqli_escape_string($conn,$_POST['mobile']);
        $email = mysqli_escape_string($conn,$_POST['email']);

        $specialise = mysqli_escape_string($conn,$_POST['specialise']);
        $Qulipiqation = mysqli_escape_string($conn,$_POST['Qulipiqation']);
        $dob = mysqli_escape_string($conn,$_POST['dob']);
        $address = mysqli_escape_string($conn,$_POST['address']);

       
       
      

   $sql = "UPDATE teachers SET fullname = '$fullname', mobile = '$mobile', email = '$email', specialise = '$specialise',Qulipiqation = '$Qulipiqation', dob = '$dob', address = '$address' WHERE id = '$id'";

		$query = mysqli_query($conn,$sql);

		if($query){
               header('index.php?page=teachers');
            }else{
				echo mysqli_error($conn);
	        }

             

?>