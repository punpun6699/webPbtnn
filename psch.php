<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('connect.php');
    session_start();
    $ro = $_SESSION['userid'];
    //echo ($ro);
    $sql = "SELECT * FROM user  WHERE id = '".mysqli_real_escape_string($conn, $ro)."' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<form action="update.php" method="POST">
<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="icona.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เปลี่ยนรหัสผ่าน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><div class="cardd container">
<div class="v56_107"></div>
<div class="v56_108"><div class="v56_109"></div><span class="v56_110">เปลี่ยนรหัสผ่าน</span></div>
<span class="v56_111">รหัสผ่านใหม่</span>
<span class="v56_112">ยืนยัน รหัสผ่าน</span>
<div><input type="text" class="v56_113" id="password" name="password" placeholder="new password" required></class></div>
<div><input type="text" class="v56_114" id="firstname" name="firstname" placeholder="confirm password" required></class></div>
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" >
<div><input type="submit" class="v56_115" name="submit" value="บันทึก"></div>
<div><a class="v56_116" href="user_main.php">ย้อนกลับ</a></div>
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
.v56_106 {
  width: 100%;
  height: 1024px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v56_107 {
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
.v56_108 {
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
.v56_109 {
  width: 100%;
  height: 120px;
  background: rgba(0,218,166,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v56_110 {
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
.v56_111 {
  width: 206px;
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
.v56_112 {
  width: 251px;
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
.v56_113 {
  width: 792px;
  height: 83px;
  background: rgba(217,217,217,0);
  opacity: 1;
  position: absolute;
  top: 543px;
  left: 324px;
  padding: 15px 15px;
  border: 1px solid rgba(217,217,217,1);
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: left;
}
.v56_114 {
  width: 792px;
  height: 83px;
  background: rgba(217,217,217,0);
  opacity: 1;
  position: absolute;
  top: 751px;
  left: 324px;
  padding: 15px 15px;
  border: 1px solid rgba(217,217,217,1);
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: left;
}
.v56_115 {
  width: 334px;
  height: 92px;
  background: rgba(0,146,111,1);
  opacity: 1;
  position: absolute;
  top: 892px;
  left: 500px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  overflow: hidden;

  font-family: Kodchasan;
  font-weight: Medium;
  color: rgba(255,255,255,1);
  font-size: 40px;
  opacity: 1;
  text-align: Medium;
}
.v56_116 {
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
</style>