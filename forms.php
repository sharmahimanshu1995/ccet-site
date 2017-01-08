<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta name="description" content="Learn how to recreate the preloader from Cantina Negrar. Tutorial for a passionate front-end web developers by Petr Tichy.">

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
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
	<title>CCET Forms</title>
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
        <div id="page-content-wrapper" style="text-align:justify;padding-left:2%;padding-right:2%;padding-bottom:5%;padding-top:0px;">
		
           <h2 style="font-family:Orbitron">FORMS</h2>
		   <hr>
		   <p>  
		  <ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#general" class="staticheading">General</a></li>
			<li ><a data-toggle="tab" href="#home" class="staticheading">Departmental Forms</a></li>
			<li><a data-toggle="tab" href="#menu2" class="staticheading">T & P</a></li>
			<li><a data-toggle="tab" href="#faculty" class="staticheading">Faculty/Staff Forms</a></li>
	  </ul>

	  <div class="tab-content">
	  <div id="general" class="tab-pane fade in active">
		  <h3 class="staticheading" style="margin-top:15px;">General Forms</h3>
		    <div class="scroll-pane" style="margin-top:20px;">
    <div>
      <table class="table">
	  <thead>
            <tr >
              <th>Links</th>
              <th>Upload Date</th>
            </tr>
			</thead>
        <tbody>
		<?php include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM ccet_forms order by id desc ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
            <tr>
              <td ><a href='<?php echo $row["link"] ?>'><?php echo $row["title"] ?></a></td>
          <td ><?php echo $row["date"] ?></td>
            </tr>
			<?php
	}
}
else
{
	
}
	?>
 <tr>
          <td ><a href='pdf/notices/UNDERTAKING.pdf'>Student Undertaking in case of shortage of attendance</a></td>
          <td >14th,Sept,2016</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/academics/Prospectus_2016.pdf'>Degree Prospectus CCET 2015-2016</a></td>
          <td >16th,Dec,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/general/scholorshipper.pdf'>Undertaking for taking institute scholarship</a></td>
          <td >01st,Oct,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/Academics/proforma_for_applications_of_re-appear.pdf'>Proforma for appearing in re-appear exams</a></td>
          <td >21st,Aug,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/performa_apratim.pdf'>All Proforma related to Apratim</a></td>
          <td >04th,Aug,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/performa__sc.pdf'>All Proforma related to Student Council</a></td>
          <td >03rd,Aug,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/Academics/Registration forms latest.pdf'>Student Registration Form</a></td>
          <td >17th,Jun,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/general/puleet15.pdf'>PROSPECTUS PULEET-2015</a></td>
          <td >29th,May,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/notices/application for student council.pdf'>Application for Student Council</a></td>
          <td >07th,May,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/general/Student_leave_application.pdf'>APPLICATION FOR LEAVE</a></td>
          <td >10th,Mar,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/notices/Academic Calender CCET_DW_Jan_June_2015.pdf'>Academic Calendar for Even Semester (Jan-June, 2015)</a></td>
          <td >19th,Feb,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/notices/PerformaCertificate.pdf'>Performa for issue of Provisional Certificate, Character Certificate, Bonafide Certificate, Scholarship/Examination forms</a></td>
          <td >16th,Feb,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/notices/reappear.pdf'>PROFORMA FOR APPLICATION  OF RE-APPEAR </a></td>
          <td >16th,Feb,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/Prospectus 2014 -15.pdf'>Degree Prospectus CCET 2014-15</a></td>
          <td >27th,Oct,2014</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/Academics/Prospectus 2013 -14-.pdf'>Degree Prospectus CCET 2013-2014</a></td>
          <td >13th,Nov,2013</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/Academics/no dues form.pdf'>PROFORMA FOR THE REFUND OF COLLEGE/HOSTEL SECURITY</a></td>
          <td >07th,Jun,2013</td>
        </tr>
                <tr>
          <td ><a href='pdf/admissions/Prospectus 2012-2013.pdf'>Degree Prospectus CCET 2012-2013</a></td>
          <td >12th,Dec,2012</td>
        </tr>
                <tr>
          <td ><a href='pdf/admissions/modified_regulations0001.pdf'>Modified Regulations for Four Year B.E and M.E/M.Tech. courses w.e.f session 2010-11</a></td>
          <td >03rd,Dec,2012</td>
        </tr>
                <tr>
          <td ><a href='pdf/antiragging/final.jpg'>Student Grievance Redressal Committee</a></td>
          <td >17th,Sep,2012</td>
        </tr>
                <tr>
          <td ><a href='pdf/antiragging/antiragging.pdf'>Affidavit Format for Antiragging Undertaking</a></td>
          <td >16th,Aug,2012</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/FeeStructure2012-13.pdf'>Fee Structure Degree 2012-13</a></td>
          <td >11th,Jun,2012</td>
        </tr>
                <tr>
          <td ><a href='pdf/general/mobileallowance.pdf'>Revised List of Employees Granted Mobile Phone Allowance</a></td>
          <td >17th,Feb,2012</td>
        </tr>
                <tr>
          <td ><a href='pdf/general/List of Employees Granted Mobile Phone Allowance.pdf'>List of Employees Granted Mobile Phone Allowance</a></td>
          <td >21st,Nov,2011</td>
        </tr>
                <tr>
          <td ><a href='pdf/antiragging/Antiragging.pdf'>CCET's order against Ragging</a></td>
          <td >13th,Jul,2011</td>
        </tr>
                <tr>
          <td ><a href='pdf/general/No Dues Certificate.pdf'>No Dues Certificate</a></td>
          <td >19th,Nov,2010</td>
        </tr>
                <tr>
          <td ><a href='pdf/admissions/Refund Rules of CCET.pdf'>Refund Rules of CCET</a></td>
          <td >01st,Jul,2010</td>
        </tr>
                <tr>
          <td ><a href='pdf/admissions/DegreeProspectus.pdf'>Degree Prospectus CCET</a></td>
          <td >12th,Feb,2010</td>
        </tr>
		</tbody>
              </table>
    </div>
