<style type="text/css">
	a{
		text-decoration: none;
		display: inline-block;
		padding: 5px 10px;
		letter-spacing: 1px;
		margin: 0 20px;
		font-size: 24px;
		font-family: 'Fredoka One', cursive;
		transition: .3s ease-in-out;
		color: #969696;
		text-shadow: 1px 1px black;
		letter-spacing: 1px;
		border-bottom: 2px solid transparent;
	}
	a:hover{
		color: #f54318;
		border-bottom: 2px solid#f54318;
		box-shadow: 0 1px 0 white, 0 2px 0 #969696;

	}
</style>
<?php

require_once '../db.php';
 $new_image = false;
 $path="";

 if($_FILES["image"]["name"]){
 	$new_image =true;

 	$path="uploads/".time()."_".$_FILES["image"]["name"];

 	if (!move_uploaded_file($_FILES["image"]["tmp_name"],"../../" .$path)) {
 		die("Error upload img");
 	}
 }
 	$id=$_POST["id"];
 	
 	$title = $_POST["title"];
	$description = $_POST["description"];
	$price = $_POST["price"];
	$category = $_POST["category_id"];

	if (!$new_image) {
		$path=$_POST["image_url"];
		# code...
	}
	 $save=mysqli_query($db, "UPDATE `products` SET `title`='$title', `description`='$description', `price`='$price',`category_id`='$category', `image`= '$path' WHERE `products`.`id`= $id");

	 ?>
<a href="/"> Back</a>
<br>
<br>
<?php
	die(($save)? "Product is update":"Error stupdateore product");
	?>
