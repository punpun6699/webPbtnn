<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('connect.php');
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
?>
<?php 
    session_start();
    $s=$_SESSION['userid'];
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

<!--link rel="icon" type="image/png" href="https://colorlib.com/etc/tb/Table_Fixed_Column/images/icons/favicon.ico"-->

<link rel="stylesheet" type="text/css" href="./Table V05_files/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="./Table V05_files/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./Table V05_files/animate.css">

<link rel="stylesheet" type="text/css" href="./Table V05_files/select2.min.css">

<link rel="stylesheet" type="text/css" href="./Table V05_files/perfect-scrollbar.css">

<link rel="stylesheet" type="text/css" href="./Table V05_files/util.css">
<link rel="stylesheet" type="text/css" href="./Table V05_files/mainn.css">

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'><link rel="stylesheet" href="./style.css">

<meta name="robots" content="noindex, follow">
<script type="text/javascript" async="" src="./Table V05_files/analytics.js.ดาวน์โหลด" nonce="929bfda6-f23c-423f-83ed-73227c195b06"></script><script defer="" referrerpolicy="origin" src="./Table V05_files/s.js.ดาวน์โหลด"></script><script nonce="929bfda6-f23c-423f-83ed-73227c195b06">(function(w,d){!function(bv,bw,bx,by){bv[bx]=bv[bx]||{};bv[bx].executed=[];bv.zaraz={deferred:[],listeners:[]};bv.zaraz.q=[];bv.zaraz._f=function(bz){return function(){var bA=Array.prototype.slice.call(arguments);bv.zaraz.q.push({m:bz,a:bA})}};for(const bB of["track","set","debug"])bv.zaraz[bB]=bv.zaraz._f(bB);bv.zaraz.init=()=>{var bC=bw.getElementsByTagName(by)[0],bD=bw.createElement(by),bE=bw.getElementsByTagName("title")[0];bE&&(bv[bx].t=bw.getElementsByTagName("title")[0].text);bv[bx].x=Math.random();bv[bx].w=bv.screen.width;bv[bx].h=bv.screen.height;bv[bx].j=bv.innerHeight;bv[bx].e=bv.innerWidth;bv[bx].l=bv.location.href;bv[bx].r=bw.referrer;bv[bx].k=bv.screen.colorDepth;bv[bx].n=bw.characterSet;bv[bx].o=(new Date).getTimezoneOffset();if(bv.dataLayer)for(const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ,bK)=>({...bJ[1],...bK[1]})))))zaraz.set(bI[0],bI[1],{scope:"page"});bv[bx].q=[];for(;bv.zaraz.q.length;){const bL=bv.zaraz.q.shift();bv[bx].q.push(bL)}bD.defer=!0;for(const bM of[localStorage,sessionStorage])Object.keys(bM||{}).filter((bO=>bO.startsWith("_zaraz_"))).forEach((bN=>{try{bv[bx]["z_"+bN.slice(7)]=JSON.parse(bM.getItem(bN))}catch{bv[bx]["z_"+bN.slice(7)]=bM.getItem(bN)}}));bD.referrerPolicy="origin";bD.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bv[bx])));bC.parentNode.insertBefore(bD,bC)};["complete","interactive"].includes(bw.readyState)?zaraz.init():bv.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script><style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }</style></head>
  </head>
    <body id="top">

      <!-- ****************************** Preloader ************************** -->
      <div id="preloader"></div>


	  	<!-- ==========================
        HEADER SECTION 
        =========================== -->
        <header id="hhome">
		    <!-- creative menu -->
            <div class="container-fluid">
              <div class="row">
                <div class="menu-wrap">
				<nav class="menu">
				    <!-- Menu Links -->
					<div class="icon-list">
						<a href="data_pageIN.php#hhome"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
						<a href="data_pageIN.php#MANAGEMENT"><i class="fa fa-fw fa-pencil-square-o"></i><span>MANAGEMENT</span></a>
            <a href="data_pageIN.php#SCHEDULE"><i class="fa fa-fw fa-table"></i><span>SCHEDULE</span></a>
						<a href="data_pageIN.php#ccontact"><i class="fa fa-fw fa-envelope-o"></i><span>Contact</span></a>
            <a href="data_pageIN.php#ccontact"><i class="fa fa-fw fa-envelope-o"></i><span>Contact</span></a>
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
                  <a id="nav-toggle" class="nav_slide_button" href="index1.html#"><span></span></a>
                </div>
              </div>
			  <!-- HEADER HEADLINE -->
              <div class="row">
                <div class="col-md-8 col-md-offset-1 inner">
                  <h1 class="animated fadeInDown">
                    <span style="color:#5a5a5a">PBT</span><span style="color:#00ff90">N</span><span style="color:#5a5a5a">N</span></h1><br>
                    <h4 class="animated fadeInUp delay-05s"><span class="rotate" style="color:#E04343">ผู้ดูแลระบบ</span></h4><!-- Text Rotator -->
                </div>
              </div><br>
			  <!-- Learn More Button -->
            </div>
          </section>
		  <!-- Header Image End -->
        </header>


		<!-- ==========================
        PORTFOLIO SECTION
    =========================== -->
        <section class="swag text-center" id="MANAGEMENT">
          <div class="container">
		    <!-- Headline -->
            <div class="row-center">
              <h1 class="arrow">
                System <span>Management</span>  
              </h1>
            </div>
          </div>
        </section>

		<!-- ==========================
        CUSTOM SPACER
        =========================== -->
		<div class="spacer-cta text-center">
          <div class="container">
            <h3 class="animated fadeInUp" style="color:#E04343"><span>จัดการระบบชำระเงิน</span></h3><br>
            <h3 class="animated fadeInUp" style="color:#E04343"> <span> 
        <?php 
          require_once('connect.php');
          $sql = "SELECT * FROM outdata WHERE id = '2'"; 
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)):
           $x=$row['data'];         
        endwhile; 
          if ($x=="1"){
            echo ("สถานะ : เปิด");
          }else{
            echo ("สถานะ : ปิด");
          }
          
          require_once('connect.php');
          $sql = "SELECT * FROM user";
          $result = mysqli_query($conn, $sql);
        ?></span></h3><br>
            <div class="col-md-4 col-md-offset-2 col-sm-6">
              <div class="col-md-12">
                <a href="on_bl.php" class="outline-btn">เปิด</a>
              </div>
            </div>

            <div class="col-md-4 col-sm-6">
              <div class="col-md-12">
                <a href="off_bl.php" class="outline-btn"><span style="color:#00ff90">.</span>ปิด</a>
              </div>
            </div>
          </div>
        </div>


        <section class="text-center section-padding contact-wrap" id="ccontact">
          <div class="container">
		    <!-- Headline -->
            <div class="row">
              <div class="col-md-12">
              <span>
