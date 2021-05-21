
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="http://localhost:8080/vietnamtravel/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/69c409959f.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/right-col.css">
    <link rel="stylesheet" href="./public/css/content.css">    
    <link rel="stylesheet" href="./public/css/tour.css"> 
    <title>Vẻ đẹp Việt Nam</title>
</head>
<body>
    <?php 
    require_once "./mvc/views/blocks/header.php"
    ?>
    <main>
        <section class="about">
            <div class="container">
                <div class="row justify-content-between">
                    
                    <?php require_once "./mvc/views/details/".$data["detail"].".php"  ?>
                    
                    <div class="col-sm-3">
                    <?php require_once "./mvc/views/blocks/rightcol.php" ?>
                    </div>
                </div>
            </div>
        </section>   
        <?php require_once "./mvc/views/blocks/footer.php" ?>
    </main>
</body>
</html>
         