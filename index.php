<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Website Title -->
    <title>PBTNN31</title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font-Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Lightbox -->
	<link href="assets/lightbox/css/lightbox.css" rel="stylesheet">
    <!-- Text Rotator-->
	<link href="assets/textrotator/simpletextrotator.css" rel="stylesheet">
	<!-- FlexSlider -->
    <link href="assets/flexslider/flexslider.css" rel="stylesheet">
	<!-- Theme Style -->
    <link href="css/style.css" rel="stylesheet">
	<!-- Animations -->
    <link href="css/animate.css" rel="stylesheet">
	<!-- Custom Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/html5shiv/html5shiv.js"></script>
    <script src="assets/respond/respond.min.js"></script>
    <![endif]-->
  </head>
    <body id="top">

      <!-- ****************************** Preloader ************************** -->
      <div id="preloader"></div>


	  	<!-- ==========================
        HEADER SECTION 
        =========================== -->
        <header id="home">
		    <!-- creative menu -->
            <div class="container-fluid">
              <div class="row">
                <div class="menu-wrap">
				<nav class="menu">
				    <!-- Menu Links -->
					<div class="icon-list">
						<a href="index.php#home"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
						<a href="index.php#portfolio"><i class="fa fa-fw fa-picture-o"></i><span>Portfolio</span></a>
            <a href="index.php#LOGIN"><i class="fa fa-fw fa-user"></i><span>Login</span></a>
						<a href="index.php#contact"><i class="fa fa-fw fa-envelope-o"></i><span>Contact</span></a>
					</div>
				</nav>
			    </div>
			    <button class="menu-button" id="open-button"></button><!-- menu button -->
              </div><!--/row-->
            </div><!--/container-->
		  <!-- Header Image -->
          <section class="hero" id="hero">
            <div class="container">
			  <!-- Slider Button (don't edit!)-->
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="index.php#"><span></span></a>
                </div>
              </div>
			  <!-- HEADER HEADLINE -->
              <div class="row">
                <div class="col-md-8 col-md-offset-1 inner">
                  <h1 class="animated fadeInDown">
                    <span style="color:#5a5a5a">PBT</span><span style="color:#00ff90">N</span><span style="color:#5a5a5a">N</span>
                  <h3 class="animated fadeInUp delay-05s"><span class="rotate">Welcome</span></h3><!-- Text Rotator -->
                </div>
              </div>
            </div>
          </section>
		  <!-- Header Image End -->
        </header>


		<!-- ==========================
        PORTFOLIO SECTION
    =========================== -->
        <section class="swag text-center" id="portfolio">
          <div class="container">
		    <!-- Headline -->
            <div class="row">
              <h1 class="arrow">
                Recent <span>Projects</span>
              </h1>
            </div>
          </div>
        </section>

        <div class="container">
          <div class="row row-offset-0">
  				 
          <!-- PORTFOLIO ITEM 1 -->
          <div class="col-md-4 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-01-large.jpg" data-lightbox="roadtrip" title="Project One - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-01-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
  					
  	    <!-- PORTFOLIO ITEM 2 -->
          <div class="col-md-4 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-02-large.jpg" data-lightbox="roadtrip" title="Project Two - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-02-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
  					
  		<!-- PORTFOLIO ITEM 3 -->
          <div class="col-md-4 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-03-large.jpg" data-lightbox="roadtrip" title="Project Three - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-03-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
  					
  		<!-- PORTFOLIO ITEM 4 -->
          <div class="col-md-4 col-md-offset-2 col-sm-6 ">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-04-large.jpg" data-lightbox="roadtrip" title="Project Four - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-04-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
  					
  		<!-- PORTFOLIO ITEM 5 -->
          <div class="col-md-4 col-sm-6 ">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/portfolio-05-large.jpg" data-lightbox="roadtrip" title="Project Five - Lorem Ipsum"><img class="grayscale" src="img/portfolio/portfolio-05-thumbnail.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

      </div><!--/row-->
      </div><!--/.container-->
		<!-- ==========================
        PORTFOLIO SECTION END
        =========================== -->
			


			
		<!-- ==========================
        CUSTOM SPACER
        =========================== -->
    <br>
    <section class="swag text-center" id="LOGIN">
		<div class="spacer-cta text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="LOGINn.php" class="outline-btn">LOGIN</a>
              </div>
            </div>
          </div>
        </div>
      </section>

        <section class="text-center section-padding contact-wrap" id="contact">
		  <!-- To Top Button -->
          <a href="index.php#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
		    <!-- Headline -->
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Contact <span style="color:#00ff90">the</span> developer</h1>
              </div>
            </div>
            <div class="row contact-details">
			  <!-- Adress Box -->
              <div class="col-md-4">
                <div class="dark-box box-hover">
                  <a href="https://web.facebook.com/profile.php?id=100090767058801" target="_blank">
                  <h2><i class="fa fa-facebook"></i><span>facebook</span></h2>
                  <p><span style="color:#F3F5F8">_</span><br>PBTNN ระบบคำนวณค่าไฟสำหรับหอพัก<br><span style="color:#F3F5F8">_</span></p></a>
                </div>
              </div>
			  <!-- E-Mail Box -->
        <div class="col-md-4">
          <div class="dark-box box-hover">
            <a href="https://mail.google.com" target="_blank">
            <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2></a>
            <p><span style="color:#F3F5F8">_</span><a href="https://mail.google.com" target="_blank"><br>PBTNN31@gmail.com<br></a><span style="color:#F3F5F8">_</span></p>
          </div>
        </div>
			  <!-- Phone Number Box -->
              <div class="col-md-4">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p>0909923331<br>0864117841<br>0929263904</p>
                </div>
              </div>
            </div>
            <br>
          </div>
			
		
		
		
		<!-- ==========================
        FOOTER SECTION
        =========================== -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <p>Thank you for visiting.
              </div>
            </div>
          </div>
        </footer>
		<!-- ==========================
        FOOTER SECTION END
        =========================== -->		
		
		
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- SmoothScroll -->           
    <script type="text/javascript" src="assets/smoothscroll/smoothscroll.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/waypoints.min.js"></script>
    <!-- classie.js -->
	<script src="js/classie.js"></script>
    <!-- FlexSlider -->
    <script src="assets/flexslider/jquery.flexslider.js"></script>
	<!-- Modernizr -->
    <script src="js/modernizr.js"></script>
	<!-- Text Rotator -->
	<script src="assets/textrotator/jquery.simple-text-rotator.js"></script>
	<!-- Lightbox.js -->
    <script src="assets/lightbox/js/lightbox.min.js"></script>
    <!-- Google Maps --> 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
	<!-- Theme JavaScript Core -->
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>
	
	<!-- TEXT ROTATOR SETTINGS -->
    <script type="text/javascript">
    $(".rotate").textrotator({
      animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
      separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
      speed: 2000 // How many milliseconds until the next word show.
    });
    </script>
	
    </body>
</html>