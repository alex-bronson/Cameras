<?php

$dbhost = "localhost";
$dbname = "camera_store";
$username = "root";


$db = mysqli_connect($dbhost, $username, '', $dbname);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function get_category_id_by_name($name)
{
 global $db;
 $category = mysqli_query($db, "SELECT `id` FROM `categories` WHERE `name`='$name'");
 $category = mysqli_fetch_assoc($category);
 return $category["id"];
}

function get_product_by_id($id)
{
 global $db;
 $id = mysqli_real_escape_string($db, $id);
 $product = $db->query("SELECT * FROM `products` WHERE id=$id");
 $product = mysqli_fetch_assoc($product);
 return $product;
}

function fetch_products_by_category($category)
{
 global $db;
 $products = null;
 if ($category) {
  $category = str_replace("_", " ", $category);
  $category_id = get_category_id_by_name($category);
  $products = $db->query("SELECT * FROM `products` WHERE `category_id`=$category_id");
 } else {
  $products = $db->query("SELECT * FROM `products`");
 }
 return $products;
}

function get_page_data($page_name)
{
 global $db;
 $page = mysqli_query($db, "SELECT `page_text` FROM `site_data` WHERE `page_name`='$page_name'");
 $page= mysqli_fetch_assoc($page);
 return $page;
}
