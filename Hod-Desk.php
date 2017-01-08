<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/bootstrap.min.css" rel="stylesheet">	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style1.css">   
	<title>CCET&nbsp;|&nbsp;Chandigarh College Of Engineering And Technology</title>
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Sigmar+one' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Architects+Daughter' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
	<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
 <script type="text/javascript">
//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	
	</script>
</head>
<body >
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->
	<?php $dept=$_REQUEST["dept"];?>
<?php include'header.php';?>			

 <div class="hidder" id="wrapper">
        <!-- <div class="overlay" style="display:block;"></div> -->
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" >
             <ul class="nav sidebar-nav">
                <?php include'department-sidebar.php'; ?>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
		 <?php
include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM hod where dept='{$dept}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
	   <div id="page-content-wrapper" style="text-align:justify;padding-left:2%;padding-right:2%;padding-bottom:5%">
		<center><h1 style="font-family:Orbitron">
		<?php 
		if($dept=="AS")
		{
			?>
			Applied Science Department.
			<?php
		}
		if($dept=="CSE")
		{
			?>
			Computer Science and Engineering Department.
			<?php
		}
		if($dept=="ECE")
		{
			?>
			Electronics and Communication Engineering Department
			<?php
		}
		if($dept=="MECH")
		{
			?>
			Mechanical Engineering Department.
			<?php
		}
		if($dept=="CIVIL")
		{
			?>
			Civil Engineering Department.
			<?php
		}
			?></h1></center><br>
		<h2 style="font-family:Orbitron">HOD'S DESK</h2>
		<hr>
		<img align="right" style="width:60%;height:auto;box-shadow: 0 0 20px #000;border-radius:10px; margin-left:30px;"src="<?php echo $row["photo_link"] ?>">
           
		   
		   <div align="left" style="display:block; text-align:justify; padding-right:10px; font-size:1.3em;color:black;font-family:auto"> 
		   Greetings!!!!<br><br/>

<?php echo $row["words"];?>
</div><br>
<div align="left" style="display:block; text-align:justify; font-size:1.3em;color:black;font-family:auto">
 <?php echo $row["words_1"];?>
 </div><br>
<div align="left" style="display:block; text-align:justify; font-size:1.3em;color:black;font-family:auto">
 <?php echo $row["words_2"];?>
 </div><br>
<div align="left" style="display:block; text-align:justify; font-size:1.3em;color:black;font-family:auto">
 I am confident that students of this college will emerge as core technological resources to the society at large.<br/><br/>
All the Best!!<br/><br/>
</div>
<p style="font-family:auto;">
<b><?php echo $row["name"] ?></b><br/>
Professor & Head<br> <?php 
		if($dept=="AS")
		{
			?>
			Applied Science Department.
			<?php
		}
		if($dept=="CSE")
		{
			?>
			Computer Science and Engineering Department.
			<?php
		}
		if($dept=="ECE")
		{
			?>
			Electronics and Communication Engineering Department
			<?php
		}
		if($dept=="MECH")
		{
			?>
			Mechanical Engineering Department.
			<?php
		}
		if($dept=="CIVIL")
		{
			?>
			Civil Engineering Department.
			<?php
		}
			?><br>
Email-ID:-  <?php echo $row["primary_email"] ?><br><?php echo $row["alternate_email"] ?>
</p>
    </div>
	   <?php
    }
} else {
    echo " ";
}
$conn->close();
?> 
        
 </div> 
   <!-- /#page-content-wrapper -->
  
  <!-- Footer -->
        <?php include'footer.php';?>
</div>
</div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="./js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./js/bootstrap.min.js"></script>
	</div>
	<!-- /Demo content -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="js/main.js"></script>
