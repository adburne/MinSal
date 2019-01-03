<?php

if(count($_POST)>0){
	$user = QualityData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->description = $_POST["description"];
	$user->update();
print "<script>window.location='index.php?view=qualities';</script>";


}


?>