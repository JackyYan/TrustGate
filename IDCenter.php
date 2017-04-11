<?php
$page = 'IDCenter';
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>TRUSTGATE-Offical Site</title>
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<link rel="shortcut icon" href="favicon.ico" />

<!-- Style Sheets -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" href="css/animate.css" />
<link rel="stylesheet" type="text/css" href="css/hover-min.css">
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/ms-style/masterslider.css" />
<link rel="stylesheet" href="css/ms-style/ms-layers-style.css" />
<link href="css/ms-skins/light-3/style.css" rel='stylesheet' type='text/css'>
<link href="css/ms-skins/black-2/style.css" rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/loader.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<!-- google fonts -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:400,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<!-- tab -->
<link rel="stylesheet" href="css/tab.css">

</head>
<body data-spy="scroll" data-offset="170" data-target="#fixed-collapse-navbar">

<!-- Loader -->
<div id="loader">
	<div id="smoke">
	  <span class="s0"></span>
	  <span class="s1"></span>
	  <span class="s2"></span>
	  <span class="s3"></span>
	  <span class="s4"></span>
	  <span class="s5"></span>
	  <span class="s6"></span>
	  <span class="s7"></span>
	  <span class="s8"></span>
	  <span class="s9"></span>
	</div>
</div>
	<!-- Loader -->
	<!--  Collect the nav links, forms, and other content for toggling -->
  <?php include('includes/header.php'); ?>


<!-- start vapouring theme -->
<div class="backgroundabout">
	<div class="container">
    	<div class="row">
        	<div class="col-md-6 col-sm-12 ">
						<br><br><br>
            	<div id="theme">
                	<p>TRUSTGATE </p>
                    <h4 class="wow fadeInDown" data-wow-duration="0.3s"><span class="h4-style">ID Center</span></h4>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- end vapouring theme-->

<!-- start tips area -->
<div id="tips">
	<div class="container">
    	<div class="row">

						<h2>Digital IDs</h2>
						<p>MSC Trustgate provides trusted and encryption technology that secure your online communication and transaction hence protect your vital business information from prying eyes.</p>

            <div class="col-sm-12">

							<div class="tabbable-panel">
									<div class="tabbable-line">
										<ul class="nav nav-tabs ">
											<li class="active">
												<a href="#tab_default_1" data-toggle="tab">
												MyTrust ID </a>
											</li>
											<li>
												<a href="#tab_default_2" data-toggle="tab">
												MyKey (Digital ID for MyKad) </a>
											</li>

										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="tab_default_1">
												<h2>MyTrust ID</h2>
												<p>MyTrust ID is a digital certificate issued by MSC Trustgate to individual or corporate users for online authentication and submission of applications or documents. The MyTrust ID can be used by lawyers in Malaysia to perform e-filing, by consumers to apply for tax exemption or to submit documents to government authorities and by Money Changers to submit reports to Bank Negara.</p>

												<img src="./images/icon.gif"><a href="#">Get your MyTrust ID</a>
												
											</div>

											<div class="tab-pane" id="tab_default_2">
												<h2>MyKey (Digital ID for MyKad)</h2>

												<p>MyKey is the Digital ID that is stored inside MyKad. It provides encryption technology and digital signature capability for Malaysians to conduct online transaction securely. MyKey is governed by Malaysia’s Digital Signature Act 1997/98 & is accepted by the court of laws in Malaysia.  A document digitally signed with MyKey is treated as a legal binding document as it is with a handwritten signature.</p>

												<img src="./images/icon.gif"><a href="https://www.mykey.com.my/digitalidCenterM.htm">Get your MyKey</a>

											</div>

									</div>
								</div>


            </div>


        </div>
    </div>
</div>
<!-- end tips area-->




<!-- start vaping now -->








<!-- Copyright -->
<?php include ('includes/linkandlogo.php'); ?>
<div id="copyright">
	<div class="container">
		<?php include ('includes/footer.php'); ?>
	</div>
</div>
<!-- Copyright -->



<!-- Scripts -->
<script src="js/wow.min.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/masterslider.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/owl-slider.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js"> </script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAGa1RjX2Gbhk2-RaDCjRIscUYShekZxw&callback=initMap"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	$('ul.nav li.sslcertificate').hover(function() {
	 $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
 }, function() {
	 $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
 });

 $('ul.nav li.services').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});

	$('ul.nav li.repository').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});

	$('ul.nav li.resources').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});

	$('ul.nav li.resources').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});

	$('ul.nav li.IDcenter').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});


});
</script>
<!-- end scripts -->

</body>
</html>
