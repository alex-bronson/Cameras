<?php
session_start();
if (!$_SESSION['user']) {
 header('Location: /');
}
if ($_SESSION['user']['id'] != 0) {
 header('Location: /');
}
require_once './config/db.php';
$categories = $db->query("SELECT * FROM `categories`");
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
 <div class="container">
  <h3 class="section-title text-center justify-content-center text-uppercase mt-5 mb-5">Категории:</h3>

  <div class="d-flex mx-auto w-75 mt-5 mb-5 flex-column" style="margin-bottom: 220px">
   <form action="./vendor/add_category.php" method="post">
    <label class="form-label">Категория:</label>
    <input class="form-control" type="text" name="name" placeholder="Введите категорию">

    <button class="btn btn-primary mt-1 w-100" type="submit">Добавление категории:</button>
    <?php
    if ($_SESSION['message']) {
     echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>
   </form>
   <a href="./vendor/categories_list.php" style="color:red;" class="mt-2 text-center" role="button">Список категоий</a>
  </div>


  <h3 class="section-title text-center justify-content-center text-uppercase mt-5 mb-5">Добавление товара:</h3>

  <div class="d-flex mx-auto w-75 mb-5 mt-5 flex-column">
   <form action="./vendor/add_product.php" method="post" enctype="multipart/form-data">
    <label class="form-label">Наименование</label>
    <input type="text" class="form-control" name="full_name" placeholder="Введите наименование">

    <label class="form-label mt-1">Категория</label>
    <select class="form-select" aria-label="Default select example" name="category">
     <option selected>Выберите категорию</option>
     <?php foreach ($categories as $categ) : ?>
      <option value="<?php echo $categ["id"] ?>"><?php echo $categ["name"] ?></option>
     <?php endforeach; ?>
    </select>

    <label class="form-label mt-1">Разрешение матрицы:</label>
    <input type="text" class="form-control" name="matrix_res" placeholder="Введите разрешение матрицы">

    <label class="form-label mt-1">Размер матрицы:</label>
    <input type="text" class="form-control" name="matrix_size" placeholder="Введите размер матрицы">

    <label class="form-label mt-1">Качество видеосъемки:</label>
    <input type="text" class="form-control" name="video_quality" placeholder="Введите качество видеосъемки">

    <label class="form-label mt-1">Цена:</label>
    <input type="text" class="form-control" name="price" placeholder="Введите цену">

    <label class="form-label mt-1">Количество:</label>
    <input type="text" class="form-control" name="qty" placeholder="Введите количество товара">

    <label class="form-label mt-1">Изображение товара:</label>
    <input type="file" class="form-control" name="image">

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



  <div class="d-flex mx-auto w-75 mt-5 mb-5 flex-column" style="margin-bottom: 220px">
   <form action="./vendor/set_site_data.php" method="post">
    <label class="form-label">Страница об авторе:</label>
    <textarea class="form-control" type="text" name="author" placeholder="Введите страницу об авторе">
    </textarea>

    <label class="form-label">Страница о нас:</label>
    <textarea class="form-control" type="text" name="aboutus" placeholder="Введите страницу о нас">
    </textarea>

    <button class="btn btn-primary mt-1 w-100" type="submit">Изменить данные сайта:</button>
    <?php
    if ($_SESSION['message']) {
     echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>
   </form>
   <a href="./vendor/categories_list.php" style="color:red;" class="mt-2 text-center" role="button">Список категоий</a>
  </div>
 </div>
 <?php require 'footer.php' ?>

</body>

</html>