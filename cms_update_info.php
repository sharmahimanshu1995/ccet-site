<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Departmental Changes | Add Faculty</title>
	<link id="bootstrap-style" href="css/bootstrap.min_cms.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style_cms.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
  </head>

<body>
<?php
if(empty($_SESSION["user"]))
{
	?>
	<script type="text/javascript">
        window.location.href = 'login.html';
       </script>
	<?php
}
else
{include 'cms_head.php';
	?>
 <?php ?>
		
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?php include 'cms_sidebar.php'; ?> 
			<!-- end: Main Menu -->
			
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="cms_homepage.php">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Update Info </a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Info</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<?php
include 'connection.php';

// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$user=$_SESSION['user'];
$sql = "SELECT * FROM faculty where EMAIL='{$user}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
					<div class="box-content"> 
					<form id="faculty" method="post" action="cms_update_info_process.php" enctype="multipart/form-data">
					<fieldset>
						<div class="control-group">
								<label class="control-label" for="focusedInput">Name: </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="name" value="<?php echo $row["NAME"]?>" required/>
								</div>
							  </div>
						<div class="control-group">
								<label class="control-label" for="selectError3">Designation: </label>
								<div class="controls">
								  <select id="selectError3" name="desg" required/>
								  <option value="<?php echo $row["DESIGNATION"];?>"><?php echo$row["DESIGNATION"];?></option>
									<option value="HOD">Professor & Head</option>
									<option value="Professor">Professor</option>
									<option value="Asco_Prof">Associate Professor</option>
									<option value="Assist_Prof">Assistant Professor</option>
									<option value="Other">Other</option>
								  </select>
								</div>
							  </div>
						<div class="control-group">
								<label class="control-label" for="selectError3">Department: </label>
								<div class="controls">
								  <select id="selectError3" name="dept">
								  <option value="<?php echo $row["DEPARTMENT"];?>"><?php echo$row["DEPARTMENT"];?></option>
									<option value="CSE">CSE</option>
									<option value="ECE">ECE</option>
									<option value="MEC">MEC</option>
									<option value="CIV">CIV</option>
									<option value="AS">AS</option>
								  </select>
								</div>
							  </div>
							<div class="control-group hidden-phone">
								<label class="control-label" for="textarea2">Brief Info:  </label>
									<div class="controls">
										<textarea class="cleditor" id="textarea2" rows="3" name="info"><?php echo $row["BRIEF"];?></textarea>
									</div>
							</div> <br/>
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Educational Qualification:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="edu" value="<?php echo $row["EDU"];?>" placeholder="Enter the educational qualification" >
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Additional Roles: </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="add_role" value="<?php echo $row["ADD_ROLE"];?>" placeholder="Enter the additional role" />
								</div>
							  </div>
							<div class="control-group">
								<label class="control-label" for="focusedInput">Area of Specialization: </label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="interest" value="<?php echo $row["INTEREST"];?>" placeholder="Enter the Area of Specialization" />
								</div>
							  </div>
							Address: <input type="text" name="address" value="<?php echo $row["ADDRESS"];?>" placeholder="Enter the room no" /><br/>
							Email: <input type="text" name="email" value="<?php echo $row["EMAIL"];?>" placeholder="Enter the email id" required/><br/>
							Phone: <input type="text" name="phone" value="<?php echo $row["NUMBER"];?>" placeholder="Enter the Phone" /><br/>
							<div class="control-group">
								  <label class="control-label" for="fileInput">Existing Photo</label><img src="<?php echo $row["PHOTO"];?>" style="width:100px;height:100px">
								  <label class="control-label" for="fileInput">Update Photo</label>
								  <div class="controls">
								  <input type="hidden" name="photo" value="<?php echo $row["PHOTO"];?>">
									<input class="input-file uniform_on" id="fileInput" type="file" name="fileToUpload">
								  </div>
								</div>
							<div class="form-actions">
								  <button type="submit" class="btn btn-primary" name="submit">Update Info</button>
								  <button type="reset" class="btn" name="cancel">Cancel</button> 
								</div>
								</fieldset>
						</form>   
					</div>
				</div><!--/span-->
			</div><!--/row-->
			
    

	</div><!--/.fluid-container-->
	<!--HOD VERSION-->	
<?php }
if($_SESSION["type"]=="HOD"){
?>
<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Faculty</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content"> 
					<form id="faculty" method="post" action="add_faculty.php" enctype="multipart/form-data">
						Name: <input type="text" name="name" placeholder="Enter the Name" required/><br/>
						Designation: <input type="text" name="desg" placeholder="Enter the designation" / required><br/>
						Department: <input type="hidden" name="dept" value="<?php echo $_SESSION('dept'); ?>"
						<div class="control-group hidden-phone">
													  <label class="control-label" for="textarea2">Brief Info:  </label>
													  <div class="controls">
														<textarea class="cleditor" id="textarea2" rows="3" name="info"></textarea>
													  </div>
						</div> <br/>
						Educational Qualification: <input type="text" name="edu" placeholder="Enter the educational qualification" /><br/>
						Additional Roles: <input type="text" name="add_role" placeholder="Enter the additional role" /><br/>
						Area of Specialization: <input type="text" name="interest" placeholder="Enter the Area of Specialization" /><br/>
						Address: <input type="text" name="address" placeholder="Enter the room no" /><br/>
						Email: <input type="text" name="email" placeholder="Enter the email id" required/><br/>
						Phone: <input type="text" name="phone" placeholder="Enter the Phone" /><br/>
						<div class="control-group">
							  <label class="control-label" for="fileInput">Photo</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="fileToUpload" value="">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="submit">Add Faculty</button>
							  <button type="reset" class="btn" name="cancel">Cancel</button> 
							</div>
						</form>   
					</div>
				</div><!--/span-->
			</div><!--/row-->
			</div><!--/.fluid-container-->
			<?php
    }
} else {
    echo "0 results";
}
$conn->close();

			}

			?>
   	</div>
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>

	
<?php 
include 'cms_footer.php';
?>
	
</body>
</html>

