<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/69c409959f.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="./css/tourdulich.css">   
         <title>VietnamTravel</title>
         <link rel="stylesheet" type="text/css" href="ddsmoothmenu.css" />
         <link rel="stylesheet" type="text/css" href="ddsmoothmenu-v.css" />  
    </head>
<body>
    <div class="container-fluid">
        <div class="row">
               
                <div class="col-sm-6">
                    <div class="chitietkhachsan1"> 
                        <h1><?php echo $data["chitietkhachsan"]["ten"]?></h1>
                        <img src="public/image/<?php echo $data["chitietkhachsan"]["urlhinh"]?>"/>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="chitietkhachsan2">
                        <div class="giaphong">Giá: <b><?php echo number_format($data["chitietkhachsan"]["gia"],0,',','.')?></b></div>
                        <div class="star">
                            <?php for ($i=1; $i<=$data["chitietkhachsan"]["chatluong"]; $i++)
                                {
                                    echo '<i class="fas fa-star"></i>';
                                }
                            ?>
                        </div>
                        <div class="thanhpho"><i class="fas fa-map-marker-alt"></i> <?php echo $data["chitietkhachsan"]["thanhpho"]?></b></div>
                        <div class="diachi"><i class="fas fa-location-arrow"></i> <?php echo $data["chitietkhachsan"]["diachi"]?></b></div>
                        <div class="tiennghi"><i class="fas fa-concierge-bell"></i> <?php echo $data["chitietkhachsan"]["tiennghi"]?></b></div>
                        <div class="chitiet">
                            <h2>Chi tiết</h2>
                            <?php echo $data["chitietkhachsan"]["gioithieu"]?>
                        </div>
                        <div>
                            <a href="./taikhoan/datkhachsan/<?php echo $data["chitietkhachsan"]["makhachsan"]?>"><button class="btn-datkhachsan">Đặt ngay</button></a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>