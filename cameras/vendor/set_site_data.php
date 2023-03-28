<?php
require_once '../config/db.php';
$author = $_POST['author'];
$aboutus = $_POST['aboutus'];

$query = "UPDATE `site_data` SET `page_text` = '$author' WHERE `site_data`.`page_name`='author'";
mysqli_query($db, $query);

$query = "UPDATE `site_data` SET `page_text` = '$aboutus' WHERE `site_data`.`page_name`='aboutus'";
mysqli_query($db, $query);

header('Location: ../admin_panel.php');
