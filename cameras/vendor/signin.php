<?php

session_start();
require_once '../config/db.php';

$login = $_POST['login'];
$password = md5($_POST['password']);

if ($login == 'admin' && $_POST['password'] == '0000') {
    $_SESSION['user'] = [
        "id" => 0,
        "full_name" => 'admin',
    ];
    header('Location: ../admin_panel.php');
}

$check_user = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email']
    ];

    print_r($user);

    header('Location: ../profile.php');
} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../login.php');
}
?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>