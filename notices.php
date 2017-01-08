<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	<meta name="description" content="News/Notices of CCET.">
	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
#overflow {
width: 99%;
    height: 500px;
    overflow: scroll;
}
</style>


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
	<title>CCET Notices</title>
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
 <div id="wrapper" style="padding-left:220px;">
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
		
           <h2 style="font-family:Orbitron">Latest News</h2>
		   <hr>
<div id="overflow">
		   <table class="table table-hover"> 
			<tbody>	

<?php
							
							include'connection.php';
							$con=new mysqli($host,$username,$password,$db);
							$sql="select * from ccet_home order by ID desc";
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
									 <?php 
									 if(!empty($row["link"]))
									 {?>
									<a href="<?php echo $row["link"];?>">Detail</a> 	 
									 <?php
									 }
									 else
									 {
										echo 'No Detail'; 
									 }
									  ?>
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
						
			</tbody>
		   </table>
<br><br><br><br>
		   
		   </div>
		  
		   
		   
		   <a name="notices"></a>
		   <h2 style="font-family:Orbitron">NOTICES / ORDERS</h2>
		   <hr>
		   
		 
    </div>
	<div class="container">
 
 <div class="panel panel-default" style="border:none">
						
	  <ul class="nav nav-tabs">
		
		<li class="active"><a data-toggle="tab" href="#menu2" class="staticheading">General</a></li>
		<li><a data-toggle="tab" href="#menu3" class="staticheading">Admission</a></li>
		<li ><a data-toggle="tab" href="#menu4" class="staticheading">Exams</a></li>
	  </ul>

	  <div class="tab-content">
		
		<div id="menu2" class="tab-pane active">
		 
 
            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Title </th>
        <th>Issued Date</th>
        <th>Link </th>
      </tr>
    </thead>
    <tbody>
	<?php
							
							include'connection.php';
							$con=new mysqli($host,$username,$password,$db);
							$sql="select * from ccet_notices order by id desc";
							$result=$con->query($sql);
							
							if($result->num_rows>0)
							{
								while($row=$result->fetch_array())
								{
									?>
									<tr>

									<td><img src="images/new.gif" style="width:38px">
									 <?php echo $row["title"]; 
									 
									 ?> 
									 </td><td> <?php echo $row["issued_date"]; ?> </td>
									 <td>
									 <?php 
									 if(!empty($row["link"]))
									 {?>
									<a href="<?php echo $row["link"];?>"><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a> 	 
									 <?php
									 }
									 else
									 {
										echo 'No Detail'; 
									 }
									  ?>
									 </td>
									 
									 </tr>
<?php
								}
							}
							else {
    echo "";
}
$con->close();
							?>

	
<tr>

				<td>Notice for ACM@CCET Student Chapter is organizing a Coding Contest Codathon.
				</td>
				<td>30-Sep-2016</td>
				<td><a href='pdf/notices/Acm Coathon.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
				<tr>
				<td>Notice regarding Application for issuing parking stickers.
				</td>
				<td>23-Sep-2016</td>
				<td><a href='pdf/notices/Parking Stickers 29-Sep-2016 14-55-18.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>Notice for B.E. Students Regarding Revised Rules for Re- Appear Examination by Punjab University
				</td>
				<td>23-Sep-2016</td>
				<td><a href='pdf/notices/Website Exam  (2).pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>Notice for B.E. students Regarding Revised Rules for Examination-Fees by Punjab University
				</td>
				<td>23-Sep-2016</td>
				<td><a href='pdf/notices/Website Exam  (1).pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>Notice for B.E. First year and PULEET 3rd Sem students
				</td>
				<td>23-Sep-2016</td>
				<td><a href='pdf/notices/puleet.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>Notice regarding Examination Forms
				</td>
				<td>26-Sep-2016</td>
				<td><a href='pdf/notices/examination forms.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>

<tr>
				<td>Reappear Notice
				</td>
				<td>23-Sep-2016</td>
				<td><a href='pdf/notices/reappear notice.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>Scholarship Notice for Engineering Girl students by Rotary Club.
				</td>
				<td>15-Sep-2016</td>
				<td><a href='pdf/notices/Website.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
