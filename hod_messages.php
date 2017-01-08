<?php 
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Hod Messages Change</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link id="bootstrap-style" href="css/bootstrap.min_cms.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style_cms.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>

<script src="js/ImageTool.js"></script>
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
					<a href="#">Departmental Changes </a>
				</li>
			</ul>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Change HOD Message</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
	
<div class="container">
 <?if($_SESSION["type"]=="admin"){ ?>
<div class="box-content"> 
 <div class="panel panel-default" style="border:none">
						
	  <ul class="nav nav-tabs">
		
		<li class="active"><a data-toggle="tab" href="#menu1" class="staticheading">Applied Science</a></li>
		<li><a data-toggle="tab" href="#menu2" class="staticheading">Computer Science</a></li>
		<li><a data-toggle="tab" href="#menu3" class="staticheading">Electronics</a></li>
  <li><a data-toggle="tab" href="#menu4" class="staticheading">Mechanical</a></li>
  <li><a data-toggle="tab" href="#menu5" class="staticheading">Civil</a></li>  
	  </ul>

	  <div class="tab-content">
		
		<div id="menu1" class="tab-pane active">
 <h3 class="staticheading" style="margin-top:15px;">Applied Science</h3>
 <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addFaculty">Click To Update Message<i class="fa fa-caret-square-o-down" aria-hidden="true"></i>
</button>
  <div id="addFaculty" class="collapse">
  <?php

include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hod where dept='as'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
		<table class="table">
		<tbody>
		<form id="faculty" method="post" action="update_hod_message.php" enctype="multipart/form-data">
<tr><td>Name: </td><td><input type="text" name="name" value="<?php echo $row["name"] ?>" required></td></tr>
<tr><td>Dept: </td><td><input type="text" name="dept" value="<?php echo $row["dept"] ?>" placeholder="" readonly ></td></tr>
<tr><td>Words Line 1:  </td><td><textarea rows="4" cols="50" name="words" placeholder="Brief Info of new faculty" ><?php echo $row["words"] ?>
</textarea> </td></tr>
<tr><td>Words Line 2: </td> <td><textarea rows="4" cols="50" name="words_1"  placeholder="Brief Info of new faculty"><?php echo $row["words_1"] ?>
</textarea> </td></tr>
<tr><td>Words Line 3: </td><td> <textarea rows="4" cols="50" name="words_2"  placeholder="Brief Info of new faculty"><?php echo $row["words_2"] ?>
</textarea> </td></tr>
<tr><td>Primary Email:</td><td> <input type="text" name="primary_email" value="<?php echo $row["primary_email"] ?>" placeholder="Enter the email id" required/></td></tr>
<tr><td>Alternate Email:</td><td><input type="text" name="alternate_email" value="<?php echo $row["alternate_email"] ?>" placeholder="Enter the email id" required/></td></tr>
<tr><td>Old Photograph:</td><td><img src="<?php echo $row["photo_link"]?>" style="width:100px;height:auto"></td></tr>
<tr><td>Update Photo:</td><td><input type="file" name="fileToUpload" id="fileToUpload">
<img id="preview">
<script>
document.getElementById('fileToUpload').onchange = function(evt) {
    ImageTools.resize(this.files[0], {
        width: 400, // maximum width
        height: 400 // maximum height
    }, function(blob, didItResize) {
        // didItResize will be true if it managed to resize it, otherwise false (and will return the original file as 'blob')
        document.getElementById('preview').src = window.URL.createObjectURL(blob);
        // you can also now upload this blob using an XHR.
    });
};
</script></td></tr>
 <tr><td colspan="2">   <input type="submit" class="btn btn-primary"value="Upload Image" name="submit"></td></tr>

</form>
</tbody>
</table>
<img id="preview">
		<?php
    }
} else {
    echo " ";
}
$conn->close();
?>
   
  </div>
   	</div>
		<div id="menu2" class="tab-pane fade">
		 <h3 class="staticheading" style="margin-top:15px;">Computer Science</h3> 
<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addFaculty1">Click To Update Message<i class="fa fa-caret-square-o-down" aria-hidden="true"></i></button>
  <div id="addFaculty1" class="collapse">
  <?php

include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hod where dept='cse'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
		<table class="table">
		<tbody>
		<form id="faculty" method="post" action="update_hod_message.php" enctype="multipart/form-data">
