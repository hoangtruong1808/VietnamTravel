<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost:8080/vietnamtravel/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/dangki.css"/>
    <title>Vẻ đẹp Việt Nam</title>
</head>
<body>
    <div class="dangki">
        <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
        <form method="POST" action="./dangki/dangkiuser">
            <div>
                <label>Họ Tên:</label> 
                <div> <input type="form" name="ten" class="text"></div>
            </div>
            <div>
                <label>Email:</label> 
                <div> <input type="form" name="email" class="text"></div>
            </div>
            <div>
                <label>Tài khoản:</label> 
                <div> <input type="form" name="username" class="text"></div>
            </div>
            <div>
                <label>Mật khẩu:</label> 
                <div> <input type="password" name="password" class="text"></div>
            </div>
            <div>
                <label>Địa chỉ:</label>  
                <div> <input type="form" name="diachi" class="text"></div>
            </div>
            <div>
                <label>Điện thoại:</label>
                <div> <input type="form" name="dienthoai" class="text"></div>
            </div>
            <div>
                <input type="submit" name="btn-dangky" value="TẠO TÀI KHOẢN" id="button">
            </div>  
        </form>
        <?php if(isset($data["ketqua"]))
        {
            if ($data["ketqua"]=="true")
            {
                echo "<p>Đăng kí thành công!</p>";
                header('Location: ../trangchu');
            }
            else echo "<p>Đăng kí thất bại!</p>";
        }
        ?>
    </div>
</body>
</html>