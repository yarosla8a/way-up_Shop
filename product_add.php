<?php
include "includes/header.php";
$products=mysqli_query($db, "SELECT * FROM `products`");
//$categories=mysqli_query($db, "SELECT * FROM `categories`");
$prod_cat=mysqli_query($db,"SELECT *FROM `products` LEFT JOIN `categories` ON products.category_id = categories.id");
?>


		<form action="includes/actions/store.php"
			  method="post"
		  	  enctype="multipart/form-data">
			<p>Title</p>
			<input type="text" name="title">
			<p>Description</p>
			<textarea name="description"></textarea>
			<p>Price</p>
			<input type="number" name="price">
			<p>Category</p>
			<select name="category_id">
				
				<?php
		while ($product = mysqli_fetch_assoc($products)) {
			?>
				<option><?=$product["category_id"]?></option>
				<?php
		}
		?>
			</select>
			<select name="status">

				<option>В наявносты</option>
				<option>Мало залишилося</option>
				<option>Нема</option>
			</select>
			<p>Img</p>
			<input type="file" name="image">
			<br>
			<br>
			<button type="submit"> Add</button>
		</form>
		</div>
</body>
</html>

