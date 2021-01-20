<?php
include "includes/header.php";
$products=mysqli_query($db, "SELECT * FROM `products`");
$categories=mysqli_query($db, "SELECT * FROM `categories`");
$prod_cat=mysqli_query($db,"SELECT *FROM `products` LEFT JOIN `categories` ON products.category_id = categories.id");
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
<table>
	<tr>
		<th>id</th>
		<th>название товара</th>
		<th>описание товара</th>
		<th>категория</th>
		<th>цена товара</th>
		<th>status</th>
		<th>image</th>
		<th>url</th>

	</tr>
	<?php
		while ($product = mysqli_fetch_assoc($prod_cat)) {
			?>
			<tr>
				<td><?=$product["id"]?></td>
				<td><?=$product["title"]?></td>
				<td><?=$product["description"]?></td>
				<td><?=$product["cat"]?>-<?=$product["category_id"]?></td>
				<td><?=$product["price"]?></td>
				<td><?=$product["status"]?></td>
				<td><img src="<?=$product["image"]?>" width="100"></td>
				<td><a href="product.php?id= <?=$product["id"]?>">url</a><br>
					<a href="product_edit.php?id= <?=$product["id"]?>">update</a><br>
					<a href="product_remove.php?id= <?=$product["id"]?>">remowe</a>
				</td>
			</tr>
			<?php
		}
		?>

</table>
<a href="product_add.php">add new </a>
		
		</div>
</body>
</html>