<?php if (isset($_SESSION['success'])) : ?>
    <div class="success">
        <?php 
            echo $_SESSION['success'];
        ?>
    </div>
<?php endif; ?>
<?php if (isset($_SESSION['error'])) : ?>
    <div class="error">
        <?php 
            echo $_SESSION['error'];
        ?>
    </div>
<?php endif; ?>
<?php 
if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
    session_destroy();
}?>
</span>
      <form action="mi_black.php" method="post">
                <h1 style="color:#00ff90"><span style="color:#00ff90">ยืนยัน รหัสผ่าน</span></h1>
                <p><input type="ps" class="text-center" id="firstname" name="ps" placeholder="confirm password" required></class></p>
              </div>
            </div>
      <div class="container">
      <div class="row contact-details">
			  <!-- Phone Number Box -->
              <div class="col-md-6">
                <div class="dark-box box-hover M10PX">
                <br><br>
                  <h2><span>ส่งบิลทั้งหมด</span></h2>
                  <div><input type="submit" class="" name="submit" value="ตกลง"></div>
                  <br><br><br>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="dark-box box-hover M10PX">
                  <h2><span>ส่งบิลเฉพาะห้อง</span></h2>
                  <p>หมายเลขห้อง</p>
                  <p><input type="text" class="text-center" id="firstname" name="telephonenumber" placeholder="number room"></class></p>
                  <div><input type="submit" class="" name="submit" value="ตกลง"></div>
                  </div>
              </div>
            </div>
          </div>
            <div class="container">
      <div class="row contact-details">
			  <!-- Phone Number Box -->
              <div class="col-md-6">
                <div class="dark-box box-hover M10PX">
                  <h2><span>ราคาหน่วยค่าไฟฟ้า</span></h2>
                  <p>กำหนดราคาบาท</p>
                  <span><?php if (isset($_SESSION['success'])) : ?>
