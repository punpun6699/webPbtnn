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
<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" type="image/x-icon" href="icona.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แก้ไขข้อมูลสมาชิก</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body><form><div class="cardd container"><div class="v36_59">
<div class="v36_62"></div>
<div class="v36_63"><div class="v36_64"></div><span class="v36_65">แก้ไขข้อมูลสมาชิก</span></div>
<div><a class="v39_46" href="form-create.php">เพิ่มรายชื่อผู้ใช้งาน</a></div>
<span class="v39_48" >ผู้ใช้งานทั้งหมด : <?php echo mysqli_num_rows($result) ?> คน </span>
<div class="v27_607"><div class="name"></div>
                    <div class="col-lg-10">
                    <div class="row justify-content-center">
                    <div class="table-responsive" >
                            <?php if (mysqli_num_rows($result) > 0): ?>
                            <table class="table table-bordered">
                                <thead>
                                <tr class="v100_100">
                                    <th>ห้อง</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>สถานะ</th>
                                    <th>จัดการ</th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                <?php $c=1; while ($row = mysqli_fetch_assoc($result)):?>
                                    <tr class="v100_200">
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
<div><a class="v39_47" href="admin_main.php">ย้อนกลับ</a></div></div>
<br/><br/></div></form>

    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php mysqli_close($conn) ?>
</body>
</html>
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
.v36_59 {
  width: 100%;
  height: 1024px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v36_62 {
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
.v36_63 {
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
.v36_64 {
  width: 1296px;
  height: 120px;
  background: rgba(0,218,166,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v36_65 {
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
.v39_46 {
  width: 300px;
  height: 70px;
  padding: 15px 15px;
  background: rgba(0,146,111,1);
  opacity: 1;
  position: absolute;
  top: 477px;
  left: 950px;
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
  text-align: Center;
}
.v39_47 {
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
.v39_48 {
  width: 400px;
  color: rgba(0,146,111,1);
  position: absolute;
  top: 489px;
  left: 55px;
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 36px;
  opacity: 1;
  text-align: left;
}
.v100_100{
  color: rgba(255,255,255,1);
  font-family: Kodchasan;
  font-weight: Medium;
  font-size: 36px;
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
  width: 1440px;
  height: 100%;
  background: rgba(79,157,151,0);
  opacity: 1;
  position: absolute;
  top: 563px;
  left: 35px;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
  overflow: hidden;
}
.name {
  color: #fff;
}
</style>