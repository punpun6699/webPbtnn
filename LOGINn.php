<?php 
    session_start();
?>

<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet" />
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ยินดีต้อนรับ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


<!--===============================================================================================-->	
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v15/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="Login_v15/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v15/css/main.css">
<!--===============================================================================================-->


<!--===============================================================================================-->
<script src="Login_v15/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v15/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_v15/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_v15/js/main.js"></script>


</head>
<body>

<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(Login_v15/images/a.png);">
					<span class="login100-form-title-1">
						LOGIN
					</span>
				</div>

				<form class="login100-form validate-form" action="login.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="telephonenumber is required">
						<span class="label-input100">telephone</span>
						<input class="input100" type="text" name="telephonenumber" placeholder="Enter telephonenumber">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

	
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
								
          </form>
			</div>
		</div>
	</div>
    <!-- <div class="cardd container">
        <div class="v2_72"></div>
        <div class="v3_80"><div class="v2_73"></div><span class="v3_79">ยินดีต้อนรับ</span> </div>
        <form action="login.php" method="post">
        <span class="v2_74">หมายเลขโทรศัพท์</span>
        <span class="v2_75">รหัสผ่าน</span>
        <div><input type="text" class="v2_76" name="telephonenumber" placeholder="Telephone number" required></class></div>
        <div><input type="password" class="v2_77" name="password" placeholder="Password" required></class></div>
        <div><input type="submit" class="v2_78" name="submit" value="Login" ></div>
        </form> 
    </div> -->
</body>
</html>

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
    }
?>
<style>* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  font-size: 14px;
}
.cardd {
    --bs-card-spacer-y: 1rem;
    --bs-card-spacer-x: 1rem;
    --bs-card-title-spacer-y: 0.5rem;
    --bs-card-border-color: var(--bs-border-color-translucent);
    --bs-card-border-radius: 0.375rem;
    --bs-card-box-shadow: ;
    --bs-card-inner-border-radius: calc(0.375rem - 1px);
    --bs-card-cap-padding-y: 0.5rem;
    --bs-card-cap-padding-x: 1rem;
    --bs-card-cap-bg: rgba(0, 0, 0, 0.03);
    --bs-card-cap-color: ;
    --bs-card-height: ;
    --bs-card-color: ;
    --bs-card-bg: #fff;
    --bs-card-img-overlay-padding: 1rem;
    --bs-card-group-margin: 0.75rem;
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    height: var(--bs-card-height);
    word-wrap: break-word;
    background-color: var(--bs-card-bg);
    background-clip: border-box;
    border: var(--bs-card-border-width) solid var(--bs-card-border-color);
    border-radius: var(--bs-card-border-radius);
}
.v2_71 {
  width: 1440px;
  height: 1024px;
  margin: 0;
  box-shadow: 3px 3px 10px rgba(0,0,0,0.2);
  background: rgba(255,255,255,1);
  opacity: 1;
  position: relative;
  overflow: hidden;
  justify-content: center;
}
.v2_72 {
  width: 262px;
  height: 204px;
  background: url("94bf2d4a22a2dc3b.png");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 64px;
  left: 530px;
  overflow: hidden;
}
.v3_80 {
  width: 100%;
  height: 120px;
  background: url("94bf2d4a22a2dc3b.png");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 293px;
  left: 0px;
  overflow: hidden;
}
.v2_73 {
  width: 1320px;
  height: 120px;
  background: rgba(0,218,166,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v3_79 {
  width: 1320px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 19px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 64px;
  opacity: 1;
  text-align: center;
}
.v2_74 {
  width: 293px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 454px;
  left: 324px;

  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 36px;
  opacity: 1;
  text-align: left;
}
.v2_75 {
  width: 141px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 665px;
  left: 324px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 36px;
  opacity: 1;
  text-align: left;
}
.v2_76 {
  width: 792px;
  height: 83px;
  padding: 15px 15px;
  background: rgba(217,217,217,0);
  opacity: 1;
  position: absolute;
  top: 543px;
  left: 324px;
  border: 1px solid rgba(217,217,217,1);
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: left;
}
.v2_77 {
  width: 792px;
  height: 83px;
  padding: 15px 15px;
  background: rgba(217,217,217,0);
  opacity: 1;
  position: absolute;
  top: 751px;
  left: 324px;
  border: 1px solid rgba(217,217,217,1);
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: left;
}
.v2_78 {
  width: 334px;
  height: 92px;
  background: rgba(0,146,111,1);
  opacity: 1;
  position: absolute;
  top: 892px;
  left: 530px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  color: rgba(255,255,255,1);
  font-size: 30px;
  opacity: 1;
  text-align: Medium;
}
</style>