<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Home page</title>
  <link rel="stylesheet" href="css/style.css" />
  <?php
  require_once './config/db.php';
  $aboutus = get_page_data("aboutus");
  ?>
</head>

<body>
  <?php require 'header.php' ?>

  <!-- <p class="container text-centr description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, sapiente perspiciatis. Consequatur dolore eaque magnam repudiandae assumenda totam, dicta dolorem deleniti maiores porro voluptas tempore omnis quod non maxime fuga.</p>

  <div class="map container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1906.1745806034298!2d39.706831739816366!3d47.28648187710356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3b7fc668e1823%3A0xcd82e3247da12966!2z0LEt0YAg0JrQvtC80LDRgNC-0LLQsCwgOSDQutC-0YDQv9GD0YEgMSwg0KDQvtGB0YLQvtCyLdC90LAt0JTQvtC90YMsINCg0L7RgdGC0L7QstGB0LrQsNGPINC-0LHQuy4sIDM0NDA5Mg!5e1!3m2!1sru!2sru!4v1632421053617!5m2!1sru!2sru" width="700" height="550" allowfullscreen="" loading="lazy"></iframe>
  </div> -->
  <?php echo $aboutus["page_text"] ?>
  <!-- /.standart-section about-us -->
  <?php require 'footer.php' ?>
  <!-- </main> -->
</body>

</html>