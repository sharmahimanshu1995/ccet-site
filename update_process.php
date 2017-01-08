<?php
$id=$_REQUEST['id'];
$news=$_REQUEST['news'];
$date=$_REQUEST['date'];
$link=$_REQUEST['link'];
include'connection.php';
$conn = new mysqli($host, $username, $password, $db);
// Check connection


$sql = "UPDATE ccet_home SET news='{$news}', date='{$date}', link='{$link}' WHERE ID='{$id}'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
	?>
	<br><a href="insert_news.php">Click to add more news</a><br>
	<?php
} 
else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
