<!-- =================MAIN CONTANT START HERE===================== -->
<h3 class="text-primary">
        &nbsp  <i class="fa fa-dashboard"></i>Dashbord </h3>
          <ol class="breadcrumb">
            &nbsp <li class="active"><i class="fa fa-dashboard"></i> Dashbord</li>
            <li class="active"><i class="fa fa-user"></i> Information</li>
       
        </ol>
<div class="container-fluid">
	<h1 class="text-center">WELL-COME<h1><hr>
		<div class="row">
           
			 &nbsp<div class="col-md-4">
				<form action="" method="post">
					<table class="table table-bordered table-hover table-striped">
						<tr>
							<td colspan="2" class="text-center">Teacher Information</td>
							
						</tr>
						<tr>
							<td>
								<label for="choose">User-name</label>
							</td>
							<td>
								<input class="form-control" type="text" name="user" placeholder="User-name "id="choose">
							</td>
						</tr>
						<tr>
							<td><label for="serial">Serial NO</label></td>
							<td><input class="form-control" type="text" name="serial" pattern="[0-9]{10}"placeholder="must 10 degit ">  </td>
						</tr>
						<tr>
							<td colspan="2" class="text-center"><input type="submit" name='btn' value="Show-data"class="btn btn-success">  </td>
							
						</tr>
					</table>
				</form>
			</div>
            <?php
            include_once 'database/connection.php';
                if(isset($_POST['btn'])){
                    // print_r($_POST);
                     $user = $_POST['user'];
                    $serial = $_POST['serial'];
                   $result = mysqli_query($conn,"SELECT * FROM `teachers` WHERE `username`='$user' AND`serial`=' $serial'"); 
                //    print_r($result);
                if(mysqlI_num_rows($result)>0){
                    $row = mysqli_fetch_assoc($result);
                    // print_r($row);
                    ?>
     
     <div class="col-md-6">

            <table class="table table-bordered table-hover">
                <tr >
               
                <td>Serial no</td>
                <td><?=$row['serial'];?></td>
               
            </tr>
            <tr>
                <td>Full name</td>
                <td><?=$row['fullname'];?></td>             
            </tr>
            <tr>
                <td>User-name</td>
                <td><?=$row['username'];?></td>
                
               
            </tr>
             <tr>
                <td>Mobile</td>
                <td><?=$row['mobile'];?></td>

            </tr>
             <tr>
                <td>Email</td>
                <td><?=$row['email'];?></td>
                
               
            </tr>
             <tr>
                <td>specialise</td>
                <td><?=$row['specialise'];?></td>
                
               
            </tr>
            <tr>
                <td>Qualipiqation</td>
                <td><?=$row['Qulipiqation'];?></td>
               
               
            </tr>
              <tr>
                <td>Birth</td>
                <td><?=$row['dob'];?></td>
               
               
            </tr>
              <tr>
                <td>Address</td>
                <td><?=$row['address'];?></td>
               
               
            </tr>
          
              <tr>
                <td>Photo</td>
                <td class="text-center"><img class="img-thumbnail" style="width:150px" src=""></td>
               
               
            </tr>
        </table>
            </div>
                                 <?php
                }else{
                    ?>
                    <script type="text/javascript">
            alert("Data not found");
            </script>
            <?php
                }
                    
                    ?>
          

              <?php
                }
            ?>       
          

         
		</div>

</div>									
										












<!-- =================================MAIN CONTANT END================================== -->
									