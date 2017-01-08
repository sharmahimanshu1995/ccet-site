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
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<title>CCET Courses Offered</title>	
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
	
			<?php include'header.php';?>
 <div id="wrapper">
        <!-- <div class="overlay" style="display:block;"></div> -->
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" >
            <ul class="nav sidebar-nav">
                <?php include'acad-sidebar.php';?>
                <!--<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="dropdown-header">Dropdown heading</li>
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>-->
        
                
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="text-align:justify;padding-left:2%;padding-right:2%;padding-bottom:5%">
		
           <h2 style="font-family:Orbitron">Courses Offered</h2>
		   <hr>
		  

		   
		   <table class="table">
		   <thead>
		   <tr>
		   <th>Courses</th>
		   <th>Link</th>
		   </tr>
		   </thead>
		   <tbody>
		   <tr>
              <td>Computer Science Engineering</td><td><a href="CSE-Overview.php" target="_blank"><button class="btn btn-primary btn-xs">Site Link</button></a> </td>
            </tr>
			<tr>			
<td>Mechanical Engineering</td><td><a href="Mech-Overview.php" target="_blank"><button class="btn btn-primary btn-xs">Site Link</button></a> </td>
            </tr>
<tr>			
<td>Electronics & Communication Engineering</td><td><a href="ECE-Overview.php" target="_blank"><button class="btn btn-primary btn-xs">Site Link</button></a> </td>
            </tr>
<tr>			
<td>Civil Engineering </td><td><a href="Civil-Overview.php" target="_blank"><button class="btn btn-primary btn-xs">Site Link</button></a> </td>
            </tr>
			<tr>			
<td>PHD Courses</td><td><a href="phd.php" target="_blank"><button class="btn btn-primary btn-xs">Site Link</button></a> </td>
            </tr>
			</tbody>
			</table>



    </div>
 </div> 
   <!-- /#page-content-wrapper -->
  
  <!-- Footer -->
        <div class="rounded" style="background-color:black;height:20%;">
		<footer id="footer" class="clear" > 
      <!-- ################################################################################################ -->
      <div style="float:left">
        <figure class="center" style="color:white;"><img class="btmspace-15" src="images/icons/map.png" alt="">
          <figcaption><a href="#" class="link">Find Us With Google Maps &raquo;</a></figcaption>
        </figure>
      </div>
      <div style="margin-left:1%;display:inline-block; color:#CCCCCC" class="staticcontent">
        <address style="color:white;">
        Chandigarh College of Engineering and Technology<br>
        CCET Degree Wing,Sector-26,
        Chandigarh
        160019<br>
        <br>
        <i class="fa fa-phone pright-10"></i> 0172 275 0947<br>
        <i class="fa fa-envelope-o pright-10"></i> <a href="#" class="footerlink" >contact@ccet.ac.in</a>
        </address>
      </div>
	  

      <div  style="float:right">
	  <div style="color:white;"> 
    <!-- ################################################################################################ -->
	<nav>
      <ul style="padding:0 0 0 0px;">
        <li style="display:inline-block"><a class="link" href="homepage.html" >Home</a></li>&nbsp;&nbsp;|
        <li style="display:inline-block"><a class="link" href="#" >Contact Us</a></li>&nbsp;&nbsp;|
        <li style="display:inline-block"><a class="link"href="#" >Site Map</a></li>&nbsp;&nbsp;|
        <li style="display:inline-block"><a class="link" href="#" >Anti-Ragging</a></li>&nbsp;&nbsp;|
        <li style="display:inline-block"><a class="link" href="#" >Privacy Policy</a></li>&nbsp;&nbsp;|
		<li style="display:inline-block"><a class="link" href="#" >Quick Inquiry</a></li>
		</b>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div><!--upsc






  
        </form>--> <div class="widget tags" >
                    <h3 style="color:white;">QuickLinks Cloud</h3>
                    <ul class="tag-cloud">
                        <li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://puchd.ac.in/">PU</a></li>
                        <li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://www.upsc.gov.in/">UPSC</a></li>
                        <li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://www.aicte-india.org/">AICTE</a></li>
                        <li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="https://www.ieee.org/">UGC</a></li>
                        <li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://www.dst.gov.in/">DST</a></li>
                        <li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://mhrd.gov.in/">MHRD</a></li>
                        <li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://jeemain.nic.in/">JEE MAINS</a></li><br><br>
                        <li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://crikc.puchd.ac.in/">CRIKC</a></li>
                        <li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://nkn.in/">NKN</a></li>
						<li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://nptel.ac.in/">NPTEL</a></li>
						<li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://www.niscair.res.in/">NISCAIR</a></li>
						<li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://www.gate.iisc.ernet.in/">GATE</a></li>
						<li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://chandigarh.gov.in/">CHD ADMIN</a></li>
						<li style="display:inline-block;"><a class="btn btn-xs btn-primary" href="http://www.drdo.gov.in/">DRDO</a></li>
                    </ul>
                </div><!--/.tags-->
		<div style="float:right"><a href="#" style="color:white;"><i class="fa fa-hand-o-up"></i>Go to top</a></div>
      </div><br><br><br><br>
	 <center><p align="center" class="fl_left" style="color:white">Copyright &copy; 2016 - All Rights Reserved.</p></center>
     <center><p ><a href="team.html" style="color:white;" class="footerlink">Designed and maintained by CSE Department, CCET Degree Wing.</a></p></center>
    </footer>
  </div>
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