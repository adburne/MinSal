<?php

// Viene desde el perfil
$profile = strpos($_SERVER['HTTP_REFERER'], 'profile')>0;

if(count($_POST)>0){

	$user = UserData::getById($_POST["user_id"]);
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->username = $_POST["username"];
	$user->email = $_POST["email"];
	$user->is_admin = (isset($_POST["is_admin"])? "1" : "0");
	$user->is_active = (isset($_POST["is_active"])? "1" : "0");
	$user->update();

	if($_POST["password"]!=""){
		$user->password = sha1(md5($_POST["password"]));
		$user->update_passwd();
		print "<script>alert('Se ha actualizado el password');</script>";
	}

	if ($profile) {
	  print "<script>window.location='index.php?view=home';</script>";
	}
	else {
	  print "<script>window.location='index.php?view=users';</script>";
	};
}


?>