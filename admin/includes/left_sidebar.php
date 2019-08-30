<!--/sidebar-menu-->
	<div class="sidebar-menu">
		<header class="logo">
			<a href="#" class="sidebar-icon">
				<span class="fa fa-bars"></span> 
			</a> 
<a href="index.php"> 
	<span id="logo"> <h1>SMS</h1></span> 
<!--<img id="logo" src="" alt="Logo"/>--> 
</a> 
</header>
<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
<!--/down-->
<div class="down">	
	<a href="index.php"><img src="images/admin.jpg"></a>
	<a href="profile.php"><span class=" name-caret">Jasmin </span></a>
		<p>System Administrator</p>
<ul>
	<li><a class="tooltips" href="profile.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
	<li><a class="tooltips" href="#"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
	<li><a class="tooltips" href="logout.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
</ul>
</div>
<!--//down-->
 <div class="menu">
	<ul id="menu" >
		<li><a href="index.php?page=dashboard"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a>
		<li id="menu-academico" ><a href="index.php?page=all_students"><i class="fa fa-users"></i> <span> Students</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-avaliacoes" ><a href="index.php?page=std_insert">INSERT STUDENTS</a></li>
				<li id="menu-academico-avaliacoes" ><a href="index.php?page=all_students"> All STUDENTS</a></li>
				<li id="menu-academico-boletim" ><a href="#">Update STUDENTS</a></li>
			</ul></li>

		<li id="menu-academico" ><a href="index.php?page=teachers"><i class="fa fa-users"></i> <span> Teachers</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-avaliacoes" ><a href="index.php?page=teachers_insert">INSERT TEACHER</a></li>
				<li id="menu-academico-avaliacoes" ><a href="index.php?page=teachers"> All TEACHERS</a></li>
				
			</ul></li>	
			<li id="menu-academico" ><a href="index.php?page=user"><i class="fa fa-users"></i> <span> Users</span> <span  style="float: right"></span></a>						
		
									
									<li id="menu-comunicacao" ><a href="#"><i class="fa fa-smile-o"></i> <span>More</span><span class="fa fa-angle-double-right" style="float: right"></span></a>
									  <ul id="menu-comunicacao-sub" >
										<li id="menu-mensagens" style="width:120px" ><a href="project.html">Projects <i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
										  <ul id="menu-mensagens-sub" >
											<li id="menu-mensagens-enviadas" style="width:130px" ><a href="ribbon.html">Ribbons</a></li>
											<li id="menu-mensagens-recebidas"  style="width:130px"><a href="blank.html">Blank</a></li>
										  </ul>
										</li>
										<li id="menu-arquivos" ><a href="500.html">500</a></li>
									  </ul>
									</li>
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<!-- ==============/ -->
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>