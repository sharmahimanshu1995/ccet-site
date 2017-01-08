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
$target_dir = "pdf/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
	{
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded to folder pdf";
    }
	else {
        echo "Sorry, there was an error uploading your file.";
    }
 
$news=$_REQUEST['news'];
$date=$_REQUEST['date'];
$link="pdf/".basename( $_FILES["fileToUpload"]["name"]);
include'connection.php';
// Check if a file has been uploaded
if(isset($_FILES['uploaded_file'])) {
    // Make sure the file was sent without errors
    if($_FILES['uploaded_file']['error'] == 0) {
        // Connect to the database
       
        $dbLink = new mysqli($host, $username, $password, $db);
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['uploaded_file']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploaded_file']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploaded_file']['tmp_name']));
        $size = intval($_FILES['uploaded_file']['size']);
 
        // Create the SQL query
        $query = "INSERT INTO `ccet_home` (news, date, link, `name`, `mime`, `size`, `data`) VALUES ('{$news}', '{$date}', '{$link}', '{$name}', '{$mime}', {$size}, '{$data}')";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result) {
            echo 'Success! Your file was successfully added!';
			?><br><a href="insert_news.php">Go back to add more news</a><br>
            <a href="index.php">Go back to home page</a><br>
			<?php
        }
        else {
            echo 'Error! Failed to insert the file'
               . "<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploaded_file']['error']);
    }
 
    // Close the mysql connection
    $dbLink->close();
}
else {
    echo 'Error! A file was not sent!';
}
	
// Echo a link back to the main page
echo '<p>Click <a href="insert_news.php">here</a> to go back</p>';
}
?>
