	
<?php
require_once 'db.php';
$categories=mysqli_query($db, "SELECT * FROM `categories`");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title>Document</title>
</head>
<body>
	
