<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Admn Officers/Deans</title>
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
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="cms_homepage.php">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Administrative Officers</a>
				</li>
			</ul>
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span> Add Administrative Officers/Deans</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">       
<h1>Add Administrative Officers/Deans</h1><br><br><br>
              
  <form action="adm_officer_process.php" method="post" class="form-horizontal">
  <div class="control-group">
								<label class="control-label" for="focusedInput">Name</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="name" placeholder="Please Enter The Name">
								<input type="hidden" name="event" value="add">
								</div>
							  </div>   
							 <div class="control-group">
								<label class="control-label" for="selectError3">Post: </label>
								<div class="controls">
								  <select id="selectError3" name="post" required/>
									<option value="adm_ofc">Adminstrative officer</option>
									<option value="dean">Dean</option>
								  </select>* Adminstrative officer or Dean*
								</div>
							  </div>
							
							 <div class="control-group hidden-phone">
								<label class="control-label" for="textarea2">Designation</label>
								<div class="controls">
								 <textarea name="designation" class="cleditor" id="textarea2" rows="2" placeholder="Please Enter Designation">Please Enter Designation</textarea>
								</div>
							   	
		</div>

	  <div class="control-group hidden-phone">	  
							  <label class="control-label" for="textarea2">Contact Information</label>
							  <div class="controls">
							<textarea name="message" class="cleditor" id="textarea2" rows="3" placeholder="Please Enter Message Here">Please Enter Contact Info Here</textarea>
							  </div>
							</div>
						
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" id="login" class="btn btn-primary">Add Administrative Officer</button>
      </div>
    </div>
  </form>
      
          </div>
		  </div>
		  </div>
		  
		  
		  <div class="row-fluid">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Existing Administrative Officers</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>Designation</th>
								  <th>Contact Information</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						 
<?php 
include 'connection.php';
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ccet_adm_officers where post='adm_ofc';" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
		<tbody>
							<tr>
								<td class="center"><?php echo $row["name"]; ?></td>
								<td class="center"><?php echo $row["designation"]; ?></td>
								<td class="center"><?php echo $row["contact"]; ?></td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<form action="adm_officer_process.php" method="post">
									<input type="hidden" name="event" value="delete">
									<input type="hidden" name="id" value="<?php echo $row["id"];?>">
									<button type="submit" class="btn btn-info"><i class="halflings-icon white trash"></i></button>
									</form>
									
								</td>
							</tr>
						  </tbody>
		<?php
	}
} else {
    echo " ";
}
$conn->close();
		?>				  
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>
		  		  <div class="row-fluid">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Existing Deans</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Name</th>
								  <th>Designation</th>
								  <th>Contact Information</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						 
<?php 
include 'connection.php';
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ccet_adm_officers where post='dean';" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
		<tbody>
							<tr>
								<td class="center"><?php echo $row["name"]; ?></td>
								<td class="center"><?php echo $row["designation"]; ?></td>
								<td class="center"><?php echo $row["contact"]; ?></td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								<td class="center">
									<form action="adm_officer_process.php" method="post">
									<input type="hidden" name="event" value="delete">
									<input type="hidden" name="id" value="<?php echo $row["id"];?>">
									<button type="submit" class="btn btn-info"><i class="halflings-icon white trash"></i></button>
									</form>
									
								</td>
							</tr>
						  </tbody>
		<?php
	}
} else {
    echo " ";
}
$conn->close();
		?>				  
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>
		  
		  
		  
		  </div></div></div>
<?php
include 'cms_footer.php';
}
?>

</body>
</html>