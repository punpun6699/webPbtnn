<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    session_start();
    $ro = $_SESSION['userid'];
    echo ($ro);
    require_once('connect.php');
    if ($_POST['submit']==$_POST['submit']){
    if (isset($_POST['submit'])) {
        if ($_POST['firstname']==$_POST['password']){
        $sql = "UPDATE user SET 
                password = '".htmlspecialchars(md5($_POST['password']), ENT_QUOTES, 'UTF-8')."'
                WHERE id = '".mysqli_real_escape_string($conn, $ro)."' ";
        if (mysqli_query($conn, $sql)) {
           /* echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
            //header('Refresh:0; url= ../');
            header("user_main.php");*/
            ?><body>
            <h2>แก้ไขข้อมูลเสร็จเรียบร้อย</h2>
            <div class="container" style="background-color:#f1f1f1">
                <h2>
                <a href="admin_main.php" class="button">ตกลง</a>
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
                <a href="pscha.php" class="button">ตกลง</a>
            </h2>
            </div>
            </form>
            
            </body><?php
        }}else{
       /* echo '<script> alert("รหัดผ่านไม่ตรงกัน")</script>';}
        header("psch.php");*/
        ?><body>
        <h2>รหัดผ่านไม่ตรงกัน</h2>
        <div class="container" style="background-color:#f1f1f1">
            <h2>
            <a href="pscha.php" class="button">ตกลง</a>
        </h2>
        </div>
        </form>
        
        </body><?php
    }}}
    mysqli_close($conn);
?>
