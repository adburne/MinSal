<?php

if(count($_POST)>0){
	$RRHH = RRHHData::getById($_POST["id"]);

	$RRHH->nrodoc = $_POST["nrodoc"];
	$RRHH->nombre = $_POST["nombre"];
	$RRHH->update();

	setcookie("RRHHupd","true");
	print "<script>window.location='index.php?view=editRRHH&id=$_POST[id]';</script>";


}


?>