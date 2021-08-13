<!DOCTYPE html>
<html lang="ky">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Anonymous+Pro:700|M+PLUS+1p&display=swap&subset=cyrillic" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public_html/css/main.css">
    
    <title>Права Потребителей</title>
</head>
<body>

    <div id="video__you">
        <!-- <iframe width="100%" height="120%" src="https://www.youtube.com/embed/JTlALXKLHZ4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe> -->
    </div>
    
<header class="header">
    <div class="container">
        <div class="header__wrap">
            <div class="burg">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <a href="index.php" style="text-decoration:none;"><p>VERBRAUCHER</p></a>
            <div class="lang">
                <?php
                    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
                    if($lang_page == 'de') { ?>
                        <a href="../ky/index.php"><img src="./img/kyrgyzstan64.png" width="40" height="30" class="flags" alt=""></a><a href="../index.php"><img src="./img/russia64.png" width="40" height="30" class="flags" alt=""></a>
                    <?php } elseif($lang_page == 'ky') { ?>
                        <a href="../index.php"><img src="img/russia64.png" width="40" height="30" class="flags" alt=""></a><a href="../de/index.php"><img src="../de/img/germany64.png" width="40" height="30" alt=""></a>
                    <?php } else { ?>
                        <a href="ky/index.php"><img src="ky/img/kyrgyzstan64.png" width="40" height="30" class="flags" alt=""></a><a href="de/index.php"><img src="./de/img/germany64.png" width="40" height="30" alt=""></a>
                    <?php }
                ?>                    
            </div>
        </div>
    </div>
</header>