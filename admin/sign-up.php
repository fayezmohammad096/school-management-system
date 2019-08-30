<?php
include 'database/connection.php';

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require 'phpmailer/src/Exception.php';
		require 'phpmailer/src/PHPMailer.php';
		require 'phpmailer/src/SMTP.php';

$error = "";
$length = "";
$mob = "";
$com_pass ="";
$email_check="";


if(isset($_POST['signup'])){
	$fullName = mysqli_escape_string($conn,$_POST['name']);
	$mobile = mysqli_escape_string($conn,$_POST['mobile']);
	$email = mysqli_escape_string($conn,$_POST['email']);
	$password = mysqli_escape_string($conn,$_POST['password']);
	$comfirm_password = mysqli_escape_string($conn,$_POST['comfirm_Password']);

	$email_exist = "SELECT email FROM reg_user WHERE email= '$email'";/* v_statas is importand for me */
//  AND v_status=1 
	$query = mysqli_query($conn,$email_exist);
	if(mysqli_num_rows($query)>0){
		$email_check = "Your email is already existed";
	}
	

	if(empty($fullName)||empty($mobile)||empty($email)||empty($password)||empty($comfirm_password)){
		$error = "This field is must required";
	}elseif(strlen($fullName)<5){
		$length = "Length must be greater then 4";
	}elseif($password != $comfirm_password){
		$com_pass = "Your password does not match";
	}else{
		$password = md5($password);
		$vkey = md5(time());

		$sql = "INSERT INTO reg_user (full_name,mobile,email,password,v_key,v_status) VALUES('$fullName','$mobile','$email','$password','$vkey',0)";

		$query = mysqli_query($conn,$sql);

		if($query){
			/*  */
			
				$mail = new PHPMailer;
				//* set phpmailer to use SMTP */
				$mail->isSMTP();
				/* smtp host */
				$mail->Host = "smtp.gmail.com";

				$mail->SMTPAuth = true;
				
				/* Provide User Name and Password as your email address$mai(FromEmail) */
				//$mail->Username = "bishobabubrand@gmail.com";/* your email please */
				$mail->Username = "bishobabubrand@gmail.com";/* your email please */

				$mail->Password = "@sujon123@+b+@";/* your password please */

				$mail->SMTPSecure ="tls";

				$mail->Port= 587;

				$mail->From = "bishobabubrand@gmail.com";/* your email please */

				$mail ->FromName = "Fayez";

				$mail ->addAddress($email,"Fayez");

				$mail ->isHTML(true);
				$mail ->Subject = "Email verification";
				$mail ->Body = "<a href = 'http://localhost/school_management_system/admin/verify.php?vkey=$vkey'>Click this activation link</a>";

				if(!$mail->send()){
					echo "Mail Error".$mail->ErrorInfo;
				}else{
					echo "<script>alert('verificatin key has been send successully')</script>";
				}
				header ("location:success.php");
				
			}else{
				echo mysqli_error($conn);
	}
			/*  */
		}


		

		
	}



?>

<!DOCTYPE html>
<html lang="en">
	<title>Sign-up</title>
	<!-- heading_page linked -->
<?php
include 'includes/layout_page.php';
?>

<body>
<!--/login-->
								
<div class="error_page">
<!--/login-top-->
												
	<div class="error-top up">
	
	<div class="login">
		<h3 class="inner-tittle t-inner">Sign Up</h3>
        <div class="buttons">
		<ul>
<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
<div class="clearfix"></div>

		</ul>
	</div>
	<form method="POST" action="?">
		<input type="text" name="name" class="text" placeholder="full-name" >
		<span style="color:red;font-size:10px"><?=$error;?><?=$length;?></span>
		<input type="text" name="mobile" class="text" placeholder="Mobile" > 
		<span style="color:red;font-size:10px"><?=$error;?><?=$mob;?></span>
		<input type="text" name="email" class="text" placeholder="E-mail address" >
		<span style="color:red;font-size:10px"><?=$error;?><?=$email_check;?></span>
		<input type="password" name="password" placeholder="Password" >
		<span style="color:red;font-size:10px"><?=$error;?></span>
		<input type="Password" name="comfirm_Password" placeholder="comfirm-Password" >
		<span style="color:red;font-size:10px"><?=$error;?><?=$com_pass;?></span>
		
		
	<div class="submit">
		<input type="submit" name="signup" value="Sign up" ></div>

	<div class="clearfix"></div>
	
	<div class="new">
		<p class="sign up">Do you have an account yet ? <a href="login.php"> Login here.</a></p>
	<div class="clearfix"></div>
	</div>
		</form>
				</div>
														
			</div>
													 
		<!--//login-top-->
	</div>
	<!--//login-->
	<!--footer section start-->
<div class="footer sign">
 <div class="error-btn">
<a class="read fourth mb-4" href="index.html" style="margin-top:4em;">Return to Home</a>
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