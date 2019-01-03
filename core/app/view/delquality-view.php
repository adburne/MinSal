<?php

$quality = QualityData::getById($_GET["id"]);
//$products = ProductData::getAllByCategoryId($category->id);
//foreach ($products as $product) {
//	$product->del_category();
//}

$quality->del();
Core::redir("./index.php?view=qualities");


?>