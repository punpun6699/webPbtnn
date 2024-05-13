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
        $sql = "INSERT INTO `user` (`username`, `password`, `firstname`,`lastname`,`telephonenumber`,`roomnumber`,`userlevel`) 
            VALUES (
                    '".htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8')."', 
                    '".htmlspecialchars(md5($_POST['password']), ENT_QUOTES, 'UTF-8')."',
                    '".$_POST['firstname']."',
                    '".$_POST['lastname']."',
                    '".$_POST['telephonenumber']."',
                    '".$_POST['roomnumber']."',
                    '".$_POST['userlevel']."')";
        
        if (mysqli_query($conn, $sql)) {
            echo '<script> alert("เพิ่มข้อมูลเสร็จเรียบร้อย")</script>';
            header('Refresh:0; url= form-create.php');
        } else {
            echo '<script> alert("เพิ่มข้อมูลไม่สำเร็จ")</script>';
            header('form-create.php');
           
        }
    }
    mysqli_close($conn);
?>