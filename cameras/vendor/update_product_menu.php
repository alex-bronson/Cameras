<?php
session_start();

if ($_SESSION['user']['id'] != '0') {
 header('Location: profile.php');
}
require_once '../config/db.php';
$id = $_GET['id'];
$product = mysqli_query($db, "SELECT * FROM `products` WHERE id=$id");
$product = mysqli_fetch_assoc($product);
?>

<!doctype html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>Список категорий</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css">
</head>

<body>
 <div class="d-flex mx-auto w-75 mb-5 mt-5 flex-column">
  <form action="./update_product.php" method="post" enctype="multipart/form-data">
   <input type="hidden" name="id" value="<?php echo $product["id"] ?>">
   <label class="form-label">Наименование</label>
   <input type="text" class="form-control" name="full_name" placeholder="Введите наименование" value="<?php echo $product["full_name"] ?>">

   <label class="form-label mt-1">Категория</label>
   <input type="text" class="form-control" name="category_id" placeholder="Введите наименование" value="<?php echo $product["category_id"] ?>">

   <label class="form-label mt-1">Разрешение матрицы:</label>
   <input type="text" class="form-control" name="matrix_res" placeholder="Введите разрешение матрицы" value="<?php echo $product["matrix_res"] ?> ">

   <label class="form-label mt-1">Размер матрицы:</label>
   <input type="text" class="form-control" name="matrix_size" placeholder="Введите размер матрицы" value="<?php echo $product["marix_size"] ?> ">

   <label class="form-label mt-1">Качество видеосъемки:</label>
   <input type="text" class="form-control" name="video_quality" placeholder="Введите качество видеосъемки" value="<?php echo $product["video_quality"] ?>">

   <label class="form-label mt-1">Цена:</label>
   <input type="text" class="form-control" name="price" placeholder="Введите цену" value="<?php echo $product["price"] ?>">

   <label class="form-label mt-1">Количество:</label>
   <input type="text" class="form-control" name="qty" placeholder="Введите количество товара" value="<?php echo $product["qty"] ?>">

   <label class="form-label mt-1">Изображение товара(path):</label>
   <input type="text" class="form-control" name="image" value="<?php echo $product["image"] ?>">

   <button class="btn btn-primary mt-1 w-100" type="submit">Добавить товар</button>
   <?php
   if ($_SESSION['message']) {
    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
   }
   unset($_SESSION['message']);
   ?>
  </form>
  <br />
  <a href="./vendor/products_list.php" style="color:red;" class="mt-2 text-center" role="button">Список товаров</a>
 </div>
</body>

</html>