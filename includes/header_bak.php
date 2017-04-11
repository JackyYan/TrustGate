<!-- start top header-->
<div id="header">
	<div class="container">
    	<div class="row">
        	<div class="col-md-4 col-sm-4 hidden-xs">
            	<div id="live-help">
                	<span><i class="fa fa-phone-square"></i></span>
                    <p  style="color:#fff;">CAll US</p>
                    <h4  style="color:#fff; font-size:24px;">(+603) 8318 1800</h4>
										<h5 style="color:#fff">9am - 6pm (Monday - Friday)</h5>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
            	<div id="logo">
								<a href="index.php"><img src="images/logo.png" alt="logo"></a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 hidden-xs">
            	<div id="chat-with-us" class="pull-right">
                	<span><i class="fa fa-comments"></i></span>
                    <p style="color:#fff;">Inquiries</p>
                    <h4><a href="#">sales@msctrustgate.com</a></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end top header -->

<!-- Main-Navigation -->
<div id="main-navigation">
    <div id="navigation" data-spy="affix" data-offset-top="108">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="row text-center">
                    <!--  Brand and toggle get grouped for better mobile display -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    	<div class="navbar-header">
                        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fixed-collapse-navbar"> <span class="sr-only">Our Shops</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        </div>
</div>
<div class="collapse navbar-collapse nav-collapse" id="fixed-collapse-navbar">
    <ul class="nav navbar-nav">
        <!--<li class="<?php //if ($page=="Home") {echo "active"; } else  {echo "noactive";}?>dropdown home">
          <a href="index.php" >Home</a>
          <ul class="dropdown-menu">
               <li><a href="#">Action</a></li>
               <li><a href="#">Another action</a></li>
          </ul>
        </li>-->

        <li class="<?php if ($page=="SSLCertificate") {echo "active"; } else  {echo "noactive";}?> dropdown sslcertificate">
          <a href="ssl_id.php" >SSL & Certificate</a>
          <ul class="dropdown-menu">
               <li class="<?php if ($page=="Symantec") {echo "active"; } else  {echo "noactive";}?>"><a href="symantec.php">Symantec</a></li>
               <li class="<?php if ($page=="SecureSite") {echo "active"; } else  {echo "noactive";}?>"><a href="securesite.php">Secure Site</a></li>
               <li class="<?php if ($page=="SecureSitePro") {echo "active"; } else  {echo "noactive";}?>"><a href="securesitepro.php">Secure Site Pro</a></li>
               <li class="<?php if ($page=="SecureSiteEV") {echo "active"; } else  {echo "noactive";}?>"><a href="securesiteEV.php">Secure Site EV</a></li>
               <li class="<?php if ($page=="SecureSiteWildCard") {echo "active"; } else  {echo "noactive";}?>"><a href="securesitewildcard.php">Secure Site Wildcard</a></li>
               <li class="<?php if ($page=="IntranetSSL") {echo "active"; } else  {echo "noactive";}?>"><a href="intranetSSL.php">IntranetSSL</a></li>
               <li class="<?php if ($page=="SSLVerificationProcess") {echo "active"; } else  {echo "noactive";}?>"><a href="SSLverificationprocess.php">SSL Verification Process</a></li>
               <li class="<?php if ($page=="ManagedPKISSL") {echo "active"; } else  {echo "noactive";}?>"><a href="ManagedPKISSL.php">Managed PKI for SSL Certificates</a></li>
               <li class="<?php if ($page=="ManagedPKISSLMultiple") {echo "active"; } else  {echo "noactive";}?>"><a href="ManagedPKISSLmultiple.php">Managed PKI for SSL (Multiple Server Certificates)</a></li>
          </ul>
        </li>

        <li class="<?php if ($page=="Services") {echo "active"; } else  {echo "noactive";}?> dropdown services">
          <a href="services.php" >Services</a>
          <ul class="dropdown-menu">
               <li><a href="#">Public Key Infrastructure (PKI) Implementation Services</a></li>
               <li><a href="#">Security Consultancy Services</a></li>
          </ul>
        </li>

        <!--<li class="<?php //if ($page=="About Us") {echo "active"; } else  {echo "noactive";}?>"><a href="about_us.php" >About</a> </li>
        <li class=""><a href="ssl_id.html">Products & Services</a></li>-->
        <li class="<?php if ($page=="Repository") {echo "active"; } else  {echo "noactive";}?> dropdown repository">
          <a href="repository.php">Repository</a>
          <ul class="dropdown-menu">
               <li><a href="#">Certificate Practice Statement</a></li>
               <li><a href="#">Subscriber Agreements</a></li>
               <li><a href="#">Relying Party Agreements</a></li>
               <li><a href="#">Certificate Revocation List (CRL)</a></li>
               <li><a href="#">Miscellaneous Agreements</a></li>
               <li><a href="#">Relevant Malaysian Laws and Regulations</a></li>
               <li><a href="#">Privacy Statement</a></li>
          </ul>
        </li>
        <li class="<?php if ($page=="Resources") {echo "active"; } else  {echo "noactive";}?> dropdown resources">
          <a href="resource.php" >Resources</a>
          <ul class="dropdown-menu">
               <li><a href="#">White Paper</a></li>
               <li><a href="#">PKI Glossarys</a></li>
               <li><a href="#">Brochures</a></li>
          </ul>
        </li>
        <li class="<?php if ($page=="IDCenter") {echo "active"; } else  {echo "noactive";}?> dropdown IDcenter">
          <a href="IDCenter.php" >Digital ID Center</a>
          <ul class="dropdown-menu">
               <li><a href="#">Secure Server ID (SSL Server ID)</a></li>
               <li><a href="#">Global Server ID (128-bit SSL Server ID)</a></li>
               <li><a href="#">Trial SSL Server ID</a></li>
               <li><a href="#">MyKey (Digital ID for MyKad)</a></li>
               <li><a href="#">Personal ID</a></li>
          </ul>
        </li>
        <li class="<?php if ($page=="Support") {echo "active"; } else  {echo "noactive";}?>"><a href="contact.php" >Support</a></li>
    </ul>
  </div>
 </div>
</div>
</nav>
  </div>
</div>
<!-- Main-Navigation -->
