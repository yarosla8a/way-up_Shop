<?php
require_once '../db.php';
$id =$_POST["id"];

$query=mysqli_query($db, "DELETE FROM `products` WHERE `products`.`id`=$id ");
?>
<a href="/"> Back</a>
<br>
<br>
<?php
die($query? "product is delete ":"error remove")
?>
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