</div>
		  </div>
		<div id="home" class="tab-pane fade ">
		  <h3 class="staticheading" style="margin-top:15px;">Degree wing forms</h3>
		  <div id="download_degree">
      <table class="table">
        <tbody>
               <thead>
            <tr >
              <th>Links</th>
              <th>Upload Date</th>
            </tr>
			</thead>
			<?php include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM ccet_forms where type='department' order by id desc ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
            <tr>
              <td ><a href='<?php echo $row["link"] ?>'><?php echo $row["title"] ?></a></td>
          <td ><?php echo $row["date"] ?></td>
            </tr>
			<?php
	}
}
else
{
	
}
	?>
				<tr>
          <td ><a href='pdf/degree/appsc/joined_document.pdf'>Syllabus and Scheme for B.E. 1st Year(All Branches)</a></td>
          <td >03rd,Aug,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/appsc/FIRST YEAR T.T..pdf'>First Year Time Table for Session July-December,2013 w.e.f. 9th July,2013 </a></td>
          <td >20th,Aug,2013</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/appsc/Chemistry lab & Syllabus.pdf'>Chemistry Lab and Syllabus</a></td>
          <td >19th,Jun,2012</td>
        </tr>
                
                <tr>
          <td ><a href='pdf/degree/BE_Computer_Science_2015_2016.pdf'>Syllabus C.S.E. (1st Sem)</a></td>
          <td >03rd,Aug,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/notices/examoo.pdf'>Year Back students to appear in re-appear exams Jan, 2015</a></td>
          <td >16th,Jan,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/cse/BE-CSE-2013-14.pdf'>Syllabus & Scheme for 3rd to 8th Semesters 2013-2014</a></td>
          <td >21st,Aug,2013</td>
        </tr>
                
                <tr>
          <td ><a href='pdf/degree/BE_Electronics_and_Communications_2015_2016.pdf'>Syllabus E.C.E (1st Sem)</a></td>
          <td >03rd,Aug,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/ece/syllabus.pdf'>Syllabus Electronics (3rd-8th Sem)</a></td>
          <td >15th,Jun,2012</td>
        </tr>
                
                <tr>
          <td ><a href='pdf/degree/B.E._-Civil-1st_year_scheme.pdf'>Syllabus Civil (1st Sem)</a></td>
          <td >03rd,Aug,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/civil/syllabuscivil1314.pdf'>Syllabus & Scheme for 3rd to 8th Semesters</a></td>
          <td >07th,May,2013</td>
        </tr>
                
                <tr>
          <td><a href='pdf/degree/BE_Mechanical_2015_2016.pdf'>Syllabus Mechanical (1st Sem)</a></td>
          <td >03rd,Aug,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/notices/NOTICE Training.pdf'>Submission of confirmation regarding training </a></td>
          <td >12th,Jan,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/degree/mech/syllabus.pdf'>Syllabus Mechanical (3rd-8th Sem)</a></td>
          <td >15th,Jun,2012</td>
        </tr></tbody>
              </table>

