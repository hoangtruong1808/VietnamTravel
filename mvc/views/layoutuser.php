
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost:8080/vietnamtravel/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/69c409959f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/taikhoan.css">
    <script type="text/javascript" src="./public/ckeditor/ckeditor.js"></script>
    <title>Vẻ đẹp Việt Nam</title>
</head>
<body>
    <?php 
    require_once "./mvc/views/blocks/header.php"
    ?>
    <main>
        <section class="about">
            <div class="container">
                <div class="row">
                    <h1>Trang cá nhân</h1>
                </div>
                <div class="row">
                    <div class="col-sm-4">   
                        <ul class="danhmuc">
                            <li> <a href="./taikhoan/donhang"> Đơn hàng </a> </li>
                            <li> <a href="./taikhoan/thongtintaikhoan"> Tài khoản </a> </li>
                            <li> <a href="./taikhoan/lichsudat"> Lịch sử đặt </a></li>
                            <li> <a href="./taikhoan/quanlybaiviet"> Quản lý bài viết </a> </li>
                            <li> <a href="./taikhoan/quanlytour/1"> Quản lý tour </a> </li>
                            <li> <a href="./taikhoan/quanlykhachsan/1"> Quản lý khách sạn </a> </li>
                            <li> <a href="./taikhoan/quanlydiadiem/1"> Quản lý địa điểm </a> </li>
                            <li> <a href="./dangnhap/dangxuat"> Đăng xuất</a> </li>
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <?php require_once "./mvc/views/details/".$data["detail"].".php"  ?>
                    </div>
                </div>
            </div>
        </section>   
        <?php require_once "./mvc/views/blocks/footer.php" ?>
    </main>
</body>
</html>
         