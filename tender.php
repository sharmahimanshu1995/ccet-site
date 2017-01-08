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

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style1.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/bootstrap.min.css" rel="stylesheet">	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<title>CCET&nbsp;|&nbsp;Chandigarh College Of Engineering And Technology</title>
	<link rel="stylesheet" href="css/main.css">
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

<!--navbar-->
        <!-- Grid demo navbar -->
		
 <div id="wrapper" style="padding-left:220px;">
        <!-- <div class="overlay" style="display:block;"></div> -->
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" >
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                       Quick Links
                    </a>
                </li>
                <<li>
                    <a href="iirc.html">IIRC</a>
                </li>
                <li>
                    <a href="iprc.html">IPRC</a>
                </li>
                <li>
                    <a href="r&c.html">Research & Consultant</a>
                </li>
               
				<li>
                    <a href="centrallibrary.html">Central Library</a>
                </li>
				<li>
                    <a href="tnp.html">Training and Placement</a>
                </li>
                <li>
                    <a href="exam.html">Examination and Result</a>
                </li>
				<li>
                    <a href="legalinfo.html">Alumni</a>
                </li>
				<li>
                    <a href="computercenter.html">Computer Center</a>
                </li>
				 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tender<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    
                    <li><a href="legalinfo.html">Legal Information</a></li>
                    <li><a href="citizen-client.html">Citizen / Client Charter</a></li>
                    
                  </ul>
                
                </li>
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
		
          <table class="table table-hover">
		  <thead>
      <tr>
        <th>Tender Links</th>
        <th>Upload date</th>
        
      </tr>
    </thead>
         <tbody>
		<?php
							
							include'connection.php';
							$con=new mysqli($host,$username,$password,$db);
							$sql="select * from ccet_tenders order by id desc";
							$result=$con->query($sql);
							
							if($result->num_rows>0)
							{
								while($row=$result->fetch_array())
								{
									?>
									<tr>

									<td>
									 <a href="<?php echo $row["link"];?>"><?php echo $row["title"]; 
									 ?> </a>
									 </td>
									 <td><?php echo $row["upload_date"]; ?> </td>
									 
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
            <td ><a href='pdf/tenders/apr.pdf'>Chandigarh College of Engineering & Technology (Degree Wing), Sector-26, Chandigarh invites e-tenders for Hiring of Infrastructure material for Tech Fest Apratim 2016.</a></td>
            <td >18,Oct,2016</td>
          </tr>
<tr>
            <td ><a href='pdf/tenders/NIT_1.pdf'>Chandigarh College of Engineering & Technology (Degree Wing), Sector-26, Chandigarh invites e-tenders for Hiring of Infrastructure material for Tech Fest Apratim 2016.</a></td>
            <td >23,Sept,2016</td>
          </tr>
<tr>
            <td ><a href='pdf/Cafeteria Tender Final 20.09.16.pdf'>Sealed Tenders are invited for licensing out the Cafeteria in Chd. College of Engineering & Technology(Degree) Sector 26, Chd</a></td>
            <td >22,Sept,2016</td>
          </tr>
<tr>
            <td ><a href='pdf/ccettender.pdf'>CCET(Degree  Wing) invites e-tenders for purchase of
Machinery/Equipments/Items for its Mechanical Engineering Department</a></td>
            <td >30,JULY,2016</td>
          </tr>
<tr>
            <td ><a href='pdf/tenders/Cafeteria_Notice.pdf'>Sealed Tenders are invited for licencing out the Cafeteria in
Chd. College of Engineering & Technology(Degree) Sector 26</a></td>
            <td >13,May,2016</td>
          </tr>
            
                    <tr>
            <td ><a href='pdf/tenders/tender_doc.pdf'>TENDER FOR HIRING INFRASTRUCTURE MATERIAL FOR TECH FEST APRATIM</a></td>
            <td >10th,Sep,2015</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/Security Tender.pdf'>TENDER FOR AWARD OF CONTRACT FOR
PROVIDING GENERAL MANPOWER SERVICES IN THE CCET-26, CHANDIGARH
</a></td>
            <td>04th,Jul,2015</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/Newspapers and Magazines.pdf'>Contract for the supply of Newspapers and Magazines in Library (Degree Wing), Chandigarh College of Engineering & Technology, Sector 26, Chandigarh for a period of two years.</a></td>
            <td>09th,Mar,2015</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/result of technical bid.pdf'>RESULT OF TECHNICAL BIDS OPENED ON 13.02.2015 AT 11.00 A.M. FOR PURCHASE OF MACHINERY/EQUIPMENTS/ITEMS IN CCET (DEGREE) CHANDIGARH</a></td>
            <td>23rd,Feb,2015</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/e-tender2.pdf'>TENDER FOR for purchase the Machinery/Equipments/Items for Mechanical Engineering, Civil Engineering and Electronics & Communication Engineering Departments</a></td>
            <td>21st,Jan,2015</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/e-tender of manpower.pdf'>Chandigarh College of Engineering & Technology (Degree Wing), Sector 26, Chandigarh invites tenders through e-tendering for outsourcing of General Manpower Services (Civilian) Contract</a></td>
            <td>21st,Oct,2014</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/TENDER FOR HIRING INFRASTRUCTURE MATERIAL FOR TECH FEST APRATIM-III, 2014.pdf'>TENDER FOR HIRING INFRASTRUCTURE MATERIAL FOR TECH FEST APRATIM-III, 2014 </a></td>
            <td>30th,Sep,2014</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/newspapermagzine.pdf'>This is for the information of the general public that this Institution is going to allot fresh contract  for the supply of following Newspapers and Magazines in Library (Degree Wing), Chandigarh Coll</a></td>
            <td>17th,Sep,2014</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/tenderfurniture.pdf'>TENDER FOR PURCHASE OF FURNITURE, CHANDIGARH COLLELGE OF ENGINEERING & TECHNOLOGY </a></td>
            <td>08th,Aug,2014</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/tender.pdf'>This is for the information of the general public that this Institution is going to hire two photo stat Machines for two years.  The terms and conditions in respect of hiring two Photostat machines fo</a></td>
            <td>10th,Jun,2014</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/Tender for purcahse of books for Library.pdf'>TENDER FOR SUPPLY OF BOOKS IN CCET(DEGREE WING)</a></td>
            <td>31st,Jan,2014</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/etender.pdf'>SHORT TERM E-TENDER NOTICE</a></td>
            <td>26th,Dec,2013</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/etender.pdf'>C.C.E.T.( Degree Wing) invites tenders through e-tendering for purchase the Machinery/Equipments/Items.</a></td>
            <td>09th,Oct,2013</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/tender apratim, 2013.pdf'>TENDER FOR HIRING OF INFRASTRUCTURE MATERIAL FOR TECH FEST APRATIM, 2013 FOR CHANDIGARH COLLEGE OF ENGINEERING & TECHNOLOGY, (DEGREE WING) CHANDIGARH </a></td>
            <td>05th,Sep,2013</td>
          </tr>
                    <tr>
            <td id="dhead"><a href='pdf/tenders/etenderoffurniture.pdf'>e-Tender for the Purchase of Furniture for CCET Degree wing</a></td>
            <td id="dlink">23rd,May,2013</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/Final Tender for Furniture of Hostel.pdf'>Tender For Purchase of Furniture for CCET Hostel</a></td>
            <td>23rd,May,2013</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/e-tender for e-journals.pdf'>Chandigarh College of Engineering & Technology invites  tender through e-Tendering for purchase of E-Journals for Library</a></td>
            <td>21st,Feb,2013</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/Security-Tender.pdf'>TENDER FOR AWARD OF CONTRACT FOR PROVIDING SECURITY SERVICES IN THE CCET-26, CHANDIGARH.</a></td>
            <td>21st,Feb,2013</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/Cafeteria Tender.pdf'> Sealed Tenders are invited for licencing out the Cafeteria (Degree Wing), Chd. College of Engineering & Technology, Chandigarh.</a></td>
            <td>24th,Jan,2013</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/raftar_tender.pdf'>Tender Notice for Procurement of the Listed Items </a></td>
            <td>17th,Jan,2013</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/Tender Civil Engg. - 2012.pdf'>Tender Notice for the Purchase of equipments / material for Civil Engineering Department</a></td>
            <td>07th,Dec,2012</td>
          </tr>
                    <tr>
            <td ><a href='pdf/tenders/lib_tender.pdf'>Auction for 1000 Kg waste newspaper</a></td>
            <td>16th,Oct,2012</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/mech tender.pdf'>Tender for purchase of machinery & equipments for MECH Engg.</a></td>
            <td>12th,Oct,2012</td>
          </tr>
                    <tr>
            <td><a href='pdf/tenders/ece tender.pdf'>Tender for purchase of machinery & equipments for ECE</a></td>
            <td>12th,Oct,2012</td>
          </tr>
                    <tr>
            <td ><a href='pdf/tenders/civil tender.pdf'>Tender for purchase of machinery & equipments for CIVIL Engg.</a></td>
            <td >12th,Oct,2012</td>
          </tr>
                    <tr>
            <td ><a href='pdf/tenders/sign.jpg'>Corrigendum  Of  FDR Interest Rate</a></td>
            <td >21st,Sep,2012</td>
          </tr>
                    <tr>
            <td ><a href='pdf/tenders/tender.jpg'>Interest Rate Of FDR</a></td>
            <td >11th,Sep,2012</td>
          </tr>
                    <tr>
            <td ><a href='pdf/tenders/Tender Notice 28062012.pdf'>Tender Notice for Degree wing</a></td>
            <td >01st,Jul,2012</td>
          </tr>
                     <tr>
            <td colspan="2" ><h1 style="text-align:center"><a href="http://etenders.chd.nic.in/nicgep/app">E - DEGREE</a></h1></td>
          </tr>
</tbody>
</table>



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
