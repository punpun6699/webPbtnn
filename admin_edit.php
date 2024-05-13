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

button:hover {
  opacity: 0.8;
}

.datause {
    background-color: #3df31d;
  color: rgb(0, 0, 0);
  padding: 14px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.vi {
    background-color: #e207f1;
  color: rgb(0, 0, 0);
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}
/*รูป*/
img.avatar {
  width: 20%;
  border-radius: 30%;
}

.container {  
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
body{
			font-family: 'Mitr', sans-serif;
		}
</style>
</head>
<body>

<h2>admin_main</h2>
<h3>
<?php
$s = "001";  //บอก room number กับ user
echo "adimn number ".$s;  // print room number
?></h3>

  <div class="imgcontainer">
    <img src="IMG_1750.jpg" alt="Avatar" class="avatar">
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <h2>
    <a href="big3" class="button">แก้ไขข้อมูลผู้ใช้</a>
</h2>
<a href="admin_main.php">ย้อนกลับ</a>
  </div>
</form>
</body>
</html>