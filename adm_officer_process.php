<?php 
session_start();
?>
<html>
<head>
<title>Mail</title>
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
					<a href="#">Administrative Officer</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Administrative Officer</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">       
		
              
  <?php
  $event=$_POST["event"];
  if($event=="add")
  {
	  $name=$_POST["name"];
	   $contact=$_POST["message"];
	    $designation=$_POST["designation"];
$post=$_POST["post"];
	include 'connection.php';
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ccet_adm_officers (name, designation, contact,post)
VALUES ('{$name}', '{$designation}', '{$contact}','{$post}')";

if ($conn->query($sql) === TRUE) {
    echo "New Officer added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();  
  }
  if($event=="delete")
  {
	  $id=$_POST["id"];
	  include 'connection.php';
	  $conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM ccet_adm_officers WHERE id='{$id}'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
	  
	  
  }
  
  ?>
    <center><a href="adm_officer.php"> Go Back</a></center>
          </div>
		  </div>
		  </div></div></div></div>
<?php
include 'cms_footer.php';
}
?>

</body>
</html>