<?php
require_once('../config/db.php');

$id = $_POST['id'];
$category_id = $_POST['category_id'];
$full_name = $_POST['full_name'];
$matrix_res = $_POST['matrix_res'];
$marix_size = $_POST['marix_size'];
$video_quality = $_POST['video_quality'];
$price = $_POST['price'];
$qty = $_POST['qty'];
$image = $_POST['image'];

$query = "UPDATE `products` SET `category_id` = '$category_id',
`text` = '$text',
`full_name` = '$full_name',
`matrix_res` = '$matrix_res',
`marix_size` = '$marix_size',
`video_quality` = '$video_quality',
`price ` = '$price',
`qty` = '$qty',
`image` = '$image',
 WHERE `products`.`id` = $id";

mysqli_query($db, $query);

header('Location: ../admin_panel.php');