 <?php
include 'connection.php';

// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ccet_emails (email, rollno)
VALUES ('{$_REQUEST["email"]}', '{$_REQUEST["rollno"]}')";

if ($conn->query($sql) === TRUE) {
	?>
	<h1><?php
    echo "Thanks For Registering With CMS@CCET. You Will Receive notification through emails";
	?>
	<br><br>
	<center><a href="index.php">GO TO HOME PAGE</h1></center>
	</h1>
	<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 