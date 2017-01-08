<?php 
session_start();
?>
<html>
<head>
<title>Mail</title>
<link id="bootstrap-style" href="css/bootstrap.min_cms.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style_cms.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
  
 
  
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
{include 'cms_head.php';
	?>

	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
<?php include 'cms_sidebar.php'; ?> 
 <div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="cms_homepage.php">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Send Mail</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Mail Sender</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">       
		
        
<h1>Mail Sending to all</h1><br><br><br>
              
  <form action="mail_send.php" action="post" class="form-horizontal">
  <div class="control-group">
								<label class="control-label" for="focusedInput">Subject</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="subject" placeholder="Please Enter The Subject">
								</div>
							  </div>    
	  <div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Message</label>
							  <div class="controls">
							<textarea name="message" class="cleditor" id="textarea2" rows="3" placeholder="Please Enter Message Here"></textarea>
							  </div>
							</div>
      
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" id="login" class="btn btn-primary">Send Mail</button>
      </div>
    </div>
  </form>
      
          </div>
		  </div>
		  </div></div></div></div>
<?php
include 'cms_footer.php';
}
?>

</body>
</html>