<div class="success">
<?php 
echo $_SESSION['success'];
?>
</div>
<?php endif; ?>
<?php if (isset($_SESSION['error'])) : ?>
<div class="error">
  <?php 
      echo $_SESSION['error'];
  ?>
</div>
<?php endif; ?>
<?php 
    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }
    require_once('connect.php');
    $sql = "SELECT * FROM outdata WHERE id = '3'"; 
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)):
     $x=$row['data'];
    endwhile;
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
?></span>
<form action="priceup.php" method="post">
                  <p><input type="text" class="text-center" name="telephonenumber" placeholder="<?php echo $x;?> บาท"></class></p>
                  <div><input type="submit" class="" name="submit" value="ตกลง"></div>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="dark-box box-hover M10PX">
                  <h2><span>ราคาส่วนลดบิลค่าไฟ</span></h2>
                  <p>กำหนดราคาบาท</p>
                  <span>                  
<?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>
<?php 
    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
        session_start();
    }
    require_once('connect.php');
    $sql = "SELECT * FROM outdata WHERE id = '1'";
    $result = mysqli_query($conn, $sql); 
    while ($row = mysqli_fetch_assoc($result)):
     $xx=$row['data'];
    endwhile;
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
?></span>
<form action="mi_black.php" method="post">
                  <p><input type="text" class="text-center" name="telephonenumber" placeholder="<?php echo $xx;?> บาท"></class></p>
                  <div><input type="submit" class="" name="submit" value="ตกลง"></div>
                  </div>
              </div>
            </div>
          </div>
          </div></section>
          <!--แสดงจำนวนห้อง-->
<h1 class="swag text-center" id="SCHEDULE"><span>ผู้ใช้งานทั้งหมด <?php echo mysqli_num_rows($result) ?> ห้อง</span></h1></class>
<!--จบการแสดง-->

<!--ตาราง-->
<div class="container">
<div class="wrap-table100">
<div class="table100 ver1">
<div>
                            <div><a href="form-create.php" class="btn btn-success">เพิ่มรายชื่อผู้ใช้งาน</a></div>
                            <br>
                            <?php if (mysqli_num_rows($result) > 0): ?>
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th class="text-center">ห้อง</th>
                                    <th class="text-center">ชื่อ</th>
                                    <th class="text-center">นามสกุล</th>
                                    <th class="text-center">เบอร์โทรศัพท์</th>
                                    <th class="text-center">สถานะ</th>
                                    <th class="text-center">จัดการ</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                <?php $c=1; while ($row = mysqli_fetch_assoc($result)):?>
                                    <tr>
                                        <td> <?php echo $row['roomnumber']  ?> </td>                   
                                        <td> <?php echo $row['firstname']  ?> </td>
                                        <td> <?php echo $row['lastname']  ?> </td>
                                        <td> <?php echo $row['telephonenumber']  ?> </td>
                                        <td> <?php echo $row['userlevel']  ?> 
                                    </td>
                                        <td>
                                            <div class="btn-group">
                                                
                                                <a href="form-update.php?id=<?php echo $row['id'] ?>" class="btn btn-warning"> แก้ไข </a>
                                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"> ลบ </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                
                                <?php 
                            endwhile; ?>
                                </tbody>
                            </table>    
                            <?php 
                                else: 
                                    echo "<p class='mt-5'>ไม่มีข้อมูลในฐานข้อมูล</p>"; 
                                endif; 
                            ?>
                            
</div>
</div>
</div>
</div>
<br>
<!--ปิดตาราง-->
<br><br><br>
        <section class="text-center section-padding contact-wrap" id="ccontact">
		  <!-- To Top Button -->
          <a href="data_pageIN.php#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
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
                  <a href="https://www.facebook.com/PBTNN" target="_blank">
                  <h2><i class="fa fa-facebook"></i><span>facebook</span></h2>
                  <p>Back End</p></a>
                </div>
              </div>
			  <!-- E-Mail Box -->
        <div class="col-md-4">
          <div class="dark-box box-hover">
            <a href="https://mail.google.com" target="_blank">
            <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
            <p><a href="https://mail.google.com" target="_blank">PBTNN31@gmail.com</a></p></a>
          </div>
        </div>
			  <!-- Phone Number Box -->
              <div class="col-md-4">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p>0909923331</p>
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
<style>*
.M10PX {
  margin: 20px;
}
</style>