<tr>
				<td>Merit-Cum-Means based Scholarship for the students belonging to Minority Communities for year 2016-2017.
				</td>
				<td>15-Sep-2016</td>
				<td><a href='pdf/notices/Website Notice 4.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> All students whose attendance falls below the criteria set by PU for final examination (i.e. 75%) till date, needs to submit this undertaking to their respective HOD.
				</td>
				<td>14-Sep-2016</td>
				<td><a href='pdf/notices/UNDERTAKING.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> Holiday on the eve of Id-ul-zuha (Bakrid) has been declared for 13th Sept instead of 12th Sept, 2016.
				</td>
				<td>11-Sep-2016</td>
				<td><a href='pdf/notices/Website Notice R 28-7-2016 12-Sep-2016 10-33-58 Page 2.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> Sessional Postponed Notice
				</td>
				<td>07-Sep-2016</td>
				<td><a href='pdf/notices/Sessional Postponed Notice 07-Sep-2016 10-41-50.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> Notice for Commonwealth Scholarship 2017. The last date of receipt of application is 16-09-2016.
				</td>
				<td>6th-Sept-2016</td>
				<td><a href='pdf/notices/notice-20160902-2.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> Notice for Invitation of applications for the Grant of "Merit-cum-Means based scholarship for the students belonging to the Minority communities" for the year 2016-17
				</td>
				<td>5th-Sept-2016</td>
				<td><a href='pdf/notices/Grant of Merit cum Means Scholarship for Minority  Communities 16.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> Notice for Airbus Fly your ideas competition
				</td>
				<td>5th-Sept-2016</td>
				<td><a href='img/notices/Notice-Airbus-Fly-your-idea.jpg'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> Notice for e-Yantra Robotics competition to be held at IIT Bombay
				</td>
				<td>5th-Sept-2016</td>
				<td><a href='img/notices/e-yantra_notice.jpg'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> FOUNDATION DAY LECTURE by Professor Ashutosh Sharma on September
27, 2016 at IISER
				</td>
				<td>5th-Sept-2016</td>
				<td><a href='pdf/notices/POSTER - IISERM FOUNDATION DAY LECTURE 2016.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> National Youth Parliament Competition for Universities and Colleges
				</td>
				<td>2nd-Sept-2016</td>
				<td><a href='pdf/notices/1.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> Notice for Research Scholars and JRF-Ph.D students
				</td>
				<td>1st-Sept-2016</td>
				<td><a href='pdf/notices/rs.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> Lok Sabha Research Fellowships 2016
				</td>
				<td>30-Aug-2016</td>
				<td><a href='pdf/notices/LS.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td> Fee Verification Notice
				</td>
				<td>30-Aug-2016</td>
				<td><a href='pdf/notices/New Doc 77.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>Inviting applications for the award of Post Metric Scholarships for the students belonging to "Scheduled castes and other backward classes", for the year 2016-17
				</td>
				<td>08-Aug-2016</td>
				<td><a href='pdf/notices/Post Matric Scholarship 16-Aug-2016 16-28-11.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>NSS Notice
				</td>
				<td>29-Jul-2016</td>
				<td><a href='pdf/notices/NSS NOTICE.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>Class Incharges and officials Applied Sci  Dept
				</td>
				<td>29-Jul-2016</td>
				<td><a href='pdf/notices/Class Incharges and officials Applied Sci  Dept- 29-Jul-2016 17-04-00.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>ADMISSION SCHEDULE FOR RESERVED CATEGORIES (DEFENCE,PERSONS WITH DISABILITY, CHILDREN & GRANDCHILDREN OF FREEDOM FIGHTERS AND SPORTS) 
				</td>
				<td>28th,July,2016</td>
				<td><a href='pdf/notices/notice-20160727-1.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>Notice PULEET Counselling
				</td>
				<td>28th,July,2016</td>
				<td><a href='pdf/notices/notice-20160725-1.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>Inviting applications for grant of "Merit-cum-Means" based Scholarships for the students belonging to minority communities, for the year 2016-17
				</td>
				<td>25-Jul-2016</td>
				<td><a href='pdf/notices/Grant of Merit cum Means Scholarship for Minority  Communities 16-Aug-2016 16-31-40.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>SPWD- Scheme for Persons with Disabilities (Centrally Sponsored Scheme) Diploma Wing
				</td>
				<td>14th,July,2016</td>
				<td><a href='pdf/notices/PWD Add Revised.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>ADMISSION ADVERTISEMENT FOR B.E., B.E.(LEET),Ph.D. COURSES FOR SESSION 2016-17
				</td>
				<td>23rd,June,2016</td>
				<td><a href='pdf/AdmnAD16.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>

<tr>
				<td>FEE AND REGISTRATION NOTICE
				</td>
				<td>29th,June,2016</td>
				<td><a href='pdf/notices/New Doc 52.pdf' target="_blank"><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>
<tr>
				<td>Fees Fine Details for Bunks.
				</td>
				<td>29th,June,2016</td>
				<td><a href='pdf/notices/New Doc 51_1.pdf' target="_blank"><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>


<tr>
				<td>ADMISSION TO UNDER GRADUATE COURSES FOR SESSION 2016-17
				</td>
				<td>23rd,June,2016</td>
				<td><a href='pdf/JAC.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            </tr>

<tr>
				<td>NITTTR Chandigarh is organizing 3 days workshop on Robotics from 27th to 29th May, 20
