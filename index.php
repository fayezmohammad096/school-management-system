<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>school management system</title>
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //online-fonts -->
   
</head>
<body>
 <!-- banner -->
<div class="main_section_agile" id="home">
	<div class="banner_nav">
		<nav class="navbar navbar-default ">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<h1><a class="navbar-brand" href="school management system.html"><i class="fa fa-leanpub" aria-hidden="true"></i> SCHOOL_LOGO</a></h1>

			</div>
			<div class="header_right">
			    <form action="#" method="post">
					<input name="Search here" type="search" placeholder="Search" required="">
					<input type="submit" value="">
				</form>
			</div>
			
			
		<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#" class="effect-3">Home</a></li>
						<li><a href="#about" class="effect-3 scroll">About Us</a></li>
						<li><a href="#services" class="effect-3 scroll">Services</a></li>
						<li><a href="#team" class="effect-3 scroll">Team</a></li>
						<li><a href="#gallery" class="effect-3 scroll">Gallery</a></li>
						<li><a href="#mail" class="effect-3 scroll">Mail Us</a></li>
					</ul>
				</nav>

			</div>
		</nav>	
		<div class="clearfix"> </div> 
	</div>
</div>
<!-- banner -->
<!-- ********************** -->
<!-- ********************* -->
<div class="about-bottom">
	<div class="col-md-6 about_bottom_left">
		<div class="video-grid-single-page">
			<div data-video="#" id="video"> <img src="images/banner2.jpg" alt="" class="img-responsive img-thumbnail" width="100" height="50"/> </div>
		</div>
		<div class="about_bottom_left_video">
			
			<div class="vedio_img"><a target="_blank" href="http://youtube.com"><img  src="images/play-button.png" alt="" class="img-responsive" /></a> </div>
		</div>
		</div>
	</div>
	<div class="col-md-6 about_bottom_right one">
		<ul class="signin_forms">
				<li><a target="_blank" class="active"href="admin/sign-up.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In </a> </li>
				<li><a target="_blank" class="active" href="admin/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Admin-login</a> </li>
				<li><a target="_blank" class="active" href="students/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> students-login</a> </li>
				<li><a target="_blank" class="active" href="teachers/login.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Teachers-login</a> </li>
			</ul>
		
			<br><br><br>
		<div class="abt-section">
			<div class="header-section">
		
		
				<h2>Admission Form</h2>
				<h4>Enter the Following Details</h4>
				<form action="#" method="post" class="mod2">
					<div class="col-md-6 col-xs-6 section-left-mk">
						<ul>
							<li class="text">Name of Applicant :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input name="name" type="text" required=""></li>
							<li class="text">Date of Birth :  </li>
							<li class="agileits-main"><i class="fa fa-calendar" aria-hidden="true"></i><input class="date" id="datepicker" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="" /></li>
							<li class="text">Father Name  :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input name="name" type="text" required=""></li>
							<li class="text">Gender  :  </li>
							<li class="agileits-main"><i class="fa fa-user-o" aria-hidden="true"></i><input name="gender" type="text" required=""></li>
						</ul>
					</div>
					<div class="col-md-6 col-xs-6 section-right-mk">
						<ul>
							<li class="text">mobile no  :  </li>
							<li class="agileits-main"><i class="fa fa-phone" aria-hidden="true"></i><input name="mobile" type="text" required=""></li>
							<li class="text">Address  :  </li>
							<li class="agileits-main"><i class="fa fa-home" aria-hidden="true"></i><input name="address" type="text" required=""></li>
							<li class="text">District  :  </li>
							<li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i><input name="address" type="text" required=""></li>
							<li class="text">State  :  </li>
							<li class="agileits-main"><i class="fa fa-map-marker" aria-hidden="true"></i><input name="address" type="text" required=""></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="agile-submit">
						<input type="submit" value="submit">
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- Modal2 -->

