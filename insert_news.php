<?php
session_start();
?>
<html>
<head>

  <style>
  
  
  
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  <div class="panel-body">Welcome <?php echo $_SESSION["user"]; ?></div>
  <div style="float:right"><a href="logout.php">Logout</a></div>
</div>
	</div>
<div class="container">
<div class="row">
 <div class="col-md-6">
  <div class="panel panel-default">
 
    <div class="panel-body">
<center><h1>Insert Latest news<h1></center>

<table class="table table-bordered">
<form action="insert_process.php" method="post" enctype="multipart/form-data">
<tr><td>PLease enter news*</td><td> <textarea rows="3" cols="20" name="news"></textarea></td></tr><br>
<tr><td>PLease enter date *</td><td><input type="text" name="date" required placeholder="dd-mm-yyyy" ></td></tr><br>
<tr><td>PLease select a image </td><td><input type="file" name="uploaded_file" required></td></tr><br>
<tr><td>PLease select a file to be uploaded(only pdf). You need not to open file manager this will automatically upload file to pdf folder</td><td><input type="file" name="fileToUpload"></td></tr><br>
<tr><td colspan="2"><center><input type="submit" name="Upload file" class="btn btn-success" value="Insert News"></center></td></tr>
</form>
</table>
</div>
</div>
</div>
 <div class="col-md-6">
<div class="panel panel-default">

    <div class="panel-body">
<center><h1>Insert Notices<h1></center>
<center>
<table class="table table-bordered">
<form action="insert_notices_process.php" method="post" enctype="multipart/form-data">
<tr><td>PLease enter Title of Notice*</td><td> <textarea rows="3" required cols="20" name="notice"></textarea></td></tr><br>
<tr><td>PLease select type of Notice*</td><td>  <select name="type_notice" required>
<option>**select**</option>
  <option value="General">General</option>
  <option value="Admission">Admission</option>
  <option value="Exams">Exams</option>
</select> </td></tr><br>
<tr><td>PLease select a file to be uploaded(only pdf). You need not to open file manager this will automatically upload file to pdf folder</td><td><input type="file" name="fileToUpload"></td></tr><br>
<tr><td colspan="2">OR</td></tr>
<tr><td>PLease enter link.</td><td><input type="text" name="linkinfo"></td></tr><br>
<tr><td colspan="2"><center><input type="submit" name="Upload file" class="btn btn-success" value="Insert Notices"></center></td></tr>

</form>
</table>
</div>
</div>
</div>
</div>
</div>
<br>
<br>
<div class="container">
<div class="row">
<center><h1>Existing news</h1></center>

<table class="table table-bordered">
<?php
							
							include'connection.php';
							$con=new mysqli($host,$username,$password,$db);
							$sql="select * from ccet_home";
							$result=$con->query($sql);
							
							if($result->num_rows>0)
							{
								while($row=$result->fetch_array())
								{
									?>
									<tr>
									<td>
									 <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['data'] ).'"/>'; 
									 ?> 
									 </td><td>
									 <?php echo $row["news"]; 
									 
									 ?> 
									 </td><td> <?php echo $row["date"]; ?> </td>
									 <td>
									 <?php echo $row["link"];
									 ?> 
									 </td>
<td> <form name="frm" action="update_news.php" method="post">
									 <input type="hidden" name="id" value="<?php echo $row["ID"]; ?>">
									 <input type="submit" name="submit" value="Update news">
									 </form>
									 </td>
									 <td> <form name="frm" action="delete_news.php" method="post">
									 <input type="hidden" name="news" value="<?php echo $row["news"]; ?>">
									 <input type="submit" name="submit" value="Delete news">
									 </form>
									 </td>
									 </tr>
<?php
								}
							}
							else {
    echo "0 results";
}
$con->close();
							?>
							</div>
							</div>
							<?php
}
							?>
							
</body>
</html>
