<?php

if(count($_POST)>0){
	$user = new QualityData();
	$user->name = $_POST["name"];
	$user->description = $_POST["description"];
	$user->add();

print "<script>window.location='index.php?view=qualities';</script>";


}


?>