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
							<td colspan="2" class="text-center">Student Informations</td>
							
						</tr>
						<tr>
							<td>
								<label for="choose">Choose Class</label>
							</td>
							<td>
								<select  name="choose" id="choose">
									<option value="">Select</option>
									<option value="1st">Class-1</option>
									<option value="2nd">Class-2</option>
									<option value="3rd">Class-3</option>
									<option value="4th">Class-4</option>
									<option value="5th">Class-5</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><label for="roll">Roll</label></td>
							<td><input class="form-control" type="text" name="roll" pattern="[0-9]{6}"placeholder="must 6 degit ">  </td>
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
                     $choose = $_POST['choose'];
                    $roll = $_POST['roll'];
                   $result = mysqli_query($conn,"SELECT * FROM `students` WHERE `class`='$choose' AND`roll`=' $roll'"); 
                //    print_r($result);
                if(mysqlI_num_rows($result)>0){
                    $row = mysqli_fetch_assoc($result);
                    // print_r($row);
                    ?>
                			<div class="col-md-6">

            <table class="table table-bordered table-hover">
                <tr >
               
                <td>Name</td>
                <td><?=ucwords($row['fullname']);?></td>
               
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
                <td>Class</td>
                <td><?=$row['class'];?></td>
                
               
            </tr>
             <tr>
                <td>Roll</td>
                <td><?=$row['roll'];?></td>
                
               
            </tr>
             <tr>
                <td>Bitrh</td>
                <td><?=$row['birth'];?></td>
                
               
            </tr>
            <tr>
                <td>Address</td>
                <td><?=$row['address'];?></td>
               
               
            </tr>
          
              <tr>
                <td>Photo</td>
                <td class="text-center"><img class="img-thumbnail" style="width:150px" src="std_img/<?=$row['photo'];?>"></td>
               
               
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
									