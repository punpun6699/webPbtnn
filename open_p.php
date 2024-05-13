<?php 
    session_start();
    $s=$_SESSION['userid'];
?>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="icona.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>จัดการระบบรับชำระค่าใช้งานไฟฟ้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="cardd container">
  <div class="v34_49"></div>
  <div class="v34_50"><div class="v34_51"></div><span class="v34_52">จัดการระบบรับชำระค่าใช้งานไฟฟ้า</span></div>
  <div><a class="v34_55" href="up_date_pa.php">ย้อนกลับ</a></div>
  <span class="v34_58"><?php 
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
        ?></span>
  <div><a class="v34_56" href="on_bl.php">เปิด</a></div>
  <div><a class="v34_57" href="off_bl.php">ปิด</a></div>
</div></body></html> <br/><br/>
<style>* {
  box-sizing: border-box;
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
.v34_48 {
  width: 100%;
  height: 1024px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v34_49 {
  width: 262px;
  height: 204px;
  background: url("94bf2d4a22a2dc3b.png");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 72px;
  left: 530px;
  overflow: hidden;
}
.v34_50 {
  width: 100%;
  height: 120px;
  background: url("94bf2d4a22a2dc3b.png");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 301px;
  left: 0px;
  overflow: hidden;
}
.v34_51 {
  width: 1320px;
  height: 120px;
  background: rgba(0,218,166,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v34_52 {
  width: 1320;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 19px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 64px;
  opacity: 1;
  text-align: center;
}
.v34_55 {
  width: 149px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 922px;
  left: 55px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 36px;
  opacity: 1;
  text-align: left;
}
.v34_58 {
  width: 206px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 465px;
  left: 550px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 36px;
  opacity: 1;
  text-align: left;
}
.v34_56 {
  width: 334px;
  height: 92px;
  background: rgba(0,146,111,1);
  opacity: 1;
  position: absolute;
  top: 558px;
  left: 970px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  color: rgba(255,255,255,1);
  font-size: 55px;
  opacity: 1;
  text-align: Center;
}
.v34_57 {
  width: 334px;
  height: 92px;
  background: rgba(0,146,111,1);
  opacity: 1;
  position: absolute;
  top: 558px;
  left: 25px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  color: rgba(255,255,255,1);
  font-size: 55px;
  opacity: 1;
  text-align: Center;
}
</style>