<?php
session_start();
?>

<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
if(empty($_SESSION["user"]))
{
	?>
	<script type="text/javascript">
window.location.href = 'login.html';
</script>
<div class="panel panel-default">
  <div class="panel-body">Welcome 
<?php
}
else
{
        echo $_SESSION["user"];
        ?>
        <a href="logout.php" style="float: right">Logout</a>
		</div>
		</div>
		<br><br>
		  <?php
include'connection.php';


// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM ccet_emails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $to = $row["email"];
         $subject = $_REQUEST["subject"];
         
         $message = $_REQUEST["message"];
         
         $header = "From:info@ccet.ac.in \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully to ".$row["email"];?><br>
			<?php
         }else {
            echo "Message could not be sent...";
         }
    }
} else {
    echo "0 results";
}
$conn->close();
}
?> 
      
   </body>
</html>