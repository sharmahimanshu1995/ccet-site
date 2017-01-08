<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Lab Info</title>
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
	<div class="container-fluid-full">
		<div class="row-fluid">				
			<!-- start: Main Menu -->
			<?php include 'cms_sidebar.php'; ?> 
			<div id="content" class="span10">			
				<ul class="breadcrumb">				<li>
						<i class="icon-home"></i>
						<a href="cms_homepage.php">Home</a>
						<i class="icon-angle-right"></i> 
					</li>
					<li>
						<i class="icon-edit"></i>
						<a href="#">Add Lab Info</a>
					</li>
				</ul>			
				<div class="row-fluid sortable">
					<div class="box span12">
						<div class="box-header" data-original-title>
							<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Lab Info</h2>
							<div class="box-icon">
								<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
								<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
								<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
							</div>
						</div>
						<div class="box-content">         
							<h1>Add Lab info</h1><br><br><br>              
							<form action="add_lab.php" method="post" class="form-horizontal" enctype="multipart/form-data">
								<div class="control-group">
									<label class="control-label" for="focusedInput">Name of Lab</label>
									<div class="controls">
										<input class="input-xlarge focused" id="focusedInput" type="text" name="name" placeholder="Please Enter The Name of lab">
									</div>
								</div>    
								<div class="control-group hidden-phone">
									<label class="control-label" for="textarea2">Description</label>
									<div class="controls">
										<textarea name="description" class="cleditor" id="textarea2" rows="3" placeholder="Please Enter Lab description Here"></textarea>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="selectError3">Department: </label>
										<div class="controls">
										  <select id="selectError3" name="dept">
											<option value="CSE">COMPUTER SCIENCE AND ENGINEERING</option>
											<option value="ECE">ELECTRONICS AND COMMUNICATION ENGINEERING</option>
											<option value="MEC">MECHANICAL ENGINEERING</option>
											<option value="CIV">CIVIL ENGINEERING</option>
											<option value="AS">APPLIED SCIENCE</option>
										  </select>
										</div>
								</div>			
								<div class="form-group">        
								  <div class="col-sm-offset-2 col-sm-10">
										<button type="submit" id="login" class="btn btn-primary">Add to Department</button>
										<button type="reset" id="login" class="btn btn-default">reset</button>
								  </div>
								</div>
							</form>					  
						</div>
					</div>
				</div>
			</div>
		</div>
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
		include 'cms_footer.php';}
?>
	
</body>
</html>

