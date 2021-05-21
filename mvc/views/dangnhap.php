<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://localhost:8080/vietnamtravel/">
    <link rel="stylesheet" href="./public/css/dangnhap.css" />
    <title>Đăng nhập</title>
</head>
<body>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
    <div class="dangnhap">
        <h1>ĐĂNG NHẬP</h1>
        <form method="POST" action="./dangnhap/login">
            <div>Tài khoản: <input type="form" name="username" class="text"></div>
            <div>Mật khẩu : <input type="password" name="password" class="text"></div>
            <div><input name="btnlogin" type="submit" value="ĐĂNG NHẬP" id="button"></div>  
        </form>
        <div class="dangky"><i><a href="./trangchu">Quay trở về trang chủ</a> / <a href="./dangki">Đăng ký tài khoản</a></i></div>
        <p><?php echo $data["result"]?></p>
    </div>
</body>
</html>