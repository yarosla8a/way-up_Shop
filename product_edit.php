
<?php
include "includes/header.php";
//require_once 'includes/db.php';
$id =$_GET["id"];
$product=mysqli_query($db, "SELECT * FROM `products` WHERE `id`=$id");
//$prod_cat=mysqli_query($db,"SELECT *FROM `products` LEFT JOIN `categories` ON products.category_id = categories.id");

if (mysqli_num_rows($product)===0) {
	die('Product not found');
}
$product = mysqli_fetch_assoc($product);
?>
	<form  action="includes/actions/save.php"
	       method="post"
	       enctype="multipart/form-data" >
	    <input type="hidden" name="id" value="<?=$product["id"]?>">
	     <input type="hidden" name="image_url" value="<?=$product["image"]?>">
		<p>Title</p>
		<input type="text" name="title" value="<?=$product["title"]?>" width= "150">
		<p>Description</p>
		<textarea  name="description" ><?=$product["description"]?></textarea>
		<p>Price</p>
		<input type="number" name="price" value="<?=$product["price"]?>" width= "150">
		<p>Category</p>
		
		<select name="category_id">
			<?php
		while ($products = mysqli_fetch_assoc($product)) {
			?>
				<option><?=$products["category_id"]?></option>
				<?php
		}
		?>
			
		</select><br>
		<p>status</p><br>
		<select name="status">

				<option>В наявносты</option>
				<option>Мало залишилося</option>
				<option>Нема</option>
			</select>
		<br><br>
		<p>Img</p>
		<img src="<?= $product["image"]?>" width="300">
		<input type="file" name="image"><br><br>
		<button type="submit">Update</button>
	</form>	
</body>
</html>

