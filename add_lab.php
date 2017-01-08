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
	$name=$_POST["name"];
echo $name;
	$dept=$_POST["dept"];
	$description=$_POST["description"];
include 'connection.php';

$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO labs (name, dept, description) VALUES ('{$name}', '{$dept}',' {$description}')";

if ($conn->query($sql) === TRUE) {
    echo "New Lab Added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>

   
  </body>
</html>