<?php
include "includes/header.php";
$id =$_GET["id"];
$category = mysqli_query($db, "SELECT * FROM `categories` WHERE `id` = $id");
	if (mysqli_num_rows($category) === 0) {
		die('category not found');
}
	$category = mysqli_fetch_assoc($category);
?>
<h1><?=$category["cat"]?></h1><br>
<?php
	$products=mysqli_query($db, "SELECT * FROM `products` WHERE `id` = $id");
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
		<th>цена товара</th>
	</tr>
	<?php
		while ($product = mysqli_fetch_assoc($products)) {
			?>
			<tr>
				<td><?=$product["id"]?></td>
				<td><?=$product["title"]?></td>
				<td><?=$product["price"]?></td>
				
			</tr>
			<?php
		}
		?>
?>