<tr><td>Name: </td><td><input type="text" name="name" value="<?php echo $row["name"] ?>" required></td></tr>
<tr><td>Dept: </td><td><input type="text" name="dept" value="<?php echo $row["dept"] ?>" placeholder="" readonly ></td></tr>
<tr><td>Words Line 1:  </td><td><textarea rows="4" cols="50" name="words" placeholder="Brief Info of new faculty" ><?php echo $row["words"] ?>
</textarea> </td></tr>
<tr><td>Words Line 2: </td> <td><textarea rows="4" cols="50" name="words_1"  placeholder="Brief Info of new faculty"><?php echo $row["words_1"] ?>
</textarea> </td></tr>
<tr><td>Words Line 3: </td><td> <textarea rows="4" cols="50" name="words_2"  placeholder="Brief Info of new faculty"><?php echo $row["words_2"] ?>
</textarea> </td></tr>
<tr><td>Primary Email:</td><td> <input type="text" name="primary_email" value="<?php echo $row["primary_email"] ?>" placeholder="Enter the email id" required/></td></tr>
<tr><td>Alternate Email:</td><td><input type="text" name="alternate_email" value="<?php echo $row["alternate_email"] ?>" placeholder="Enter the email id" required/></td></tr>
<tr><td>Old Photograph:</td><td><img src="<?php echo $row["photo_link"]?>" style="width:100px;height:auto"></td></tr>
<tr><td>Update Photo:</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td></tr>
 <tr><td colspan="2">   <input type="submit" class="btn btn-primary"value="Upload Image" name="submit"></td></tr>

</form>
</tbody>
</table>
		<?php
    }
} else {
    echo " ";
}
$conn->close();
?>
   
  </div>
		</div>
		<div id="menu3" class="tab-pane fade">
		  <h3 class="staticheading" style="margin-top:15px;">Electronics</h3>
		   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addFaculty2">Click To Update Message<i class="fa fa-caret-square-o-down" aria-hidden="true"></i></button>
  <div id="addFaculty2" class="collapse">
  <?php

include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hod where dept='ece'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
		<table class="table">
		<tbody>
		<form id="faculty" method="post" action="update_hod_message.php" enctype="multipart/form-data">
<tr><td>Name: </td><td><input type="text" name="name" value="<?php echo $row["name"] ?>" required></td></tr>
<tr><td>Dept: </td><td><input type="text" name="dept" value="<?php echo $row["dept"] ?>" placeholder="" readonly ></td></tr>
<tr><td>Words Line 1:  </td><td><textarea rows="4" cols="50" name="words" placeholder="Brief Info of new faculty" ><?php echo $row["words"] ?>
</textarea> </td></tr>
<tr><td>Words Line 2: </td> <td><textarea rows="4" cols="50" name="words_1"  placeholder="Brief Info of new faculty"><?php echo $row["words_1"] ?>
</textarea> </td></tr>
<tr><td>Words Line 3: </td><td> <textarea rows="4" cols="50" name="words_2"  placeholder="Brief Info of new faculty"><?php echo $row["words_2"] ?>
</textarea> </td></tr>
<tr><td>Primary Email:</td><td> <input type="text" name="primary_email" value="<?php echo $row["primary_email"] ?>" placeholder="Enter the email id" required/></td></tr>
<tr><td>Alternate Email:</td><td><input type="text" name="alternate_email" value="<?php echo $row["alternate_email"] ?>" placeholder="Enter the email id" required/></td></tr>
<tr><td>Old Photograph:</td><td><img src="<?php echo $row["photo_link"]?>" style="width:100px;height:auto"></td></tr>
<tr><td>Update Photo:</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td></tr>
 <tr><td colspan="2">   <input type="submit" class="btn btn-primary"value="Upload Image" name="submit"></td></tr>

</form>
</tbody>
</table>
		<?php
    }
} else {
    echo " ";
}
$conn->close();
?>
   
  </div>
		</div>
<div id="menu4" class="tab-pane fade">
		  <h3 class="staticheading" style="margin-top:15px;">Mechanical</h3>
		  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addFaculty3">Click To Update Message<i class="fa fa-caret-square-o-down" aria-hidden="true"></i></button>
  <div id="addFaculty3" class="collapse">
  <?php