<div class="clearfix"> </div> 
<!-- //Modal2 -->	
<!-- about -->
<div class="about-top" id="about">
	<div class="container">
		<h3 class="section-title">About Us</h3>
		<div class="header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="col-md-7 wthree-services-bottom-grids">
			<div class="wthree-services-left">
				<img src="images/ab1.jpg" alt="">
			</div>
			<div class="wthree-services-right">
				<img src="images/ab2.jpg" alt="">
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-5 wthree-about-grids">
			<h4>Welcome to Our Institute</h4>
			<a href="#" class="trend-section" data-toggle="modal" data-target="#myModal"><span>Read More</span></a>
			<a href="#mail" class="trend-section scroll"><span>Get In Touch</span></a>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			<div class="modal-body">
				<img src="images/g10.jpg" alt=""> 
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
			</div> 
		</div>
	</div>
</div>
<!-- //modal --> 
<!-- //about -->

<!--stats-->
<div class="stats" id="stats">
	<div class="container">
		<div class="stats-info">
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
				<i class="fa fa-users" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='12760' data-delay='.5' data-increment="1">12760</div>
				
				<h4 class="stats-info">FOREIGN FOLLOWERS</h4>
			</div>
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
				<i class="fa fa-book" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='31000' data-delay='.5' data-increment="1">31000</div>
				
				<h4 class="stats-info">CLASSES COMPLETE</h4>
			</div>
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
				<i class="fa fa-trophy" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='79000' data-delay='.5' data-increment="10">79000</div>
				
				<h4 class="stats-info">STUDENTS ENROLLED</h4>
			</div>
			<div class="col-md-3 col-xs-3 stats-grid slideanim">
					<i class="fa fa-user" aria-hidden="true"></i>
				<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='600' data-delay='.5' data-increment="1">600</div>
			
				<h4 class="stats-info">CERTIFIED TEACHERS</h4>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//stats-->

<!-- services -->
<div class="services" id="services" >
	<div class="container">  
		<h3 class="section-title">Our Services</h3>
		<div class="header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="services-section-row">
			<div class="col-xs-4 services-grid agileits">
				<span class="fa fa-graduation-cap" aria-hidden="true"></span>
				<h6>01</h6>
				<h5>Scholarship Facility</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
			</div>
			<div class="col-xs-4 services-grid agileits">
				<h6>02</h6>
				<h5>Skilled Lecturers</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
				<span class="fa fa-user-o grid-section-ser" aria-hidden="true"></span>
			</div>
			<div class="col-xs-4 services-grid agileits">
				<span class="fa fa-book" aria-hidden="true"></span>
				<h6>03</h6>
				<h5>Book Library & Store</h5>
				<p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>
			</div> 
			<div class="clearfix"> </div>
		</div>  
	</div>
</div>
<!-- //services -->

<!-- Gallery -->
<section class="portfolio-section" id="gallery">
		<h3 class="section-title">Our Gallery</h3>
		<div class="header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g7.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g11.jpg" class="swipebox"><img src="images/g11.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g8.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
					<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 col-xs-3 gallery-grid gallery1">
					<a href="images/g12.jpg" class="swipebox"><img src="images/g12.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>School_logo</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="clearfix"> </div>
</section>
<!-- //gallery -->

<!-- team -->
<div class="team-section" id="team">
	<div class="container">
		<h3 class="section-title">Our Skilled Lecturers</h3>
		<div class="header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="team-section-grid">
			<div class="col-md-4 col-xs-4 about-poleft t1">
				<div class="about_img"><img src="images/t1.jpg" alt="">
				  <h5>Victoria</h5>
				  <div class="about_opa">
					<p>Professor</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t2">
				<div class="about_img"><img src="images/t2.jpg" alt="">
				  <h5>Darponia</h5>
				  <div class="about_opa">
					<p>Senior Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t3">
				<div class="about_img"><img src="images/t3.jpg" alt="">
				  <h5>Kylie</h5>
				  <div class="about_opa">
					<p>Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="team-section-grid grid-2-team">
			<div class="col-md-4 col-xs-4 about-poleft t1">
				<div class="about_img"><img src="images/t4.jpg" alt="">
				  <h5>Cameron</h5>
				  <div class="about_opa">
					<p>Professor</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t2">
				<div class="about_img"><img src="images/t5.jpg" alt="">
				  <h5>Darponia</h5>
				  <div class="about_opa">
					<p>Senior Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 about-poleft t3">
				<div class="about_img"><img src="images/t6.jpg" alt="">
				  <h5>Austin</h5>
				  <div class="about_opa">
					<p>Lecturers</p>
					<ul class="fb_icons2 text-center">
						<li><a class="fa fa-facebook" href="#"></a></li>
						<li><a class="fa fa-twitter" href="#"></a></li>
						<li><a class="fa fa-google" href="#"></a></li>
						<li><a class="fa fa-linkedin" href="#"></a></li>
						<li><a class="fa fa-pinterest-p" href="#"></a></li>
					</ul>
				  </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //team -->

