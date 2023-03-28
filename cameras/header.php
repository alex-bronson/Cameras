<header id="header">
 <div class="container d-flex justify-content-between align-items">
  <div class="logo">
   <a href="#">
    <img src="img/main_logo.jpg" width="100%" alt="" />
   </a>
  </div>
  <nav class="header-nav">
   <a href="index.php">Главная</a>
   <a href="aboutus.php">Контакты</a>
   <?php
   session_start();
   require_once './config/db.php';
   if (!$_SESSION['user']) {
    echo '<a href="login.php" >Войти</a>
    <br />';
   } else {
    if ($_SESSION['user']['id'] == '0') {
     echo '<a href="./admin_panel.php" style="color:red;">АДМИН</a>';
    } else {
     echo '<a href="profile.php" >Личный кабинет</a>';
    }
    echo '<a href="./vendor/logout.php" >Выйти</a>';
   }
   ?>
  </nav>
 </div>
</header>
<ul id="LeftMenu" class="w-25">
 <li>
  <b><a href="index.php">Главная страница</a></b>
 </li>
 <li>
  <a href="./index.php?category=Зеркальные_фотоаппараты">Зеркальные фотоаппраты</a>
 </li>
 <li>
  <a href="./index.php?category=Компактные_фотоаппараты">Компактные фотоаппраты</a>
 </li>
 <li>
  <a href="./index.php?category=Экшен_камеры">Экшен-камеры</a>
 </li>
 <li>
  <a href="aboutus.php">О фирме</a>
 </li>
 <li>
  <a href="about_author.php">Об авторе</a>
 </li>
</ul>