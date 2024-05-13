<?php 
//$ro = strval($_SESSION['telephonenumber']);
?>
<?php
$x=0;
require_once('connect.php');
                    $sql = "UPDATE outdata SET 
                    data = '$x'
                    WHERE id = '2'";
            if (mysqli_query($conn, $sql)) {
               /* echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
                //header('Refresh:0; url= ../');
                header("user_main.php");*/
                header("location:data_pageIN.php");
                ?><body>
                <h2>แก้ไขข้อมูลเสร็จเรียบร้อย</h2>
                
                <a href="data_pageIN.php" class="button">ตกลง</a>
                </form>
                
                </body><?php
            } else {
               /* echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
                //header('Refresh:0; url= ../form-update.php');
                header("psch.php");*/
                ?><body>
                <h2>แก้ไขข้อมูลไม่สำเร็จ</h2>
                <a href="data_pageIN.php" class="button">ตกลง</a>
                </form>
                
                </body><?php
            }
        ?>