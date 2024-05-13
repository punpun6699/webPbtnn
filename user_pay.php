<?php    session_start();
    $ro = strval($_SESSION['roomnumber']);
    require_once('connect.php');
    $sql = "SELECT * FROM data1 WHERE room = '$ro'";
    $result = mysqli_query($conn, $sql);
    ?>
<?php 
$n=0;
$o=0;
while ($row = mysqli_fetch_assoc($result)):
if (mysqli_num_rows($result) > 0){
if ($row['sa'] =="n"){
    $y= $row['Kwh'];
    $dn=$row['date'];
    $tn=$row['time'];
    $n=floatval($y);
}elseif ($row['sa'] =="o"){
    $x= $row['Kwh'];
    $do=$row['date'];
    $to=$row['time'];
    $o=floatval($x);
}}
endwhile; ?>
<?php
if (mysqli_num_rows($result) > 0){
  $sql = "SELECT * FROM outdata WHERE id = '1'"; 
  $result = mysqli_query($conn, $sql);  
  while ($row = mysqli_fetch_assoc($result)):
   $x=$row['data'];         
  endwhile; 
  $sql = "SELECT * FROM outdata WHERE id = '3'"; 
  $result = mysqli_query($conn, $sql);  
  while ($row = mysqli_fetch_assoc($result)):
  $ew=$row['data'];        
  endwhile; 
  $xa=floatval($ew); 
  $z=$n - $o;
  $q =$z*$x-$xa?>
      <?php mysqli_close($conn) ?>
      <?php
      }else{
      echo "ไม่มีข้อมูล";
      }
      ?>
<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="icona.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ชำระค่าไฟฟ้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><div class="cardd  container">
<div class="v49_49"></div>
<div class="v49_50"><div class="v49_51"></div><span class="v49_52">ชำระค่าไฟฟ้า</span></div>
<div><a href="https://forms.gle/hDxkyoJfJrXtySiF8" class="v49_53" target="_blank">ส่งหลักฐานการโอน</a></div>

