<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1
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
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
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

<?php include'header.php';
include "connection.php";
$dept=$_GET["dept"];
$conn = mysqli_connect($host, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM labs WHERE dept='{$dept}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	?>
  <!--end of header-->
<style>
	
</style>
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
        <div id="page-content-wrapper" style="text-align:justify;padding-left:2%;padding-right:2%;padding-bottom:5%">
		<?php
		if($dept=="MECH")
		{ ?>
		<center><h1 style="font-family:Orbitron">Mechanical Engineering Department.</h1></center><br>
		<img style="width:99%;height:40%;box-shadow: 0 0 20px #000;border-radius:10px"src="data2/images/mechlab.jpg">
           <h2 style="font-family:Orbitron">LABORATORIES</h2>
		   <hr>
		   <p> Knowledge without practical application is of no use, at least for a Mechanical Engineer. For this we have all kinds of laboratories which include</p>
			<ul>
		<?php 
		while($row = $result->fetch_assoc()) {
			
		?>	
		  <h4><li><b><?php 
echo $row["name"];
		  ?>:</b></li></h4>

			<p><?php 
			echo $row["description"];
			?></p>
			<?php }
		}
		if($dept=="CSE")
		{ ?>
		<center><h1 style="font-family:Orbitron">Computer Science Engineering Department.</h1></center><br>
		<img style="width:99%;height:40%;box-shadow: 0 0 20px #000;border-radius:10px"src="data2/images/cselabs.jpg">
           <h2 style="font-family:Orbitron">LABORATORIES</h2>
		   <hr>
		   <p>At CSE Department, students are challenged by a flexible, thought-provoking curriculum and learn from faculty members who are experts in their areas. The courses in the Computer Sc. & Engineering are well organized to provide a wide spectrum of choices to the students. The faculty and students have interest in wide range of latest technologies that include Computer's Database Systems, Artificial Intelligence, Computer Networks & Distributed Computing, operating system, Computer Graphics, Mathematical Modelling, OOPS, Advanced DBMS (OODBMS, Distributed DBMS etc.), Software Engineering, Linux, Big Data, Computer Architecture, and Embedded Systems etc. To support the learning and practices in above technological area, Department of CSE have well equipped computer center, project lab and oracle sponsored lab that have various Software Packages relevant to the Development of Minor and Major Projects undertaken during the Coursework. All the state of Art Facilities, Resources and Guidelines are provided to the students as per their requirement.</p>
<p>The Computer Science and Engineering department has following laboratories to provide the needs of the students to perform various experiments related to computer science subjects from first year to final year students:-</p>
			<ul>
		<?php 
		while($row = $result->fetch_assoc()) {
		?>	
		  <h4><li><b><?php 
echo $row["name"];
		  ?>:</b></li></h4>

			<p><?php 
			echo $row["description"];
			?></p>
			<?php }
		}
		if($dept=="ECE")
		{ ?>
		<center><h1 style="font-family:Orbitron">Electronics & Communication Engineering Department.</h1></center><br>
		<img style="width:99%;height:40%;box-shadow: 0 0 20px #000;border-radius:10px"src="data2/images/ecelab.jpg">
           <h2 style="font-family:Orbitron">LABORATORIES</h2>
		   <hr>
		   <ul>
		<?php 
		while($row = $result->fetch_assoc()) {
		?>	
		  <h4><li><b><?php 
echo $row["name"];
		  ?>:</b></li></h4>

			<p><?php 
			echo $row["description"];
			?></p>
			<?php }
		}
		if($dept=="CIVIL")
		{ ?>
		<center><h1 style="font-family:Orbitron">Civil Engineering Department.</h1></center><br>
		<img style="width:99%;height:40%;box-shadow: 0 0 20px #000;border-radius:10px"src="data2/images/civillab.jpg">
           <h2 style="font-family:Orbitron">LABORATORIES</h2>
		   <hr>
		   <ul>
		<?php 
		while($row = $result->fetch_assoc()) {
		?>	
		  <h4><li><b><?php 
echo $row["name"];
		  ?>:</b></li></h4>

			<p><?php 
			echo $row["description"];
			?></p>
			<?php }
		} 
		if($dept=="AS")
		{ ?>
		<center><h1 style="font-family:Orbitron">Applied Science Department.</h1></center><br>
		<img style="width:99%;height:40%;box-shadow: 0 0 20px #000;border-radius:10px"src="data2/images/AS-labs.jpg">
           <h2 style="font-family:Orbitron">LABORATORIES</h2>
		   <hr>
		   <ul>
		<?php 
		while($row = $result->fetch_assoc()) {
		?>	
		  <h4><li><b><?php 
echo $row["name"];
		  ?>:</b></li></h4>

			<p><?php 
			echo $row["description"];
			?></p>
			<?php }
} }?>
    </div>
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
