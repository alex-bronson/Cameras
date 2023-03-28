<?php
require_once('../config/db.php');

$name = $_POST['name'];
$id = $_POST['id'];

$query = "UPDATE `categories` SET `name` = '$name' WHERE `categories`.`id` = $id";

mysqli_query($db, $query);

header('Location: ../admin_panel.php');