include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hod where dept='mech'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
		<table class="table">
		<tbody>
		<form id="faculty" method="post" action="update_hod_message.php" enctype="multipart/form-data">
<tr><td>Name: </td><td><input type="text" name="name" value="<?php echo $row["name"] ?>" required></td></tr>
<tr><td>Dept: </td><td><input type="text" name="dept" value="<?php echo $row["dept"] ?>" placeholder="" readonly ></td></tr>
<tr><td>Words Line 1:  </td><td><textarea rows="4" cols="50" name="words" placeholder="Brief Info of new faculty" ><?php echo $row["words"] ?>
</textarea> </td></tr>
<tr><td>Words Line 2: </td> <td><textarea rows="4" cols="50" name="words_1"  placeholder="Brief Info of new faculty"><?php echo $row["words_1"] ?>
</textarea> </td></tr>
<tr><td>Words Line 3: </td><td> <textarea rows="4" cols="50" name="words_2"  placeholder="Brief Info of new faculty"><?php echo $row["words_2"] ?>
</textarea> </td></tr>
<tr><td>Primary Email:</td><td> <input type="text" name="primary_email" value="<?php echo $row["primary_email"] ?>" placeholder="Enter the email id" required/></td></tr>
<tr><td>Alternate Email:</td><td><input type="text" name="alternate_email" value="<?php echo $row["alternate_email"] ?>" placeholder="Enter the email id" required/></td></tr>
<tr><td>Old Photograph:</td><td><img src="<?php echo $row["photo_link"]?>" style="width:100px;height:auto"></td></tr>
<tr><td>Update Photo:</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td></tr>
 <tr><td colspan="2">   <input type="submit" class="btn btn-primary"value="Upload Image" name="submit"></td></tr>

</form>
</tbody>
</table>
		<?php
    }
} else {
    echo " ";
}
$conn->close();
?>
   
  </div>
		</div>
<div id="menu5" class="tab-pane fade">
		  <h3 class="staticheading" style="margin-top:15px;">Civil</h3>
		   <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#addFaculty4">Click To Update Message<i class="fa fa-caret-square-o-down" aria-hidden="true"></i></button>
  <div id="addFaculty4" class="collapse">
  <?php

include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM hod where dept='civil'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
		<table class="table">
		<tbody>
		<form id="faculty" method="post" action="update_hod_message.php" enctype="multipart/form-data">
<tr><td>Name: </td><td><input type="text" name="name" value="<?php echo $row["name"] ?>" required></td></tr>
<tr><td>Dept: </td><td><input type="text" name="dept" value="<?php echo $row["dept"] ?>" placeholder="" readonly ></td></tr>
<tr><td>Words Line 1:  </td><td><textarea rows="4" cols="50" name="words" placeholder="Brief Info of new faculty" ><?php echo $row["words"] ?>
</textarea> </td></tr>
<tr><td>Words Line 2: </td> <td><textarea rows="4" cols="50" name="words_1"  placeholder="Brief Info of new faculty"><?php echo $row["words_1"] ?>
</textarea> </td></tr>
<tr><td>Words Line 3: </td><td> <textarea rows="4" cols="50" name="words_2"  placeholder="Brief Info of new faculty"><?php echo $row["words_2"] ?>
</textarea> </td></tr>
<tr><td>Primary Email:</td><td> <input type="text" name="primary_email" value="<?php echo $row["primary_email"] ?>" placeholder="Enter the email id" required/></td></tr>
<tr><td>Alternate Email:</td><td><input type="text" name="alternate_email" value="<?php echo $row["alternate_email"] ?>" placeholder="Enter the email id" required/></td></tr>
<tr><td>Old Photograph:</td><td><img src="<?php echo $row["photo_link"]?>" style="width:100px;height:auto"></td></tr>
<tr><td>Update Photo:</td><td><input type="file" name="fileToUpload" id="fileToUpload"></td></tr>
 <tr><td colspan="2">   <input type="submit" class="btn btn-primary"value="Upload Image" name="submit"></td></tr>

</form>
</tbody>
</table>
		<?php
    }
} else {
    echo " ";
}
$conn->close();
?>
   
  </div>
		</div>
	  </div>
	
</div><?php }
if($_SESSION["type"]=="HOD"){
?>
<?php } ?>
<?php }?>
<a href="cms_homepage.php">Go to cms home page</a>
  </body>
</html>
