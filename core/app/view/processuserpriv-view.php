<?php

if(isset($_SESSION["userpriv"])){
	$userpriv = $_SESSION["userpriv"];
	// Eliminamos los privilegios del usuario
	$del=UserPrivilegeData::delByUserId($userpriv);

	// Si no selecciono ningun checkbox $_POST['chk'] es nulo
	if(isset($_POST['chk'])){
		$privileges=$_POST['chk'];
		$records=count($privileges);
		for($n=0; $n<$records; $n++){
			$upd = new UserPrivilegeData();
			$upd->user_id = $userpriv ;
			$upd->privilege_id=$privileges[$n];
			$add = $upd->add();
		}

	} else {
		echo 'No existen privilegios seleccionados';
	};
	unset($_SESSION["userpriv"]);
	print "<script>window.location='index.php?view=userprivileges';</script>";
}
?>
