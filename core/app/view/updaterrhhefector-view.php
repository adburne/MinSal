<?php

if(count($_POST)>0){
	$rrhhefector = RRHHEfectorData::getByEfeNroDoc($_POST["codest"],$_POST["nrodoc"]);
	$rrhhefector->servrrhh_id = $_POST["servrrhh_id"];
	$rrhhefector->sit_revista_id = $_POST["sit_revista_id"];
	$rrhhefector->carga_horaria = $_POST["carga_horaria"];
	$rrhhefector->observaciones = $_POST["observaciones"];
    $rrhhefector->update();
print "<script>window.location='index.php?view=rrhhefector';</script>";
//print "<script>window.location='index.php?view=rrhhefector&codefe=$_POST["codest"]';</script>";

}


?>