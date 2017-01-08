<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<?php $dept=$_REQUEST["dept"];?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!--iOS -->
	<?php 
		if($dept=="AS")
		{
			?>
			<title>CCET | Applied Sciences Faculty</title>
			<?php
		}
		if($dept=="CSE")
		{
			?>
			<title>CCET | Computer Science and Engineering Department.</title>
			<?php
		}
		if($dept=="ECE")
		{
			?>
			<title>CCET | Electronics and Communication Engineering Department</title>
			<?php
		}
		if($dept=="MECH")
		{
			?>
			<title>CCET | Mechanical Engineering Department.</title>
			<?php
		}
		if($dept=="CIVIL")
		{
			?>
			<title>CCET | Civil Engineering Department.</title>
			<?php
		}
			?>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/bootstrap.min.css" rel="stylesheet">	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style1.css">    
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
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
	<!--Nested Accordion files added-->
	<link rel="stylesheet" href="NestedAccordion/css/component.css">
	<link rel="stylesheet" href="NestedAccordion/css/default.css">
	<script type="text/javascript" src="NestedAccordion/js/jquery.cbpNTAccordion.js"></script>
	<script type="text/javascript" src="NestedAccordion/js/jquery.cbpNTAccordion.min.js"></script>
</head>
<body >
<?php include'header.php';?>
<!--end of header-->
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
        <div id="page-content-wrapper">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-lg-8"> -->
                        <center><label style="font-family:Arial; font-weight:bolder; font-size:2em; color:black;"><?php 
		if($dept=="AS")
		{
			?>
			Department of Applied Science
			<?php
		}
		if($dept=="CSE")
		{
			?>
			Department of Computer Science and Engineering.
			<?php
		}
		if($dept=="ECE")
		{
			?>
			Department of Electronics and Communication Engineering
			<?php
		}
		if($dept=="MECH")
		{
			?>
			Department of Mechanical Engineering.
			<?php
		}
		if($dept=="CIVIL")
		{
			?>
			Department of Civil Engineering.
			<?php
		}
			?>
			</label></center>
						
                        	<center>
							<h2 style="font-family:Arial; font-weight:bolder; color:black;"><?php echo "People@$dept"; ?></h2>
							<hr style="width:80%;">
							</center><br>
		<div class="container">
			
			<div class="main">
				<ul id="cbp-ntaccordion" class="cbp-ntaccordion">
				<?php
include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM faculty where DEPARTMENT='{$dept}'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       ?>
					<li>
	<h4 class="cbp-nttrigger"><img src="<?php echo $row["PHOTO"] ?>" alt="Parul-Aggarwal" style=" width:150px; height:auto; float:left; padding-right:10px; border-radius:10%;"/><?php echo $row["NAME"] ?> - <?php if($row["DESIGNATION"]=="HOD")
echo "PROFESSOR & HEAD";
if($row["DESIGNATION"]=="Asco_Prof")
echo "Associate Professor";
if($row["DESIGNATION"]=="Assist_Prof")
echo "Assistant Professor";
if($row["DESIGNATION"]=="Professor"){
echo "Professor";}	?></h4>
						<div class="cbp-ntcontent" 
							<p style="font-family:auto;color:black;text-align:justify"></p>
							<ul class="cbp-ntsubaccordion">
								<li>
									<h4 class="cbp-nttrigger">Educational Qualification</h4>
									<div class="cbp-ntcontent">
										<p style="font-family:auto;color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row["BRIEF"] ?> </p>
									</div>
								</li>
								<li>
									<h4 class="cbp-nttrigger">Area of Specialization:</h4>
									<div class="cbp-ntcontent">
										<p style="font-family:auto;color:black"><?php echo $row["INTEREST"] ?></p>
									</div>
								</li>
								<li>
									<h4 class="cbp-nttrigger">Additional Role in college:</h4>
									<div class="cbp-ntcontent">
										<p style="font-family:auto;color:black">
										<?php echo $row["ADD_ROLE"] ?></p>
									</div>
								</li> 
								<li>
									<h4 class="cbp-nttrigger">Contact Address:</h4>
									<div class="cbp-ntcontent">
										<p style="font-family:auto;color:black"><?php echo $row["ADDRESS"] ?></p>
									</div>
								</li>
								<li>
									<h4 class="cbp-nttrigger">Contact Number/Email:</h4>
									<div class="cbp-ntcontent">										
										<p style="font-family:auto;color:black"><?php echo $row["EMAIL"] ?></p>
										<p style="font-family:auto;color:black"><?php echo $row["NUMBER"] ?></p>
									</div>
								</li>
							</ul>
						</div>
					</li><br><br><br><br><br><br><br><br>
					<?php
    }
} else {
    echo " ";
}
$conn->close();
?> 
				</ul>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.cbpNTAccordion.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpNTAccordion( [options] );
				- destroy:
				$( selector ).cbpNTAccordion( 'destroy' );
				*/

				$( '#cbp-ntaccordion' ).cbpNTAccordion();

			} );
		</script>
    <!-- ################################################################################################ --> 
									
<!-- 
							</div>
					</div>
				</div> -->
			</div>
		</div>
		<!-- /#page-content-wrapper -->
    <!-- Footer -->
         <?php include'footer.php';?>
</div>
</div>

    <!-- /.container -->

   
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<!-- JAVASCRIPTS --> 
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.fitvids.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>