<!-- contact -->
<div id="mail" class="contact">
	<div class="container">
		<h3 class="section-title">Mail Us</h3>
		<div class="header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="agile_banner_bottom_grids">
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left">
					<i class="fa fa-map-marker" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agilew3_contact">
					<h4>Address</h4>
					<p>435 City hall,</p>
					<p>NewYork City SD092.</p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_left">
					<i class="fa fa-mobile" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_right">
					<h4>Phone</h4>
					<p>+(1234) 2332 232 <span>+(1236) 2334 232</span></p>
				</div>
			</div>
			<div class="col-md-4 col-xs-4 w3_agile_contact_grid">
				<div class="agile_contact_grid_left agileits_left1">
					 <i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<div class="agile_contact_grid_right agileits_right1">
					<h4>Email</h4>
					<p><a href="mailto:info@example.com">info@example1.com</a>
						<span><a href="mailto:info@example.com">info@example2.com</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="section-form">
			<h3 class="section-title">Get In Touch</h3>
			<div class="contact-grid1">
				<div class="contact-top1">
					<form action="#" method="post">
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Name*</label>
							<input type="text" name="Name" placeholder="Name" required="">
							<label>E-mail*</label>
							<input type="email" name="E-mail" placeholder="E-mail" required="">
						</div>
						<div class="col-md-6 col-xs-6 wthree_contact_left_grid">
							<label>Phone Number*</label>
							<input type="text" name="number" placeholder="Phone Number" required="">
							<label>Subject*</label>
							<input type="text" name="subject" placeholder="Subject" required="">
						</div>
						<div class="form-group">
							<label>Message*</label>
							<textarea placeholder name="Message" required=""></textarea>
						</div>
							<input type="submit" value="Send">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ###### -->
<div class="clearfix"> </div>
<div class="container google map">
	<div class="col">
		<div id="map">
	<iframe src="
	https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29408.98644315966!2d91.25997277068434!3d22.87190299187061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37535968b5ead511%3A0x2f372c8c9ced8d6f!2sBasurhat+3850!5e0!3m2!1sen!2sbd!4v1561209122004!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div></div>
</div>
<!-- #### -->

<!-- footer -->
<div class="clearfix"> </div>
<div class="footer">
	<div class="container">
		<div class="wthree_footer_grid_left">
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>About Us</h4>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima ea quas veniam sit aperiam a, officia possimus ipsam placeat</p>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
				<h4>Navigation</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="school management system.html">Home</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#about" class="scroll">About Us</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#services" class="scroll">Services</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#team" class="scroll">Team</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#gallery" class="scroll">Gallery</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#mail" class="scroll">Mail Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 section-3">
				<h4>Others</h4>
				<ul>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Media</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Mobile Apps</a></li>
					<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">
				<h4>Contact Us</h4>
				<ul>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+(000) 123 311</li>
					<li><i class="fa fa-fax" aria-hidden="true"></i>+123 421</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="copy_right">
	<div class="container">
		<p>© 2019. All rights reserved | Design by <a href="#"></a></p>
	</div>
</div>
<!-- //footer -->


    
<!-- js-files -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js-files -->
</body>
</html>