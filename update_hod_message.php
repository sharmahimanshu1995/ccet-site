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
        <title>Update Hod message</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link rel='stylesheet' id='style-css'  href='https://madebyfew.com//content/themes/few-press/resources/assets/css/style.css?ver=1.0' type='text/css' media='all' />
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
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
 ?>
<div class="container">
<div class="panel panel-default">
  <div class="panel-body">Welcome <?php echo $_SESSION["user"]; ?>
  <div style="float:right"><a href="logout.php">Logout</a></div></div>
</div>
<?php 

$name=$_POST["name"];
$dept=$_POST["dept"];
$words=$_POST["words"];
$words_1=$_POST["words_1"];
$words_2=$_POST["words_2"];
$primary_email=$_POST["primary_email"];
$alternate_email=$_POST["alternate_email"];

include 'connection.php';
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$target_dir = "images/";
$target_file = $target_dir ."hod_".$dept.".jpg";
$photolink=$target_dir."hod_".$dept.".jpg";
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

// Check file size
if ($_FILES["closeup"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
   if($img1=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
   {
	   echo 'Image Uploaded Succesfully';
   }
        
			$sql = "update hod set name='{$name}', dept='{$dept}', words='{$words}', words_1='{$words_1}', words_2='{$words_2}', primary_email='{$primary_email}', alternate_email='{$alternate_email}', photo_link='{$photolink}' where dept='{$dept}'";

if ($conn->query($sql) === TRUE) {
    ?>
        <center>
        <div style="font-weight: bold;font-family: inherit;float: contour">
		<br>Data Successfully Added to database<br>
           
<?php
$to =$primary_email;
$subject="Successful Updation";
$message="Your Message was updated successfully";         
         $header = "From:website@ccet.ac.in \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully to ".$to;?><br>
			<?php
         }else {
            echo "Message could not be sent.";
         }
		 ?>
            <br><A HREF="hod_messages.php">Ok</A>
        </div>           
        </center>
 <?php
}
 else {
    echo "Error: Something Went Wrong";
}
    

		}
		
		
     
	



  




$conn->close();
}
?> 
    </body>
</html>