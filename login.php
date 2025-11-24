<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=widthwidth, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

< form action="" method="post">
    <h1> ĐĂNG NHẬP </h1>
    <div> 
        <input type="text" name="username" placeholder="Ten dang nhap">
    </div>
     <div> 
        <input type="text" name="password" placeholder="mat khau">
     </div>
     <div>
        <input type="submit" value="dang nhap">
     </div>
</form>
<?php
$tenDangNhap = $_POST[' username'];
$matKhau = $_POST[ 'pass vord'];
echo $matKhau;
?>

</body>
</html>