<?php
require_once('connect.php');
          $sql = "SELECT * FROM outdata WHERE id = '2'"; 
          $result = mysqli_query($conn, $sql);  
          while ($row = mysqli_fetch_assoc($result)):
           $x=$row['data'];         
        endwhile; 
          if ($x=="1"){
            header("location:user_pay.php");
          }else{
            echo "ระบบยังไม่เปิด";?>
            <a href="user_main.php" class="button">ตกลง</a>
            <?php 
          }
          ?>