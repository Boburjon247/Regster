<?php
global $config;
include  'config.php';
include 'libs/libs.php';

$_SESSION['login'] = ' ';
?>
<!-- B.R.R -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web dasturlash kursi</title>
    <link rel="shortcut icon" href="<?= $config['base']['url'] ?>img/logo.png" type="image/x-icon">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=SUSE:wght@100..800&display=swap" rel="stylesheet">
    <!-- awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="<?= $config['base']['url'] ?>css/style.css">
    <link rel="stylesheet" href="<?= $config['base']['url'] ?>css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>

<body>

    <div class="madal_item <?=  $_SESSION['madal_login']?>">
        <p>So'ro'v qabul qilindi siz bilan bog'lanamiz😁</p>
    </div>

    <div class="navbar container-fluid">
        <div class="container ">
            <div class="logo">
                <a href="<?= url?>">
                    <img src="img/1.png" alt="">
                </a>
            </div>
            <div class="regster_user">
                <button>
                    <a href="<?= url_login ?>">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <p>Kursga yozilish</p>
                    </a>
                </button>
            </div>
        </div>
    </div>
    <!-- main -->
    <section class="container-fluid sectionContainerFluid">
        <div class="container sectionContainer">
            <div class="mainTitle">
                <span>Frontend Dasturlash Kursimizga Yoziling.</span>
                <a href="<?= url_login ?>" class="mainBtnRegstr">
                    <button class="mainBtnRegstr_btn">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <p>Kursga yozilish</p>
                    </button>
                </a>
            </div>
            <div class="mainImg">
                <img src="img/logo.png" alt="">
            </div>
            <div class="link_icon">
                <a href="https://instagram.com/abdunazarov_247">
                    <button>
                        <i class="fa-brands fa-instagram"></i>
                    </button>
                </a>
                <a href="https://t.me/Boburjon03">
                    <button>
                        <i class="fa-brands fa-telegram"></i>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <div class="container-fluid sectionContainerFluid2">
        <div class="container">
            <p class="topTitle">Kursada nimalar o'tiladi ?</p>
            <ul class="items">
                <li>
                    <div class="item_img">
                        <img src="img/html.png" alt="">
                    </div>
                    <span>HTML</span>
                </li>
                <li>
                    <div class="item_img">
                        <img src="img/css.png" alt="">
                    </div>
                    <span>CSS</span>
                </li>
                <li>
                    <div class="item_img">
                        <img src="img/scss.png" alt="">
                    </div>
                    <span>SCSS</span>
                </li>
                <li>
                    <div class="item_img">
                        <img src="img/git.png" alt="">
                    </div>
                    <span>Github</span>
                </li>
                <li>
                    <div class="item_img">
                        <img style="width: 55% !important;" src="img/js.png" alt="">
                    </div>
                    <span>JavaScript</span>
                </li>
                <li>
                    <div class="item_img">
                        <img src="img/bots.png" alt="">
                    </div>
                    <span>Bootstrap</span>
                </li>
                <li>
                    <div class="item_img">
                        <img style="width: 110% !important;" src="img/react.png" alt="">
                    </div>
                    <span>React</span>
                </li>
                <li>
                    <div class="item_img">
                        <img src="img/Tensorflow.png" alt="">
                    </div>
                    <span>Tensorflow JS</span>
                </li>


            </ul>
        </div>
    </div>

    <div class="container-fluid sectionContainerFluid2">
        <div class="container sectionContainer3">
            <ul class="course_about">
                <li>
                    <span>Kursmiz darajasi <b>o'rta.</b></span>
                </li>
                <li>
                    <span>Kursmiz <b>5</b> oyga mo‘ljallangan.</span>
                </li>
                <li>
                    <span>Kursmiz <b>offline.</b></span>
                </li>
                <li>
                    <span>Kursmiz haftada <b>3</b> marotaba (davomiyligi 2 soat).</span>
                </li>
                <li>
                    <span>Kurs davomida <b>9</b> ta kotta loyiha va <b>portfolio</b> qilinadi.</span>
                </li>
                <li>
                    <span>Kurs narxi <b>250 000</b> so'm </span>
                </li>
            </ul>
        </div>
    </div>
    <div class="container-fluid sectionContainerFluid2 footer">
        <div class="container">
            <p>Aloqa</p>
            <ul>
                <li>
                    <a href="">
                        <i class="fa-solid fa-phone"></i>
                        <span>+998976665979</span>
                    </a>
                </li>
                <li>
                    <a href="https://instagram.com/abdunazarov_247">
                        <i class="fa-brands fa-instagram"></i>
                        <span>abdunazarov_247</span>
                    </a>
                </li>
                <li>
                    <a href="https://t.me/Boburjon03">
                        <i class="fa-brands fa-telegram"></i>
                        <span>Boburjon03</span>
                    </a>
                </li>
                <li>
                    <a
                        href="https://www.google.co.ke/maps/place/Fergana+Koica/@40.399358,71.7582555,17z/data=!4m14!1m7!3m6!1s0x38bb9d5e7f58f2ab:0x1754c9b4a3d080b7!2sFergana+Koica!8m2!3d40.399358!4d71.7608304!16s%2Fg%2F11t298pllb!3m5!1s0x38bb9d5e7f58f2ab:0x1754c9b4a3d080b7!8m2!3d40.399358!4d71.7608304!16s%2Fg%2F11t298pllb?entry=ttu&g_ep=EgoyMDI0MDkwNC4wIKXMDSoASAFQAw%3D%3D">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Joylashuv</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
<?php
$_SESSION['madal_login'] = ' ';
?>

</html>