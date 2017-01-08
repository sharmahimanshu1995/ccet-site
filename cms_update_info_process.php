<?php 
session_start();
?>
<html>
  <head>
    <title>Untitled</title>
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
{
	$user1=$_SESSION["user"];
	$email=$_POST["email"];
	
        $name=$_POST["name"];
		
$desg=$_POST["desg"];

$dept=$_POST["dept"];

$edu=$_POST["edu"];

$add_role=$_POST["add_role"];

$interest=$_POST["interest"];

$address=$_POST["address"];

$phone=$_POST["phone"];
$target_file=$_POST["photo"];
$info=$_POST["info"];
if(!isset($info))
{
	$info=' ';
}

$fileToUpload=$_post["fileToUpload"];

include 'connection.php';
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(empty($_FILES["fileToUpload"]["name"]))
{
	
}
else
{
	$pos=strpos($email, "@");
$imageName=substr($email, 0, $pos).".jpg";
$target_dir = "images/faculty/";
$target_file = $target_dir .$imageName;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". $imageName. " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
$sql = "update faculty set NAME='{$name}', PASSWORD='{$email}', DEPARTMENT='{$dept}', DESIGNATION='{$desg}', BRIEF='{$info}', EDU='{$edu}', ADD_ROLE='{$add_role}', INTEREST='{$interest}', ADDRESS='{$address}', EMAIL='{$email}', NUMBER='{$phone}', PHOTO='{$target_file}' where EMAIL='{$user1}'";

if ($conn->query($sql) === TRUE) {
    ?>
        <center>
        <div style="font-weight: bold;font-family: inherit;float: contour">
		<br>Data Successfully Updated Succesafully<br>
		<a href="cms_homepage.php">Go Back</a>
		<?php
}
else {
    echo "Error: Something Went Wrong";
}

}
 
?>

   
  </body>
</html>
