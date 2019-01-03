<?php

if(count($_POST)>0){
	$subregion = SubregionData::getById($_POST["id"]);
	$subregion->nombre = $_POST["nombre"];
	$subregion->codregion = $_POST["codregion"];
	$subregion->update();
print "<script>window.location='index.php?view=subregiones';</script>";


}


?>