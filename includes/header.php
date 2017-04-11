<!-- start top header-->
<div id="header">
	<div class="container">
    	<div class="row">
        	<div class="col-md-4 col-sm-4 hidden-xs">
            	<div id="live-help">
                	<span><i class="fa fa-phone-square"></i></span>
                    <p  style="color:#fff;">Call Us</p>
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
						<li class="<?php if ($page=="SSLCertificate") {echo "active"; } else  {echo "noactive";}?>"><a href="ssl_id.php">What is SSL Certificate?</a></li>
               <li class="<?php if ($page=="Symantec") {echo "active"; } else  {echo "noactive";}?>"><a href="symantec.php">Symantec</a></li>
               <li class="<?php if ($page=="ManagedPKISSL") {echo "active"; } else  {echo "noactive";}?>"><a href="managedPKISSL.php">Managed PKI for SSL Certificates</a></li>
               <li class="<?php if ($page=="SSLVerification") {echo "active"; } else  {echo "noactive";}?>"><a href="SSLverificationprocess.php">SSL Verification Process</a></li>
          </ul>
        </li>

        <li class="<?php if ($page=="Services") {echo "active"; } else  {echo "noactive";}?> dropdown services">
          <a href="services.php" >Products and Services</a>
          <ul class="dropdown-menu">
               <li class="<?php if ($page=="ManagedPKI") {echo "active"; } else  {echo "noactive";}?>"><a href="mpki.php">Managed PKI</a></li>
               <li class="<?php if ($page=="MyTrustMultiFactorAuth") {echo "active"; } else  {echo "noactive";}?>"><a href="mytrustmultifactorauth.php">MyTrust Multi-factor Authentication</a></li>
							 <li class="<?php if ($page=="MyTrustSigner") {echo "active"; } else  {echo "noactive";}?>"><a href="mytrustsigner.php">MyTrust Signer</a></li>
							 <li class="<?php if ($page=="PublicKeyInfrastructure") {echo "active"; } else  {echo "noactive";}?>"><a href="publickeyinfrastructure.php">Public Key Infrastructure Implementation and Services</a></li>
          </ul>
        </li>

        <li class="<?php if ($page=="Repository") {echo "active"; } else  {echo "noactive";}?>"><a href="repository.php" >Repository</a> </li>
        <!--<li class=""><a href="ssl_id.html">Products & Services</a></li>-->

        <li class="<?php if ($page=="IDCenter") {echo "active"; } else  {echo "noactive";}?> dropdown IDcenter">
          <a href="IDCenter.php" >Digital ID Center</a>
          <ul class="dropdown-menu">
               <li class="<?php if ($page=="MyTrustID") {echo "active"; } else  {echo "noactive";}?>"><a href="mytrustID.php">MyTrust ID</a></li>
               <li class="<?php if ($page=="MyKey") {echo "active"; } else  {echo "noactive";}?>"><a href="mykey.php">MyKey</a></li>
          </ul>
        </li>
        <li class="<?php if ($page=="Support") {echo "active"; } else  {echo "noactive";}?>"><a href="contact.php" >Contact Us</a></li>
    </ul>
  </div>
 </div>
</div>
</nav>
  </div>
</div>
<!-- Main-Navigation -->
