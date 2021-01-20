<?php
include "includes/header.php";
//require_once 'includes/db.php';

$id =$_GET["id"];

$product = mysqli_query($db, "SELECT * FROM `products` WHERE `id` = $id");

if (mysqli_num_rows($product) === 0) {
	die('product not found');
}

$product = mysqli_fetch_assoc($product);



?>
<form action="includes/actions/remove.php" method="post">
	<input type="hidden" name="id" value="<?= $product["id"]?>">
	<img src="<?=$product["image"] ?>" width="200">
	<h3>Do you want to delete this product- <?= $product["title"]?> ?</h3>
	<button type="submit">yes</button>
	<button><a href="/"> no</a></button>

</form>