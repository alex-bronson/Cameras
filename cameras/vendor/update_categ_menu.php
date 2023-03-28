<?php
session_start();

if ($_SESSION['user']['id'] != '0') {
 header('Location: profile.php');
}
require_once '../config/db.php';
$id = $_GET['id'];
$category = mysqli_query($db, "SELECT * FROM `categories` WHERE id=$id");
$category = mysqli_fetch_assoc($category);

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
 <!-- Форма авторизации -->
 <div class="d-flex mx-auto w-50 mt-5 mb-5 flex-column" style="margin-bottom: 220px">
  <form action="./update_categ.php" method="post">
   <input type="hidden" name="id" value="<?php echo $category["id"] ?>">
   <label class="form-label">Категория:</label>
   <input class="form-control" type="text" name="name" placeholder="Введите категорию" value="<?php echo $category["name"] ?>">

   <button class="btn btn-primary mt-1 w-100" type="submit">Добавление категории:</button>
  </form>
 </div>
</body>

</html>