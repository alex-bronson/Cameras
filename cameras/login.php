<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
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
    <!-- Форма авторизации -->

    <div class="d-flex container w-100 mt-5 justify-content-center" style="margin-bottom: 220px">
        <form action="vendor/signin.php" method="post">
            <label class="form-label">Логин</label>
            <input class="form-control" type="text" name="login" placeholder="Введите свой логин">

            <label class="form-label mt-1">Пароль</label>
            <input class="form-control mt-1" type="password" name="password" placeholder="Введите пароль">

            <button class="btn btn-primary mt-1 w-100" type="submit">Войти</button>
            <p>
                У вас нет аккаунта? - <a href="./register.php">зарегистрируйтесь</a>!
            </p>
            <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            ?>
        </form>
    </div>

    <?php require 'footer.php' ?>

</body>

</html>