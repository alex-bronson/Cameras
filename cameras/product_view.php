<?php
session_start();
require_once './config/db.php';
$product = get_product_by_id($_GET['id']);
?>

<!doctype html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>Авторизация и регистрация</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <link rel="stylesheet" href="css/style.css">
</head>

<body>
 <?php require 'header.php' ?>

 <div class="d-flex container w-50 mt-3 justify-content-center flex-column" style="margin: auto; font-size: 20px;">
  <h3 class="mt-2 mb-2"><?php echo $product["full_name"] ?></h3>
  <img src="<?php echo $product["image"] ?>" alt="">
  <div class="product-feature d-flex justify-content-between mt-2 font-weight-bold">
   <span>Разрешение матрицы:</span>
   <span><?php echo $product["matrix_res"] ?></span>
  </div>
  <div class="product-feature d-flex justify-content-between mt-2 font-weight-bold">
   <span>Размер матрицы:</span>
   <span class="feature-value"><?php echo $product["marix_size"] ?></span>
  </div>
  <div class="product-price text-right mt-3 mb-5">
   <span><?php echo $product["price"] ?>руб.</span>
  </div>
 </div>

 <?php require 'footer.php' ?>

</body>

</html>