</div>
		  </div>
		
		<div id="menu2" class="tab-pane fade">
		  <h3 class="staticheading" style="margin-top:15px;">Training & Placement Cell Forms</h3>
		  <div >
      <table class="table" >
       <thead>
            <tr >
              <th>Links</th>
              <th>Upload Date</th>
            </tr>
			</thead>
	   <tbody>
	   <?php include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM ccet_forms where type='tnp' order by id desc ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
            <tr>
              <td ><a href='<?php echo $row["link"] ?>'><?php echo $row["title"] ?></a></td>
          <td ><?php echo $row["date"] ?></td>
            </tr>
			<?php
	}
}
else
{
	
}
	?>
                <tr>
          <td ><a href='pdf/tpo/TRAINING PERFORMA_CCET_new.pdf'>Training Performa</a></td>
          <td >19th,Feb,2015</td>
        </tr>
                <tr>
          <td ><a href='pdf/tpo/Training_Letter_6_months.pdf'>Training Letter (6 Months)</a></td>
          <td >02nd,Dec,2014</td>
        </tr>
                <tr>
          <td ><a href='pdf/tpo/CCET CV Format.pdf'>C.V. Format </a></td>
          <td >26th,Mar,2013</td>
        </tr>
                <tr>
          <td ><a href='pdf/tpo/Training_letter-4weeks 2013.pdf'>Training Letter (4 Weeks)</a></td>
          <td >14th,Mar,2013</td>
        </tr>
                <tr>
          <td ><a href='pdf/tpo/Training Letter 6 months.pdf'>Training Letter (6 Months)</a></td>
          <td >14th,Mar,2013</td>
        </tr>
                <tr>
          <td ><a href='pdf/tpo/Placement Brochure2012-13.pdf'>Placement Brochure</a></td>
          <td >14th,Mar,2013</td>
        </tr>
		</tbody>
              </table>
    </div>
		  </div>



<div id="faculty" class="tab-pane fade">
		  <h3 class="staticheading" style="margin-top:15px;">Faculty/Staff Forms</h3>
		  <div >
      <table class="table" >
       <thead>
            <tr >
              <th>Links</th>
              <th>Upload Date</th>
            </tr>
			</thead>
	   <tbody>
	   <?php include 'connection.php';
// Create connection
$conn = new mysqli($host, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM ccet_forms where type='faculty' order by id desc ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
            <tr>
              <td ><a href='<?php echo $row["link"] ?>'><?php echo $row["title"] ?></a></td>
          <td ><?php echo $row["date"] ?></td>
            </tr>
			<?php
	}
}
else
{
	
}
	?>
                <tr>
          <td ><a href='pdf/Temporary Impreset Proforma.pdf'>TEMPORARY IMPREST REQUISITION FORM</a></td>
          <td >28th,Sept,2016</td>
        </tr>
        
		</tbody>
              </table>
    </div>
		  </div>


		
	  </div>
		  
		  
		   </p>



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