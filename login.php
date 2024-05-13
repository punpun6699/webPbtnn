<?php 

    session_start();

    if (isset($_POST['telephonenumber'])) {

        include('connection.php');

        $username = $_POST['telephonenumber'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM user WHERE telephonenumber = '$username' AND password = '$passwordenc'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];
            $_SESSION['roomnumber'] = $row['roomnumber'];
            $_SESSION['passworda'] = $row['password'];

            if ($_SESSION['userlevel'] == 'Admin') {
                header("Location: admin_main.php");
            }

            if ($_SESSION['userlevel'] == 'User') {
                header("Location: user_main.php");
            }
        } else {
            echo "<script>alert('User หรือ Password ไม่ถูกต้อง);</script>";
        }

    } else {
        header("Location: LOGINn.php");
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