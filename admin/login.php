<?php
	include_once 'database/connection.php';
	if(empty($_SESSION))
	session_start();

	if(isset($_SESSION['email'])){
		header ('location:index.php');
		exit;
	}
	


	$error = "";
	$invalid = "";

	if(isset($_POST['login'])){
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

		if(empty($email) || empty($password)){
			$error = "This field is required";
		}else{
			$password = md5($password);
			$sql = "SELECT * FROM reg_user WHERE email = '$email' AND password = '$password'";
            $query = mysqli_query($conn,$sql);
			if(mysqli_num_rows($query)>0 ){
				while($row = mysqli_fetch_array($query)){
					if($row['email']==$_POST ['email']){
						$_SESSION['email'] = $_POST ['email'];
						header ('location:index.php');
					}else{
							$invalid = "Your email or password invalid";
					}
				}
				 
				
			}
		}
	}
	
?>
<!DOCTYPE html>
<html lang="en">
	<title>Login</title>
	
<!-- layout -->
<head>
<title> </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css
" rel='stylesheet' type='text/css' />
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css
" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	

<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js
"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js
"></script>
<script src="js/custom.js"></script>
<!--//skycons-icons-->

</head>

<!-- //layout -->
<body>
<!--/login-->
<div class="animated shake">
	<div class="error_page">
<!--/login-top-->
												
	<div class="error-top">
		
	<div class="login">
		<h3 class="inner-tittle t-inner">Login</h3>
		<!-- social button -->
	<div class="buttons login">
		<ul>
			<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
			<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
			<div class="clearfix"></div>
		</ul>
	</div>
	<!-- ====================start here================== -->
	
	<form action="login.php" target="#" method="post">
		<input type="text"  name="email" class="text" placeholder="E-mail address">
		<span style="color:red;font-size:10px"><?=$error;?><?=$invalid;?></span>
		<input type="password" name="password" placeholder="Password" >
		<span style="color:red;font-size:10px"><?=$error;?><?=$invalid;?></span>
	<div class="submit">
        <input type="submit" name="login"  value="Login" ></div>

	<div class="clearfix"></div>

	<div class="new">
		<p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Forgot Password ?</label></p>
		<p class="sign">Do not have an account ?
		<a href="sign-up.php">Sign Up</a></p>

	<div class="clearfix"></div>
    
	</div>
		</form>
			</div>

	</div>
													
													
<!--//login-top-->
 </div>
			
</div>								
			
	<!--//login-->
 <!--footer section start-->
	<div class="footer">
	<div class="error-btn">
		<a class="read fourth" href="../index.php">Return to Home</a>
	</div>
	</div>
<!--footer section end-->
<!--/404-->
  
  
  
  
  
  
  
  
  
<script src="js/jquery-1.10.2.min.js"></script>
  <!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>