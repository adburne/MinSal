<?php

if(count($_POST)>0){
	$region = new RegionData();
	$region->nombre = $_POST["nombre"];
	$region->add();

print "<script>window.location='index.php?view=regiones';</script>";


}


?>