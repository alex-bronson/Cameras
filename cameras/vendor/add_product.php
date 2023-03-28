<?php

session_start();
require_once '../config/db.php';

$full_name = $_POST['full_name'];
$category_id = $_POST['category'];
$matrix_res = $_POST['matrix_res'];
$matrix_size = $_POST['matrix_size'];
$video_quality = $_POST['video_quality'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$path = 'uploads/' . time() . $_FILES['image']['name'];


$query = "INSERT INTO `products` (`id`, `category_id`, `full_name`, `matrix_res`, `marix_size`, `video_quality`, `price`, `qty`, `image`)
VALUES (NULL, '$category_id', '$full_name', '$matrix_res', '$matrix_size', '$video_quality', '$price', '$qty', '$path')";

mysqli_query($db, $query);

if (!move_uploaded_file($_FILES['image']['tmp_name'], '../' . $path)) {
 $_SESSION['message'] = 'Ошибка при загрузке изображения';
 header('Location: ../admin_panel.php');
}

$_SESSION['message'] = 'Товар добавлен успешно!';
header('Location: ../admin_panel.php');
