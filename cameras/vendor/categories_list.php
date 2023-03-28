<?php
session_start();

// if ($_SESSION['user']) {
//  header('Location: profile.php');
// }
require_once '../config/db.php';
$categories = $db->query("SELECT * FROM `categories`");

?>

<!doctype html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>Список категорий</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="../css/style.css">
</head>



<body>
 <!-- Форма авторизации -->

 <div class="d-flex container w-100 mt-5 justify-content-center" style="margin-bottom: 220px">
  <table>
   <caption>Перечень категорий</caption>
   <tr>
    <th>ID</th>
    <th>Наименование категории</th>
    <th>Обновить</th>
    <th>Удалить</th>
   </tr>
   <?php foreach ($categories as $categ) : ?>
    <tr>
     <td><?php echo $categ["id"] ?></td>
     <td><?php echo $categ["name"] ?></td>
     <td><a href="./update_categ_menu.php?id=<?php echo $categ["id"] ?>&model=category">Update</a></td>
     <td><a style="color: red;" href="./delete.php?id=<?php echo $categ["id"] ?>&model=categories">Delete</a></td>
    </tr>
   <?php endforeach; ?>
  </table>
 </div>

</body>

</html>