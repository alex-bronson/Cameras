<?php
require_once '../config/db.php';
$model = $_GET['model'];
$id = $_GET['id'];

mysqli_query($db, "DELETE FROM `$model` WHERE `id` = $id");

header('Location: ../admin_panel.php');
