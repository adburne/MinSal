<?php

if(count($_POST)>0){
	$subregion = new SubregionData();
	$subregion->nombre = $_POST["nombre"];
	$subregion->codregion = $_POST["codregion"];
	$subregion->add();

print "<script>window.location='index.php?view=subregiones';</script>";


}


?>