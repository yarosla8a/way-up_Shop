<?php

if ( $_FILES["image"]["type"]!=="image/jpeg" && $_FILES["image"]["type"] !=="image/png" ) {
	//$_FILES["image"]["type"] !=="image/png" ||
	echo "файл не поддерживается";
	die();
}


$path = "upload/".time()."_".$_FILES["image"]["name"];
if (move_uploaded_file($_FILES["image"]["tmp_name"], $path)) {

	echo "файл загружен";
 }else{
 	echo "Ошибка при загрузке файла";}
?>