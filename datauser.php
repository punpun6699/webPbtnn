<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    session_start();
    $ro = strval($_SESSION['roomnumber']);
    require_once('connect.php');
    $sql = "SELECT * FROM data1 WHERE room = '$ro'";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="icona.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ข้อมูลการใช้ไฟฟ้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><div class="cardd container"><div class="v53_80">
<div class="v53_83"></div>
<div class="v53_84"><div class="v53_85"></div><span class="v53_86">ข้อมูลการใช้ไฟฟ้า</span></div>
<div><a class="v54_87" href="user_main.php">ย้อนกลับ</a></div>
<span class="v54_88"><?php echo ("ห้อง ".$ro);?></span>
<div class="v27_607">
        <div class="col-lg-10">
        <div class="row justify-content-center">
        <div class="table-responsive" >
        <table class="table table-bordered">
                                <thead>
                                <tr class="v100_100">
                                    <th>ห้อง</th>
                                    <th>Kwh</th>
                                    <th>วัน</th>
                                    <th>เวลา</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $n=0;
                                $o=0;
                                while ($row = mysqli_fetch_assoc($result)):
                                    if ($row['sa'] == "o"){
                                    ?>
                                    <tr class="v100_200">
                                        
                                        <td> <?php echo $row['room'] ?> </td>
                                        <td> <?php echo $row['Kwh'] ?> </td>
                                        <td> <?php echo $row['date'] ?> </td>
                                        <td> <?php echo $row['time']  ?> </td>

                                    </tr>
                                    <!-- Modal -->
                                <?php }
                                if (mysqli_num_rows($result) > 0){
                                if ($row['sa'] =="o"){
                                    $y= $row['Kwh'];
                                    $tn=$row['time'];
                                    $dn=$row['date'];
                                    $n=floatval($y);
                                }}
                            endwhile; 

                            $sql = "SELECT * FROM rt WHERE room = '$ro'";
                            $result = mysqli_query($conn, $sql);
                            $h =mysqli_num_rows($result);
                            while ($row = mysqli_fetch_assoc($result)):
                              if (mysqli_num_rows($result) > 0){
                                  $r= $row['Kwh'];
                                  $rdate=$row['date'];
                                  $rtime=$row['time'];
                                  $o=floatval($r);
                                  ?>
                                  <tr class="v100_200">
                                  <td> <?php echo $row['room'] ?> </td>
                                        <td> <?php echo $row['Kwh'] ?> </td>
                                        <td> <?php echo $row['date'] ?> </td>
                                        <td> <?php echo $row['time']  ?> </td>
                                        </tr>
                                  <?php
                              }
                          endwhile; 
                            ?>
                                </tbody>
                            </table>
            </div>
        </div>
    </div>
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php mysqli_close($conn) ?>
</div>
<?php   
        if (mysqli_num_rows($result) > 0){
            $z=$o - $n;?>
            <span class="v54_89">ค่าไฟครั้งก่อนในวันที่</span>
            <span class="v54_97"><?php echo ($dn); ?></span>
            <span class="v54_98">เวลา <?php echo ($tn); ?></span>
            <span class="v54_99"> > <?php echo ($n); ?></span>
            <span class="v54_100">หน่วย</span>
                    <span class="v54_90">ค่าไฟปัจจุบันในวันที่</span>
                    <span class="v54_102"><?php echo ($rdate); ?></span>
                    <span class="v54_103">เวลา <?php echo ($rtime); ?></span>
                    <span class="v54_104"> > <?php echo ($o); ?></span>
                    <span class="v54_105">หน่วย</span>
                            <span class="v54_91">จำนวนที่ใช้ไป </span>
                            <span class="v54_93">> <?php echo ($z); ?></span>
                            <span class="v54_94">หน่วย</span>
                                    <span class="v54_92">รวมเป็นเงิน </span>
                                    <span class="v54_95">> <?php echo ($z*7); ?></span>
                                    <span class="v54_96">บาท</span>
                        <?php
                    }else{
                            echo "ไม่มีข้อมูล";
                        }
                        ?>
</div></div></body></html> <br/><br/>
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
.v53_80 {
  width: 100%;
  height: 1100px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v53_83 {
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
.v53_84 {
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
.v53_85 {
  width: 100%;
  height: 120px;
  background: rgba(0,218,166,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v53_86 {
  width: 1296px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 19px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 64px;
  opacity: 1;
  text-align: center;
}
.v54_87 {
  width: 200px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 1050px;
  left: 10px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 36px;
  opacity: 1;
  text-align: left;
}
.v54_88 {
  width: 181px;
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
.v54_89 {
  width: 285px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 783px;
  left: 55px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_97 {
  width: 210px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 783px;
  left: 350px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_98 {
  width: 300px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 783px;
  left: 540px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_99 {
  width: 120px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 783px;
  left: 755px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_100 {
  width: 81px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 783px;
  left: 900px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_102 {
  width: 210px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 848px;
  left: 350px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_103 {
  width: 300px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 848px;
  left: 540px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_104 {
  width: 120px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 848px;
  left: 755px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_105 {
  width: 81px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 848px;
  left: 900px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_91 {
  width: 230px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 913px;
  left: 55px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_94 {
  width: 100px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 913px;
  left: 470px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_96 {
  width: 61px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 978px;
  left: 470px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_93 {
  width: 200px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 913px;
  left: 280px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_95 {
  width: 200px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 978px;
  left: 280px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_92 {
  width: 200px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 978px;
  left: 55px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v54_90 {
  width: 274px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 848px;
  left: 55px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 30px;
  opacity: 1;
  text-align: left;
}
.v100_100{
  color: rgba(255,255,255,1);
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 35px;
  opacity: 1;
  text-align: center;
  border: 1px solid #00926F;
  background: rgba(79,157,151,1);
}
.v100_200{
  border: 1px solid #00926F;
  color: rgba(79,157,151,1);
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 25px;
  opacity: 1;
  text-align: center;
}
.v27_607 {
  width: 100%;
  height: 100%;
  background: rgba(79,157,151,0);
  opacity: 1;
  position: absolute;
  top: 520px;
  left: 120px;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  overflow: hidden;
}
</style>
