<?php

if(count($_POST)>0){
	$rrhhefector = new RRHHEfectorData();
	$rrhhefector->nrodoc = $_POST["nrodoc"];
	$rrhhefector->codest = $_POST["codest"];
	$rrhhefector->servrrhh_id = $_POST["servrrhh_id"];
	$rrhhefector->sit_revista_id = $_POST["sit_revista_id"];
	$rrhhefector->carga_horaria = $_POST["carga_horaria"];
	$rrhhefector->observaciones = $_POST["observaciones"];
    $rrhhefector->add();
 print "<script>window.location='index.php?view=selectnewrrhhefector&codefe=".$rrhhefector->codest."';</script>";
}

?>