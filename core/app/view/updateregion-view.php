<?php

if(count($_POST)>0){
	$region = RegionData::getById($_POST["user_id"]);
	$region->nombre = $_POST["nombre"];
	$region->update();
print "<script>window.location='index.php?view=regiones';</script>";


}


?>