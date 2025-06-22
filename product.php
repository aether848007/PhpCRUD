<?php
global $connect;
require_once "config/connect.php";

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `products` WHERE id = '$product_id'");
$product = mysqli_fetch_assoc($product);
?>


<!doctype html>
<html lang="en">
<head>
    <title>Product</title>
</head>
<body>
<h2>Название: <?= $product['title'] ?></h2>
<h4>Цена: <?= $product['price'] ?></h4>
<p>Описание: <?=$product['description']?></p>

<form action="vendor/create_comment.php" method="post">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <textarea name="body"></textarea>
    <button type="submit">Add comment</button>
</form>

<h3>Comments</h3>

<ul>
<li>Hello</li>
</ul>
</body>
</html>