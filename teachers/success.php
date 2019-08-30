<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Alert Boxe</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>

	body{color: aliceblue;}
	.flex-container{
		display: flex;
		justify-content: center;
		
	}
	.flex-content{
		background: teal;
		margin-top: 10%;
	}
	.icon-box {
		color: #fff;		
		width: 95px;
		height: 95px;
		display: inline-block;
		border-radius: 50%;
		z-index: 9;
		border: 5px solid #fff;
		padding: 15px;
		text-align: center;
		margin-left: 38%;
		margin-top: 10%;
	}
	.icon-box i {
		font-size: 64px;
		margin: -4px 0 0 -4px;
	}
	.btn-success {
	background-color: black;
	border-color: aliceblue;
	color: aliceblue;
}
.btn-success:hover{background:black;}
.btn-success:hover a{background-color: black;color:aliceblue;text-decoration: none;}

</style>
</head>
<body>

	<div class="flex-container">
		<div class="flex-content">
			<div class="icon-box">
				<i class="material-icons">&#xE876;</i>
			</div>
			<div class="modal-body text-center">
				<h4>Great!</h4>	
				<p>Your account has been created successfully.</p>
				<p>Please Check Your Email To complete the registration</p>
				<button class="btn btn-success"><a href="login.php">Start Login Now</a></button>
			</div>
		</div>
	</div>

</body>
</html>                            