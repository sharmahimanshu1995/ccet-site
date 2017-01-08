<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
if(isset($_REQUEST["submit"]))
{
	include 'connection.php';
$user=$_POST["username"];
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username=$_POST["email"];
$sql = "SELECT * FROM ccet_user where username='{$user}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $to = $row["username"];
	   $subject="Username & Password Info";
$message = "<html>
		 <head></head>
		 <body>
		 <div>
		 <center>
		 Username:-".$row["username"]."<br>Password:-".$row["password"]." 
		 </center>
		 <p>Please do not share it with any body.</p>
		 <i>Thanks & Regards</i><br>
		 <i>Team CCET CMS</i>
		 </div>
</body>
</html>";
$header = "From:website@ccet.ac.in \r\n";
$header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
mail($to,$subject,$message,$header);
echo "<center><h2>An email has been sent to your registered username</h2></center>";
    }
} else {
    echo "You are not registered with CCET CMS";
}
$conn->close();

}
else
{

}
?>
<div class="container">
  <h2>Forgot Password</h2>
  <form action="forgotpassword.php" method="post">
    <div class="form-group">
      <label for="email">Enter Username:</label>
      <input type="email" class="form-control" name="username" id="email" placeholder="Enter username">
    </div>
    
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </form>
</div>

</body>
</html>
