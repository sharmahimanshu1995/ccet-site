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
	if(empty($_POST["linkinfo"]))
	{
$target_dir = "pdf/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	{
		$notice=$_REQUEST['notice'];
$type=$_REQUEST['type_notice'];
$date=date("d-m-Y");
$link="pdf/".basename( $_FILES["fileToUpload"]["name"]);
include'connection.php';
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ccet_notices (title, type, issued_date, link)
VALUES ('{$notice}', '{$type}', '{$date}', '{$link}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded to folder pdf";
    }
	else {
        echo "Sorry, there was an error uploading your file.";
    }
	}
	else
	{
		$notice=$_POST['notice'];
$type=$_POST['type_notice'];
$date=date("d-m-Y");
$link=$_POST["linkinfo"];
include'connection.php';
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ccet_notices (title, type, issued_date, link)
VALUES ('{$notice}', '{$type}', '{$date}', '{$link}')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

	}
echo '<p>Click <a href="insert_news.php">here</a> to go back</p>';
}
?>
