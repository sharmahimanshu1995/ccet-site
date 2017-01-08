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
{$id=$_POST["id"];
	  include 'connection.php';
	  $conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM campus_highlights WHERE id='{$id}'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
		


    }
	
 
echo '<p>Click <a href="cms_homepage.php" class="btn btn-primary">here</a> to go back</p>';

?>
