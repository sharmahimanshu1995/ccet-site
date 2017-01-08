<?php
session_start();
?>
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
		$title=$_POST['title'];

$file=$_FILES['image']['tmp_name'];/*File path of temporary folder is stored in this*/
$file1=$_FILES['image']['name'];/* name of file is stored in this*/
$width=193;/*new width is set*/
$height=128;/*new height is set*/
	/* Get original image x y*/
	list($w, $h) = getimagesize($file);/*Original Height and width of image stored*/
	/* calculate new image size with ratio */
	$ratio = max($width/$w, $height/$h);/*Dividing new width by original width . Same is with height. And calculating max of both*/
	$h = ceil($height / $ratio);/*Dividing new height by ratio obtain . returns the smallest integer greater than or equal to a given number.*/
	$x = ($w - $width / $ratio) / 2;
	$w = ceil($width / $ratio);
	/* new file name */
	$path = 'images/icons/'.$width.'x'.$height.'_'.$file1;/* Path where we want to store file */
	/* read binary data from image file */
	$imgString = file_get_contents($_FILES['image']['tmp_name']);/* String of an image is generated*/
	/* create image from string */
	$image = imagecreatefromstring($imgString);/* Here string is convert to byte array for image*/
	$tmp = imagecreatetruecolor($width, $height); /* New size of image is set*/
	imagecopyresampled($tmp, $image,
  	0, 0,
  	$x, 0,
  	$width, $height,
  	$w, $h); /*Original size ki image ko new size main convert karne ke liye hai ye function*/
	/* Save image */
	switch ($_FILES['image']['type']) {
		case 'image/jpeg':
			if(imagejpeg($tmp, $path))
			{
				include 'connection.php';
	$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO campus_highlights (photolink, title, user) VALUES ('{$path}', '{$title}', '{$_SESSION["user"]}')";

if ($conn->query($sql) === TRUE) {
    echo "<center>New record added successfully</center><br>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
				echo '<br><center>Image successfully Uploaded</center>';
				echo '<p>Click <a href="cms_homepage.php" class="btn btn-primary">here</a> to go back</p>';
			}
			break;
		case 'image/png':
			if(imagepng($tmp, $path))
			{
				include 'connection.php';
	$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO campus_highlights (photolink, title, user) VALUES ('{$path}', '{$title}', '{$_SESSION["user"]}')";

if ($conn->query($sql) === TRUE) {
    echo "<center>New record added successfully</center><br>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
				echo 'Image successfully Uploaded';
				echo '<p>Click <a href="cms_homepage.php" class="btn btn-primary">here</a> to go back</p>';
			}
			break;
		case 'image/gif':
			if(imagegif($tmp, $path))
			{
				include 'connection.php';
	$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO campus_highlights (photolink, title, user) VALUES ('{$path}', '{$title}', '{$_SESSION["user"]}')";

if ($conn->query($sql) === TRUE) {
    echo "<center>New record added successfully</center><br>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
				echo 'Image successfully Uploaded';
				echo '<p>Click <a href="cms_homepage.php" class="btn btn-primary">here</a> to go back</p>';
			}
			break;
		default:
			exit;
			break;
	}
	return $path;
	
	/* cleanup memory */
	imagedestroy($image);
	imagedestroy($tmp);
		


    }
	
 
echo '<p>Click <a href="cms_homepage.php" class="btn btn-primary">here</a> to go back</p>';

?>
