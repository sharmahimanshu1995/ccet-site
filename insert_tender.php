<?php
session_start();
?>
<html>
<head>
<title>Insert Tender</title>
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
 
 <div class="col-md-10">
<div class="panel panel-default">

    <div class="panel-body">
<center><h1>Insert Tenders<h1></center>
<center>
<table class="table table-bordered">
<form action="insert_tender_process.php" method="post" enctype="multipart/form-data">
<tr><td>PLease enter Title of Tender*</td><td> <textarea rows="3" required cols="20" name="notice"></textarea></td></tr><br>
<tr><td>PLease select a file to be uploaded(only pdf). You need not to open file manager this will automatically upload file to pdf folder</td><td><input type="file" required name="fileToUpload"></td></tr><br>
<tr><td colspan="2"><center><input type="submit" name="Upload file" class="btn btn-success" value="Insert Tender"></center></td></tr>
</form>
</table>
</div>
</div>
</div>
</div>
</div>
<br>
<br>	
<?php
}?>		

	<center><a href="cms_homepage.php">	<button class="btn btn-success">Go Back To Cms Homepage</button></a>	</center>
</body>
</html>
