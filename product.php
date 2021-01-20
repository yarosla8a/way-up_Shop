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
<div>
		<ul class="menu-main">
			<li><a href="index.php">головна</a></li>
			<?php
  while ($category = mysqli_fetch_assoc($categories)) {
			?>
				<li ><a href="categories.php?id= <?=$category["id"]?>"><?=$category["cat"]?></a></li>
				<?php
		}
		?>
</ul>
<h1><?=$product["title"]?></h1>
<div class="img_product">
<img src="<?=$product["image"]?>" width="300">
</div>
<div class="body_product">
<p><?=$product["description"]?></p>
<p class="price"><?=$product["price"]?> грн</p>
</div>
