<?php
include "header.php";
//require_once 'includes/db.php';

$id =$_GET["id"];
//$products=mysqli_query($db, "SELECT * FROM `products`");
$category = mysqli_query($db, "SELECT * FROM `categories` WHERE `id` = $id");

if (mysqli_num_rows($category) === 0) {
	die('category not found');
}

//$products=mysqli_query($db, "SELECT * FROM `products` WHERE `category_id` =$id");

$category = mysqli_fetch_assoc($category);

?>
<h1><?=$category["cat"]?></h1>
<br>


<?php

$products=mysqli_query($db, "SELECT * FROM `products` WHERE `id` = $id");

?>

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