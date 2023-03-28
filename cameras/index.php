<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Home page</title>
  <link rel="stylesheet" href="./css/style.css" />
  <?php
  require_once './config/db.php';
  session_start();
  $products = fetch_products_by_category($_GET['category']);
  ?>
</head>

<body>
  <?php require 'header.php' ?>

  <section class="standart-section products-wrap">
    <div class="container">
      <h3 class="section-title text-center text-uppercase">Каталог моделей</h3>
      <div class="row d-flex flex-wrap">

        <?php
        foreach ($products as $product) : ?>

          <div class="col-4">
            <div class="product-item">
              <a href="./product_view.php?id=<?php echo $product["id"] ?>" class="cours-img display-block text-center">
                <img src="<?php echo $product["image"] ?>" alt="cours angular" />
              </a>
              <h6 class="product-title">
                <a href="#"><?php echo $product["full_name"] ?></a>
              </h6>
              <div class="product-feature d-flex">
                <span>Разрешение матрицы:</span>
                <span><?php echo $product["matrix_res"] ?></span>
              </div>
              <div class="product-feature d-flex">
                <span>Размер<br />матрицы:&emsp;&emsp;</span>
                <span class="feature-value"><?php echo $product["marix_size"] ?></span>
              </div>
              <div class="product-price text-right">
                <span><?php echo $product["price"] ?>руб.</span>
              </div>
            </div>
          </div>

        <?php endforeach; ?>

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>
  <!-- /.standart-section courses-wrap -->
  <?php require 'footer.php' ?>
  <!-- /.standart-section about-us -->
  <!-- </main> -->
</body>

</html>