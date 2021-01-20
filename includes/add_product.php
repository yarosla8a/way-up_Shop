<?php
	
	$title=$_POST['title'];
	$description=$_POST['description'];
	$category=$_POST['category'];
	$price=$_POST['price'];

	$cont="Название товара: $title\nОписание: $description\nКатегория товара: $category\nЦена: $price";

	$file_name ="products.txt";

	$fp = fopen($file_name, "w");
	fwrite($fp, $cont);
	fclose($fp);
	if (!$file_name) {
		echo "не удалось создать ыайл";
		# code...
	}else{
		echo "файл успешно создан!";
	}

?>