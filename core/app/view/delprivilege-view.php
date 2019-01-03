<?php

$privilege = PrivilegeData::getById($_GET["id"]);
//$products = ProductData::getAllByCategoryId($category->id);
//foreach ($products as $product) {
//	$product->del_category();
//}

$privilege->del();
Core::redir("./index.php?view=privileges");


?>