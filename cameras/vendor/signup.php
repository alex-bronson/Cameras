<?php

session_start();
require_once '../config/db.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {

    $check_user = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($check_user) > 0) {
        $_SESSION['message'] = 'Такой пользователь уже существует';
        header('Location: ../register.php');
    }

    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке сообщения';
        header('Location: ../register.php');
    }



    $password = md5($password);

    $query = "INSERT INTO `users` (`id`, `name`, `surname`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$name', '$surname', '$login', '$email', '$password', '$path')";

    mysqli_query($db, $query);

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    //print_r($query);
    header('Location: ../login.php');
} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../register.php');
}
