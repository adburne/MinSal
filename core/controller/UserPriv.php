<?php

class UserPriv {

public static function getEnabledUserPriv($privilege) {
	// Buscamos el usuario
	$user = $_SESSION["user_id"];
	// Buscamos el privilegio
	$privilege = PrivilegeData::getByShort($privilege);
	// Si existe el privilegio verificamos
	if(isset($privilege))
		{
		// Buscamos si existe el privilegio para el usuario
		$userprivilege = UserPrivilegeData::getIdByUserPriv($user,$privilege->id);
		if(!isset($userprivilege))
			{
			Core::alert("No posee privilegios para -".$privilege->name."-");
			Core::redir("index.php");
			return false;
			}
		}
	}
}

?>