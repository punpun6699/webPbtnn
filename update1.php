<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('connect.php');
    if (isset($_POST['submit'])) {
        $sql = "UPDATE user SET 
                username = '".htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8')."',
                
                firstname = '".$_POST['firstname']."',
                lastname = '".$_POST['lastname']."',
                telephonenumber = '".$_POST['telephonenumber']."',
                roomnumber = '".$_POST['roomnumber']."',
                userlevel = '".$_POST['userlevel']."'
                WHERE id = '".mysqli_real_escape_string($conn, $_POST['id'])."' ";
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
            //header('Refresh:0; url= ../');
            header("location:data_pageIN.php");
        } else {
            echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
            //header('Refresh:0; url= ../form-update.php');
            header("location:data_pageIN.php");
        }
    }
    mysqli_close($conn);
?>