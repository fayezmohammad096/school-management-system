<?php
	include_once 'database/connection.php';
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
			if(mysqli_num_rows($query)>=1){
				header ('location:index.php');
			}else{
				$invalid = "Your email or password invalid";
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<title>Login</title>
	
<?php include ('includes/layout_page.php') ?>
<body>
<!--/login-->
<div class="animated shake">
	<div class="error_page">
<!--/login-top-->
												
	<div class="error-top">
		
	<div class="login">
		<h3 class="inner-tittle t-inner">Student-Login</h3>
		<!-- social button -->
	<div class="buttons login">
		<ul>
			<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
			<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
			<div class="clearfix"></div>
		</ul>
	</div>
	<!-- ====================start here================== -->
	
	<form action="index.php" target="_blank" method="post">
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
		<a class="read fourth" href="school management system.php">Return to Home</a>
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