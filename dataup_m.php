<?php 
//$ro = strval($_SESSION['telephonenumber']);
session_start();
$pss=md5($_POST['ps']);
$psa=$_SESSION['passworda'];
//echo ($pss);
if ($pss==$psa){
$ro=$_SESSION['roomupa'];
?>
<h3><?php echo($ro); ?></h3>
<?php
    require_once('connect.php');
    $rooma=intval($v[$loopou]);
    $sql = "SELECT * FROM rt WHERE room = '$ro'";
    $result = mysqli_query($conn, $sql);
    $h =mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)):
      if (mysqli_num_rows($result) > 0){
          $r= $row['Kwh'];
          $rdate=$row['date'];
          $rtime=$row['time'];
      }
  endwhile; 
    $sql = "SELECT * FROM data1 WHERE room = '$ro'";
    $result = mysqli_query($conn, $sql);
    $h =mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)):
        if (mysqli_num_rows($result) > 0){
        if ($row['sa'] =="n"){
            $n= $row['Kwh'];
            $nid=$row['dataid'];
            $ndate=$row['date'];
            $ntime=$row['time'];
            ?>
            <?php
        }elseif ($row['sa'] =="o"){
            $o= $row['Kwh'];
            $oid=$row['dataid'];
            $odate=$row['date'];
            $otime=$row['time'];
            ?>
            <?php
        }}
        endwhile; 
        if (isset($_POST['submit'])) {
                    $sql = "UPDATE data1 SET 
                    Kwh = '$n',
                    date='$ndate',
                    time='$ntime'
                    WHERE dataid = '".mysqli_real_escape_string($conn, $oid)."' ";
            if (mysqli_query($conn, $sql)) {
               /* echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
                //header('Refresh:0; url= ../');
                header("user_main.php");*/
                ?><body>
                <h2>แก้ไขข้อมูลเสร็จเรียบร้อย</h2>
                </form>
                
                </body><?php
            } else {
               /* echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
                //header('Refresh:0; url= ../form-update.php');
                header("psch.php");*/
                ?><body>
                <h2>แก้ไขข้อมูลไม่สำเร็จ</h2>
                </form>
                
                </body><?php
            }}
        if (isset($_POST['submit'])) {
                    $sql = "UPDATE data1 SET 
                    Kwh = '$r',
                    date='$rdate',
                    time='$rtime'
                    WHERE dataid = '".mysqli_real_escape_string($conn, $nid)."' ";
            if (mysqli_query($conn, $sql)) {
                header("location:admin_main.php");
               /* echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
                //header('Refresh:0; url= ../');
                header("user_main.php");*/
                ?><body>
                <h2>แก้ไขข้อมูลเสร็จเรียบร้อย</h2>
                <div class="container" style="background-color:#f1f1f1">
                    <h2>
                    <a href="user_main.php" class="button">ตกลง</a>
                </h2>
                </div>
                </form>
                
                </body><?php
            } else {
               /* echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
                //header('Refresh:0; url= ../form-update.php');
                header("psch.php");*/
                ?><body>
                <h2>แก้ไขข้อมูลไม่สำเร็จ</h2>
                <div class="container" style="background-color:#f1f1f1">
                    <h2>
                    <a href="psch.php" class="button">ตกลง</a>
                </h2>
                </div>
                </form>
                
                </body><?php
            }}
        mysqli_close($conn);}
            else{
                
            }
        ?>
        <!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="icona.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.button {
  background-color: #041aaa;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

</style>
</head>
<body>
<h2>รหัสผ่านหรือหมายเลขโทรศัพท์ไม่ถูกต้อง</h2>
<div class="container" style="background-color:#f1f1f1">
    <h2>
    <a href="logout.php" class="button">ตกลง</a>
</h2>
</div>
</form>

</body>
</html>