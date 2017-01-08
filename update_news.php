<html>
<head>
<style>
  table{
	  border:1px solid black;
  }
  th{
	   border:1px solid black;
  }
  td{
	   border:1px solid black;
  }
  tr{
	   border:1px solid black;
  }
  
  div {
    width: 70%;
    height: 360px;
    overflow: scroll;
}
  </style>
</head>
<body>
<center>
<table>

<?php 
$id=$_REQUEST['id'];
include'connection.php';
							$con=new mysqli($host,$username,$password,$db);
							$sql="select * from ccet_home where ID=$id";
							$result=$con->query($sql);
							?>
							<form action="update_process.php" method="post">
							<?php
							if($result->num_rows>0)
							{
								while($row=$result->fetch_array())
								{
									?>
									
									<tr>
									<input type="hidden" name="id" value="<?php echo $id ;?>">
									 
									<td>News:</td><td><input type="text" name="news" value="<?php echo $row["news"];?>"> 

									 </td></tr>
									 <tr><td>Date:</td><td><input type="text" name="date" value=" <?php echo $row["date"]; ?>">
									 </td></tr>
									 <tr><td>Link:</td><td><input type="text" name="link" value=" <?php echo $row["link"]; ?> ">
									 </td></tr>
										<tr colspan="2"><td>
										<input type="submit" value="Update">
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
</form>

<br><br>
<a href="insert_news.php">Go back to add more news</a><br>
<a href="index.php><Go back to home page"></a><br>