<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Add Marquee</title>
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
					<a href="#">Add Marquee</a>
				</li>
			</ul>
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Marquee</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">       
<h1>Add Marquee</h1><br><br><br>
              
  <form action="cms_marquee_process.php" method="post" class="form-horizontal">
     
							
							
							 <div class="control-group hidden-phone">
								<label class="control-label" for="textarea2">Marquee title</label>
								<div class="controls">
								 <textarea name="marquee_title" class="cleditor" id="textarea2" rows="2" placeholder="Please Enter Marquee title">Please Enter Marquee title</textarea>
								</div>
							   	
		</div>
<div class="control-group">
								<label class="control-label" for="focusedInput">Link</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="marquee_link" placeholder="Please Enter The link(if any)">
								<input type="hidden" name="event" value="add">
								</div>
							  </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" id="login" class="btn btn-primary">Add Marquee</button>
      </div>
    </div>
  </form>
      
          </div>
		  </div>
		  </div>
		  
		  
		  <div class="row-fluid">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Existing Marquee</h2>
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
								  <th>id</th>
								  <th>Marquee</th>
								  <th>Link</th>
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

$sql = "SELECT * FROM marquee" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
		<tbody>
								<tr>
									<td class="center"><?php echo $row["id"]; ?></td>
									<td class="center"><?php echo $row["title"]; ?></td>
									<td class="center"><?php echo $row["link"]; ?></td>
									<td class="center">
										<span class="label label-success">Active</span>
									</td>
									<td class="center">
										<form action="cms_marquee_process.php" method="post">
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