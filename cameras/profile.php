<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require 'header.php' ?>

    <!-- Профиль -->
    <div style="
    display: flex;
    position: fixed;
    left: 20px;
    top: 300px;
    width: 25%;">
        <form class="user-data" style="
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;">
            <img src="../<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
            <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
            <p class="font-weight-light"><?= $_SESSION['user']['email'] ?>
            <p>
                <a href="../vendor/logout.php" class="logout mt-2 font-weight-bold">Выход</a>
        </form>
    </div>

    <?php require 'footer.php' ?>

</body>

</html>