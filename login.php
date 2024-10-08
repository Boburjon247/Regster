<?php
global $config;
include 'libs/libs.php';
include  'config.php';
$_SESSION['madal_login'] = ' ';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <link rel="stylesheet" href="<?= $config['base']['url'] ?>css/media.css">
    <link rel="stylesheet" href="<?= $config['base']['url'] ?>css/style.css">
</head>

<body>
    <?php
        echo $_SESSION['login'];
    ?>
    <div class="login">
        <svg id="mysvg"></svg>
        <div class="hero_text">
            <p>Kursga yozilish uchun shaxsingizni tasdiqlash</p>
            <form action="" class="login_form" method="post">
                <a href="">Logo</a>
                <ul>
                    <li>
                        <label for="">Ism</label>
                        <input name="ism" type="text" placeholder="Ism..">
                    </li>
                    <li>
                        <label for="">Familya</label>
                        <input name="fam" type="text" placeholder="Familya">
                    </li>
                    <li>
                        <label for="">Telefon</label>
                        <input name="tel" type="text" placeholder="Telefon" value="+998">
                    </li>
                    <li>
                        <button name="addUser" type="submit">
                            Saqlash
                        </button>
                    </li>
                </ul>
            </form>

            <?php
            if (isset($_POST['addUser'])) {
                if (
                    (isset($_POST['ism']) && !empty($_POST['ism'])) &&
                    (isset($_POST['fam']) && !empty($_POST['fam'])) &&
                    (isset($_POST['tel']) && !empty($_POST['tel']))
                ) {
            ?>

                    <?php foreach (GetAll('admin', 'false', 'asc') as $key => $user) : ?>
                        <?php
                        if ($_POST['ism'] === $user['ism'] && $_POST['fam'] === $user['fam']  && $_POST['tel'] === $user['tel']) {
                            reflesh(url_admin, '');
                            $_SESSION['login'] = 'active';
                        } else {
                            $aloqaInputGet = test_input([
                                $_POST['ism'],
                                $_POST['fam'],
                                $_POST['tel']
                            ]);
                            if (getInsert('user', ['ism', 'fam', 'tel'], $aloqaInputGet)) {
                                reflesh(url, '');
                                $_SESSION['madal_login'] = 'active';
                            } else {
                                echo 'xatolik';
                            }
                        }
                        ?>

                    <?php endforeach; ?>

            <?php } else {
                    echo 'xatolik';
                }
            } ?>


        </div>
    </div>
</body>



