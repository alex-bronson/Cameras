<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Home page</title>
  <link rel="stylesheet" href="css/style.css" />
  <?php
  require_once './config/db.php';
  $author = get_page_data("author");
  ?>
</head>

<body>
  <?php require 'header.php' ?>

  <!-- <p class="container text-centr description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, sapiente perspiciatis. Consequatur dolore eaque magnam repudiandae assumenda totam, dicta dolorem deleniti maiores porro voluptas tempore omnis quod non maxime fuga.</p> -->
  <?php echo $author["page_text"] ?>

  <!-- /.standart-section about-us -->
  <?php require 'footer.php' ?>
  <!-- </main> -->
</body>

</html>