<?php 
//$ro = strval($_SESSION['telephonenumber']);
session_start();
$n = $_POST['telephonenumber'];
echo $n;
?>
<?php
require_once('connect.php');
        
                    $sql = "UPDATE outdata SET 
                    data = '$n'
                    WHERE id = '3'";
            if (mysqli_query($conn, $sql)) {
               /* echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
                //header('Refresh:0; url= ../');
                header("user_main.php");*/
                header("location:mi_page.php");
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
            }
        ?>