<script>
    var circleString = '<svg xmlns="http://www.w3.org/2000/svg">' +
        '<circle r="0" fill="rgba(0, 0, 0, 0)"></circle>' +
        '</svg>';
    var radiusAnimationString = '<svg xmlns="http://www.w3.org/2000/svg">' +
        '<animate attributeType="XML" ' +
        'attributeName="r" ' +
        'dur="7s" ' +
        'values="0; 5; 0" ' +
        'keyTimes="0; .5; 1" ' +
        'repeatCount="indefinite"/>' +
        '</svg>';
    var opacityAnimationString = '<svg xmlns="http://www.w3.org/2000/svg">' +
        '<animate attributeType="XML" ' +
        'attributeName="fill" ' +
        'dur="7" ' +
        'values="rgba(0, 0, 0, 0); rgba(71, 207, 115, 0.7); rgba(0, 0, 0, 0)" ' +
        'keyTimes="0; .5; 1" ' +
        'repeatCount="indefinite"/>' +
        '</svg>';
    var lineString = '<svg xmlns="http://www.w3.org/2000/svg">' +
        '<line stroke="rgba(71, 207, 115, 0.7)" stroke-width="1"/>' +
        '</svg>'

    var svg = document.querySelector('#mysvg');
    var wh, ww;

    var noOfCircles = 100;
    var activeRadius = 150;
    var circleRadius = 5;
    var circles = [];
    var parser = new DOMParser();

    var mouseX = -1;
    var mouseY = -1;
    var inRegion = false;
    var circlesNearby = [];
    var circlesFaraway = [];
    var lines = [];

    init();

    function init() {
        svg.addEventListener('mouseenter', start);
        svg.addEventListener('touchstart', start);
        svg.addEventListener('mouseleave', stop);
        svg.addEventListener('touchend', stop);
        svg.addEventListener('mousemove', move);
        svg.addEventListener('touchmove', move);

        function start() {
            inRegion = true;
        }

        function move(event) {
            mouseX = event.x;
            mouseY = event.y;
        }

        function stop() {
            inRegion = false;
            clearFrame();
        }

        createCircles();
    }

    function createCircles() {

        wh = window.innerHeight;
        ww = window.innerWidth;
        for (var i = 0; i < noOfCircles; i++) {
            var circleElement = parser.parseFromString(circleString, 'image/svg+xml').querySelector('svg > *');
            var radiusAnimation = parser.parseFromString(radiusAnimationString, "image/svg+xml").querySelector('svg > *');
            var opacityAnimation = parser.parseFromString(opacityAnimationString, "image/svg+xml").querySelector('svg > *');


            circleElement.setAttributeNS(null, 'cx', Math.floor(Math.random() * ww));
            circleElement.setAttributeNS(null, 'cy', Math.floor(Math.random() * wh));

            var animationDelay = Math.floor(Math.random() * 10) + 's';
            radiusAnimation.setAttributeNS(null, 'begin', animationDelay);
            opacityAnimation.setAttributeNS(null, 'begin', animationDelay);

            circleElement.appendChild(radiusAnimation);
            circleElement.appendChild(opacityAnimation);

            svg.appendChild(circleElement);

            circles.push(circleElement);
        }
    }

    window.requestAnimationFrame(draw);

    function draw() {

        if (inRegion) {
            clearFrame();
            segregateCircles();
            makeEffects();
        }

        window.requestAnimationFrame(draw);
    }

    function clearFrame() {
        for (var i = 0; i < lines.length; i++) {
            lines[i].remove();
        }
        lines = [];
        circlesNearby = [];

        for (var i = 0; i < circles.length; i++) {
            circles[i].setAttributeNS(null, 'stroke', '');;
        }
        circlesFaraway = [];
    }

    function segregateCircles() {
        for (var i = 0, n = circles.length; i < n; i++) {
            var current = circles[i];
            var circleX = current.getAttribute('cx');
            var circleY = current.getAttribute('cy');

            var dx = mouseX - circleX;
            var dy = mouseY - circleY;

            var distance = Math.sqrt(Math.pow(dx, 2) + Math.pow(dy, 2));
            if (distance < (activeRadius - circleRadius)) {
                circlesNearby.push(current);
            } else {
                circlesFaraway.push(current);
            }
        }
    }

    function makeEffects() {
        addBorders();
        drawLines();
    }

    function addBorders() {
        for (var i = 0;
            (i + 1) < circlesNearby.length; i++) {
            circlesNearby[i].setAttributeNS(null, 'stroke', 'yellow');
            circlesNearby[i].setAttributeNS(null, 'stroke-width', '5');
        }
        for (var i = 0;
            (i + 1) < circlesFaraway.length; i++) {
            circlesFaraway[i].setAttributeNS(null, 'stroke', '');
        }
    }

    function drawLines() {
        for (var i = 0; i < circlesNearby.length; i++) {
            var current = circlesNearby[i];
            var circleX = current.getAttribute('cx');
            var circleY = current.getAttribute('cy');

            var line = drawLine(mouseX, mouseY, circleX, circleY);

            svg.appendChild(line);
            lines.push(line);
        }
    }

    function drawLine(x1, y1, x2, y2) {
        var line = parser.parseFromString(lineString, 'image/svg+xml').querySelector('svg > *');

        line.setAttributeNS(null, 'x1', x1);
        line.setAttributeNS(null, 'y1', y1);
        line.setAttributeNS(null, 'x2', x2);
        line.setAttributeNS(null, 'y2', y2);

        return line;
    }
</script>

</html>