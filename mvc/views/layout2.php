
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
    <link rel="stylesheet" href="./public/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/header.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/tour.css"> 
    <link rel="stylesheet" href="./public/css/comment.css">
    <link rel="stylesheet" href="./public/css/trangchu.css">   
    <title>Vẻ đẹp Việt Nam</title>
</head>
<body>
    <?php 
    require_once "./mvc/views/blocks/header.php"
    ?>
    
    <main>
        <section class="about">
            <div class="container"> 
                <?php require_once "./mvc/views/details/".$data["detail"].".php"  ?>
            </div>
        </section>   
        <?php require_once "./mvc/views/blocks/footer.php" ?>
    </main>
</body>
</html>
         