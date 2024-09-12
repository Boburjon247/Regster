<?php
global $config;
include 'libs/libs.php';
include  'config.php';
?>

<?php if ($_SESSION['login'] === 'active') {  ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
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
        <link rel="stylesheet" href="css/media.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="container-fluid admin_contener">
            <div class="container">
                <ul>
                    <li class="top_bar">
                        <span>id</span>
                        <span>Fish</span>
                        <span>Telefon</span>
                    </li>
                    <li>
                        <?php foreach (GetAll('user', 'false', 'asc') as $key => $user) : ?>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                <span><?= $user['id'] ?></span>
                                <span><?= $user['ism'] . ' ' . $user['fam'] ?></span>
                                <div class="button_admin">
                                    <span><?= $user['tel'] ?></span>
                                    <button name="deleteUser" type="submit"><i class="fa-solid fa-trash"></i></button>
                                </div>
                            </form>
                        <?php endforeach; ?>
                    </li>
                </ul>
            </div>
        </div>
    </body>

    </html>
    <?php

    if (isset(($_POST['deleteUser']))) {
        if (isset($_POST['id'])) {
            if (getItemsDelet('user', 'id', [$_POST['id']])) {
                reflesh(url_admin, '');
            } else {
                echo 'xato';
            }
        } else {
            echo 'xato';
        }
    }

    ?>
<?php } else {
    reflesh(url, '');
}
?>