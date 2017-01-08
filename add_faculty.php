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
	$email=$_POST["email"];
	echo $email."<br>";
	echo "<BR>";
        $name=$_POST["name"];
		echo $name;
		echo "<BR>";
$desg=$_POST["desg"];
echo $email;
echo "<BR>";
$dept=$_POST["dept"];
echo $dept;
echo "<BR>";
$edu=$_POST["edu"];
echo $edu;
echo "<BR>";
$add_role=$_POST["add_role"];
echo $add_role;
echo "<BR>";
$interest=$_POST["interest"];
echo $interest;
echo "<BR>";
$address=$_POST["address"];
echo $address;
echo "<BR>";
$phone=$_POST["phone"];
echo $phone;
echo "<BR>";
$info=$_POST["info"];
if(!isset($info))
{
	$info=' ';
}
echo $info;
$file=$_FILES["fileToUpload"]["tmp_name"];
$fileToUpload=$_post["fileToUpload"];
$width=225;/*new width is set*/
$height=225;/*new height is set*/
	/* Get original image x y*/
	list($w, $h) = getimagesize($file);/*Original Height and width of image stored*/
	/* calculate new image size with ratio */
	$ratio = max($width/$w, $height/$h);/*Dividing new width by original width . Same is with height. And calculating max of both*/
	$h = ceil($height / $ratio);/*Dividing new height by ratio obtain . returns the smallest integer greater than or equal to a given number.*/
	$x = ($w - $width / $ratio) / 2;
	$w = ceil($width / $ratio);
	/* new file name */
$pos=strpos($email, "@");
$imageName=substr($email, 0, $pos).".jpg";
	$path = 'images/faculty/'.$imageName;/*Path where we want to store file */
	/* read binary data from image file */
	$imgString = file_get_contents($_FILES['fileToUpload']['tmp_name']);/* String of an image is generated*/
	/* create image from string */
	$image = imagecreatefromstring($imgString);/* Here string is convert to byte array for image*/
	$tmp = imagecreatetruecolor($width, $height); /* New size of image is set*/
	echo $tmp;
        imagecopyresampled($tmp, $image,
  	0, 0,
  	$x, 0,
  	$width, $height,
  	$w, $h); /*Original size ki image ko new size main convert karne ke liye hai ye function*/
	/* Save image */
if(imagejpeg($tmp, $path))
{
include 'connection.php';
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_autocommit($conn,FALSE);
$sql = "insert into faculty (NAME, PASSWORD, DEPARTMENT, DESIGNATION, BRIEF, EDU, ADD_ROLE, INTEREST, ADDRESS, EMAIL, NUMBER, PHOTO) values ('{$name}','{$email}','{$dept}','{$desg}','{$info}','{$edu}','{$add_role}','{$interest}','{$address}','{$email}','{$phone}','{$path}')";

if ($conn->query($sql) === TRUE) {
$ran_p=mt_rand(10000,99999);
$type="faculty";		
$sql1="insert into ccet_user (name, designation, username, password, type, DEPT) values ('{$name}', '{$desg}', '{$email}', '{$ran_p}', '{$type}', '{$dept}')";
if($conn->query($sql1)==TRUE)
		{
		mysqli_commit($conn);
		mysqli_close($conn);
$headers="From:website@ccet.ac.in";
		$msg = "You've been succefully added to the Faculty list of CCET.\nUsername: ".$email."\nPassword: ".$ran_p."\nPlease keep the username and password safe.\nTHANK YOU!";
mail($email,"CCET CMS",$msg,$headers);
		?>
        <center>
        <div style="font-weight: bold;font-family: inherit;float: contour">
		<br>Data Successfully Added to database<br>
        </div>
                </center>
		<?php
}
else
{
echo "Error: Something Went Wrong";
mysqli_rollback($conn);
mysqli_close($conn);
}
}
else {
    echo "Error: Something Went Wrong";
}
}
        }

        
?>

   
  </body>
</html>