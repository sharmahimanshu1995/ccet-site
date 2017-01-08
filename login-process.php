<?php
session_start();
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ccet_user where username='{$_POST["username"]}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if(($_POST["username"]==$row["username"])&&($_POST["password"]==$row["password"]))
        {
            $_SESSION["user"]=$_POST["username"];
            $_SESSION["type"]=$row["type"];
            $_SESSION["dept"]=$row["DEPT"];
            ?>
        <script type="text/javascript">
window.location.href = 'cms_homepage.php';
</script>
        <?php       
    }
 else {
       ?>
<script type="text/javascript">
window.location.href = 'login.html';
</script>
<?php
    }
} 
 }
 else {
    echo "0 results";
}
$conn->close();
?>
       
    </body>
</html>
