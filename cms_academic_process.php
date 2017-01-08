<?php 
session_start();
?>
<html>
<head>
<title>CMS Academic</title>
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
					<a href="#">Academics</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span> Academics</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">       
		
        <?php 
		$event=$_POST["event"];
		if($event=="prospectus")
		{
$target_dir = "pdf/";
$target_file = $target_dir ."prospectus.pdf";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
   if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
   {
	   echo '<h3>Prospectus Uploaded Succesfully</h3>';
   }
}
		}
		
		if($event=="calender")
		{
			$target_dir = "pdf/";
$target_file = $target_dir ."calender.pdf";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
   if($img1=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
   {
	   echo 'Calender Uploaded Succesfully';
   }
}
		}
		if($event=="forms")
		{ 

$title=$_POST["title"];
$type=$_POST["type"];
   $date=date('Y-m-d');
include 'connection.php';
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$target_dir = "pdf/";
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
   if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
   {
	
	   $sql = "insert into ccet_forms (title, type, link, date) values ('{$title}', '{$type}', '{$target_file}', '{$date}')";

if ($conn->query($sql) === TRUE) {
    ?>
        <center>
        <div style="font-weight: bold;font-family: inherit;float: contour">
		<br>Data Successfully Added to database<br>
	   </div>
	   <a href="cms_academic.php">Go Back</a>
	   </center>
	   
	   <?php
}
else{
	echo 'Sorry Error';
}
   }
   else
   {
	   echo 'File could not be uplaoded';
   }
		}
		}
		else
		{
			echo 'Unable to get any value';
		}
?>
		    
          </div>
		  </div>
		  </div>
		  </div></div></div>
<?php
include 'cms_footer.php';
}
?>

</body>
</html>