16 for students free of cost. You are requested to register on the mentioned site on or before 20th May, 2016.
				</td>
				<td>17th, May,2016</td>
				<td><a href='pdf/notices/Workshop Robotics.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            <tr>

				<tr>
				<td>Notice for BE  2016 (Mechanical) passing  batch  who  want  to  undergo
					their industrial training at Indusup private Ltd. 
					during their 8th semester
				</td>
				<td>22nd,Dec,2015</td>
				<td><a href='pdf/TPN21DEC15.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
					
	            <tr>
	          	 <td>Fee Notice and Details for Jan-June 2016 Session</td>
					<td>11th,Dec,2015</td>
					<td><a href='pdf\notices\New Doc 7.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
				</tr>
				<tr>
		            <td>Notice Regarding 6 - months Industrial Training</td>
					<td>30th,Nov,2015</td>
					<td><a href='pdf\notices\TPN30NOV2015.pdf'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a>
					</td>
				</tr>	
	          	 <tr>
	            	<td>University Rules for 4 Year B.E.</td>
					<td>30th,Nov,2015</td>
					<td> <a href='pdf\notices\New Doc 6_1.pdf'> <button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
				</tr>			
	            <tr>
					<td>Date Sheet for B.E./ B.E.(MBA) for Examinations to be held in December,2015</td>
					<td>20th,Nov,2015</td>
					<td><a href='pdf\degree\datesheet-12-2015.zip'><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
	          	</tr>
				<tr>
	            	<td>Pragati & Saksham Scholarship Scheme 2015-16</td>
					<td>04th,Nov,2015</td>
					<td><a href='http://www.aicte-india.org/pragathiSaksham.php'> <button type="button" class="btn btn-primary btn-xs" href="">Visit Site</button></a></td>

				</tr>
	            	<tr>
					<td>Invertedi Pvt. Ltd. is visiting CCET Campus on 26th October, 2015 for conducting the campus placement drive</td>
					<td>23rd,Oct,2015</td>
					<td></td>
					
	 </tr>
	
	
      <tr>
        <td> PU regular and re appear examination of all branches are proposed to be held in the 1st week of December,2015.</td>
		<td> 29th,Sep,2015</td>
       <td><a href="pdf/n1.pdf"><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
       
      </tr>
      <tr>
        <td> Notice for students whose previous result is repeat whole year and who have applied for a golden chance.</td>
		<td> 29th,Sep,2015</td>
		<td><a href="pdf/n2.pdf"><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
      </tr>
	  <tr>
        <td> 
Scholarship Programme for Engineering Students from SIEMENS</td>
		<td> 24th,Aug,2015</td>
		<td><a href="pdf/n3.pdf"><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a></td>
      </tr>
    </tbody>
  </table>
   	</div>
		<div id="menu3" class="tab-pane fade">
		  <h3 class="staticheading" style="margin-top:15px;">Exams</h3>
		  <table class="table table-hover">
    <thead>
      <tr>
        <th>Title </th>
        <th>Issued Date</th>
        <th>Link </th>
      </tr>
    </thead>
    <tbody>
	<?php
							
							include'connection.php';
							$con=new mysqli($host,$username,$password,$db);
							$sql="select * from ccet_notices where type='Admission' order by id desc";
							$result=$con->query($sql);
							
							if($result->num_rows>0)
							{
								while($row=$result->fetch_array())
								{
									?>
									<tr>

									<td><img src="images/new.gif" style="width:38px">
									 <?php echo $row["title"]; 
									 
									 ?> 
									 </td><td> <?php echo $row["issued_date"]; ?> </td>
									 <td>
									 <?php 
									 if(!empty($row["link"]))
									 {?>
									<a href="<?php echo $row["link"];?>"><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a> 	 
									 <?php
									 }
									 else
									 {
										echo ''; 
									 }
									  ?>
									 </td>
									 
									 </tr>
<?php
								}
							}
							else {
    echo "";
}
$con->close();
							?>
							</tbody>
							</table>
		</div>
		<div id="menu4" class="tab-pane fade">
		  <h3 class="staticheading" style="margin-top:15px;">Exams</h3>
		    <table class="table table-hover">
    <thead>
      <tr>
        <th>Title </th>
        <th>Issued Date</th>
        <th>Link </th>
      </tr>
    </thead>
    <tbody>
	<?php
							
							include'connection.php';
							$con=new mysqli($host,$username,$password,$db);
							$sql="select * from ccet_notices where type='Exams' order by id desc";
							$result=$con->query($sql);
							
							if($result->num_rows>0)
							{
								while($row=$result->fetch_array())
								{
									?>
									<tr>

									<td><img src="images/new.gif" style="width:38px">
									 <?php echo $row["title"]; 
									 
									 ?> 
									 </td><td> <?php echo $row["issued_date"]; ?> </td>
									 <td>
									 <?php 
									 if(!empty($row["link"]))
									 {?>
									<a href="<?php echo $row["link"];?>"><button type="button" class="btn btn-primary btn-xs" href="">Download</button></a> 	 
									 <?php
									 }
									 else
									 {
										echo ''; 
									 }
									  ?>
									 </td>
									 
									 </tr>
<?php
								}
							}
							else {
    echo "";
}
$con->close();
							?>
							</tbody>
							</table>
		</div>
	  </div>
	</div>
					</div>
</div>


 </div> 
   <!-- /#page-content-wrapper -->
  
  <!-- Footer -->
        <?php include'footer.php'?>
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
