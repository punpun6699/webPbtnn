<?php 
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('connect.php');
    if(!isset($_GET['id'])){
        header("location:LOGINn.php");
        exit();
    }
    $sql = "SELECT * FROM user  WHERE id = '".mysqli_real_escape_string($conn, $_GET['id'])."' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลผู้ใช้</title>
    <!-- favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="icona.ico">
    <!-- Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .flex-container {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #F5F8FF;
        }
    </style>
</head>
<body>
<div class="flex-container">
    <div class="container">
        <div class="shadow rounded p-5 bg-body h-100">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 class="mb-5">แก้ไขข้อมูลผู้ใช้</h1>
                    
                    <form class="row gy-4" action="update1.php" method="POST">
                        <div class="col-md-12">
                            <label for="name" class="form-label">username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="username" value="<?php echo $row['username'] ?>"required>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">firstname</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname" value="<?php echo $row['firstname'] ?>"required>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">lastname</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname" value="<?php echo $row['lastname'] ?>"required>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">telephonenumber</label>
                            <input type="text" class="form-control" id="telephonenumber" name="telephonenumber" placeholder="telephonenumber" value="<?php echo $row['telephonenumber'] ?>"required>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">roomnumber</label>
                            <input type="text" class="form-control" id="roomnumber" name="roomnumber" placeholder="roomnumber" value="<?php echo $row['roomnumber'] ?>"required>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">userlevel</label>
                            <select name="userlevel" id="userlevel" class="form-control" required>
                                <option value="Admin" <?php if($row['userlevel'] == "Admin") echo "selected" ?>>Admin</option>
                                <option value="User" <?php if($row['userlevel'] == "User") echo "selected" ?>>User</option>
                            </select>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" >
                        <div class="col-12">
                            <button type="submit" name="submit" class="btn btn-primary d-block mx-auto">บันทึกการเปลี่ยนแปลง</button>
                        </div>
                    </form>
                    <a href="data_pageIN.php">ย้อนกลับ</a>
                </div>  
            </div>
        </div>
    </div>
</div>

    <!-- Javascript -->
    <!-- Bootstrap5 แบบ bundle คือการนำ Popper มารวมไว้ในไฟล์เดียว -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>