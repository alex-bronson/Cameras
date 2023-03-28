<?php

require_once('../config/db.php');

$name = $_POST['name'];

mysqli_query($db, "INSERT INTO categories (`id`, `name`) VALUES (NULL, '$name');");

header('Location: ../admin_panel.php');
