<?php

$region = RegionData::getById($_GET["id"]);
//$products = ProductData::getAllByCategoryId($category->id);
//foreach ($products as $product) {
//	$product->del_category();
//}

$region->del();
Core::redir("./index.php?view=regiones");

?>