<html>
<body>
<br><br>
<?php
				$news=$_REQUEST['news'];				
							include'connection.php';
							$con=new mysqli($host,$username,$password,$db);
							$sql="delete from ccet_home where news='$news'";
							$result=$con->query($sql);
							
							if($result===TRUE)
							{
								echo 'Deleted succesfully';
								?>
								<br><br><a href="insert_news.php">Go back to add news</a>
								<?php 
							}
								else
								{
									echo 'Deletion process was unsuccesful';
								}
								$con->close();
							?>
							</body>
							</html>