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

    <!-- Форма регистрации -->
    <div class="d-flex container mb-5 w-100 mt-5 justify-content-center">
        <form action="../vendor/signup.php" method="post" enctype="multipart/form-data">
            <label class="form-label">Имя</label>
            <input type="text" class="form-control" name="name" placeholder="Введите имя">
            <label class="form-label mt-1">Фамилия</label>
            <input type="text" class="form-control" name="surname" placeholder="Введите фамилию">
            <label class="form-label mt-1">Логин</label>
            <input type="text" class="form-control" name="login" placeholder="Введите свой логин">
            <label class="form-label mt-1">Почта</label>
            <input type="email" class="form-control" name="email" placeholder="Введите адрес своей почты">
            <label class="form-label mt-1">Изображение профиля</label>
            <input type="file" class="form-control" name="avatar">
            <label class="form-label mt-1">Пароль</label>
            <input type="password" class="form-control" name="password" placeholder="Введите пароль">
            <label class="form-label mt-1">Подтверждение пароля</label>
            <input type="password" class="form-control" name="password_confirm" placeholder="Подтвердите пароль">
            <button class="btn btn-primary mt-1 w-100" type="submit">Зарегистрироваться</button>
            <p>
                У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
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