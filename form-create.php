<!--
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มผู้ใช้ </title>
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
                    <h3>เพิ่มผู้ใช้</h3>
                    <form class="row gy-4" action="create.php" method="POST">
                    
                        <div class="col-md-12">
                            <label for="name" class="form-label">username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">password</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="password" required>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">firstname</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname" required>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">lastname</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname" required>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">telephonenumber</label>
                            <input type="text" class="form-control" id="telephonenumber" name="telephonenumber" placeholder="telephonenumber" required>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">roomnumber</label>
                            <input type="text" class="form-control" id="roomnumber" name="roomnumber" placeholder="roomnumber" required>
                        </div>
                        <div class="col-md-12">
                            <label for="name" class="form-label">userlevel</label>
                            <select type="text" class="form-control" id="userlevel" name="userlevel" placeholder="userlevel" required>
                                <option value="Admin">Admin</option>
                                <option value="User" >User</option>
                            </select>
                        </div>
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