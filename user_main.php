<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="icona.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สวัสดี</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><div class="card container">
<div class="v45_47"></div>
<div class="v45_48"><div class="v45_49"></div><span class="v45_50"><?php session_start(); echo "สวัสดีคุณ ".$_SESSION['user']; ?></span></div>
<span class="v45_54"><?php 
                      if (!$_SESSION['userid']) {
                          header("Location: LOGIN.php");
                      } else {
                        echo "ห้อง ".$_SESSION['roomnumber'];
                      }
                    ?></span>
<div><a class="v45_55" href="index.php">ออกจากระบบ</a></div>
<div><a class="v45_56" href="ck.php">ชำระบิล</a></div>
<div><a class="v45_57" href="datauser.php">ข้อมูลการให้ไฟฟ้า</a></div>
<div><a class="v45_58" href="psch.php">แก้ไขรหัสผ่าน</a></div>
</div></body></html> <br/><br/>
<style>* {
  box-sizing: border-box;
}
body {
  font-size: 14px;
}
.v45_46 {
  width: 100%;
  height: 1024px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v45_47 {
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
.v45_48 {
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
.v45_49 {
  width: 1320;
  height: 120px;
  background: rgba(0,218,166,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v45_50 {
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
.v45_54 {
  width: 300px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 465px;
  left: 55px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 36px;
  opacity: 1;
  text-align: left;
}
.v45_55 {
  width: 293px;
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
.v45_56 {
  width: 334px;
  height: 92px;
  background: rgba(0,146,111,1);
  opacity: 1;
  position: absolute;
  top: 556px;
  left: 25px;
  padding: 15px 15px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  color: rgba(255,255,255,1);
  font-size: 35px;
  opacity: 1;
  text-align: Center;
}
.v45_57 {
  width: 334px;
  height: 92px;
  background: rgba(0,146,111,1);
  opacity: 1;
  position: absolute;
  top: 556px;
  left: 500px;
  padding: 15px 15px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  color: rgba(255,255,255,1);
  font-size: 35px;
  opacity: 1;
  text-align: Center;
}
.v45_58 {
  width: 334px;
  height: 92px;
  background: rgba(0,146,111,1);
  opacity: 1;
  position: absolute;
  top: 556px;
  left: 970px;
  padding: 15px 15px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  color: rgba(255,255,255,1);
  font-size: 35px;
  opacity: 1;
  text-align: Center;
}