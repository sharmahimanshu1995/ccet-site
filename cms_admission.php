<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admission</title>
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
 <?if($_SESSION["type"]=="admin"){ ?> 
		
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
						<a href="#">Admission Brochure Degree, PULEET and Cut Off </a>
					</li>
				</ul>
							<!--<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span> Admissions</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
							</div>
						</div>
						<div class="box-content">        
						<h1>Update Admission Brochure Degree</h1><br><br><br>              
						<form action="cms_academic_process.php" method="post" class="form-horizontal" name="frm" enctype="multipart/form-data">
						<div class="control-group">
							<label class="control-label" for="focusedInput">Title</label>
								<div class="controls">								
									<input class="input-xlarge focused" id="focusedInput" type="text" name="title" placeholder="Please Enter The title">							
								</div>
						</div>  
						<div class="control-group">
									<label class="control-label" for="selectError">Type Of Form</label>
									<div class="controls">
									  <select id="selectError" data-rel="chosen" name="type">
										<option>--Select--</option>
										<option value="general">General</option>
										<option value="department">Departmental Form</option>
										<option value="tnp">TNP</option>
										<option value="faculty">Faculty and Staff</option>
									  </select>
									</div>
						</div>
						<div class="control-group">
									<label class="control-label" for="focusedInput">Please upload a file(Pdf format only)</label>
									<div class="controls">
									
									  <input class="input-file uniform_on" id="fileInput" type="file" name="fileToUpload">
									<input type="hidden" name="event" value="forms">
									</div>
						</div>    
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
							  <button type="submit" id="login" class="btn btn-primary">Add Academic Form</button>
						  </div>
						</div>
					  </form>     
					</div>
			  </div>
			</div>-->
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Admission Brochure Degree</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content"> 
					<form action="cms_admission_process.php" method="post" class="form-horizontal" name="frm1" enctype="multipart/form-data">
								<div class="control-group">
											<label class="control-label" for="focusedInput">Please upload a file(Pdf format only)</label>
											<div class="controls">
											<input type="hidden" name="event" value="degreebrochure">
											  <input class="input-file uniform_on" id="fileInput" type="file" name="fileToUpload">
											
											</div>
								</div>    
								<div class="form-group">        
								  <div class="col-sm-offset-2 col-sm-10">
									  <button type="submit" id="login" class="btn btn-primary">Upload Degree Brochure</button>
								  </div>
								</div>
							</form>   
					</div>
				</div><!--/span-->
			</div><!--/row-->
							<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Admission Brochure PULEET</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
							</div>
						</div>
						<div class="box-content">       
							<h1>Update Admission Brochure PULEET</h1><br><br><br>              
							<form action="cms_admission_process.php" method="post" class="form-horizontal" name="frm2" enctype="multipart/form-data">
								<div class="control-group">
											<label class="control-label" for="focusedInput">Please upload a file(Pdf format only)</label>
											<div class="controls">
											<input type="hidden" name="event" value="puleetbrochure">
											  <input class="input-file uniform_on" id="fileInput" type="file" name="fileToUpload">
											
											</div>
								</div>   
								<div class="form-group">        
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" id="login" class="btn btn-primary">Update PULEET brochure</button>
									</div>
								</div>
							</form>      
						</div>
					</div>
				</div>
				
				
				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Admission Cut Off List</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
							</div>
						</div>
						<div class="box-content">       
							<h1>Update Admission Cut Off List</h1><br><br><br>              
							<form action="cms_admission_process.php" method="post" class="form-horizontal" name="frm2" enctype="multipart/form-data">
								<div class="control-group">
											<label class="control-label" for="focusedInput">Please upload a file(Pdf format only)</label>
											<div class="controls">
											
											  <input class="input-file uniform_on" id="fileInput" type="file" name="fileToUpload">
											<input type="hidden" name="event" value="cutoff">
											</div>
								</div>   
								<div class="form-group">        
									<div class="col-sm-offset-2 col-sm-10">
										<button type="submit" id="login" class="btn btn-primary">Update Cut Off List</button>
									</div>
								</div>
							</form>      
						</div>
					</div>
				</div>
    

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
						Department: <input type="hidden" name="dept" value="<?php echo $_SESSION('dept'); ?>">
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
								<input class="input-file uniform_on" id="fileInput" type="file" name="fileToUpload">
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
			<?php } ?>
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

	
<?php }
include 'cms_footer.php';
?>
	
</body>
</html>

