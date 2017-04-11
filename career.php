<?php
$page = 'career';
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
                	<p>&nbsp; </p>
                    <h4 class="wow fadeInDown" data-wow-duration="0.3s"><span class="h4-style">Career</span></h4>
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
            <div class="col-sm-12">
            	<h1>Career</h1>
            </div>
						<div class="col-sm-12">
							<p>We are an established company based in Cyberjaya.  In line with our expansion, we are looking for qualified and dedicated individuals to join our team.<br><br>

							Interested candidates are invited to submit a detailed resume including personal details, qualification, working experience, present and expected salary, a recent passport-sized photograph and contact number either by :-</p>

							<p>Fax no : +603-8319 1800<br>
							Email : career@msctrustgate.com</p>

						<p>Mail : <br><b>MSC Trustgate.com Sdn. Bhd. (478231-X)</b><br>
								           Suite 2-9,Level 2, Block 4801<br>
								           CBD Perdana, Jalan Perdana<br>
								           63000 Cyberjaya<br>
								           Selangor Darul Ehsan, Malaysia<br>


								           Tel: +603 8318 1800<br>
								</p>
								
						</div>
        </div>
    </div>
</div>
<!-- end tips area-->







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
