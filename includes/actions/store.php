<?php
require_once '../db.php';

$path = "uploads/".time()."_".$_FILES["image"]["name"];
if(move_uploaded_file($_FILES["image"]["tmp_name"], "../../". $path)){
	$title = $_POST["title"];
	$description = $_POST["description"];
	$price = $_POST["price"];
	$category = $_POST["category_id"];
	$status= $_POST["status"];

	 $query=mysqli_query($db, 
	 	"INSERT INTO `products`(`id`,`title`, `description`, `price`, `category_id`,`image`,`status`)
	                    VALUES(NULL, '$title', '$description', '$price', '$category', '$path', '$status')");

?>
<a href="/"> Back</a>
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

<br>
<br>
<?php
	die(($query)? "Product is store ":"Error store product");

} else{
	die( "Error upload product image");
}
?>
