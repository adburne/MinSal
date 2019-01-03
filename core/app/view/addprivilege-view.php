<?php

if(count($_POST)>0){
	$privilege = new PrivilegeData();
	$privilege->short = $_POST["short"];
	$privilege->name = $_POST["name"];
	$privilege->add();

print "<script>window.location='index.php?view=privileges';</script>";


}


?>