<div class="v1000">วันที่จดเลขครั้งหลัง</div><div class="v2000">เลขอ่านครั้งหลัง</div>
<div class="v3000"><?php echo $dn?></div><div class="v4000"><?php echo $n ?></div>
<div class="v5000">วันที่จดเลขครั้งก่อน</div><div class="v6000">เลขอ่านครั้งก่อน</div>
<div class="v7000"><?php echo $do ?></div><div class="v8000"><?php echo $o ?></div>
<div class="v49_57"></div>
<div><a class="v49_58" href="user_main.php">ย้อนกลับ</a></div>
<span class="v49_61"><?php echo ("ห้อง : ".$ro); ?></span>
<span class="v49_63">บาท</span>
<span class="v49_62">จำนวนหน่วยที่ใช้</span><span class="v49_64"><?php echo $z  ?></span>
<span class="v49_65">ตัวคูณ</span><span class="v49_69"><?php echo $x  ?></span>
<span class="v49_66">ยอดเงิน</span><span class="v49_70"><?php echo ($z*$x); ?></span>
<span class="v49_67">ส่วนลด</span><span class="v49_71"><?php echo ($xa); ?></span>
<span class="v49_68">ยอดรวม</span><span class="v49_72"><?php echo ($q); ?></span>
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
.v1000 {
  width: 235px;
  height: 45px;
  background: rgba(255,133,61,1);
  opacity: 1;
  position: absolute;
  top: 477px;
  left: 35px;
  overflow: hidden;

  color: rgba(0,0,0,1);
  position: absolute;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: center;
}
.v2000 {
  width: 235px;
  height: 45px;
  background: rgba(255,133,61,1);
  opacity: 1;
  position: absolute;
  top: 477px;
  left: 273px;
  overflow: hidden;

  color: rgba(0,0,0,1);
  position: absolute;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: center;
}
.v3000 {
  width: 235px;
  height: 45px;
  background: rgba(255,133,61,0.5);
  opacity: 1;
  position: absolute;
  top: 525px;
  left: 35px;
  overflow: hidden;

  color: rgba(0,0,0,1);
  position: absolute;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: center;
}
.v4000 {
  width: 235px;
  height: 45px;
  background: rgba(255,133,61,0.5);
  opacity: 1;
  position: absolute;
  top: 525px;
  left: 273px;
  overflow: hidden;

  color: rgba(0,0,0,1);
  position: absolute;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: center;
}
.v5000 {
  width: 235px;
  height: 45px;
  background: rgba(77,169,162,1);
  opacity: 1;
  position: absolute;
  top: 699px;
  left: 35px;
  overflow: hidden;

  color: rgba(0,0,0,1);
  position: absolute;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: center;
}
.v6000 {
  width: 235px;
  height: 45px;
  background: rgba(77,169,162,1);
  opacity: 1;
  position: absolute;
  top: 699px;
  left: 273px;
  overflow: hidden;

  color: rgba(0,0,0,1);
  position: absolute;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: center;
}
.v7000 {
  width: 235px;
  height: 45px;
  background: rgba(77,169,162,0.5);
  opacity: 1;
  position: absolute;
  top: 747px;
  left: 35px;
  overflow: hidden;

  color: rgba(0,0,0,1);
  position: absolute;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: center;
}
.v8000 {
  width: 235px;
  height: 45px;
  background: rgba(77,169,162,0.5);
  opacity: 1;
  position: absolute;
  top: 747px;
  left: 273px;
  overflow: hidden;

  color: rgba(0,0,0,1);
  position: absolute;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: center;
}
.v49_46 {
  width: 100%;
  height: 1024px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v49_49 {
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
.v49_50 {
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
.v49_51 {
  width: 100%;
  height: 120px;
  background: rgba(0,218,166,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v49_52 {
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
.v49_53 {
  width: 340px;
  height: 92px;
  padding: 15px 15px;
  background: rgba(0,146,111,1);
  opacity: 1;
  position: absolute;
  top: 863px;
  left: 530px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  color: rgba(255,255,255,1);
  position: absolute;
  font-size: 35px;
  opacity: 1;
  text-align: Center;
}
.v4000_1000 {
  width: 235px;
  height: 45px;
  border: 1px solid #FFFFFF;
  background: rgba(255,133,61,1);
  opacity: 1;
  position: absolute;
  top: 477px;
  left: 293px;
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 35px;
  opacity: 1;
  position: absolute;
}
.v49_57 {
  width: 334px;
  height: 329px;
  background: url("qrp.png");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: absolute;
  top: 477px;
  left: 530px;
  overflow: hidden;
}
.v49_58 {
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
.v49_61 {
  width: 400px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 455px;
  left: 907px;
  font-family: Kodchasan;
  font-weight: Bold;
  font-size: 36px;
  opacity: 1;
  text-align: left;
}
.v49_63 {
  width: 100px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 514px;
  left: 1188px;
  font-family: Kodchasan;
  font-weight: Bold;
  font-size: 30px;
  opacity: 1;
  text-align: right;
}
.v49_64 {
  width: 100px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 569px;
  left: 1188px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: right;
}
.v49_72 {
  width: 100px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 824px;
  left: 1188px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: right;
}
.v49_69 {
  width: 100px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 624px;
  left: 1188px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: right;
}
.v49_70 {
  width: 100px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 695px;
  left: 1188px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: right;
}
.v49_71 {
  width: 100px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 758px;
  left: 1188px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: right;
}
.v49_62 {
  width: 229px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 569px;
  left: 907px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v49_65 {
  width: 90px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 632px;
  left: 907px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v49_66 {
  width: 111px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 695px;
  left: 907px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v49_67 {
  width: 100px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 758px;
  left: 907px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v49_68 {
  width: 116px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 824px;
  left: 907px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
</style>