<?php
session_start();

// if ($_SESSION['user']) {
//  header('Location: profile.php');
// }
require_once '../config/db.php';
$products = $db->query("SELECT * FROM `products`");

?>

<!doctype html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>Список категорий</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css">
</head>

<style>
 /* внешние границы таблицы серого цвета толщиной 1px */
 table {
  border: 1px solid grey;
 }

 /* границы ячеек первого ряда таблицы */
 th {
  border: 1px solid grey;
 }

 /* границы ячеек тела таблицы */
 td {
  border: 1px solid grey;
 }
</style>

<body>
 <!-- Форма авторизации -->

 <div class="d-flex container w-100 mt-5 justify-content-center" style="margin-bottom: 220px">
  <table>
   <caption>Перечень товаров</caption>
   <tr>
    <th>ID</th>
    <th>ID категории</th>
    <th>Название</th>
    <th>Разрешение матрицы</th>
    <th>Размер матрицы</th>
    <th>Качество видеосъемки</th>
    <th>Цена</th>
    <th>Количество</th>
    <th>Путь к изображению</th>
    <th>Обновить</th>
    <th>Удалить</th>
   </tr>
   <?php foreach ($products as $product) : ?>
    <tr>
     <td><?php echo $product["id"] ?></td>
     <td><?php echo $product["category_id"] ?></td>
     <td><?php echo $product["full_name"] ?></td>
     <td><?php echo $product["matrix_res"] ?></td>
     <td><?php echo $product["marix_size"] ?></td>
     <td><?php echo $product["video_quality"] ?></td>
     <td><?php echo $product["price"] ?></td>
     <td><?php echo $product["qty"] ?></td>
     <td><?php echo $product["image"] ?></td>
     <td><a href="./update_product_menu.php?id=<?php echo $product["id"] ?>&model=category">Update</a></td>
     <td><a style="color: red;" href="./delete.php?id=<?php echo $product["id"] ?>&model=categories">Delete</a></td>
    </tr>
   <?php endforeach; ?>
  </table>
 </div>

</body>

</html>