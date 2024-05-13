<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('connect.php');
    $sql = "SELECT * FROM rt";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="icona.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ข้อมูลการใช้ไฟฟ้าผู้เช่าหอพัก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body><div class="cardd container ">
      <div class="v25_3"><div class="v26_10"></div>
<div class="v26_11">
<div class="v26_12">
</div><span class="v26_13">ข้อมูลการใช้ไฟฟ้าผู้เช่าหอพัก</span></div>
<!--<div><a class="v26_15" href="http://localhost/big7/bt_1.3/bt_1.3/admin_main.php">ย้อนกลับ</a></div>-->
<span class="v26_16">ผู้ใช้ทั้งหมด <?php echo mysqli_num_rows($result) ?> คน</span>
<div class="v27_607"><div class="name"></div>
<!--<div class="name">-->
<?php 
                                    $sql = "SELECT * FROM data1";
                                    $result = mysqli_query($conn, $sql);
                                    $h =mysqli_num_rows($result);
                                    
                                if ($h>0){
                                    $v=[];$room=[];$ol=[]; $new=[];$rt=[];$nday;$oday;$rday;
                                    $num=0;
                                   /* for ($x=0;$x<=$h;$x++){
                                        echo $x['room'];
                                    }*/
                                    $sql = "SELECT * FROM rt";
                                $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)):
                                      
                                        $v[]= $row['room'];
                                        $bg = 0;
                                        array_push($room, $row['room']);
                                        array_push($rt, $row['Kwh']);
                                        $rday = $row['date'];
                                    endwhile;

                                    
                                for ($u=0;$u<count($room);$u++){
                                    
                                $sql = "SELECT * FROM data1 where $room[$u] ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)):
                                        $p=$row['sa'] ;
                                        if ($p=="o"){
                                            $e = $row['Kwh'];
                                            array_push($ol, $e);
                                            $oday = $row['date'];
                                        }else if ($p=="n"){
                                            $e = $row['Kwh'];
                                            array_push($new, $e);
                                            $nday = $row['date'];
                                        }
                                endwhile;
                                }}
                                        ?>
                                    <!-- Modal -->
   
                                <?php
                                  $sql = "SELECT * FROM outdata WHERE id = '1'"; 
                                  $result = mysqli_query($conn, $sql);  
                                  while ($row = mysqli_fetch_assoc($result)):
                                   $xi=$row['data']; 
                                  endwhile;
                                ?>
                        <div class="col-lg-10">
                        <div class="row justify-content-center">
                        <div class="table-responsive" >
                            <table class="table table-bordered">
                                <thead>
                                <tr class="v100_100">
                                    <th>ห้อง</th>
                                    <th>ปัจจุบัน <br/> <div class="v100_300"> (<?php echo ($rday)?> )</th></div>
                                    <th>เลขอ่านครั้งหลัง<br/> <div class="v100_300"> (<?php echo ($oday)?> )</th></div>
                                    <th>เลขอ่านครั้งก่อน <br/> <div class="v100_300"> (<?php echo ($nday)?> )</th></div>
                                    <th>หน่วยที่ใช้ไป</th>
                                    <th>ราคา</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php for ($o=0;$o<count($room);$o++){ ?>
                                    <tr class="v100_200">
                                        <td> <?php echo $room[$o] ?> </td>
                                        <td> <?php echo $rt[$o] ?> </td>
                                        <td> <?php echo $new[$o] ?> </td>
                                        <td> <?php echo $ol[$o] ?> </td>
                                        <td> <?php $j=$new[$o]-$ol[$o]; echo $j;  ?> </td>
                                        <td> <?php echo ($j*$xi); } ?> </td>
                                    </tr>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                </div><br><br><br>
</div></div>
<div><a class="v26_15" href="admin_main.php">ย้อนกลับ</a></div>
<br/><br/></div>
    <?php mysqli_close($conn) ?>
</body>
</html>
<style>* {
  box-sizing: border-box;
}
body {
  font-size: 14px;
}
main{
  width: 1920;
  height: 1080;
  border: 1px solid #c3c3c3;
  display: flex;
  justify-content: center;
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
.v25_3 {
  width: 100%;
  height: 1024px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v26_10 {
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
.v26_11 {
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
.v26_12 {
  width: 1296px;
  height: 120px;
  background: rgba(0,218,166,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
  
}
.v26_13 {
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
.v26_15 {
  width: 149px;
  color: rgba(0,146,111,1);
  position: absolute;
  left: 55px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 36px;
  opacity: 1;
  text-align: left;
}
.v26_16 {
  width: 298px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 475px;
  left: 55px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 36px;
  opacity: 1;
  text-align: left;
}
.v27_607 {
  width: 1440px;
  height: 100%;
  background: rgba(79,157,151,0);
  opacity: 1;
  position: absolute;
  top: 563px;
  left: 45px;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  overflow: hidden;
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
.v100_300{
  color: rgba(255,255,255,1);
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 14px;
  opacity: 1;
  text-align: center;
  background: rgba(79,157,151,1);
}
.name {
  color: #fff;
}
.name {
  color: #fff;
}
</style>