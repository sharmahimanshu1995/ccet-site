<?php
// Create connection
include 'connection.php';
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql1 = "UPDATE ccet_page_visits SET visits=visits+1";

if ($conn->query($sql1) === TRUE) {
    echo "";
} else {
    echo "";
}
$conn->close();
?>