<?php

if(count($_POST)>0){
	$data = PrivilegeData::getById($_POST["privilege_id"]);
	$data->short = $_POST["short"];
	$data->name = $_POST["name"];
	$data->update();
print "<script>window.location='index.php?view=privileges';</script>";


}


?>